<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function index(){

        $cities = City::all();

        return response()->json($cities);
    }

    // Retorna una banda por ID
    public function show($id)
    {
        $cities = City::find($id);
        if (!$cities) {
            return response()->json(['error' => 'Band not found'], 404);
        }
        return response()->json($cities);
    }

    public function store(Request $request){
        $cities = City::create($request->all);
        return response()->json($cities,201);
    }

    public function update( Request $request,$id){

        $cities = City::find($id);
        $cities->update($request->all());
        return response()->json($cities,200);
    }

    public function destroy($id){
        $cities = City::find($id);
        $cities->delete();
        return response()->json(['message'=> 'usuario eliminado'],200);
    }

    

    

    

}
