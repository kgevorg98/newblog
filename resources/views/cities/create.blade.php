@extends('layouts/decor')
@section("content")
<div class="container">
	<div class="row">
		<div class="text-danger">
        @foreach($errors->all() as $error)
          {{$error}}<br>
        @endforeach
      </div>

  <form action="/city/save" method="post" >
            @csrf
            <select name="region_id">
            	@foreach($regions as $region)
            	<option value="{{$region->id}}">{{$region->name}}</opt ion>
            	  @endforeach
            </select>
          
            <input type="text" name="name" >name
            <br><br>
           
            <input type="submit" class="btn" value="Save">
        </form>
            <a href="/cities" class="btn">Back</a>
</div>
</div>
@endsection