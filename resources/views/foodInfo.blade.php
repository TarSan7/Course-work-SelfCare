@extends('layout.app')

@section('title') SelfCare @endsection

@section('style')
<link rel="stylesheet" href="{{asset('public/css/meditation.css')}}">
<link rel="stylesheet" href="{{asset('public/css/foodInfo.css')}}">
@endsection

@section('content')
<div class="main-content col-12 col-lg-12 mt-5">
    <div class="fuckingClass">
        <h1 class="header-gradient">{{ $recipieIteam->recipe->title }}</h1>
        <div class=" main-content-text reverse mt-5">
            <img src="{{asset('public/img/Big\{\{$recipieIteam->recipe->img\}\}')}}" alt="food" class="foodImg">
            <div class="recepiText">
                <p class="boldText">Інгрідієнти</p>
                <ul class="headerText">
                    @foreach($text as $el)
                    <li>{{ $el }}</li>
                    @endforeach
                </ul>
                <div class="smallBlock howToCook">
                    <p class="mb-1">Час: {{ $recipieIteam->recipe->time }} хвилин</p>
                    <div class="reiting mb-1">
                        <p class="mr-3">Рейтинг: </p>
                        <div class="stars">
                            @for ($i = 0; $i < $recipieIteam->recipe->reiting; $i++)
                                <img src="{{asset('public/img/goldenStar.png')}}" alt="star" class="goldenStar">
                                @endfor
                        </div>
                    </div>
                    <p>Cкладність: {{ $recipieIteam->recipe->Complexity }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class=" redlineBlock"></div>
</header>

<section>
    <div class="container">
        <div class="recepie">
            <div class="howToCook recepieContent">
                <h1 class="header-gradient recepieHeader">Приготування</h1>
                @for ($i = 0; $i < count($process); $i++) <div class="recepieStep">
                    <img src="{{ asset('public/img/Vector'.($i+1).'.png')}}" alt="" class="stepImg">
                    <p>{{ $process[$i] }}</p>
            </div>
            @endfor
        </div>
    </div>
    </div>
</section>
@endsection