<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Technic extends Model
{
    protected $table='technics';

    protected $fillable = [
'technic_name',
'quantity',
'date',
'price',
'image',

     ];
}
