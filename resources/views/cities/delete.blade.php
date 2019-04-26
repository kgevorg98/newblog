@extends('layouts/decor')

@section('content')
       
            
 <form action="/city/postdelete" method="post">
 	@csrf
<h1>Are You sure?</h1>
  <input type="hidden" name="id" value="{{$city->id}}">
<a href="/cities">No</a>
<button>HA</button>

</form>
@endsection
