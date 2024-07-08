<?php

namespace App\Renderers\Layouts\Race;

use App\Facades\Module;
use App\Renderers\Layouts\Columns\Standard;
use App\Renderers\Layouts\Layout;

class Character extends Layout
{
    /**
     * Available columns
     * @return array[]
     */
    public function columns(): array
    {
        $columns = [
            'image' => [
                'render' => Standard::IMAGE,
                'with' => ['target' => 'character']
            ],
            'character_id' => [
                'key' => 'character.name',
                'label' => Module::singular(config('entities.ids.character'), 'entities.character'),
                'render' => Standard::CHARACTER,
            ],
            'type' => [
                'key' => 'character.type',
                'label' => 'crud.fields.type',
                'render' => function ($model) {
                    return $model->character->type;
                },
            ],
            'location' => [
                'with' => 'character',
                'label' => Module::singular(config('entities.ids.location'), 'entities.location'),
                'render' => Standard::LOCATION,
            ],
            'races' => [
                'label' => Module::plural(config('entities.ids.race'), 'entities.races'),
                'class' => self::ONLY_DESKTOP,
                'render' => function ($model) {
                    $races = [];
                    foreach ($model->character->characterRaces as $race) {
                        if (!$race->race || !$race->race->entity) {
                            continue;
                        }
                        $races[] = $this->entityLink($race->race);
                    }
                    return implode(', ', $races);
                },
                'visible' => function () {
                    return !request()->has('race_id');
                }
            ],
            'tags' => [
                'render' => Standard::TAGS
            ]
        ];

        return $columns;
    }
}
