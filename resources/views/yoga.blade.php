@extends('layout.app')

@section('title') SelfCare @endsection

@section('style') css/yoga.css @endsection

@section('content')
        <div class="col-0 col-sm-5"></div>
        <div class="col-12 col-sm-7 main-content">
            <div class= "offer">
                <h1>Що таке йога і навіщо нею займатися?</h1>
                <p>
                Все що люди можуть робити, полягає у вираженні того, ким вони є. 
                Хтось співає, хтось танцює, хтось пише книги, хтось пише картини... 
                Все це вираз того, ким ми є. І йога в цьому плані діаметрально 
                протилежна, тому що вона не є способом вираження себе, суть йоги в 
                пошуку того, ким ми є, в пошуку того, ким ми хочемо бути... З цією 
                практикою розвивається здатність бачити з боку наші емоції, як вони 
                керують нами.
                </p>
            </div>
        </div>
    </div>
</header>
<section class="typesOfYoga">
    <div class="container">
        <h1>Види йоги, та як обрати “свою”</h1>
        <div class="row">
            <div class="col-lg-6 col-12">
                <h2>Хатха</h2>
                <p>Це найдавніша практика, яка об'єднує в собі роботу над тілом і свідомістю. 
                    Її мета - досягнення балансу фізичних і ментальних процесів, того, що 
                    відбувається в розумі і в тілі. На відміну від звичайних фізичних вправ,
                     заняття йогою спрямовані на досягнення не тільки тілесної сили, а й ментальної. 
                     В процесі занять впливом на тіло досягається безтурботність розуму. Практики вчать контролювати свої думки і емоції. Регулярні заняття хатха (навіть 1-2 рази в тиждень) в кілька разів підвищують стійкість до стресів, нормалізують роботу внутрішніх органів, покращують ментальне здоров'я.</p>
            </div>
            <div class="col-lg-6 col-12">
                <img src="img/hathaYogaImage.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <img src="img/ashtangaViniasaImage.png" alt="">
            </div>
            <div class="col-lg-6 col-12">
            <h2>Аштанга-віньяса</h2>
                <p>Аштанга-йога є частиною поширеної по всьому світу індійської філософії. Термін «аштанга» означає
                     «вісім основ» і відсилає до восьми основних принципів даної школи йоги. Віньяса - динамічна практика. 
                     У ній положення тіла змінюють один в одного в послідовності через ряд практик. Для кожної пози встановлено
                     певну кількість Віньяс - від 5 до 8. У Аштанга-віньяса йоги існує близько 7 рівнів, що розділяються по складності практики.</p>
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <h2>Йога Айенгара</h2>
                <p>Оновні характеристики - методичність і поступовість. Школа приділяє особливу увагу 
                    відбудові тіла в асанах. Для ефективної роботи в практиках активно використовуються 
                    різні допоміжні засоби - пропси у вигляді цегли, ременів, валиків. Особливе місце 
                    приділяється безпеці. На виконання кожної асани приділяється значна кількість часу. 
                    Перехід між рухами відбувається повільно і плавно.</p>
            </div>
            <div class="col-lg-6 col-12">
                <img src="img/AengraImage.png" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-12">
                <img src="img/suksmaVyamaImage.png" alt="">
            </div>
            <div class="col-lg-6 col-12">
            <h2>Йога сукшма-вьяяма</h2>
                <p>Термін Вьяяма означає вправа, обертання, розминка, а сукшма - тонкий. Таким чином, 
                    сукшма-вьяяма - це вправа тонкого впливу. Основна практика в рамках даної школи - 
                    вікасака. Вона спрямована на опрацювання різних частин тіла, зняття блоків і зажимів, 
                    які негативно впливають як на фізичний, так і на психічний стан. Практикувати Вьяями 
                    можна як новачкам, так і досвідченим практикам. Вправи покращують координацію, баланс тіла 
                    і рівновагу, корисні танцорам, практикам бойових мистецтв.</p>
            </div>
        </div>
    </div>
