@extends('layout.app')

@section('title') SelfCare @endsection

@section('style')
<link rel="stylesheet" href="css/courses.css">
@endsection

@section('content')
<div class="col-lg-1"></div>
<div class="col-12 col-lg-10 main-content">
    <h1 class="title">
        Курси саморозвитку - це...?
    </h1>
    <p class="text">
        Якщо Ви вирішили знайти себе в одному з напрямків (йога, медитації, здорове харчування),
        або навіть у всіх разом, тоді запрошуємо на наші курси саморозвитку! Кожен курс триває два
        тижня протягом яких Ви будете жити в сучасному будинку в лісі недалеко від Києва та займатися у
        вибраному напрямкку під чуйним керівництвом наших професіоналів. Майже всі заняття будуть проходити
        в лісі - наодинці з природою та самим собою.
        За цей час Ви забудете про турботи бурхливого життя і зосередитеся на пошуку себе та насолодженні
        кожною хвилиною, проведеною в компанії однодумців.
    </p>
</div>
</div>

</div>
</header>

<section class="section1">
    <div class="container">
        <h1 class="title">
            Місце проведення курсів
        </h1>
        <div class="row text-place">
            <div class="imgwrap col-12 house">
                <img src="img/house1.png" alt="">
            </div>
            <div class="imgwrap col-12 house">
                <img src="img/house2.png" alt="">
            </div>
            <div class="col-1"></div>
            <div class="col-10">
                <p class="text">
                    Всі курси проходять в комфортному великому будинку в лісі,
                    в якому наявний просторний спортзал для занять в погану погоду або для додаткових практик,
                    кімнати для кожного учасника курсу, просторна кухня для кулінарних уроків, невеликий басейн
                    та тераса для проведення вільного часу з користю та в компанії.
                </p>
            </div>
            <div class="col-1"></div>
            <div class="imgwrap col-12 house">
                <img src="img/house3.png" alt="">
            </div>
            <div class="imgwrap col-12 house">
                <img src="img/house4.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="section2">
    <div class="container">
        <div class="yoga">
            <h1 class="title">
                Курс Йоги
            </h1>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 col-lg-5 nopad">
                    <div class="imgwrap">
                        <img src="img/yogaPhoto.png" alt="" class="yoga-photo">
                    </div>
                </div>
                <div class="col-12 col-lg-5 nopad">
                    <p class="text">
                        На цьому курсі Ви познайомитеся з декількома видами йоги під керівництвом майстрів,
                        визначите, який напрям Вас більше цікавить та отримаєте поради та інструкції по подальшому
                        саморозвитку.
                        Кожного ранку та вечора Ви будете займатися йогою наодинці з природою, вчитися
                        впроваджувати спокій, розсудливість та радість у життя, а також отримувати щоденні
                        невеликі завдання й виконувати їх.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-1"></div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="raiting">
                        <p class="text">Рейтинг курсу:</p>
                        <div class="stars">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                        </div>
                    </div>
                    <div class="time">
                        <p class="text">Тривалість:</p>
                        <p class="time-yoga">14 діб</p>
                    </div>
                    <div class="price">
                        <p class="text">Ціна курсу:</p>
                        <div class="price-yoga">$1999</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <p class="btwrap">
                        <button onclick="document.location='/courseInfo1'" class="button1">До курсу!</button>
                    </p>
                </div>
            </div>
        </div>

        <div class="meditation">
            <h1 class="title">
                Курс Медитацій
            </h1>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 col-lg-5 nopad">
                    <div class="imgwrap">
                        <img src="img/meditationPhoto.png" alt="" class="meditation-photo">
                    </div>
                </div>
                <div class="col-12 col-lg-5 nopad">
                    <p class="text">
                        На курсі Медитації Ви будете вчитися розуміти себе та свій внутрішній світ під
                        керівництвом майстрів, визначите, який напрям медитацій Вас більше цікавить та отримаєте
                        поради та інструкції по подальшому саморозвитку.
                        Кожного ранку та вечора Ви будете медитувати наодинці з природою, вчитися впроваджувати
                        спокій, розсудливість та радість у життя, а також отримувати щоденні невеликі завдання й
                        виконувати їх.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-1"></div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="raiting">
                        <p class="text">Рейтинг курсу:</p>
                        <div class="stars">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                        </div>
                    </div>
                    <div class="time">
                        <p class="text">Тривалість:</p>
                        <p class="time-meditation">14 діб</p>
                    </div>
                    <div class="price">
                        <p class="text">Ціна курсу:</p>
                        <div class="price-meditation">$1999</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <p class="btwrap">
                        <button onclick="document.location='/courseInfo2'" class="button2">До курсу!</button>
                    </p>
                </div>
            </div>
        </div>

        <div class="eat">
            <h1 class="title">
                Курс Здорового харчування
            </h1>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 col-lg-5 nopad">
                    <div class="imgwrap">
                        <img src="img/eatPhoto.png" alt="" class="eat-photo">
                    </div>
                </div>
                <div class="col-12 col-lg-5 nopad">
                    <p class="text">
                        На цьому курсі Ви навчитесь правильно і з задоволенням готувати улюблені здорові
                        страви та отримаєте поради й інструкції по подальшому саморозвитку.
                        Кожного дня Ви будете займатися йогою наодинці з природою, вчитися впроваджувати
                        спокій, розсудливість та радість у життя, а також отримувати щоденні невеликі завдання
                        й виконувати їх.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-1"></div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="raiting">
                        <p class="text">Рейтинг курсу:</p>
                        <div class="stars">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                        </div>
                    </div>
                    <div class="time">
                        <p class="text">Тривалість:</p>
                        <p class="time-eat">14 діб</p>
                    </div>
                    <div class="price">
                        <p class="text">Ціна курсу:</p>
                        <div class="price-eat">$1999</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <p class="btwrap">
                        <button onclick="document.location='/courseInfo3'" class="button3">До курсу!</button>
                    </p>
                </div>
            </div>
        </div>

        <div class="constr">
            <h1 class="title">
                Курс-конструктор
            </h1>
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10 nopad">
                    <div class="imgwrap">
                        <img src="img/yogaPhoto.png" alt="" class="yoga-photo">
                        <img src="img/meditationPhoto.png" alt="" class="meditation-photo">
                        <img src="img/eatPhoto.png" alt="" class="eat-photo">

                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-1"></div>
                <div class="col-12 col-lg-10 nopad">
                    <p class="text">
                        За допомогою курса-конструктора Ви маєте можливість записатися одночасно на
                        декілька курсів та провести час ще продуктивніше! Можна обрати як два курси так
                        і всі можливі.
                    </p>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-1"></div>
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="raiting">
                        <p class="text">Рейтинг курсу:</p>
                        <div class="stars">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                            <img src="img/star.png" alt="" class="star">
                        </div>
                    </div>
                    <div class="time">
                        <p class="text">Тривалість:</p>
                        <p class="time-constr">14 діб</p>
                    </div>
                    <div class="price">
                        <p class="text">Ціна курсу:</p>
                        <div class="price-constr">$2999</div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <p class="btwrap">
                        <button onclick="document.location='/courseInfo4'" class="button1">До курсу!</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section7">
    <div class="container">
        <div class="form-title">
            <h1 class="title2">З’явилися питання? Зв’яжіться з нами заповнивши форму.</h1>
        </div>
        <form action="" class="form" method="POST">
            <div class="row form-row">
                <div class="col-6 name-mail">
                    <input type="text" required class="area" name="user-name" placeholder="Ваше ім'я...">
                    <input type="email" required class="area" name="user-email" placeholder="Електронна пошта...">
                </div>
                <div class="col-6">
                    <textarea type="comment" placeholder="Ваше питання..." required class="area" id="question" name="question"></textarea>
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