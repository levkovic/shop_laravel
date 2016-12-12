@extends('main')

@section('content')
{!! Breadcrumbs::render('product.show', $product, $category) !!}
<div class="col-md-10">
    <div class="row">
        <div class="col-md-12">
            <div class="well">
            <strong>{{ $product->title }}</strong>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <img style="width: 500px; height: auto;" src="/images/products/{{ $product->image }}.jpg" class="img-thumbnail">
        </div>
        <div class="col-md-6">
            <div class="well">
                <h1><small>Цена: </small>{{ $product->price }} грн</h1>
                @if($product->availability == 'available')
                    <p class="text-primary">В наличии</p>
                @elseif($product->availability == 'comming')
                    <p class="text-success">Доступен предзаказ</p>
                @else
                    <p class="text-danger">Нет в наличии</p>
                @endif
            </div>
            <div class="well">
                <div class="row">
                    <div class="col-md-6">
                        <p>Просмотров: {{ $product->seen }}</p>
                    </div>
                    <div class="col-md-6">
                        <p>Лайков: {{ $product->likes }}</p>
                        <a href="#" class="btn btn-success btn-block">Купить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="pill" href="#description">Описание</a></li>
                <li><a data-toggle="pill" href="#comments">Отзывы</a></li>
            </ul>

            <div class="tab-content">
                <div id="description" class="tab-pane fade in active">
                    <h3>{{ $product->title }}</h3>
                    <p>{{ $product->description }}</p>
                </div>
                <div id="comments" class="tab-pane fade">
                    <h3>Not available</h3>
                    <p>In development</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection