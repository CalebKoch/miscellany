<?php

namespace App\Http\Controllers\Timelines;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReorderTimeline;
use App\Models\Campaign;
use App\Models\Timeline;
use App\Services\TimelineService;

class TimelineReorderController extends Controller
{
    protected TimelineService $service;

    public function __construct(TimelineService $timelineService)
    {
        $this->service = $timelineService;
    }
    /**
     * @param Timeline $timeline
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index(Campaign $campaign, Timeline $timeline)
    {
        $this->authorize('update', $timeline);

        $eras = $timeline
            ->eras()
            ->with(['orderedElements', 'orderedElements.entity'])
            ->ordered()
            ->get();

        $hasNothing = true;
        foreach ($eras as $era) {
            if (!$era->orderedElements->isEmpty()) {
                $hasNothing = false;
            }
        }

        return view('timelines.reorder.index', compact(
            'campaign',
            'eras',
            'timeline',
            'hasNothing'
        ));
    }

    /**
     * @param Timeline $timeline
     * @param ReorderTimeline $request
     * @return mixed
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function save(Campaign $campaign, Timeline $timeline, ReorderTimeline $request)
    {
        $this->authorize('update', $timeline);

        $this->service
            ->timeline($timeline)
            ->reorder($request);
        return redirect()
            ->route('timelines.show', [$campaign, $timeline])
            ->withSuccess(__('timelines.reorder.success', ['name' => $timeline->name]));
    }
}
