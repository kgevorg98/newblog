<?php

namespace App\Http\Controllers;

use Request;
use App\City;
use App\Region;
use Validator;
use Storage;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regions = Region::all();
        return view("/regions/index")
            ->with("regions", $regions);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
        */
    public function create()
    {
			return view("/regions/create");
        
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
            'name'=>'required|string',
     
        ],[]);
        
        $errors = $validator->errors();

        if($validator->fails()){
           return redirect()->back()->withErrors($errors)->with('input',$input);
           
        }


Region::create($input);
/*
        $product_name = Request::input("product_name");
        $quantity= Request::input("quantity");
        $maked_date=Request::input("maked_date");
        $price= Request::input("price");
      
*/
        return redirect("/regions");
    }
    public function edit($id){
        $region = Region::find($id);
    
        return view('/regions/edit')
         ->with("region", $region);

    }
    public function postedit(){

     $input= Request::all();
     $region=region::find($input["id"]);


     region::find($input["id"])->update($input);
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

        return redirect("/regions");
    }
    public function delete($id){

             $region = Region::find($id);
        return view('/regions/delete')
         ->with("region", $region);

    }
    public function postdelete(){
          $id = Request::input("id");
          $region = Region::find($id);
          
       
          $region->delete();
           return redirect("/regions");
    }
}
