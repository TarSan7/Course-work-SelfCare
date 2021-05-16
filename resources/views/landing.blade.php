@extends('layout.app')

@section('title') SelfCare @endsection

@section('style') css/landing.css @endsection

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
                    <img class="pointer" src="../public/img/pointer1.svg" alt="pointer">
                </div>
                <div class="imgwrap">
                    <img class="part-photo" src="../public/img/part1.png" alt="photo">
                </div>
                <p class="part-text">
                    Йога - це не просто спортивна практика, це особливий момент,
                    який ви присвячуєте самому собі. Йога дає прекрасну можливість
                    дізнатися, хто ти є.
                </p>
            </div>
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="pointer" src="../public/img/pointer2.svg" alt="pointer">
                </div>
                <div class="imgwrap">
                    <img class="part-photo" src="../public/img/part2.png" alt="photo">
                </div>
                <p class="part-text">
                    Медитація - це не мантри, пахощі і транс. Це знайомство з роботою вашого мозку,
                    мистецтво управляти своєю увагою і проживати життя у всій її повноті.
                </p>
            </div>
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="pointer" src="../public/img/pointer3.svg" alt="pointer">
                </div>
                <div class="imgwrap">
                    <img class="part-photo" src="../public/img/part3.png" alt="photo">
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
                    <img class="instruct" src="../public/img/instr1.png" alt="pointer">
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
                    <img class="instruct" src="../public/img/instr2.png" alt="pointer">
                </div>
            </div>
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="instruct" src="../public/img/instr3.png" alt="pointer">
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
                    <img class="whywe" src="../public/img/why1.png" alt="pointer">
                </div>
                <p class="part-text">
                    Усі інструктори – висококваліфіковані та досвідчені професіонали
                </p>
            </div>
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="whywe" src="../public/img/why2.png" alt="pointer">
                </div>
                <p class="part-text">
                    Комфортні умови проживання та заняття на природі
                </p>
            </div>
            <div class="col-4 wrap-part">
                <div class="imgwrap">
                    <img class="whywe" src="../public/img/why3.png" alt="pointer">
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
                    <img class="whywe" src="../public/img/why4.png" alt="pointer">
                </div>
                <p class="part-text">
                    Розумна ціна за послуги
                </p>
            </div>
            <div class="col-4 wrap-part" id="whymarg">
                <div class="imgwrap">
                    <img class="whywe" src="../public/img/why5.png" alt="pointer">
                </div>
                <p class="part-text">
                    Продумана до дрібниць програма
                </p>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</section>


