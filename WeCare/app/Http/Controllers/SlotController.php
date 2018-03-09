<?php

namespace App\Http\Controllers;

use App\model\slot;
use Illuminate\Http\Request;

class SlotController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slot = new slot();
        $slot->doctor_doctor_id = $request->input('doctorId');
        $slot->date = $request->input('date');
        $slot->time = $request->input('time');
        $slot->save();
        return redirect('/addSlot');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\model\slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function show(slot $slot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\model\slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function edit(slot $slot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\model\slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, slot $slot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\model\slot  $slot
     * @return \Illuminate\Http\Response
     */
    public function destroy(slot $slot)
    {
        //
    }
}
