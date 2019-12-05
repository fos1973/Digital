<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public $garded = [];

    public function movies(){
      return $this->belongsToMany(Movie::class,'actor_movie','actor_id','movie_id');
    }
    public function episodes(){
      return $this->belongsToMany(Episode::class,'actor_episode','actor_id','episode_id');
}
    public function movie(){
      return $this->hasMany(Movie::class,'favorite_movie_id');
    }
}
