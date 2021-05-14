@extends('layout.app')

@section('title') SelfCare @endsection

@section('style') ../resources/css/landing.css @endsection

@section('content')
<div class="col-1"></div>
<div class="col-11 main-content">
    <p class="slogan-title">
        Хочеш обрати шлях здоров’я, змінити світогляд, підтримувати тіло і дух у відмінній формі?
    </p>
    <p class="slogan">
        SelfCare - ідеальний інструмент<br>для твого саморозвитку.
    </p>
    <button onclick="document.location=''" class="button">Приєднатися до нас!</button>
</div>

</div>
</header>

<section class="section1">
    <div class="container">
        <h1 class="title">Хто ми такі?</h1>
        <div class="wrapper">
            <p class="text">
                SelfCare – молода та перспективна компанія на ринку. Заснована у 2002 році.
                Надаємо послуги, що сприяють поширенню здорового способу життя, такі як курси про йогу,
                медитацію та правильне харчування. Наші курси та навчальні програми відкривають для Вас
                можливість жити в гармонії з собою і навколишнім світом. В компанії працюють виключно професіонали,
                які горять своєю справою, та допоможуть з будь-яким питанням, яке у вас виникне. За час нашого
                існування було проведено близько <span class="span1"> 300</span> навчальних програм, залучено
                більше <span class="span2">4500</span> людей до здорового
                та осмисленого життя та отримано <span class="span3">безліч</span> позитивних відгуків. Не пропусти цю можливість та
                приєднуйся до нас!
            </p>
        </div>
        <div class="row but-row">
            <button onclick="document.location=''" class="button1">Переглянути послуги</button>
        </div>
    </div>
</section>

<section class="section2">
    <div class="container">
        <h1 class="title1">SelfCare</h1>
        <h2 class="h2parts">Three main parts</h2>
        <div class="row parts-row">
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="pointer" src="../resources/img/pointer1.svg" alt="pointer">
                </div>
                <div class="imgwrap">
                    <img class="part-photo" src="../resources/img/part1.png" alt="photo">
                </div>
                <p class="part-text">
                    Йога - це не просто спортивна практика, це особливий момент,
                    який ви присвячуєте самому собі. Йога дає прекрасну можливість
                    дізнатися, хто ти є.
                </p>
            </div>
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="pointer" src="../resources/img/pointer2.svg" alt="pointer">
                </div>
                <div class="imgwrap">
                    <img class="part-photo" src="../resources/img/part2.png" alt="photo">
                </div>
                <p class="part-text">
                    Медитація - це не мантри, пахощі і транс. Це знайомство з роботою вашого мозку,
                    мистецтво управляти своєю увагою і проживати життя у всій її повноті.
                </p>
            </div>
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="pointer" src="../resources/img/pointer3.svg" alt="pointer">
                </div>
                <div class="imgwrap">
                    <img class="part-photo" src="../resources/img/part3.png" alt="photo">
                </div>
                <p class="part-text">
                    Правильне харчування - це не сувора дієта, не відсутність в раціоні смаколиків,
                    не виснаження самого себе. Це спосіб життя, до якого потрібно підійти усвідомлено.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section3">
    <div class="container">
        <h1 class="title">Курси здоров’я</h1>
        <p class="text" id="left-text">
            Наші курси - це чудова можливість для Вас впровадити у своє життя корисні звички,
            покращити своє здоров’я, знайти рівновагу та гармонію. Перехід до здорового способу життя –
            це складний процес, який необхідно пройти правильно, щоб ці звички залишилися у Вашому житті надовго.
            У цьому Вам допоможуть наші інструктори.
            Ми пропонуємо Вам чотири типи курсів: <span class="span4"> “Курс йоги - вдосконалення тіла”, “Курс самопізнання через
                Медитації”, “Курс майстер-класів та консультацій про здорове харчування” та “Курс-конструктор”</span>.
            Кожен з цих курсів допоможе Вам стати більш щасливим та здоровим!
        </p>
        <button onclick="document.location=''" class="button2">Придбати курс</button>
    </div>
</section>


<section class="section4">
    <div class="container">
        <h1 class="title">Наші майстри</h1>
        <div class="row instruct-row">
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="instruct" src="../resources/img/instr1.png" alt="pointer">
                </div>
                <p class="part-text1">
                    <span class="span5">Коваль Миколай<br></span>
                    38 років <br>
                    Навчався йоги по Фельденкрайзу на заняттях провідних тренерів.
                </p>
            </div>
            <div class="col-4 wrap-part">
                <p class="part-text2">
                    <span class="span5">Міщенко Ксенія <br></span>
                    25 років <br>
                    Курси медитаціі, самостійний розвиток.
                </p>
                <div class="imgwrap">
                    <img class="instruct" src="../resources/img/instr2.png" alt="pointer">
                </div>
            </div>
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="instruct" src="../resources/img/instr3.png" alt="pointer">
                </div>
                <p class="part-text1">
                    <span class="span5">Злотник Марія <br></span>
                    24 роки <br>
                    Міжнародна школа фітнесу та дієтології.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="section5">
    <div class="container">
        <h1 class="title" id="whywe">Чому саме ми?</h1>
        <div class="row instruct-row">
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="whywe" src="../resources/img/why1.png" alt="pointer">
                </div>
                <p class="part-text">
                    Усі інструктори – висококваліфіковані та досвідчені професіонали
                </p>
            </div>
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="whywe" src="../resources/img/why2.png" alt="pointer">
                </div>
                <p class="part-text">
                    Комфортні умови проживання та заняття на природі
                </p>
            </div>
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="whywe" src="../resources/img/why3.png" alt="pointer">
                </div>
                <p class="part-text">
                    Дружня та заспокійлива атмосфера на заняттях
                </p>
            </div>
        </div>
        <div class="row why2row">
            <div class="col-2"></div>
            <div class="col-4 wrap-part" id="whymarg">
                <div class="imgwrap">
                    <img class="whywe" src="../resources/img/why4.png" alt="pointer">
                </div>
                <p class="part-text">
                    Розумна ціна за послуги
                </p>
            </div>
            <div class="col-4 wrap-part" id="whymarg">
                <div class="imgwrap">
                    <img class="whywe" src="../resources/img/why5.png" alt="pointer">
                </div>
                <p class="part-text">
                    Продумана до дрібниць програма
                </p>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</section>

@endsection