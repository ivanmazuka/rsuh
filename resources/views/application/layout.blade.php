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
                <li><a class="{{Request::is('about/*')    || Request::is('about')             ? 'active' : ''}}"
                       href="/about">Об института</a></li>

                <li><a class="{{Request::is('education/*')  || Request::is('education')       ? 'active' : ''}}"
                       href="/education">Образование</a></li>

                <li><a class="{{Request::is('forapplicant/*') || Request::is('forapplicant')   ? 'active' : ''}}"
                       href="/forapplicant">Поступающим</a></li>

                <li><a class="{{Request::is('forstudents/*') || Request::is('forstudents')     ? 'active' : ''}}"
                       href="/forstudents">Студентам</a></li>

                <li><a class="{{Request::is('science/*') || Request::is('science')             ? 'active' : ''}}"
                       href="/science">Наука</a></li>

                <li><a class="{{Request::is('news/*')? 'active' : ''}}" href="/news/posts">Информация</a></li>

                <div class="clear"></div>
            </ul>

        </div>

        <div class="clear"></div>

    </div>
</header>


@yield('content')


<footer>
    <div class="footer-bg">
        <div class="footer-bottom">
            <div class="site"><a href="http://rggu.ru">RGGU.RU</a></div>
            <div class="copyright"> ИИНТБ РГГУ © 2001 - 2017</div>
        </div>
    </div>
</footer>


</body>

</html>