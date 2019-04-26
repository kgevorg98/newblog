@extends('layouts/decor')

@section('content')
        <form action="/city/postedit" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$city->id}}">
            <select name="region_id">
              @foreach($regions as $region)
              <option value="{{$region->id}}" @if($region->id == $city->region_id) selected @endif>{{$region->name}}</option>
                @endforeach
            </select>
             <input type="hidden" name="id" value="{{$city->id}}">
            <input type="text" name="name" value="{{$city->name}}"> name
            <br><br>
           
            <input type="submit" class="btn" value="Save">
        </form>
           
   @endsection
    <a href="/cities" class="btn">Back</a>