@extends('main')

@section('content')

<div class="col-md-2">
            <div class="btn-group-vertical btn-block">
                @foreach($categories as $category)
                <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary" >{{ $category->name }}</a>
                @endforeach
            </div> 
</div>

<div class="col-md-10">
        
            @include('partials._message')
        @foreach($products as $product)
        
        <a href="{{ route('product.show', ['id' => $product->id]) }}" style="text-decoration: none; color: black;">
        <div class="col-md-3">
            <div class="well well-sm" style="text-align: center;">
                <img style="width: auto; height: auto;" src="/images/products/{{ $product->image }}.jpg" class="img-thumbnail">
                <h4>{{ $product->shortTitle() }}</h4>
                <b>{{ $product->price }}грн</b>
                <a href="{{ route('addToCart', ['id' => $product->id]) }}" class="btn btn-success btn-block"><span class="glyphicon glyphicon-shopping-cart"></span> Добавить в корзину</a>
            </div>
        </div>
        </a>

        @endforeach
    
</div>

@endsection