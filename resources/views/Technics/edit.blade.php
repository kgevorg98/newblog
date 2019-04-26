@extends('layouts/decor')

@section('content')
        <form action="/technics/postedit" method="post" enctype="multipart/form-data">
            @csrf
              <input type="hidden" name="id" value="{{$technic->id}}">
            <input type="text" name="technic_name" value="{{$technic->technic_name}}">technic name
            <br><br>
            <input type="text" name="quantity" value="{{$technic->quantity}}">quantity
            <br><br>
             <input type="date" name="maked_date" value="{{$technic->maked_date}}">Date
             <br><br>
              <input type="text" name="price" value="{{$technic->price}}">price
              <br><br>
              <input type="file" name="image">
               @if($technic->image)
                     <img src="/images/technics/{{$technic->image}}" width="50">
                     @endif
            <input type="submit" class="btn" value="Save">
        </form>
           
   @endsection
    <a href="/technics" class="btn">Back</a>