<section class="section6">
    <h1 class="title">Відгуки наших учнів</h1>
    <div id="all">
        <input checked type="radio" name="respond" id="desktop">
        <article id="slider">
            <div class="incenter">
                <input checked type="radio" name="slider" id="switch1">
                <input type="radio" name="slider" id="switch2">
                <input type="radio" name="slider" id="switch3">
                <input type="radio" name="slider" id="switch4">
                <input type="radio" name="slider" id="switch5">

                <div id="controls">
                    <label for="switch1"></label>
                    <label for="switch2"></label>
                    <label for="switch3"></label>
                    <label for="switch4"></label>
                    <label for="switch5"></label>
                </div>
                <div id="slides">
                    <div id="overflow">
                        <div class="image">
                            <article>
                                <div class="comment">
                                    <div class="comment-row">
                                        <div class="photo-name">
                                            <img src="../public/img/coment1.png" alt="" class="comment-photo">
                                            <p class="comment-name">Тараненко Наталія</p>
                                        </div>
                                        <div class="stars">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                        </div>
                                    </div>
                                    <p class="text">Йога - спосіб відпочити для людини ХХІ століття.
                                        Чим мені подобається йога? Тим, що ви можете відчувати своє тіло,
                                        радіти, коли стаєте гнучкими і здоровими, відчуваєте легкість.
                                        Починати потрібно обов'язково з інструктором. Види і рівні йоги вам
                                        також підбере інструктор. Заняття тривають, як правило, від 40 хвилин
                                        до години. Якщо займатися регулярно і слухати інструктора перші результати
                                        не змусять себе довго чекати.</p>
                                </div>
                            </article>
                            <article>
                                <div class="comment">
                                    <div class="comment-row">
                                        <div class="photo-name">
                                            <img src="../public/img/coment2.png" alt="" class="comment-photo">
                                            <p class="comment-name">Терещенко Вікторія</p>
                                        </div>
                                        <div class="stars">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                        </div>
                                    </div>
                                    <p class="text">Курс медитації неперевершений! Я в захваті від колективу,
                                        в який мені пощастило потрапити. Для мене час пролетів дуже швидко.
                                        Хотілося ще, ще і ще. Це було справжнім святом для духу, душі і тіла.
                                        Я ніколи в житті ще не була серед такої кількості доброзичливих людей.
                                        Хочеться також відзначити організацію, все було на вищому рівні. Результат
                                        від регулярної медитації просто чудовий. Таке відчуття, що все потихеньку
                                        стає на свої місця, стаєш терплячішим і добрішим. І набагато щасливішим!
                                        Хочеться порекомендувати всім, хто хоче, але сумнівається. </p>
                                </div>
                            </article>
                            <article>
                                <div class="comment">
                                    <div class="comment-row">
                                        <div class="photo-name">
                                            <img src="../public/img/coment3.png" alt="" class="comment-photo">
                                            <p class="comment-name">Кропив’янський Володимир</p>
                                        </div>
                                        <div class="stars">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                        </div>
                                    </div>
                                    <p class="text">Дуже сподобалося, що можна обрати сладові курсу самостійно, вибрав медитацію
                                        та йогу, всім раджу. Відвідував заняття як в залі так і на природі, будинок в лісі затишний
                                        і комфортний. Тренери – професіонали, уважні і вічливі, завжди дадуть корисну пораду. Йога -
                                        це не тільки фізичні вправи, але і робота над заспокоєнням і концентрацією розуму, дихальна
                                        практика. Заняття не пройшли дарма, значно покращилися фізичний і духовний стани, навчився
                                        боротися зі стресом та перенавантаженням. Раджу такий курс всім, кого втомила буденність і
                                        рутина.</p>
                                </div>
                            </article>
                            <article>
                                <div class="comment">
                                    <div class="comment-row">
                                        <div class="photo-name">
                                            <img src="../public/img/coment4.png" alt="" class="comment-photo">
                                            <p class="comment-name">Стефаник Катерина</p>
                                        </div>
                                        <div class="stars">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                        </div>
                                    </div>
                                    <p class="text">Курс по здоровому харчуванню просто відмінний. Я пошкодувала, що не взяла відразу
                                        комплексну програму. Коли отримала свою програму була в захваті! Вона була на стільки зрозуміла,
                                        структурована і доступна, що радості моєї не було меж. Перший тиждень був складним для мене, але
                                        побачивши перші результати про булки і солодощі я забула. Далі від курсу отримала лише
                                        задоволення, а головне досягла бажаного результату! Заняття не довгі і не нудні, всім раджу!</p>
                                </div>
                            </article>
                            <article>
                                <div class="comment">
                                    <div class="comment-row">
                                        <div class="photo-name">
                                            <img src="../public/img/coment5.png" alt="" class="comment-photo">
                                            <p class="comment-name">Рибак Всеволод</p>
                                        </div>
                                        <div class="stars">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                            <img src="../public/img/star.png" alt="" class="star">
                                        </div>
                                    </div>
                                    <p class="text">Без вагань обрав комплексний курс із йоги, медитації та правильного харчування.
                                        Хоч вже мав досвід занять йогою, заняття були актуальними, бо у тренерів індивідуальний підхід
                                        до кожного. Заняття розподілені рівномірно, за бажанням можна коригувати графік, тому курс
                                        легко поєднувати з роботою. Після напруженого дня медитація допомагає відпустити думки і
                                        розслабитися, а йога надзвичайно корисна, якщо у вас сидяча робота. Заняття з правильного
                                        харчування – це не лише лекції, а і практика. Впевнено рекомендую цей курс.</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <div id="active">
                <label for="switch1"></label>
                <label for="switch2"></label>
                <label for="switch3"></label>
                <label for="switch4"></label>
                <label for="switch5"></label>
            </div>
        </article>
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