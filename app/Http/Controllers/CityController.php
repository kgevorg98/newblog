<?php

namespace App\Http\Controllers;

use Request;
use App\City;
use App\Region;
use Validator;
use Storage;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view("/cities/index")
            ->with("cities", $cities);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
        */
    public function create()
    {
				$regions=Region::all();

        return view("/cities/create")
        ->with("regions", $regions);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function save()
    {
$input= Request::all();

$validator=Validator::make($input,[
            'region_id'=>'required',
            'name'=>'required|string',
     
        ],[]);
        
        $errors = $validator->errors();

        if($validator->fails()){
           return redirect()->back()->withErrors($errors)->with('input',$input);
           
        }


City::create($input);
/*
        $product_name = Request::input("product_name");
        $quantity= Request::input("quantity");
        $maked_date=Request::input("maked_date");
        $price= Request::input("price");
      
*/
        return redirect("/cities");
    }
    public function edit($id){
        $city = City::find($id);
        $regions=Region::all();
        return view('/cities/edit')
         ->with("city", $city)
         ->with("regions", $regions);

    }
    public function postedit(){

     $input= Request::all();
     $city=city::find($input["id"]);


     City::find($input["id"])->update($input);
     /*
        $id = Request::input("id");
         $product_name = Request::input("product_name");
        $quantity= Request::input("quantity");
        $maked_date=Request::input("maked_date");
        $price= Request::input("price");

        $product = Product::find($id);
            $product->product_name = $product_name;
            $product->quantity = $quantity;
            $product->maked_date = $maked_date;
             $product->price = $price;
        $product->save();
        */

        return redirect("/cities");
    }
    public function delete($id){

             $city = City::find($id);
        return view('/cities/delete')
         ->with("city", $city);

    }
    public function postdelete(){
          $id = Request::input("id");
          $city = City::find($id);
          
       
          $city->delete();
           return redirect("/cities");
    }
}
