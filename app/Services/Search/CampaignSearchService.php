<?php

namespace App\Services\Search;

use App\Models\Campaign;
use App\Models\CampaignUser;

class CampaignSearchService
{
    /**
     * @var Campaign
     */
    protected Campaign $campaign;

    /**
     * @param Campaign $campaign
     * @return $this
     */
    public function campaign(Campaign $campaign): self
    {
        $this->campaign = $campaign;
        return $this;
    }

    /**
     * List of roles in a campaign
     * @param string|null $query Search term
     * @return array
     */
    public function roles(string $query = null): array
    {
        $result = $this->campaign->roles()
            ->search($query)
            ->get(['name', 'id'])
            ->toArray();

        return $result;
    }

    /**
     * List of members in a campaign
     * @param string|null $query Search term
     * @return array
     */
    public function members(string $query = null): array
    {
        $members = $this->campaign->members()->search($query)->get();
        $result = [];

        /** @var CampaignUser $member */
        foreach ($members as $member) {
            $result[] = [
                'id' => $member->user->id,
                'name' => $member->user->name,
                'avatar' => $member->user->getAvatarUrl()
            ];
        }

        return $result;
    }
}
