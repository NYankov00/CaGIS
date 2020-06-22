<!DOCTYPE html>
<html lang="en">

<head>
    <title>CaGIS</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, intial-scale=1.0">
    <link rel="icon" href="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>

    <div class="nav-bar">
        <a class="logo" href="/Webshop/Index.php"><img src="{{ URL::to('/images/logo.png') }}"></a>

        <form class="search-engine" action="" method="POST">
            <input type="text" name="search" placeholder="Търсете в сайта" class="search-input">
            <button id="btnSearch" type="submit" name="submit"><i class="fas fa-search"></i></button>
        </form>

        <nav class="menu">
            <ul>
                <li class="about"><a href="####">Начало</a></li>
                <li class="about"><a href="####">За нас</a></li>
                <li class="services"><a href="####">Услуги</a></li>
                <li class="projects"><a href="####">Проекти</a></li>
                <li class="contacts"><a href="####">Контакти</a></li>
                <li class="language" id="BG"><a href="####">BG<img src="{{ URL::to('/images/BG.png') }}"></a></li>
                <li class="language"><a href="####">EN<img src="{{ URL::to('/images/EN.png') }}"></a></li>
            </ul>
        </nav>
    </div>

    <div class="main-content">
        @yield('content')
    </div>

    <footer>
        <div class="main-footer">

            <article class="menu-tabs">
                <ul>
                    <li class="about"><a href="####">За нас</a></li>
                    <li class="services"><a href="####">Услуги</a></li>
                    <li class="projects"><a href="####">Проекти</a></li>
                    <li class="contacts"><a href="####">Контакти</a></li>
                </ul>
            </article>

            <article class="social-media">
               <a href="#"><i class="fab fa-facebook-f"></i>
               <a href="#"><i class="fab fa-twitter"></i>
               <a href="#"><i class="fab fa-instagram"></i>
            </article>

            <article class="contacts">
                <h3>Адрес:</h3>
                <h3>Тел. +359524595251</h3>
                <h3>Имейл: </h3>
            </article>
        </div>

        <div class="copyright">
            <p>Copyright &copy;2020 CaGIS</p>
        </div>
    </footer>
</body>

</html>