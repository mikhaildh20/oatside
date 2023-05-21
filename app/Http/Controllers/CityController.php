<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Location;
use App\Models\Administrator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('city.index', [
            'city' => City::all(),
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
        return view('city.create', [
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
        $city_data = $request->validate([
            'city_name' => 'required'
        ]);
        City::create($city_data);
        return redirect('/city/index')->with('success', "Data Has been added successfully.");
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
    public function edit(City $city)
    {
        return view('city.edit', [
            'city' => $city,
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
    public function update(Request $request, City $city)
    {
        $city_data = $request->validate([
            'city_name' => 'required'
        ]);
        $city->update($city_data);
        return redirect('/city/index')->with('success', "Data Has been changed successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        $location = Location::where('city_id', $city->id)->first();
        if($location){
            return back()->with('error', "Cannot delete, $city->city_name still used in location menu.");
        }

        $city->delete();
        return back()->with('success', "Data has been deleted successfully.");
    }
}
