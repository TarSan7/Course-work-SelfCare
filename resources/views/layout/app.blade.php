<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,300&family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('public/css/main.css')}}" type="text/css">
    @yield('style')

    <title> @yield('title') </title>
</head>

<body>
    @include('includes.message')
    <header class="main-header">
        <div class="container">
            <div class="row head-row-first">
                <div class="logo col-2">
                    <a href="{{ route('main') }}"><img class="logo" src="{{asset('public/img/logo.svg') }}" alt="logo: SelfCare"></a>

                </div>
                <div class="col-8 menu-ne-burger">
                    <a class="scroll" href="/">Про нас</a>
                    <a class="scroll" href="{{ route('yoga') }}">Йога</a>
                    <a class="scroll" href="{{ route('meditation') }}">Медитації</a>
                    <a class="scroll" href="{{ route('foodContainer') }}">Здорове харчування</a>
                    <a class="scroll" href="courses">Курси саморозвитку</a>
                </div>
                <div class="col-6 for-min">
                </div>
                <div class="phone-basket col-3 col-lg-2">
                    <a href="tel:555-555-5555"><img class="phone" src="{{asset('public/img/phone.svg')}}" alt="phone"></a>
                    <a href="/card"> <img class="basket" src="{{asset('public/img/basket.svg')}}" alt="basket"></a>
                    <a href="tel:555-555-5555"><img class="phone1" src="{{asset('public/img/phone1.svg')}}" alt="phone"></a>
                    <a href="/card"><img class="basket1" src="{{asset('public/img/basket1.svg')}}" alt="basket"></a>
                    <span class="badge">{{ Session::has('totalQuatity') ? Session::get('totalQuatity'): ''}}</span>
                </div>
                <div class="col-1 burger">
                    <input id="menu-toggle" type="checkbox" />
                    <label class="menu-btn" for="menu-toggle">
                        <span></span>
                    </label>
                    <ul class="menu-burger">
                        <li class="item">
                            <a class="scroll" href="/">Про нас</a>
                        </li>
                        <li class="item">
                            <a class="scroll" href="{{ route('yoga') }}">Йога</a>
                        </li>
                        <li class="item">
                            <a class="scroll" href="{{ route('meditation') }}">Медитації</a>
                        </li>
                        <li class="item">
                            <a class="scroll" href="{{ route('foodContainer') }}">Здорове харчування</a>
                        </li>
                        <li class="item">
                            <a class="scroll" href="courses">Курси саморозвитку</a>
                        </li>
                    </ul>
                </div>


                @yield('content')

                <footer class="footer">
                    <div class="container">
                        <div class="row footer-row">
                            <div class="col-sm-3 col-12 logot-ftr">
                                <a href="{{ route('main') }}"><img class="logo-ftr" src="{{asset('public/img/logo-ftr.svg')}}" alt="logo: SelfCare"></a>
                            </div>
                            <div class="col-sm-6 col-12 netw">
                                <img onclick="document.location=''" src="{{asset('public/img/instagram.svg')}}" alt="facebook" class="instagram">
                                <img onclick="document.location=''" src="{{asset('public/img/facebook.svg')}}" alt="instagram" class="facebook">
                                <img onclick="document.location=''" src="{{asset('public/img/youtube.svg')}}" alt="youtube" class="youtube">
                                <img onclick="document.location=''" src="{{asset('public/img/twitter.svg')}}" alt="youtube" class="twitter">
                            </div>
                            <div class="col-lg-3 col-12 footer-number">
                                <p class="number">+38-(099)-88-77-654</p>
                            </div>
                        </div>

                        <p class="footer-phrase">Знайдіть своє джерело спокою та натхнення разом з SelfCare</p>
                    </div>
                </footer>
</body>

</html>