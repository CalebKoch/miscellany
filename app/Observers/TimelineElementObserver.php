<?php

namespace App\Observers;

use App\Facades\Mentions;
use App\Models\TimelineElement;
use App\Services\EntityMappingService;
use App\Facades\TimelineElementCache;

class TimelineElementObserver
{
    /**
     * Purify trait
     */
    use PurifiableTrait;
    use ReorderTrait;

    /**
     * Service used to build the map of the entity
     * @var EntityMappingService
     */
    protected $entityMappingService;


    /**
     * CharacterObserver constructor.
     * @param EntityMappingService $entityMappingService
     */
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

    /**
     * @param TimelineElement $timelineElement
     */
    public function deleted(TimelineElement $timelineElement)
    {
        TimelineElementCache::clearSuggestion();
    }
}
