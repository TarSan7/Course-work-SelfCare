@extends('layout.app')

@section('title') SelfCare @endsection

@section('style')
<link rel="stylesheet" href="css/courseInfo.css">
  @endsection


@section('content')
            <div class="backgroundOfHeader"></div>
            <div class="col-12 main-content" style="height:auto">
                <h1>Чого Ви навчитесь на курсі?</h1>
                <div class=wrap>
                @for($i=0; $i<6; $i++)
                    <div class="adv">
                        <img src="img/iconNumber{{$i+1}}.png" alt="">
                        <p>
                            {{$advantages[$i]->description}}
                        </p>
                    </div>
                @endfor
                </div>
                @if($id!=4)
                    <form action="#" target="_blank">
                        <button>Придбати курс!</button>
                    </form>
                @endif    
            </div>
        </div>
</header>
<section class="schedule">
    <div class="container">
        <h1>Розклад курсу</h1>
        @if($id!=4)
            @for($i=0; $i<7; $i++)
                <p>
                    {{$schedules[$i]->description}}                
                </p>
            @endfor
         @endif   
         @if($id==4)
         <p class="center">
               {{$schedules[0]->description}}                
        </p>
         @endif
    </div>
</section>
@if($id!=4)
    @include("includes/instructors$id")
    <div class="container">
        <button class="buttonView" onclick="document.location='/{{$en_name}}'"> Подивитися курс </button>
    </div>
@endif
@if($id==4)
    @include("includes/choice")
@endif
@include("includes/formQuestion")

@endsection