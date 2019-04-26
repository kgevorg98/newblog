@extends('layouts/decor')

@section('content')
        <form action="/region/postedit" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$region->id}}">
          
            <input type="text" name="name" value="{{$region->name}}"> name
            <br><br>
           
            <input type="submit" class="btn" value="Save">
        </form>
           
   @endsection
    <a href="/regions" class="btn">Back</a>