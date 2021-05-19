<link rel="stylesheet" href="css/yogaInstructors.css">

<section class="instructors">
    <h1>Наші інструктори</h1>
    <section class="firstInstructor">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-5 col-12">
                    <img src="../img/yogaInstr1Photo.png" alt="">
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
                        <img src="../img/yogaInstr2Photo.png" alt="">
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