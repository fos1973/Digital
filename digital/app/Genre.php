<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public $garded = [];

    public function movies(){
      return $this->hasMany(Movie::class,'genre_id');
    }

    public function series(){
      return $this->hasMany(Serie::class,'genre_id');
    }


}
