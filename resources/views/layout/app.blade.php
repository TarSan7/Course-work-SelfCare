<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,700;1,300&family=Open+Sans:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="@yield('style')">
    <!--Connect with css file-->
    <title> @yield('title') </title>
</head>

<body>
    <header class="main-header">
        <div class="container">
            <div class="row head-row-first">
                <div class="logo col-3">
                    <img class="logo" src="/img/logo.svg" alt="logo: SelfCare">
                </div>
                <div class="col-5"></div>
                <div class="phone-basket col-4">
                    <img class="phone" src="/img/phone.svg" alt="phone">
                    <img class="basket" src="/img/basket.svg" alt="basket">
                </div>
            </div>
            <div class="row head-row-second">
                <div class="col-11 burger">
                    <input id="menu-toggle" type="checkbox" />
                    <label class="menu-btn" for="menu-toggle">
                        <span></span>
                    </label>
                    <ul class="menu-burger">
                        <li class="item">
                            <a class="scroll" href="?page=main">Про нас</a>
                        </li>
                        <li class="item">
                            <a class="scroll" href="?page=gallery">Йога</a>
                        </li>
                        <li class="item">
                            <a class="scroll" href="/meditation">Медитації</a>
                        </li>
                        <li class="item">
                            <a class="scroll" href="?page=contacts">Здорове харчування</a>
                        </li>
                        <li class="item">
                            <a class="scroll" href="?page=contacts">Курси саморозвитку</a>
                        </li>
                    </ul>
                </div>

                @yield('content')

                <footer class="footer">
                    <div class="container">
                        <div class="row footer-row">
                            <div class="col-3 ">
                                <img class="logo-ftr" src="/img/logo-ftr.svg" alt="logo: SelfCare">
                            </div>
                            <div class="col-6 netw">
                                <img onclick="document.location=''" src="/img/instagram.svg" alt="facebook" class="instagram">
                                <img onclick="document.location=''" src="/img/facebook.svg" alt="instagram" class="facebook">
                                <img onclick="document.location=''" src="/img/youtube.svg" alt="youtube" class="youtube">
                                <img onclick="document.location=''" src="/img/twitter.svg" alt="youtube" class="twitter">
                            </div>
                            <div class="col-3 footer-number">
                                <p class="number">+38-(099)-88-77-654</p>
                            </div>
                        </div>

                        <p class="footer-phrase">Знайдіть своє джерело спокою та натхнення разом з SelfCare</p>
                    </div>
                </footer>
</body>

</html>