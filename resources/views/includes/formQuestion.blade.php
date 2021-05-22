<link rel="stylesheet" href="css/form.css">
<section class="contact">
    <div class="container">
        <div class="form-title">
            <h1 class="title2">З’явилися питання? Зв’яжіться з нами заповнивши форму.</h1>
        </div>
        <form action="{{ route('question-form') }}" method="post" class="form">
        @csrf
            <div class="row form-row">
                <div class="col-lg-6 col-sm-12  name-mail">
                    <input type="text" required class="area" name="nickname" id="nickname" placeholder="Ваше ім'я...">
                    <input type="email" required class="area" name="e_mail" id="e_mail" placeholder="Електронна пошта...">
                </div>
                <div class="col-lg-6 col-sm-12">
                    <textarea type="comment" placeholder="Ваше питання..." required class="area" name="text" id="text"></textarea>
                </div>
                <div class="col-12 form-button">
                    <button type="submit" class="btn3 button3">Надіслати</button>
                </div>
            </div>
        </form>
    </div>
    </div>
</section>