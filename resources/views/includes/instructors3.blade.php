<link rel="stylesheet" href="{{asset('public/css/foodInstructors.css')}}">

<section class="instructors">
    <h1>Наші інструктори</h1>
    <section class="firstInstructor">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-5 col-12">
                    <img src="{{asset('public/img/foodInstr1Photo.png')}}" alt="">
                </div>
                <div class="col-lg-8 col-sm-6 col-md-7 col-12">
                    <p class="mainInfoAboutInstr"><span class="boldText">Злотник Марія</span> <br>
                        Вік: 24 роки. <br>
                        Освіта: міжнародна школа фітнесу та дієтології. <br>
                        Знання мов: російська — вільно, українська — вільно; англійська — середній. <br>
                    </p>
                    <div class="details1">
                        <button value="Детальніше" onmousedown="viewDetails1()" id="buttonDetailed1">Детальніше</button>
                        <p id="moreDetailed1">
                            Тренер, консультант по правильному харчуванню з досвідом 3 роки. Володіє основами
                            анатомії, физіології, дієтології. Допомагає змінити харчові звички, навчитися
                            харчуватися смачно і правильно і при цьому регулювати вагу. Навчає нормалізувати
                            вагу без шкоди для здоров'я. Індивідуальний підхід до розробки раціону на 21 день,
                            щоденні звіти, мотивація і контроль для досягнення мети.
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
                        <span class="boldText">Шовкун Анатолій</span> <br>
                        Вік: 27 років. <br>
                        Освіта: інститут фізкультури і спорту. <br>
                        Знання мов: російська — вільно, українська — вільно; англійська — середній. <br>
                    </p>
                    <div class="details2">
                        <button value="Детальніше" onmousedown="viewDetails2()" id="buttonDetailed2">Детальніше</button>
                        <p id="moreDetailed2">
                            Сертифікований дієтолог-нутрициолог, тренер по харчуванню з досвідом 5 років.
                            Навчає принципам правильного харчування, здорового способу життя, складання
                            плану харчування, основам приготування дієтичних страв. Має досвід складання
                            індивідуального раціону з урахуванням особливостей травоної системи. Розробляє
                            комплекси харчування для нормалізації ваги. Працював з професійними спортсменами.
                            Має систему контролю результатів.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-5 col-12">
                    <img src="{{asset('public/img/foodInstr2Photo.png')}}" alt="">
                    </div>
                </div>
        </div>
    </section>    
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