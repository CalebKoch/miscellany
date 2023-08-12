<?php

namespace App\Http\Controllers;

use App\Exceptions\RequireLoginException;
use App\Services\CampaignService;
use App\Services\InviteService;
use App\Facades\CampaignLocalization;
use App\User;
use Exception;

class InvitationController extends Controller
{
    public InviteService $inviteService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(InviteService $inviteService)
    {
        $this->inviteService = $inviteService;
    }

    /**
     * @param string $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function join($token)
    {
        try {
            if (auth()->check()) {
                $this->inviteService
                    ->user(auth()->user());
            }
            $campaign = $this->inviteService
                ->useToken($token);
            CampaignService::switchCampaign($campaign);
            return redirect()->to('/');
        } catch (RequireLoginException $e) {
            return redirect()->route('login')->with('info', $e->getMessage());
        } catch (Exception $e) {
            if (auth()->guest()) {
                return redirect()->route('login')->withErrors($e->getMessage());
            }
            // Let's redirect the user to their first campaign, to handle the error message, or on start otherwise
            $campaign = auth()->user()->campaigns->first();
            if (!$campaign) {
                return redirect()->route('start')->withError($e->getMessage());
            }
            return redirect()
                ->route('dashboard', $campaign)
                ->withError($e->getMessage());
        }
    }
}
