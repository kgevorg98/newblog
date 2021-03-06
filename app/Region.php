<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
       protected $table='regions';

     protected $fillable = [
      'name',
     ];

     public function cities()
    {
        return $this->hasMany('App\City', 'region_id');
    }
}
