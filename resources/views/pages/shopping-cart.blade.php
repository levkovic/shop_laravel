@extends('main')

@section('content')

	@if(Session::has('cart'))
		<div class="row">
			
			<ul class="list-group">
				@foreach ($products as $product)
					<li class="list-group-item">	
					<strong>{{ $product['item']['title'] }}</strong>	
					{{ $product['qty'] }}
				</li>

				@endforeach
			</ul>
					

		</div>
				
	@else
	<div class="container">
		
	<div class="col-md-8 col-md-offset-2">
			<div class="well well-lg">
		<h1>Самое время бросить курить!</h1>
	</div>
	</div>

	</div>
	@endif

@endsection