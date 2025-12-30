<?php

namespace App\Http\Controllers;

use App\Models\HabitCheckin;
use App\Http\Requests\StoreHabitCheckinRequest;
use App\Http\Requests\UpdateHabitCheckinRequest;

class HabitCheckinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $habitCheckins = HabitCheckin::query()->paginate(2);
        return view('user.habit.checkins', compact('habitCheckins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHabitCheckinRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(HabitCheckin $habitCheckin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HabitCheckin $habitCheckin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHabitCheckinRequest $request, HabitCheckin $habitCheckin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HabitCheckin $habitCheckin)
    {
        //
    }
}
