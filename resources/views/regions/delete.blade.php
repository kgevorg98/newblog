@extends('layouts/decor')

@section('content')
       
            
 <form action="/region/postdelete" method="post">
 	@csrf
<h1>Are You sure?</h1>
  <input type="hidden" name="id" value="{{$region->id}}">
<a href="/regions">No</a>
<button>HA</button>

</form>
@endsection
