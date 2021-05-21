@extends('layout.app')

@section('title') SelfCare @endsection

@section('style')
<link rel="stylesheet" href="css/basket.css">
@endsection

@section('content')
<div class="col-lg-1"></div>
<div class="col-12 col-lg-10 main-content">
    <h1 class="title">
        Ваш кошик</h1>
        @if(Session::has('cart'))
        <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <ul class="list-group">
        @foreach($courses as $course)
        <li class="list-group-item">
        <span class="badge">{{ $course['qty'] }}</span>
        <strong>{{ $course['item']['title'] }}</strong>
        <span class="label label-success">{{ $course['price'] }}</span>
        <div class="btn-group">
        <button class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">
        Action <span class="caret"></span>
        <ul class="dropdown-menu">
        <li class=""><a href=""Reduce by 1></a></li>
        <li class=""><a href=""Reduce by All></a></li>
        </ul>
        </button>
        </div>
        </li>
        @endforeach
        </ul>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <strong>Total: {{ $totalPrice }}</strong>
        </div>
        </div>
        <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <button type="button" class="btn btn-success">Checkout</button>
        </div>
        </div>
        @else
        <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <h2>No items in cart</h2>
        </div>
        </div>
        @endif
</div>
</div>
</div>
</header>

<section class="section1">
    <div class="container">
        <div class="basket-form-title">
            <h1 class="title">Оформити замовлення</h1>
        </div>
        <form action="" class="form" method="post">
            @csrf
            <div class="row form-row">
                <div class="col-lg-8 col-sm-12 name">
                    <input type="text" required class="area" name="nickname" id="nickname" placeholder="ПІБ">
                </div>
                <div class="col-lg-8 col-12 date-birth">
                    <input type="text" required onblur="(this.type='text')" onfocus="(this.type='date')" class="area" name="date-birth" id="date" placeholder="Дата народження">
                </div>
                <div class="col-lg-8 col-12 date-course">
                    <input type="text" onblur="(this.type='text')" onfocus="(this.type='date')" required class="area" name="date-course" id="date" placeholder="Бажана дата проходження курсу">
                </div>
                <div class="col-lg-8 col-sm-12">
                    <input type="text" required class="area" name="e_mail" id="e_mail" placeholder="Рік проходження курсу">
                </div>
                <div class="col-lg-8 col-sm-12 number">
                    <input type="text" required class="area" name="number" id="nickname" placeholder="Номер телефону">
                </div>
                <div class="col-12 form-button">
                    <button type="submit" class="btn3 button3">Оформити!</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection