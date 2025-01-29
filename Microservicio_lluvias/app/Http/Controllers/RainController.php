<?php

namespace App\Http\Controllers;
use App\Models\Rain;


use Illuminate\Http\Request;

class RainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rains = Rain::all();
        return response()->json($rains, 200); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rain = Rain::create($request->all());
        return response()->json($post, 201); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rain = Rain::find($id);
        return response()->json($rain, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rain = Rain::find($id);
        $rain->update($request->all());
        return response()->json($rain, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rain = Rain::find($id);
        $rain->delete();
        return response()->json(['message' => 'Eliminado'], 200);
    }
}
