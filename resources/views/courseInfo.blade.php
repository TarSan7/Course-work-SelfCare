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
                        <img src="/img/iconNumber{{$i+1}}.png" alt="">
                        <p>
                            {{$advantages[$i]->description}}
                        </p>
                    </div>
                @endfor
                </div>
                <form action="yoga" target="_blank">
                    <button>Придбати курс!</button>
                </form>
            </div>
        </div>
</header>
<section class="schedule">
    <div class="container">
        <h1>Розклад курсу</h1>
            @for($i=0; $i<7; $i++)
                <p>
                    {{$schedules[$i]->description}}                
                </p>
            @endfor
    </div>
</section>
@include("includes/instructors$id")
<div class="container">
    <button class="buttonView"> Подивитися курс </button>
</div>
<section class="contact">
    <div class="container">
        <div class="form-title">
            <h1 class="title2">Вже проходили курс?<br>Залиште Ваш відгук</h1>
        </div>
        <form action="" class="form" method="POST">
            <div class="row form-row">
                <div class="col-lg-6 col-sm-12 name-mail">
                    <input type="text" required class="area" name="user-name" placeholder="Ваше ім'я...">
                    <input type="email" required class="area" name="user-email" placeholder="Рік проходження курсу...">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <textarea type="comment" placeholder="Відгук..." required class="area" id = "question" name="question"></textarea>
                </div>
                <div class="col-12 form-button">
                    <button type="submit" class="button3">Надіслати</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</section>

@endsection