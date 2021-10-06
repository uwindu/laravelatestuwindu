<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Territory;
use App\Models\Zone;
use Illuminate\Http\Request;

class Territorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('territory.index')
        ->with('page', 'territory')
        ->with('territorys', Territory::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('territory.create')
        ->with('page', 'territory')
        ->with('zones', Zone::all())
        ->with('regions', Region::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Territory::create([
            'zone_id' => $request->zone_id,
            'region_id' => $request->region_id,
            'code' =>$request->code,
            'name' => $request->name,
        ]);
        return redirect(route('territorys.index')) ->with('success','Territory created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Territory $territory)
    {
        return view('territory.edit')
        ->with('territory', $territory)
        ->with('zones', Zone::all())
        ->with('regions', Region::all())
        ->with('page', 'territory');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Territory $territory)
    {
        $data = $request->all();
        $territory->update($data);

        return redirect()->route('territorys.index')
            ->with('success', 'Territory updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
