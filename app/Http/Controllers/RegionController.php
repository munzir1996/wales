<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Http\Requests\StoreRegionRequest;
use App\Http\Requests\UpdateRegionRequest;
use App\Models\Local;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();

        return view('regions.index', [
            'regions' => $regions,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locals = Local::all();

        return view('regions.create', [
            'locals' => $locals,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRegionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegionRequest $request)
    {
        $data = $request->validated();

        Region::create([
            'name' => $data['name'],
            'local_id' => $data['local_id'],
        ]);

        session()->flash('success', 'تم الأضافة');

        return redirect()->route('regions.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(Region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(Region $region)
    {
        $locals = Local::all();

        return view('regions.edit', [
            'region' => $region,
            'locals' => $locals,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRegionRequest  $request
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegionRequest $request, Region $region)
    {
        $data = $request->validated();

        $region->update([
            'name' => $data['name'],
            'local_id' => $data['local_id'],
        ]);

        session()->flash('success', 'تم التعديل');

        return redirect()->route('regions.edit', $region->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        $region->delete();

        session()->flash('success', 'تم الحذف');

        return redirect()->route('regions.index');
    }
}
