<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Habit extends Model
{
    protected $fillable=[
        'user_id',
        'category_id',
        'title',
        'description',
        'scheduled_time',
        'due_at',
        'frequency',
        'remind_at',
        'is_active',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(HabitCategory::class);
    }

    public function scheduleDays()
    {
        return $this->hasMany(HabitScheduleDay::class);
    }

    public function checkins()
    {
        return $this->hasMany(HabitCheckin::class);
    }
}
