@extends('layouts/decor')

@section('content')
       
            
 <form action="/technics/postdelete" method="post">
 	@csrf
<h1>Are You sure?</h1>
  <input type="hidden" name="id" value="{{$technic->id}}">
<a href="/technics">No</a>
<button>HA</button>

</form>
@endsection
