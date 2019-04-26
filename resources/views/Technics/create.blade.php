@extends('layouts/decor')

@section('content')
        <form action="/technics/save" method="post" enctype="multipart/form-data">
            @csrf
            <input type="text" name="technic_name" >Technic name
            <br><br>
            <input type="text" name="quantity" >quantity
            <br><br>
             <input type="date" name="maked_date" >Date
             <br><br>
              <input type="text" name="price">price
              <br><br>
              <input type="file" name="image">
            <input type="submit" class="btn" value="Save">
        </form>
            <a href="/technics" class="btn">Back</a>

<div class="text-danger">
        @foreach($errors->all() as $error)
          {{$error}}<br>
        @endforeach
      </div>
            
   @endsection