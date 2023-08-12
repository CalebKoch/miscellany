<?php

namespace App\Http\Controllers\Entity;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Entity;
use App\Services\Entity\PreviewService;
use App\Services\SearchService;
use App\Traits\GuestAuthTrait;
use Illuminate\Support\Facades\Auth;

class PreviewController extends Controller
{
    use GuestAuthTrait;

    protected PreviewService $service;

    public function __construct(PreviewService $service)
    {
        $this->service = $service;
    }

    public function index(Campaign $campaign, Entity $entity)
    {
        // Policies will always fail if they can't resolve the user.
        if (Auth::check()) {
            $this->authorize('view', $entity->child);
        } else {
            $this->authorizeEntityForGuest(\App\Models\CampaignPermission::ACTION_READ, $entity->child);
        }

        if (auth()->check()) {
            $service = app()->make(SearchService::class);
            $service->campaign($campaign)
                ->user(auth()->user())
                ->logView($entity);
        }

        return response()->json(
            $this
                ->service
                ->entity($entity)
                ->campaign($campaign)
                ->preview()
        );
    }
}
