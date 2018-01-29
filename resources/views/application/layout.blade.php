<!doctype html>
<html>


<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

</head>

<body>
<header>
    <div class="header-wrapper">

        <a href="/">
            <div class="logo"></div>
        </a>

        <div class="menu">

            <h1>Институт Информационных Наук и Технологий Безопасности</h1>

            <ul>
                <li>
                    <a class="{{ isActive('about') }}" href="/about">Об институте</a>
                </li>

                <li>
                    <a class="{{ isActive('education') }}" href="/education">Образование</a>
                </li>

                <li>
                    <a class="{{ isActive('applicants') }}" href="/applicants">Поступающим</a>
                </li>

                <li>
                    <a class="{{ isActive('students') }}" href="/students">Студентам</a>
                </li>

                <li>
                    <a class="{{ isActive('science') }}" href="/science">Наука</a>
                </li>

                <li>
                    <a class="{{ isActive('news') }}" href="/news/posts">Информация</a>
                </li>

                <div class="clear"></div>
            </ul>

        </div>

        <div class="clear"></div>

    </div>
</header>


@yield('content')


<footer>
    <div class="footer-wrapper">
        <a href="http://rggu.ru">RGGU.RU</a>
        <div class="copyright"> ИИНТБ РГГУ © 2001 – {{ \Carbon\Carbon::now()->year }}</div>
        <div class="clear"></div>
    </div>
</footer>

<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<script src="/js/app.js"></script>
</body>

</html>