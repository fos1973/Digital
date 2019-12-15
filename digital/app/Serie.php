<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
      public $guarded = [];

      public function genre(){
        return $this->belongsTo(Genre::class,'genre_id');
      }

      public function seasons(){
        return $this->hasMany(Season::class,'serie_id');
      }

}
