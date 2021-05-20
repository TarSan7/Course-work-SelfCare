<link rel="stylesheet" href="css/form.css">
<section class="contact">
    <div class="container">
        <div class="form-title">
            <h1 class="title2">Вже проходили курс?<br>Залиште Ваш відгук</h1>
        </div>
        <form action="route('comment-form')" class="form" method="post">
        @csrf
            <div class="row form-row">
                <div class="col-lg-6 col-sm-12 name-mail">
                    <input type="text" required class="area" name="nickname" id="nickname" placeholder="Ваше ім'я...">
                    <input type="text" required class="area" name="year" id="year" placeholder="Рік проходження курсу...">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <textarea type="comment" placeholder="Відгук..." required class="area" name="text" id="text"></textarea>
                </div>
                <div class="col-12 form-button">
                    <button type="submit" class="btn3 button3">Надіслати</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</section>