<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
      public $guarded = [];


      public function season(){
        return $this-belongsTo(Season::class,'season_id');
      }

      public function actors(){
        return $this->belongsToMany(Actor::class,'actor_episode','episode_id','actor_id');
      }

}
