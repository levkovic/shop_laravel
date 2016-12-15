@extends('main')

@section('content')
{!! Breadcrumbs::render('category.show', $selected_category) !!}
<div class="col-md-2">
            <div class="btn-group-vertical btn-block">
                @foreach($categories as $category)
                <a href="{{ route('category.show', $category->id) }}" class="btn btn-primary" >{{ $category->name }}</a>
                @endforeach
            </div> 
</div>

<div class="col-md-10">

        @foreach($products as $product)
        
        <a href="{{ route('product.show', $product->id) }}" style="text-decoration: none; color: black;">
        <div class="col-md-3">
            <div class="well well-sm" style="text-align: center;">
                <img src="/images/products/{{ $product->image }}.jpg" class="img-thumbnail">
                <h4>{{ $product->shortTitle() }}</h4>
                <b>{{ $product->price }}грн</b>
                <a href="#" class="btn btn-success btn-block">Купить</a>
            </div>
        </div>
        </a>

        @endforeach
    
</div>

@endsection