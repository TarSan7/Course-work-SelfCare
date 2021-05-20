@extends('layout.app')

@section('title') SelfCare @endsection

@section('style')
<link rel="stylesheet" href="css/basket.css">
@endsection

@section('content')
<div class="col-lg-1"></div>
<div class="col-12 col-lg-10 main-content">
    <h1 class="title">
        Ваш кошик
    </h1>

</div>
</div>
</div>
</header>

<section class="section1">
    <div class="container">
        <div class="basket-form-title">
            <h1 class="title">Оформити замовлення</h1>
        </div>
        <form action="" class="form" method="post">
            @csrf
            <div class="row form-row">
                <div class="col-lg-8 col-sm-12 name">
                    <input type="text" required class="area" name="nickname" id="nickname" placeholder="ПІБ">
                </div>
                <div class="col-lg-8 col-12 date-birth">
                    <input type="text" required onblur="(this.type='text')" onfocus="(this.type='date')" class="area" name="date-birth" id="date" placeholder="Дата народження">
                </div>
                <div class="col-lg-8 col-12 date-course">
                    <input type="text" onblur="(this.type='text')" onfocus="(this.type='date')" required class="area" name="date-course" id="date" placeholder="Бажана дата проходження курсу">
                </div>
                <div class="col-lg-8 col-sm-12">
                    <input type="text" required class="area" name="e_mail" id="e_mail" placeholder="Рік проходження курсу">
                </div>
                <div class="col-lg-8 col-sm-12 number">
                    <input type="text" required class="area" name="number" id="nickname" placeholder="Номер телефону">
                </div>
                <div class="col-12 form-button">
                    <button type="submit" class="btn3 button3">Оформити!</button>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection