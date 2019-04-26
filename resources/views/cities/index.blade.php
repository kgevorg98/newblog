@extends('layouts/decor')
@section('content')
@if(count($cities)>0)
<table class="table">
         <tr>
            <th>id</th>
            <th>Region</th>
            <th>Name</th>
            <th>Operation</th>
            </tr>
      
       @foreach($cities as $city)
         <tr>
         						 <td>{{$city->id}}</td>
                   <td>{{$city->region->name}}</td>
                   <td>{{$city->name}}</td>
                  
                   <td>
                   	<a href="/city/edit/{{$city->id}}">Edit</a> /
                   	<a href="/city/delete/{{$city->id}}">Delete</a>
                   </td>

                  
        </tr
                @endforeach
               
             </table>

@else
<h1 style="text-align: center; margin-top: 100px">No Data</h1>

@endif


<a href="cities/create">Add Data</a><br>
<a href="../regions/">Go to Regions</a>
@endsection