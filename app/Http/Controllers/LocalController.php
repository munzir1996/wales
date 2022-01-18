<?php

namespace App\Http\Controllers;

use App\Models\Local;
use App\Http\Requests\StoreLocalRequest;
use App\Http\Requests\UpdateLocalRequest;
use App\Models\State;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals = Local::all();

        return view('locals.index', [
            'locals' => $locals,
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

        return view('locals.create', [
            'states' => $states,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLocalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLocalRequest $request)
    {
        $data = $request->validated();

        Local::create([
            'name' => $data['name'],
            'state_id' => $data['state_id'],
        ]);

        session()->flash('success', 'تم الأضافة');

        return redirect()->route('locals.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function show(Local $local)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function edit(Local $local)
    {
        $states = State::all();

        return view('locals.edit', [
            'local' => $local,
            'states' => $states,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLocalRequest  $request
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLocalRequest $request, Local $local)
    {
        $data = $request->validated();

        $local->update([
            'name' => $data['name'],
            'state_id' => $data['state_id'],
        ]);

        session()->flash('success', 'تم التعديل');

        return redirect()->route('locals.edit', $local->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function destroy(Local $local)
    {
        $local->delete();

        session()->flash('success', 'تم الحذف');

        return redirect()->route('locals.index');
    }

    public function getRegions(Local $local)
    {
        return response()->json($local->regions);
    }

}
