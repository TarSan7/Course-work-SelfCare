@extends('layout.app')

@section('title') SelfCare @endsection

@section('style')
<link rel="stylesheet" href="{{asset('public/css/basket.css')}}">
<link rel="stylesheet" href="{{asset('public/css/confirmation.css')}}">
@endsection
@section('content')
<div class="col-lg-1"></div>
<div class="col-12 col-lg-10 main-content">

    <h1 class="title titleThank">
        Ваше замовлення успішно прийнято!<br>
        Курси, що були придбані
    </h1>
    <div class="yoga">
        @if($order->yoga!=0)
        <p class="title green">Курс йоги: {{$order->yoga}}
        <p>
            @endif
            @if($order->meditation!=0)
        <p class="title blue">Курс медитації: {{$order->yoga}}
        <p>
            @endif
            @if($order->eat!=0)
        <p class="title pink">Курс здорового харчування: {{$order->yoga}}
        <p>
            @endif
            @if($order->constrM!=0)
        <p class="title yellow">Курс-конструктор: медитація
        <p>
            @endif
            @if($order->constrY!=0)
        <p class="title yellow">Курс-конструктор: йога
        <p>
            @endif
            @if($order->constrF!=0)
        <p class="title yellow">Курс-конструктор: здорове харчування
        <p>
            @endif
            @if($order->constrMY!=0)
        <p class="title yellow">Курс-конструктор: йога, медитація
        <p>
            @endif
            @if($order->constrMF!=0)
        <p class="title yellow">Курс-конструктор: медитація, здорове харчування
        <p>
            @endif
            @if($order->constrYF!=0)
        <p class="title yellow">Курс-конструктор: йога, здорове харчування
        <p>
            @endif
            @if($order->constrMYF!=0)
        <p class="title yellow">Курс-конструктор: медитація, йога, здорове харчування
        <p>
            @endif
        <p class="title">Загальна сума: {{$order->totalPrice}}$</p>
    </div>
    </header>

    <section class="infoAboutCustomer">
        <div class="container">
            <h1 class="title">Введена вами інформація</h1>
            <div class="yoga">
                <p class=text>
                    <span class="bold">Ім'я:</span> {{$order->nickname}}
                </p>
                <p class=text>
                    <span class="bold">Дата народження:</span> {{$order->dateBirth}}
                </p>
                <p class=text>
                    <span class="bold"> Контактний номер:</span> {{$order->tel}}
                </p>
            </div>
        </div>
    </section>


    <section class="section1">
        <div class="container">
            <h1 class="title">Детальна інформація</h1>
            <div class="yoga addInfo">
                <p class=text>
                    Місце проведення курсу: м.Київ, вул. Лісна, буд.6
                </p>
                <p class=text>
                    Дата: {{$order->dateCourse}}
                </p>
                <p class=text>
                    Контактний номер: +380502768546
                </p>
                <p class=text>
                    <span class="bold">За тиждень до курсу Вам зателефонують, підтвердять реєстрацію на курс та нададуть
                        подальшу інформацію про проходження курсу. Якщо ви маєте якісь питання на даному етапі телефонуйте за номером, що поданий вище.</span>
                </p>
            </div>

        </div>
    </section>
    @endsection