<?php

namespace App\Http\Controllers\Campaign;

use App\Facades\CampaignLocalization;
use App\Http\Controllers\Controller;
use App\Http\Requests\Campaigns\PatchCampaignApplication;
use App\Http\Requests\Campaigns\StoreCampaignApplicationStatus;
use App\Models\CampaignSubmission;
use App\Services\Campaign\SubmissionService;

class SubmissionController extends Controller
{
    /** @var SubmissionService */
    protected $service;

    public function __construct(SubmissionService $service)
    {
        $this->middleware('auth');

        $this->service = $service;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        $campaign = CampaignLocalization::getCampaign();
        $this->authorize('submissions', $campaign);

        $submissions = $campaign->submissions()->with('user')->paginate();

        return view('campaigns.submissions.index')
            ->with('submissions', $submissions)
            ->with('campaign', $campaign);
    }

    public function edit(CampaignSubmission $campaignSubmission)
    {
        $campaign = CampaignLocalization::getCampaign();
        $this->authorize('submissions', $campaign);

        if (!$campaign->canHaveMoreMembers()) {
            return view('cruds.forms.limit')
                ->with('campaign', $campaign)
                ->with('key', 'members')
                ->with('name', 'campaign_roles');
        }

        $action = request()->get('action');
        if (!in_array($action, ['approve', 'reject'])) {
            return redirect()->route('campaign_submissions.index');
        }

        return view('campaigns.submissions.edit')
            ->with('submission', $campaignSubmission)
            ->with('campaign', $campaign)
            ->with('action', $action)
            ->with('ajax', request()->ajax())
        ;
    }

    public function update(PatchCampaignApplication $request, CampaignSubmission $campaignSubmission)
    {
        $campaign = CampaignLocalization::getCampaign();
        $this->authorize('submissions', $campaign);

        if (!$campaign->canHaveMoreMembers()) {
            return redirect()->back()
                ->with('error', __('Campaign is full, please boost it.'));
        }

        $note = $this->service
            ->campaign($campaign)
            ->submission($campaignSubmission)
            ->process($request->only('role_id', 'rejection', 'action', 'message'));

        return redirect()->route('campaign_submissions.index')
            ->with('success', __('campaigns/submissions.update.' . $note));
    }

    public function toggle()
    {
        $campaign = CampaignLocalization::getCampaign();
        $this->authorize('submissions', $campaign);

        return view('campaigns.submissions._toggle', compact('campaign'));
    }

    public function toggleSave(StoreCampaignApplicationStatus $request)
    {
        $campaign = CampaignLocalization::getCampaign();
        $this->authorize('submissions', $campaign);

        $campaign->update([
            'is_open' => $request->get('status')
        ]);

        return redirect()
            ->route('campaign_submissions.index')
            ->with('success', __('campaigns/submissions.toggle.success'))
        ;
    }
}
