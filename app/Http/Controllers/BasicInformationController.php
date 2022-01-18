<?php

namespace App\Http\Controllers;

use App\Models\BasicInformation;
use App\Http\Requests\StoreBasicInformationRequest;
use App\Http\Requests\UpdateBasicInformationRequest;
use App\Models\Local;
use App\Models\Region;
use App\Models\State;
use App\Models\Well;

class BasicInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $basicInformations = BasicInformation::all();

        return view('basic-informations.index', [
            'basicInformations' => $basicInformations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $states = State::all();
        // $locals = Local::all();

        return view('basic-informations.create', [
            'states' => $states,
            // 'locals' => $locals,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBasicInformationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBasicInformationRequest $request)
    {
        $data = $request->validated();

        $basicInformation = BasicInformation::create([
            'start_date' => $data['start_date'],
            'execution_time' => $data['execution_time'],
            'owner' => $data['owner'],
            'advisor' => $data['advisor'],
            'funded' => $data['funded'],
            'total_cost' => $data['total_cost'],
            'state_id' => $data['state_id'],
            'local_id' => $data['local_id'],
            'region_id' => $data['region_id'],
            'project_manager' => $data['project_manager'],
        ]);

        Well::create([
            'longitude' => $data['longitude'],
            'latitude' => $data['latitude'],
            'well_depth' => $data['well_depth'],
            'packaging_depth' => $data['packaging_depth'],
            'swl' => $data['swl'],
            'dwl' => $data['dwl'],
            'productivity' => $data['productivity'],
            'psd' => $data['psd'],
            'basic_information_id' => $basicInformation->id,
        ]);

        session()->flash('success', 'تم الأضافة');

        return redirect()->route('basic-informations.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BasicInformation  $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function show(BasicInformation $basicInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BasicInformation  $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(BasicInformation $basicInformation)
    {
        $states = State::all();
        $locals = Local::all();
        $regions = Region::all();

        return view('basic-informations.edit', [
            'basicInformation' => $basicInformation,
            'states' => $states,
            'locals' => $locals,
            'regions' => $regions,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBasicInformationRequest  $request
     * @param  \App\Models\BasicInformation  $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBasicInformationRequest $request, BasicInformation $basicInformation)
    {
        $data = $request->validated();

        $basicInformation->update([
            'start_date' => $data['start_date'],
            'execution_time' => $data['execution_time'],
            'owner' => $data['owner'],
            'advisor' => $data['advisor'],
            'funded' => $data['funded'],
            'total_cost' => $data['total_cost'],
            'state_id' => $data['state_id'],
            'local_id' => $data['local_id'],
            'region_id' => $data['region_id'],
            'project_manager' => $data['project_manager'],
        ]);

        $basicInformation->well->update([
            'longitude' => $data['longitude'],
            'latitude' => $data['latitude'],
            'well_depth' => $data['well_depth'],
            'packaging_depth' => $data['packaging_depth'],
            'swl' => $data['swl'],
            'dwl' => $data['dwl'],
            'productivity' => $data['productivity'],
            'psd' => $data['psd'],
        ]);

        session()->flash('success', 'تم التعديل');

        return redirect()->route('basic-informations.edit', $basicInformation->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BasicInformation  $basicInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(BasicInformation $basicInformation)
    {
        $basicInformation->delete();

        session()->flash('success', 'تم الحذف');

        return redirect()->route('basic-informations.index');
    }
}
