<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BestHotelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'name' => $this->name,
            'provider' => $this->provider->name,
            'amenities' => $this->amenities->pluck('name'),
        ];
    }
}
