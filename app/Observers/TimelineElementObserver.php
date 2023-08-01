<?php

namespace App\Observers;

use App\Facades\Mentions;
use App\Models\TimelineElement;
use App\Services\EntityMappingService;
use App\Facades\TimelineElementCache;

class TimelineElementObserver
{
    use PurifiableTrait;
    use ReorderTrait;

    protected EntityMappingService $entityMappingService;

    public function __construct(EntityMappingService $entityMappingService)
    {
        $this->entityMappingService = $entityMappingService;
    }

    /**
     * @param TimelineElement $timelineElement
     */
    public function saving(TimelineElement $timelineElement)
    {
        $timelineElement->name = $this->purify($timelineElement->name);
        $timelineElement->entry = $this->purify(Mentions::codify($timelineElement->entry));

        if (empty($timelineElement->position) || $timelineElement->position < 1) {
            $timelineElement->position = 1;
            /** @var TimelineElement|null $last */
            $last = $timelineElement->era->elements()->orderByDesc('position')->first();
            if ($last) {
                $timelineElement->position = $last->position + 1;
            }
        }
    }

    /**
     * @param TimelineElement $timelineElement
     */
    public function saved(TimelineElement $timelineElement)
    {
        TimelineElementCache::clearSuggestion();
        $this->reorder($timelineElement);
        // If the quest element's entry has changed, we need to re-build it's map.
        if ($timelineElement->isDirty('entry')) {
            $this->entityMappingService->mapTimelineElement($timelineElement);
        }
    }

    public function deleted()
    {
        TimelineElementCache::clearSuggestion();
    }
}
