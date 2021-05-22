<link rel="stylesheet" href="css/choice.css">
<section class="choice">
    <div class="container">
        <h1>Оберіть бажану комбінацію курсів прямо зараз!</h1>
       
            <form action="basket{{$id}}" method="post">
                @csrf
            <div class="wrapper">
                <div class="checkbox">
                        <input id="checkbox" type="checkbox" name="checkbox1" value="checkbox">
                    <label for="checkbox">
                        <img src='img/yogaPhoto.png' />
                        <p><span>Йога</span></p>
                    </label>
                </div>

                <div class="checkbox">
                        <input id="checkbox2" type="checkbox" name="checkbox2" value="checkbox2">
                    <label for="checkbox2">
                        <img src='img/meditationPhoto.png' />
                        <p><span>Медитація</span></p>
                    </label>
                </div>

                <div class="checkbox">
                        <input id="checkbox3" type="checkbox" name="checkbox3" value="checkbox3">
                    <label for="checkbox3">
                        <img src='img/eatPhoto.png' />
                        <p><span>Здорове харчування</span></p>
                    </label>
                </div>
            </div>
            <!--.wrapper-->
                <button type="submit">Придбати курс!</button>
            </form>
    </div>
</section>