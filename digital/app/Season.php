<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
      public $guarded = [];

      public function series(){
        return $this->belongsTo(Serie::class,'serie_id');
      }

      public function episode(){
        return $this->hasMany(Episode::class,'season_id');
      }


}
