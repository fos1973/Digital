<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  public $garded = [];

  public function actors(){
    return $this->belongsToMany(Actor::class,'actor_movie','movie_id','actor_id');

  }
public function genre(){
  return $this->belongsTo(Genre::class,'genre_id');
}

public function actor(){
  return $this->hasMany(Actor::class,'favorite_movie_id');
}


}
