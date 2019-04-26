<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
     protected $table='cities';

     protected $fillable = [
      'region_id', 'name',
     ];

     public function region()
    {
        return $this->belongsTo('App\Region', 'region_id');
    }
  }
