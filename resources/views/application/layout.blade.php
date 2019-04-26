<!doctype html>

<html lang="ru">

{{-- Head --}}
<head>
    <link rel="stylesheet" type="text/css" href={{'/css/styles.css'}}>
    <link rel="shortcut icon" href={{'/favicon.ico'}} type="image/x-icon">

    {{-- Meta --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="rsuh, iisst, рггу, иинтб, информатика, математика, программирование, безопасность">
    <meta name="Description" content="@yield('description')">
    <meta name="yandex-verification" content="4f00335489e94bbf">

    {{-- Title --}}
    <title>@yield('title')</title>
</head>

{{-- Body --}}
<body>

{{-- Header --}}
<header>
    <div class="header-wrapper">

        <a href="/">
            <div class="logo"></div>
        </a>

        <div class="menu">

            <h1>Институт Информационных Наук и Технологий Безопасности</h1>
            <h1 class="mobile-title">ИИНТБ</h1>

            <nav class="main">
                <ul>
                    <div class="wrap-nav"></div>

                    {{-- Submenu --}}
                    <li>
                        <a class="{{ isActive('about') }}" href={{'/about'}}>Об институте</a>
                    </li>
                    @include('submenu.about')

                    {{-- Education  --}}
                    <li>
                        <a class="{{ isActive('education') }}" href={{'/education'}}>Образование</a>
                    </li>
                    @include('submenu.education')


                    {{-- Applicants --}}
                    <li>
                        <a class="{{ isActive('applicants') }}" href={{'/applicants'}}>Поступающим</a>
                    </li>
                    @include('submenu.applicants')


                    {{-- Students --}}
                    <li>
                        <a class="{{ isActive('students') }}" href={{'/students'}}>Студентам</a>
                    </li>
                    @include('submenu.students')


                    {{-- Наука --}}
                    <li>
                        <a class="{{ isActive('science') }}" href={{'/science'}}>Наука</a>
                    </li>
                    @include('submenu.science')


                    {{-- Информация --}}
                    <li>
                        <a class="{{ isActive('news') }}" href={{'/news/posts'}}>Информация</a>
                    </li>
                    @include('submenu.news')

                    <div class="clear"></div>
                </ul>
            </nav>

            <div class="unwrap-nav"></div>

        </div>

        <div class="clear"></div>

    </div>
</header>

{{-- Content --}}
@yield('content')

{{-- Footer --}}
<footer>
    <div class="footer-wrapper">
        <a href="http://rggu.ru">RGGU.RU</a>
        <div class="copyright"> ИИНТБ РГГУ © 2001 – {{ \Carbon\Carbon::now()->year }}</div>
        <div class="clear"></div>
    </div>
</footer>

{{-- Statistics --}}
@if (app()->environment('production'))
    @include('application.statistics')
@endif

{{-- Bundle --}}
<script src={{'/js/app.js'}}></script>

</body>

</html>