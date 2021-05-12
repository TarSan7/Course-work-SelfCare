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
    <link rel="stylesheet" href="@yield('style')">
    <!--Connect with css file-->
    <title> @yield('title') </title>
</head>

<body>
    <header class="main-header">
        <div class="container">
            <div class="row head-row-first">
                <div class="logo col-3">
                    <img class="logo" src="../resources/img/logo.svg" alt="logo: SelfCare">
                </div>
                <div class="col-5"></div>
                <div class="phone-basket col-4">
                    <img class="phone" src="../resources/img/phone.svg" alt="phone">
                    <img class="basket" src="../resources/img/basket.svg" alt="basket">
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
                            <a class="scroll" href="?page=info">Медитації</a>
                        </li>
                        <li class="item">
                            <a class="scroll" href="?page=contacts">Здорове харчування</a>
                        </li>
                        <li class="item">
                            <a class="scroll" href="?page=contacts">Курси саморозвитку</a>
                        </li>
                    </ul>
                </div>
               
                <div class="col-1"></div>
                 <div class="col-11 main-content">
                    <p class="slogan-title">
                        Хочеш обрати шлях здоров’я, змінити світогляд, підтримувати тіло і дух у відмінній формі?
                    </p>
                </div>
            </div>
    </header>
</body>

</html>