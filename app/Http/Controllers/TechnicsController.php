<?php

namespace App\Http\Controllers;

use Request;
use App\Technic;
use Validator;
use Storage;

class TechnicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $technics = Technic::all();
        return view("/technics/index")
            ->with("technics", $technics);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
        */
    public function create()
    {


        return view("/technics/create");
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
            'technic_name'=>'required',
            'quantity'=>'required|integer',
            'maked_date'=>'required|date',
            'price'=>'required|integer',
        ],[]);
        
        $errors = $validator->errors();

        if($validator->fails()){
           return redirect()->back()->withErrors($errors)->with('input',$input);
           
        }
if(Request::file('image')){
            $filename = time() . '.' . Request::file('image')->getClientOriginalExtension();
            Request::file('image')->move(public_path('images/technics/'), $filename);
            $input["image"] = $filename;
        }

Technic::create($input);
/*
        $product_name = Request::input("product_name");
        $quantity= Request::input("quantity");
        $maked_date=Request::input("maked_date");
        $price= Request::input("price");
      
*/
        return redirect("/technics");
    }
    public function edit($id){
        $technic = Technic::find($id);

        return view('/technics/edit')
         ->with("technic", $technic);

    }
    public function postedit(){

     $input= Request::all();
     $technic=technic::find($input["id"]);

     if(Request::file('image')){
        $result = Storage::disk('public')->exists('images/technics/' . $technic->image);
        if($result){
            $result = Storage::disk('public')->delete('images/technics/' . $technic->image);
        }
        $filename = time() . '.' . Request::file('image')->getClientOriginalExtension();
        Request::file('image')->move(public_path('images/technics/'), $filename);
        $input["image"] = $filename;
    }

     Technic::find($input["id"])->update($input);
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

        return redirect("/technics");
    }
    public function delete($id){

             $technic = Technic::find($id);
        return view('/technics/delete')
         ->with("technic", $technic);

    }
    public function postdelete(){
          $id = Request::input("id");
          $technic = Technic::find($id);

           $result = Storage::disk('public')->exists('images/technics/' . $technic->image);
            if($result){
                $result = Storage::disk('public')->delete('images/technics/' . $technic->image);
            }
          $technic->delete();
           return redirect("/technics");
    }
}
