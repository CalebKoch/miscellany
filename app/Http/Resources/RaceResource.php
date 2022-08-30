<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RaceResource extends EntityResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $locationIDs = $this->resource->locations()->pluck('locations.id');

        return $this->entity([
            'type' => $this->type,
            'race_id' => $this->race_id,
            'locations' => $locationIDs
        ]);
    }
}
