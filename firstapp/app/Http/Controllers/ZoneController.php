<?php

namespace App\Http\Controllers;

use App\Models\Zone;
use Illuminate\Http\Request;

class ZoneController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
        
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('zone.index')->with('page', 'zone')
        ->with('zones', Zone::all());
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zone_code = 'ZN-'. Zone::count() + 1;
       return view('zone.create')->with('page', 'zone')
       ->with('zone_code', $zone_code);
    }

    public function store(Request $request){ 
        Zone::create([
            'code' => $request->code,
            'long_description' =>$request->long_description,
            'short_description' => $request->short_description,
        ]);
        return redirect(route('zones.index')) ->with('success','zone created successfully');

    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function edit(Zone $zone)
    {
        return view('zone.edit')->with('zone', $zone)
        ->with('page', 'zone');
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zone $zone)
    {
        $data = $request->all();
        $zone->update($data);

        return redirect()->route('zones.index')
            ->with('success', 'Zone updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zone  $zone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zone $zone)
    {
        $zone->delete();
        return redirect()->route('zones.index')
        ->with('success', 'Zone Delete successfully');
    }
}
