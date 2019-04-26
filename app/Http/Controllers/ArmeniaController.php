<?php

namespace App\Http\Controllers;


use Request;
use App\City;
use App\Region;
use Validator;
use Storage;

class ArmeniaController extends Controller
{
     public function index()
    {
        $regions = Region::all();
        return view("/armenia/index")
            ->with("regions", $regions);

    }
}
