<?php

namespace App\Http\Controllers;

use App\Models\Habit;
use App\Http\Requests\StoreHabitRequest;
use App\Http\Requests\UpdateHabitRequest;
use App\Models\HabitCategory;
use App\Models\HabitScheduleDay;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HabitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $today = Carbon::now()->dayOfWeek;
        $habits = HabitScheduleDay::where('weekday', $today)->paginate(2);
        return view('user.habit.index', compact('habits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=HabitCategory::all();
        return view('user.habit.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHabitRequest $request)
    {
        $user=Auth::id();
        $habit = Habit::create([
            ...$request->except('weekday,deadline'),
            'due_at' => $request->deadline,
            'user_id' => $user,
            ]);
        foreach ($request->weekday as $weekday) {
            $habit->scheduleDays()->create([
                'weekday' => $weekday,
            ]);
        }
        if ($habit) {
            return redirect()->route('habits.index');
        }
        return redirect()->route('habits.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Habit $habit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Habit $habit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHabitRequest $request, Habit $habit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Habit $habit)
    {
        //
    }
}
