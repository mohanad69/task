<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class HotelCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return request()->route()->getName();
        // return parent::toArray($request);
        if($request->segment(3) == 'best'){
            return $this->collection->map(function ($item, $key) {
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'provider' => $item->provider->name,
                    'amenities' => $item->amenities->pluck('name'),
                ];
            });
        }else{
            return $this->collection->map(function ($item, $key){
                return [
                    'id' => $item->id,
                    'name' => $item->name,
                    'fare' => $item->fare,
                    'provider' => $item->provider->name,
                    'amenities' => $item->amenities->pluck('name'),
                    'rate'      => $item->rate->avg('rate')
                ];
            });
        }
    }
}
