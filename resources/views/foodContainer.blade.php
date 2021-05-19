@extends('layout.app')

@section('title') SelfCare @endsection

@section('style')
<link rel="stylesheet" href="../css/meditation.css">
<link rel="stylesheet" href="../css/food.css">
@endsection

@section('content')
<div class="col-1"></div>
<div class="row main-content justify-content-center">
	<div class="main-content-text">
	<h1 class="header">Правильне харчування</h1>
	<p class="headerText">Правильне харчування - це основа насиченого і радісного життя, прекрасного самопочуття. Здорове харчування дає можливість стабілізувати вагу без насильницьких обмежень, допомагає позбутися від захворювань і запобігти їх розвиток, сприяє відновленню інтелектуальної і фізичної енергії. Здорове 
харчування - важлива складова здорового способу життя.</p>
</div>
</div>
</div>
</header>

<section class="whyImportant pt-5 pb-5">
	<div class="container">
		<h1 class="header ">Чому важливо правильно харчуватися?</h1>
        <h1 class="header pb-4">Правильне харчування...</h1>
		<div class="row pb-8">
			<div class="iteam col-sm-12 col-md-6 col-lg-4">
				<img src="../img/smiley 1.png" alt="smile" class="iteamImg">
				<p class="text mt-3">Запобігає появі депресії</p>
			</div>
			<div class="iteam col-sm-12 col-md-6 col-lg-4">
				<img src="../img/clean 1.png" alt="clean" class="iteamImg">
				<p class="text mt-3">Робить вас гарнішими</p>
			</div>
			<div class="iteam col-sm-12 col-md-12 col-lg-4">
				<img src="../img/immune-system 1.png" alt="immune-system " class="iteamImg">
				<p class="text mt-3">Підтримує  імунітет</p>
			</div>
			<div class="col-lg-2"></div>
			<div class="iteam col-sm-12 col-md-6 col-lg-4">
				<img src="../img/moon 1.png" alt="moon" class="iteamImg">
				<p class="text mt-3">Важливий фактор<br> здорового сна</p>
			</div>
			<div class="iteam col-sm-12 col-md-6 col-lg-4">
				<img src="../img/muscles 1.png" alt="muscles" class="iteamImg">
				<p class="text mt-3">Допомогає залишатися<br>у формі</p>
			</div>
			<div class="col-lg-2"></div>
		</div>
	</div>
	</section>
	<section class="container recepies pt-5">
			<h1 class="header">Смачні та корисні рецепти страв</h1>
			<div class="row justify-content-space-between">
				@foreach($recipies as $el)
				<div class="col-sm-6 col-md-6 col-lg-4 mt-5 mycol">
					<div class="iteamRecepies col-lg-12 pt-3">
                        <div class="recepieNameCont mt-3 mb-3">
						    <a href="{{ route('recepie', $el->id) }}"class="recepieName">{{ $el->title }}</a>
                        </div>
						<img src="../img/{{ $el->img }}" alt="clean" class="recepieImg mb-4">
						<p class="recepieText">Час: {{ $el->time }} хвилин</p>
						<div class="reiting">
                            <p class="mr-3 recepieText">Рейтинг: </p>
						    <div class="stars">
						        @for ($i = 0; $i < $el->reiting; $i++)
						        <img src="../img/goldenStar.png" alt="star" class="goldenStar">
						        @endfor
						    </div>
					    </div>
						<p class="mb-3 recepieText">Cкладність: {{ $el->Complexity }}</p>
					</div>
				</div>
				@endforeach
			</div>
	</section>
	
	<section class="whatWillYouGet pt-5">
    <div class="container">
        <h1>Що Ви отримаєте від курсу?</h1>
        <div class="punct">
            <img src="../img/starIcon.png" alt="">
            <p>Навчитеся готувати смачні, корисні та легкі страви</p>
        </div>
        <div class="punct">
            <img src="../img/starIcon.png" alt="">
            <p>Дізнаєтеся більше про харчування в цілому та його вплив на наше життя та здоров’я</p>
        </div>
        <div class="punct">
            <img src="../img/starIcon.png" alt="">
            <p>Проведете час із цікавими людьми та професіоналами своєї справи</p>
        </div>
        <div class="punct punct-last">
            <img src="../img/starIcon.png" alt="">
            <p>Отримаєте відповіді на всі Ваші питання щодо здорового харчування від наших інструкторів</p>
        </div>
        <button>Подивитися курс правильного харчування</button>
    </div>
</section>

<section class="instructors">
    <h1>Наші інструктори</h1>
    <section class="firstInstructor">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <img src="../img/Instr1Photo.png" alt="">
                </div>
                <div class="col">
                <p class="mainInfoAboutInstr"><span class="boldText">Злотник Марія</span><br>
				Вік: 24 роки.<br>
Освіта: міжнародна школа фітнесу та дієтології.<br>
Знання мов: російська — вільно, українська — вільно; англійська — середній.
                </p>
                <button value="Детальніше" onmousedown="viewDetails1()" id="buttonDetailed1">Детальніше</button>
                <p id="moreDetailed1">
				Тренер, консультант по правильному харчуванню з досвідом 3 роки. Володіє основами анатомії, физіології, дієтології. Допомагає змінити харчові звички, навчитися харчуватися смачно і правильно і при цьому регулювати вагу. Навчає нормалізувати вагу без шкоди для здоров'я. Індивідуальний підхід до розробки раціону на 21 день, щоденні звіти, мотивація і контроль для досягнення мети.
                </p> 
                </div>
            </div>
        </div>
    </section> 
    <section class="secondInstructor">
        <div class="container">
            <div class="row">
                <div class="col-8">
                <p class="mainInfoAboutInstr"><span class="boldText">Шовкун Анатолій</span><br>
				Вік: 27 років.<br>
Освіта: інститут фізкультури і спорту.<br>
Знання мов: російська — вільно, українська — вільно; англійська — середній.
                </p>
                <button value="Детальніше" onmousedown="viewDetails2()" id="buttonDetailed2">Детальніше</button>
                <p id="moreDetailed2">
                        Практикує медитацію з 2016 року, в традиціях 
                        тибетського буддизму - з 2018. Захоплюючись 
                        філософією адвайта-веданти і інших шкіл, неодноразово 
                        подорожувала в Варанасі для пошуку методів, як навчитися 
                        розуміти себе та інших. Автор програми «Відкриття духовного 
                        серця», проводить як групові так і індивідуальні заняття. 
                        Ціль занять -  розслабити тіло, розум, збільшити здатність 
                        до концентрації, зміцнення свого розуму і набуття контролю 
                        над ним.
                </p> 
                </div>
                <div class="col-4">
                        <img src="../img/Instr2Photo.png" alt="">
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
                <div class="col-6 name-mail">
                    <input type="text" required class="area" name="user-name" placeholder="Ваше ім'я...">
                    <input type="email" required class="area" name="user-email" placeholder="Рік проходження курсу...">
                </div>
                <div class="col-6">
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