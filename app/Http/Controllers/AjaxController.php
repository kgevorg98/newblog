<?php

namespace App\Http\Controllers;

use Request;
use App\Region;

class AjaxController extends Controller
{
	public function index(){
		return view("/ajax/index");
	}

	public function save(){
		$json=[];
    	$region = new Region;
    		$region->name = Request::input("name");
    	$region->save();
    	return $json;
	}
}
