@extends('layouts/decor')

@section('content')
        <form action="/region/save" method="post" >
            @csrf
            <input type="text" name="name" >name
            <br><br>
          
            <input type="submit" class="btn" value="Save">
        </form>
            <a href="/regions" class="btn">Back</a>

<div class="text-danger">
        @foreach($errors->all() as $error)
          {{$error}}<br>
        @endforeach
      </div>
            
   @endsection