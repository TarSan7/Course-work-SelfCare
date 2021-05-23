<link rel="stylesheet" href="{{asset('public/css/meditationInstructors.css')}}">

<section class="instructors">
    <h1>Наші інструктори</h1>
    <section class="firstInstructor">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-5 col-12">
                    <img src="{{asset('public/img/meditationInstr1Photo.png')}}" alt="">
                </div>
                <div class="col-lg-8 col-sm-6 col-md-7 col-12">
                    <p class="mainInfoAboutInstr"><span class="boldText">Міщенко Ксенія</span> <br>
                        Вік: 25 років. <br>
                        Освіта: курси медитаціі, самостійний розвиток. <br>
                        Знання мов: російська — вільно, українська — вільно; англійська — високий.
                    </p>
                    <div class="details1">
                        <button value="Детальніше" onmousedown="viewDetails1()" id="buttonDetailed1">Детальніше</button>
                        <p id="moreDetailed1">
                            Практикує медитацію з 2016 року, в традиціях
                            тибетського буддизму - з 2018. Захоплюючись
                            філософією адвайта-веданти і інших шкіл, неодноразово
                            подорожувала в Варанасі для пошуку методів, як навчитися
                            розуміти себе та інших. Автор програми «Відкриття духовного
                            серця», проводить як групові так і індивідуальні заняття.
                            Ціль занять - розслабити тіло, розум, збільшити здатність
                            до концентрації, зміцнення свого розуму і набуття контролю
                            над ним.
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
                        <span class="boldText">Семенов Владислав</span> <br>
                        Вік: 28 років. <br>
                        Освіта: курси медитаціі, групові заняття, приватні заняття. <br>
                        Знання мов: російська — вільно, українська — вільно; англійська — середній.
                    </p>
                    <div class="details2">
                        <button value="Детальніше" onmousedown="viewDetails2()" id="buttonDetailed2">Детальніше</button>
                        <p id="moreDetailed2">
                            Практикує медитацію більше 6 років і більше 3 років навчає програмами усвідомленості. Регулярно
                            проводить одиночні ретріти. Автор статей і спеціальних програм на тему «Духовний розвиток сучасної
                            людини". Експерт з психології створення гармонійних відносин. Проводжу індивідуальні та групові
                            медитативно - терапевтичне сесії, консультації з проблем особистісного характеру, питань сімейних відносин.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-5 col-12">
                    <img src="{{asset('public/img/meditationInstr2Photo.png')}}" alt="">
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