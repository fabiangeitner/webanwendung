<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'workouts';
    public $primaryKey = 'workout_id';
    public $timestamps = true;
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
