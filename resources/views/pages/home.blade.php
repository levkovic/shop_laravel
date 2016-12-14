@extends('main')

@section('content')

            {!! Breadcrumbs::render('home') !!}
<div class="col-md-2">
            <div class="btn-group-vertical">
                @foreach($categories as $category)
                <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary btn-block" >{{ $category->name }}</a>
                @endforeach
            </div> 
</div>

<div class="col-md-10">

        @foreach($products as $product)
        
        <a href="{{ route('product.show', ['id' => $product->id]) }}" style="text-decoration: none; color: black;">
        <div class="col-md-4">
            <div class="well well-sm" style="text-align: center;">
                <img style="width: 300px; height: 300px;" src="/images/products/{{ $product->image }}.jpg" class="img-thumbnail">
                <h4>{{ $product->shortTitle() }}</h4>
                <b>{{ $product->price }}грн</b>
                <a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-success btn-block">Купить</a>
            </div>
        </div>
        </a>

        @endforeach
    
</div>

@endsection