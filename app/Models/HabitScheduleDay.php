<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HabitScheduleDay extends Model
{
    protected $fillable=[
        'habit_id',
        'weekday',
    ];
    public function habit(){
        return $this->belongsTo(Habit::class);
    }
}
