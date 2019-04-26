@extends('layouts/decor')
@section('content')

@endsection
<table class="table">
	<tr>
		<th>Id</th>
		<th>Name</th>
		<th>Operation</th>
	</tr>
@foreach($regions as $region)
<tr>
	<td>{{$region->id}}</td>
	<td>{{$region->name}}</td>
	 								<td>
                   	<a href="/region/edit/{{$region->id}}">Edit</a> /
                   	<a href="/region/delete/{{$region->id}}">Delete</a>
                  </td>
</tr>
@endforeach
<tr>
	<td><a href="regions/create">Add Data</a></td>
</tr>
	
</table>