@extends('layouts/decor')
@section('content')

@endsection
<div class="container">
	<div class="row">
		<div>
			@foreach($regions as $region)
			<h5>{{$region->name}}</h5>
				@foreach($region->cities as $city)
						<li>{{$city->name}}</li>
				@endforeach
			@endforeach
		</div>
	</div>
</div>