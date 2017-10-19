<!doctype html>
<html>


<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

    <title>@yield('title')</title>

</head>

<body>
<header>
    <div class="header-wrapper">

        <div class="logo"></div>

        <div class="menu">

            <h1>Институт Информационных Наук и Технологий Безопасности</h1>

            <ul>
                <li>Об института</li>
                <li>Образование</li>
                <li>Поступающим</li>
                <li>Студентам</li>
                <li>Наука</li>
                <li>Информация</li>
                <div class="clear"></div>
            </ul>

        </div>

        <div class="clear"></div>

    </div>
</header>



    @yield('content')


<footer>
    <div class="footer-bg">
        <div class=" wtf">
            <div class="rggu">RGGU.RU</div>
            <div class="notrggu"> ИИНТБ РГГУ © 2001 - 2017</div>
        </div>
    </div>
</footer>


</body>

</html>