<?php

namespace App\Http\Controllers;

use App\Models\BasicInformation;
use App\Http\Requests\StoreBasicInformationRequest;
use App\Http\Requests\UpdateBasicInformationRequest;

class BasicInformationController extends Controller
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
     * @param  \App\Http\Requests\StoreBasicInformationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBasicInformationRequest $request)
    {
        $data = $request->validated();

        BasicInformation::create([
            'start_date' => $data['start_date'],
            'execution_time' => $data['execution_time'],
            'owner' => $data['owner'],
            'advisor' => $data['advisor'],
            'funded' => $data['funded'],
            'total_cost' => $data['total_cost'],
            'state_id' => $data['state_id'],
            'local_id' => $data['local_id'],
            'region_id' => $data['region_id'],
            'project_manager_id' => $data['project_manager_id'],
        ]);
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
        //
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
            'project_manager_id' => $data['project_manager_id'],
        ]);
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
    }
}
