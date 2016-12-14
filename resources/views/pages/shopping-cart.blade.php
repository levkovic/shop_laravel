@extends('main')

@section('content')

	@if(Session::has('cart'))
		<div class="container">
			<div class="row">
				
				<table class="table">
					<thead>
						<tr>
							<th>Изображени</th>
							<th>Название</th>
							<th>Количество</th>
							<th>Цена за шт.</th>
							<th>Всего</th>
							<th></th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>Сумма:</td>
							<td><b>{{ $totalP }}</b></td>
						</tr>
					</tfoot>
					<tbody>
						@foreach ($products as $product)
						<tr>
							<td><img style="width: 100px; height: 100px;" src="/images/products/{{ $product['item']['image'] }}.jpg" class="img-thumbnail"></td>
							<td style="vertical-align: middle;"><strong>{{ $product['item']['title'] }}</strong></td>
							<td style="vertical-align: middle;">
							<a href="{{ route('removeFromCart', ['id' => $product['item']['id']]) }}"><span class="glyphicon glyphicon-minus"></span></a>
							<span style="margin: 0px 5px;">{{ $product['qty'] }}</span>
							<a href="{{ route('addToCart', ['id' => $product['item']['id']]) }}"><span class="glyphicon glyphicon-plus"></span></a>
							</td>
							<td style="vertical-align: middle;">{{ $product['item']['price'] }}</td>
							<td style="vertical-align: middle;">{{ $product['price'] }}</td>
							<td style="vertical-align: middle;">
							<a href="{{ route('deleteFromCart', ['id' => $product['item']['id']]) }}"><span class="glyphicon glyphicon-remove"></span></a>
							</td>
						</tr>	
						@endforeach
					</tbody>
				</table>
						
			</div>

			<div class="well">
				<a href="{{ route('home') }}" class="btn btn-success">Продолжить покупки</a>
				<a href="#" class="btn btn-success pull-right">Оформить заказ</a>
			</div>
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