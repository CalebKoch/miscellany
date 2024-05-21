<?php

namespace App\Observers;

use App\Facades\EntityLogger;
use App\Models\Character;
use App\Models\Organisation;
use App\Models\OrganisationMember;
use App\Observers\Concerns\HasLocations;

class OrganisationObserver extends MiscObserver
{
    use HasLocations;

    public function crudSaved(Organisation $organisation)
    {
        $this
            ->saveMembers($organisation)
            ->saveOrgLocations($organisation);
        EntityLogger::model($organisation)->entity($organisation->entity)->finish();
    }

    public function saveOrgLocations(Organisation $organisation): self
    {
        if (!request()->has('save_locations') && !request()->has('locations')) {
            return $this;
        }
        $this->saveLocations($organisation);
        return $this;
    }

    /**
     */
    public function deleting(Organisation $organisation)
    {
        /**
         * We need to do this ourselves and not let mysql to it (set null), because the nested wants to delete
         * all descendants when deleting the parent (soft delete)
         */
        foreach ($organisation->organisations as $child) {
            $child->organisation_id = null;
            $child->saveQuietly();
        }
    }

    /**
     * Save the sections/categories
     */
    protected function saveMembers(Organisation $organisation): self
    {
        // Only execute this if a proper post attribute is in the body
        if (!request()->has('sync_org_members')) {
            return $this;
        }

        $ids = request()->post('members', []);

        // Only use tags the user can actually view. This way admins can
        // have tags on entities that the user doesn't know about.
        $existing = [];
        foreach ($organisation->members()->has('character')->get() as $member) {
            // The m_ prefix is to differanciate from existing members to new members
            $existing['m_' . $member->id] = $member;
        }
        $new = [];

        foreach ($ids as $id) {
            if (!empty($existing[$id])) {
                unset($existing[$id]);
            } else {
                /** @var Character|null $character */
                $character = Character::find($id);
                if (!empty($character)) {
                    $new[] = $character->id;

                    $member = OrganisationMember::create([
                        'organisation_id' => $organisation->id,
                        'character_id' => $character->id
                    ]);
                    EntityLogger::dirty('members', null);
                }
            }
        }

        // Detach the remaining
        foreach ($existing as $k) {
            $k->delete();
            EntityLogger::dirty('members', null);
        }

        return  $this;
    }
}
