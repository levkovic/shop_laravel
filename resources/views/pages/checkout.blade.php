@extends('main')

@section('content')

            {!! Breadcrumbs::render('checkout') !!}
<div class="row">
    <div class="col-md-12">
        <div class="well">
        <strong>Оформление заказа</strong>
        </div>
    </div>
</div>
<div class="row">

    {!! Form::open(['route' => 'checkout']) !!}
    <div class="col-md-6">
                
            <h3>Личные данные</h3>
            {{ Form::label('name', 'Имя') }}
            {{ Form::text('name', null, ['class' => 'form-control']) }}

            {{ Form::label('last-name', 'Фамилия') }}
            {{ Form::text('last-name', null, ['class' => 'form-control']) }}

            {{ Form::label('email', 'E-mail') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}

            {{ Form::label('phone', 'Телефон') }}
            {{ Form::tel('phone', null, ['class' => 'form-control']) }}

            {{ Form::label('region', 'Регион/Облать') }}
            {{ Form::select('region', [
                'Kh' => 'Харьковская обл.', 
                'Ki' => 'Киевская обл.'
            ], null, ['class' => 'form-control selectpicker', 'title' => 'Выберите область']) }}

            {{ Form::label('city', 'Город') }}
            {{ Form::text('city', null, ['class' => 'form-control']) }}

            {{ Form::label('adress', 'Адрес') }}
            {{ Form::text('adress', null, ['class' => 'form-control']) }}

            
    </div>
    <div class="col-md-6">
        <h3>Способ оплаты и доставки</h3>
        Выберите удобный способ доставки для данного заказа
        <div class="radio">
            <label><input type="radio" name='typeOfDelivery' value="delivery"><b>Доставка службой "Новая Почта" за счет покупателя</b></label>
        </div>
        <div class="radio">
            <label><input type="radio" name='typeOfDelivery' value="self"><b>Самовывоз из магазина</b></label>
        </div>

        <hr>

        Выберите способ оплаты для данного заказа
        <div class="radio">
            <label><input type="radio" name='typeOfPay' value="credit"><b>Карта Visa и MasterCard</b></label>
        </div>
        <div class="radio">
            <label><input type="radio" name='typeOfPay' value="self"><b>Оплата при получении</b></label>
        </div>
        {{ Form::label('comment', 'Вы можете добавить комментарий к своему заказу') }}
        {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => 8]) }}
        {!! Form::submit('Оформить заказ', array('class' => 'btn btn-success')) !!}
    </div>
    {!! Form::close() !!}
</div>


@endsection