</section>
<section class="whatWillYouGet">
    <div class="container">
        <h1>Що Ви отримаєте від курсу?</h1>
        <div class="punct">
            <img src="img/starIcon.png" alt="">
            <p>Можливість провести час сконцентрувавшись на собі та природі довкола</p>
        </div>
        <div class="punct">
            <img src="img/starIcon.png" alt="">
            <p>Спілкування з групою однодумців та заняття в спокійній дружній атмосфері</p>
        </div>
        <div class="punct">
            <img src="img/starIcon.png" alt="">
            <p>Цікаві щоденні завдання спрямовані на самопізнання, встановлення цілей і знаходження методів їх вирішення</p>
        </div>
        <div class="punct punct-last">
            <img src="img/starIcon.png" alt="">
            <p>Відновите сили, отримаєте заряд енергії, знайдете гармонію в собі, навчитеся краще розуміти себе та близьких.</p>
        </div>
        <button>Подивитися курс медитації</button>
    </div>
</section>
<section class="instructors">
    <h1>Наші інструктори</h1>
    <section class="firstInstructor">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-5 col-12">
                    <img src="img/yogaInstr1Photo.png" alt="">
                </div>
                <div class="col-lg-8 col-sm-6 col-md-7 col-12">
                    <p class="mainInfoAboutInstr"><span class="boldText">Коваль Миколай</span> <br>
                    Вік: 38 років<br>
                    Освіта: навчався йоги по Фельденкрайзу на семінарах і групових заняттях провідних тренерів. <br>
                    Знання мов: російська — вільно, українська — вільно; англійська — високий. 
                    </p>
                    <div class="details1">
                        <button value="Детальніше" onmousedown="viewDetails1()" id="buttonDetailed1">Детальніше</button>
                        <p id="moreDetailed1">
                        Володіє основами прикладної анатомії; дієтології; фізіології здорового руху; психології здоров'я.
                        Веде заняття хатха-йоги, нідра-йоги, терапевтичної йоги, йоги для дітей, досвід 15 років. Володіє 
                        техніками для розвантаження тіла від накопиченого напруги (соматика, дихальні техніки, остеопатія). 
                        Має навички роботи з великою аудиторією. У своїх заняттях я бере за основу інструменти класичної йоги, 
                        поєднуючи їх з дихальними і медитативними практиками. Основний акцент робить на коректне і безпечне 
                        виконання асан, роботу з хребтом, правильне дихання, урізноманітнення практик.
                        </p>
                    </div>      
                </div>
            </div>
        </div>
    </section> 
    <section class="secondInstructor">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-6 col-md-7 col-12">
                    <p class="mainInfoAboutInstr">
                            <span class="boldText">Іванова Світлана</span> <br>
                            Вік: 34 роки<br>
                            Освіта: Yoga Village (2012), приватні уроки. <br>
                            Знання мов: російська — вільно, українська — вільно; англійська — середній. 
                    </p>
                    <div class="details2">
                        <button value="Детальніше" onmousedown="viewDetails2()" id="buttonDetailed2">Детальніше</button>
                        <p id="moreDetailed2">
                            Професійний тренер з напрямків хатха-йога, виньяса флоу йога, силова йога. Досвід викладання більше 12 років. 
                            Досвід проведення ретрітів, майстер класів та індивідуальних практик, розробка персональних програм. Підхід в 
                            йозі - йога усвідомленості. Вважає, що, розвиваючи усвідомленість, людина стає здоровою, цілісною, досягає гармонії, 
                            рівноваги і балансу і живе більш повним, комфортним, щасливим життям. Веде особистий інформаційний блог про йогу і все, 
                            що з нею пов'язано.
                        </p>
                    </div> 
                </div>
                <div class="col-lg-4 col-sm-6 col-md-5 col-12">
                        <img src="img/yogaInstr2Photo.png" alt="">
                    </div>
                </div>
        </div>
    </section>    
</section>
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
<script type="text/javascript">
    function viewDetails1(){
    document.getElementById("moreDetailed1").style.display = "block";
    document.getElementById("buttonDetailed1").style.display = "none";
};

function viewDetails2(){
    document.getElementById("moreDetailed2").style.display = "block";
    document.getElementById("buttonDetailed2").style.display = "none";
};
</script>
@endsection