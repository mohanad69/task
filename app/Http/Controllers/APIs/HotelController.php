<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\HotelCollection;
use App\Http\Requests\BestHotelsRequest;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function getBest(BestHotelsRequest $request){
        $where = [
            'city'   => $request->city,
            'adults' => $request->adults
        ];
        $where_between = [
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date
        ];
        $hotels = Hotel::where($where)->where('from_date', '>=', $request->from_date)->where('to_date', '<=', $request->to_date)->paginate(5);
        // return $hotels;
        return (new HotelCollection($hotels));
    }

    public function getTop(BestHotelsRequest $request){
        $where = [
            'city'   => $request->city,
            'adults' => $request->adults
        ];
        $where_between = [
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date
        ];
        $hotels = Hotel::where($where)->where('from_date', '>=', $request->from_date)->where('to_date', '<=', $request->to_date)->paginate(5);
        return (new HotelCollection($hotels))->additional(['fare']);
    }
    
}
