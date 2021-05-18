@extends('layout.app')

@section('title') SelfCare @endsection

@section('style')
<link rel="stylesheet" href="../css/meditation.css">
<link rel="stylesheet" href="../css/foodInfo.css">
@endsection

@section('content')
<div class="col-1"></div>
<div class="row main-content justify-content-center">
    <h1 class="header-gradient col-lg-12 mt-5 mb-5">Фрітата з рікотою та шпинатом</h1>
    <div class="row main-content-text reverse">        
        <img src="../img/image 6.png" alt="food" class="col-md-6 col-lg-6 foodImg">
        <div class="recepiText col-md-6 col-lg-6">
            <p class="boldText">Інгрідієнти</p>
	        <ul class="headerText ml-5">
            @foreach($text as $el)
                <li>{{ $el }}</li>
            @endforeach 
            </ul>
        </div>
    </div>

    <div class="smallBlock howToCook col-md-6 col-lg-4">
        <p class="recepieText mb-3">Час: {{ $recipieIteam->recipe->time }} хвилин</p>
		<div class="reiting mb-3">
            <p class="mr-3 recepieText">Рейтинг: </p>
			<div class="stars">
            @for ($i = 0; $i < $recipieIteam->recipe->reiting; $i++)
				<img src="../img/goldenStar.png" alt="star" class="goldenStar">
			@endfor
			</div>
		</div>
		<p class="mb-3 recepieText">Cкладність: {{ $recipieIteam->recipe->Complexity }}</p>
    </div>

    <div class="recepie">
        <div class="howToCook recepieContent">
            <h1 class="header-gradient recepieHeader">Приготування</h1>
            @for ($i = 0; $i < count($process); $i++)
            <div class="recepieStep">
                <img src="../img/Vector{{$i+1}}.png" alt="" class="stepImg">
                <p>{{ $process[$i] }}</p>
            </div>
            @endfor
        </div>
    </div>
</div>
</div>
</div>
</header>
@endsection
