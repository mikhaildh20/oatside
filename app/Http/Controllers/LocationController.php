<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\City;
use App\Models\Administrator;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('location.index', [
            'location' => Location::all(),
            'administrator' => Administrator::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('location.create', [
            'city' => City::all(),
            'administrator' => Administrator::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $location_data = $request->validate([
            'name' => 'required',
            'city_id' => 'required',
            'date' => 'required'
        ]);
        Location::create($location_data);
        return redirect('/location/index')->with('success', "Data Has been added successfully.");
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
    public function edit(Location $location)
    {
        return view('location.edit', [
            'location' => $location,
            'city' => City::all(),
            'administrator' => Administrator::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        $location_data = $request->validate([
            'name' => 'required',
            'city_id' => 'required',
            'date' => 'required'
        ]);
        $location->update($location_data);
        return redirect('/location/index')->with('success', "Data Has been changed successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        $location->delete();
        return back()->with('success', "Data Has been deleted successfully");
    }
}
