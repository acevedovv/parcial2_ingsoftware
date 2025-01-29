<?php

namespace App\Http\Controllers;
use App\Models\Rain;

use Illuminate\Http\Request;

class RainController extends Controller
{
    public function index()
    {
        $rains = Rain::all();
        return response()->json($rains, 200); 
    }
    public function getMaxRainfallData()
    {
        // Obtener la fecha con mayor cantidad de lluvia
        $maxRainfall = Rain::table('rain')
            ->select('created_at', 'amount_rain')
            ->orderByDesc('amount_rain')
            ->first();

        // Obtener la ciudad con mayor área afectada (asumiendo que `affected_area` está en la tabla cities)
        $maxAffectedCity = Rain::table('rain')
            ->join('cities', 'rain.city_id', '=', 'cities.id')
            ->select('cities.name as city', 'cities.affected_area')
            ->orderByDesc('cities.affected_area')
            ->first();

        return response()->json([
            'max_rainfall_date' => $maxRainfall ? $maxRainfall->created_at->toDateString() : null,
            'max_rainfall_amount' => $maxRainfall ? $maxRainfall->amount_rain : null,
            'max_affected_city' => $maxAffectedCity ? $maxAffectedCity->city : null,
            'max_affected_area' => $maxAffectedCity ? $maxAffectedCity->affected_area : null,
        ]);
}
}