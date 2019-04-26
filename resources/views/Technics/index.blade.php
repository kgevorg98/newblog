@extends('layouts/decor')
@section('content')
@if(count($technics)>0)
<table class="table">
         <tr>
            <th>id</th>
            <th>Technic Name</th>
            <th>Quantity</th>
            <th> Maked Date</th>          
            <th>Price</th>
            <th>Image</th>
            <th>Operation</th>
            </tr>
      
       @foreach($technics as $technic)
         <tr>
         						 <td>{{$technic->id}}</td>
                   <td>{{$technic->technic_name}}</td>
                   <td>{{$technic->quantity}}</td>
                   <td>{{$technic->maked_date}}</td>
                   <td>{{$technic->price}}</td>
                   <td>
                     @if($technic->image)
                     <img src="/images/technics/{{$technic->image}}" width="70">
                     @endif
                   </td>
                   <td>
                   	<a href="/technics/edit/{{$technic->id}}">Edit</a> /
                   	<a href="/technics/delete/{{$technic->id}}">Delete</a>
                   </td>

                  
        </tr
                @endforeach
               
             </table>



@else
<h3 style="text-align: center">No data</h3>


@endif
<a href="technics/create">Add Data</a>
@endsection