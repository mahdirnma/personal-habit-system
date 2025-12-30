<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HabitCheckin extends Model
{
    protected $fillable=[
        'habit_id',
        'user_id',
        'for_date',
        'status',
        'checked_in_at',
        'note'
    ];
    public function habit(){
        return $this->belongsTo(Habit::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
