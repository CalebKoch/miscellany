<?php

namespace App\Http\Controllers\Entity;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEntityLink;
use App\Models\Campaign;
use App\Models\Entity;
use App\Models\EntityLink;
use App\Traits\GuestAuthTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    /**
     * Guest Auth Trait
     */
    use GuestAuthTrait;

    public function __construct()
    {
        $this->middleware('campaign.boosted', ['except' => 'create']);
    }

    /**
     * @param Entity $entity
     * @return \Illuminate\Http\RedirectResponse
     */
    public function index(Campaign $campaign, Entity $entity)
    {
        return redirect()
            ->route('entities.entity_assets.index', [$campaign, $entity]);
    }

    /**
     * @param Entity $entity
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create(Campaign $campaign, Entity $entity)
    {
        $this->authorize('update', $entity->child);

        if (!$campaign->boosted()) {
            return view('entities.pages.links.unboosted')
                ->with('campaign', $campaign);
        }

        return view('entities.pages.links.create', compact(
            'campaign',
            'entity'
        ));
    }

    /**
     */
    public function store(StoreEntityLink $request, Campaign $campaign, Entity $entity)
    {
        $this->authorize('update', $entity->child);

        $data = $request->only(['name', 'url', 'position', 'icon', 'visibility_id']);
        $data['entity_id'] = $entity->id;

        $link = EntityLink::create($data);

        return redirect()
            ->route('entities.entity_assets.index', [$campaign, $entity])
            ->with('success', __('entities/links.create.success', ['name' => $link->name, 'entity' => $entity->name]));
    }

    /**
     */
    public function edit(Campaign $campaign, Entity $entity, EntityLink $entityLink)
    {
        $this->authorize('update', $entity->child);

        return view('entities.pages.links.update', compact(
            'campaign',
            'entity',
            'entityLink'
        ));
    }

    /**
     * Show exists but doesn't do anything, redirect to main view
     */
    public function show(Campaign $campaign, Entity $entity, EntityLink $entityLink)
    {
        return redirect()
            ->route('entities.entity_assets.index', [$campaign, $entity]);
    }

    /**
     */
    public function update(StoreEntityLink $request, Campaign $campaign, Entity $entity, EntityLink $entityLink)
    {
        $this->authorize('update', $entity->child);

        $data = $request->only(['name', 'url', 'icon', 'position', 'visibility_id']);

        $entityLink->update($data);

        if (request()->ajax()) {
            return response()->json([
                'success' => true
            ]);
        }
        return redirect()
            ->route('entities.entity_assets.index', [$campaign, $entity])
            ->with('success', __('entities/links.update.success', ['name' => $entityLink->name, 'entity' => $entity->name]));
    }

    /**
     */
    public function destroy(Campaign $campaign, Entity $entity, EntityLink $entityLink)
    {
        $this->authorize('update', $entity->child);

        if (!$entityLink->delete()) {
            abort(500);
        }

        if (request()->ajax()) {
            return response()->json([
                'success' => true
            ]);
        }
        return redirect()
            ->route('entities.entity_assets.index', [$campaign, $entity])
            ->with('success', __('entities/links.destroy.success', ['name' => $entityLink->name, 'entity' => $entity->name]));
    }

    /**
     */
    public function go(Campaign $campaign, Entity $entity, EntityLink $entityLink)
    {
        // Policies will always fail if they can't resolve the user.
        if (Auth::check()) {
            $this->authorize('view', $entity->child);
        } else {
            $this->authorizeEntityForGuest(\App\Models\CampaignPermission::ACTION_READ, $entity->child);
        }

        if ($entityLink->entity_id !== $entity->id) {
            abort(404);
        }

        // If the link goes to the same domain, just go.
        if (Str::startsWith($entityLink->url, config('app.url')) && !Str::contains($entityLink->url, 'entity_links/')) {
            return redirect()->to($entityLink->url);
        }

        return view('entities.pages.links.go', compact(
            'campaign',
            'entity',
            'entityLink'
        ));
    }
}
