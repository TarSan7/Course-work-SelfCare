@extends('layout.app')

@section('title') SelfCare @endsection

@section('style')
<link rel="stylesheet" href="{{asset('public/css/basket.css')}}">
@endsection

@section('content')
<div class="col-lg-1"></div>
<div class="col-12 col-lg-10 main-content">
    <h1 class="title">
        Ваш кошик
    </h1>
    <div class="row">

        <div class="yoga col-12">
            <h1 class="title">
                "Курс Йоги"
            </h1>
            <p class="text">Кількість курсів: </p>

            <p class="time-yoga">{{ $yoga }}</p>
            <div class=" buttons">
<p class="btwrap">
<form action="minus{{1}}" method="POST">
    @csrf
    <button class="button" id="add">-</button>
</form>
<form action="plus{{1}}" method="POST">
    @csrf
    <button class="button" id="add">+</button>
</form>
</p>
<p class="btwrap">
<form action="delete{{1}}" method="POST">
    @csrf
    <button class="button" id="yog">Видалити</button>
</form>
</p>
</div>
</div>


<div class="meditation col-12">
    <h1 class="title">
        "Курс Медитації"
    </h1>
    <p class="text">Кількість курсів: </p>

    <p class="time-med">{{ $meditation }}</p>
    <div class="buttons">
        <p class="btwrap">
        <form action="minus{{2}}" method="POST">
            @csrf
            <button class="button" id="add">-</button>
        </form>
        <form action="plus{{2}}" method="POST">
            @csrf
            <button class="button" id="add">+</button>
        </form>
        </p>
        <p class="btwrap">
        <form action="delete{{2}}" method="POST">
            @csrf
            <button class="button" id="med">Видалити</button>
        </form>
        </p>
    </div>
</div>


<div class="eat col-12">
    <h1 class="title">
        "Курс Здорового харчування"
    </h1>
    <p class="text">Кількість курсів: </p>

    <p class="time-eat">{{ $eat }}</p>
    <div class="buttons">
        <p class="btwrap">
        <form action="minus{{3}}" method="POST">
            @csrf
            <button class="button" id="add">-</button>
        </form>
        <form action="plus{{3}}" method="POST">
            @csrf
            <button class="button" id="add">+</button>
        </form>
        </p>
        <p class="btwrap">
        <form action="delete{{3}}" method="POST">
            @csrf
            <button class="button" id="eat">Видалити</button>
        </form>
        </p>
    </div>
</div>


<div class="meditation col-12">
    <h1 class="title">
        "Курс Конструктор"
    </h1>
    @if(!(isset($constr['y'])&&isset($constr['m'])&&isset($constr['e'])))
    <p class="time-yoga">-</p>
    @else
    @if($constr['y'] == 0 && $constr['m'] == 0 && $constr['e'] == 0)
    <p class="time-yoga">-</p>
    @else
    @if($constr['y'] > 0)
    <p class="time-yoga">Курс йоги</p>
    @endif
    @if($constr['m'] > 0)
    <p class="time-med">Курс медитацій</p>
    @endif
    @if($constr['e'] > 0)
    <p class="time-eat">Курс здорового харчування</p>
    @endif
    @endif
    @endif
    <div class="buttons">
        <p class="btwrap">
        <form action="delete{{4}}" method="POST">
            @csrf
            <button class="button">Видалити</button>
        </form>
        </p>
    </div>

</div>
<div class="price col-12">
    <div class="title">
        <p class="text">Загальна сума: </p>
        <p> {{ ($yoga + $meditation + $eat) * 1999 + (($constr['y'] == 0 && $constr['m'] == 0 && $constr['e'] == 0) ? 0 : 1) * 2999 }}$ </p>
    </div>
</div>
</div>
</div>
</div>
</header>

<section class="section1">
    <div class="container">
        <div class="basket-form-title">
            <h1 class="title">Оформити замовлення</h1>
        </div>
        <form action="{{route('order-form')}}" class="form" method="post">
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