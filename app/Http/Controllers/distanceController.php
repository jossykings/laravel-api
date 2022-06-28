<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Distance;

class distanceController extends Controller
{
    public function index()
    {
        $distance = Distance::all();
        return $distance;
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'longitude' => 'required',
            'latitude' => 'required'
        ]);
        $distance = new Distance();
        $distance->longitude = request('longitude');
        $distance->latitude = request('latitude');
        $distance->save();
    }
}
