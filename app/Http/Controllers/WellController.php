<?php

namespace App\Http\Controllers;

use App\Models\Well;
use App\Http\Requests\StoreWellRequest;
use App\Http\Requests\UpdateWellRequest;

class WellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWellRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWellRequest $request)
    {
        $data = $request->validated();

        Well::create([
            'longitude' => $data['longitude'],
            'latitude' => $data['latitude'],
            'well_depth' => $data['well_depth'],
            'packaging_depth' => $data['packaging_depth'],
            'swl' => $data['swl'],
            'dwl' => $data['dwl'],
            'productivity' => $data['productivity'],
            'psd' => $data['psd'],
            'basic_information_id' => $data['basic_information_id'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Well  $well
     * @return \Illuminate\Http\Response
     */
    public function show(Well $well)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Well  $well
     * @return \Illuminate\Http\Response
     */
    public function edit(Well $well)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWellRequest  $request
     * @param  \App\Models\Well  $well
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWellRequest $request, Well $well)
    {
        $data = $request->validated();

        $well->update([
            'longitude' => $data['longitude'],
            'latitude' => $data['latitude'],
            'well_depth' => $data['well_depth'],
            'packaging_depth' => $data['packaging_depth'],
            'swl' => $data['swl'],
            'dwl' => $data['dwl'],
            'productivity' => $data['productivity'],
            'psd' => $data['psd'],
            'basic_information_id' => $data['basic_information_id'],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Well  $well
     * @return \Illuminate\Http\Response
     */
    public function destroy(Well $well)
    {
        $well->delete();
    }
}
