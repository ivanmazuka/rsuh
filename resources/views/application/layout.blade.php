<!doctype html>

<html lang="ru">

{{-- Head --}}
<head>
    <link rel="stylesheet" type="text/css" href={{'/css/styles.css'}}>
    <link rel="shortcut icon" href={{'/favicon.ico'}} type="image/x-icon">

    {{-- Meta --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="rsuh, iisst, рггу, иинтб, информатика,
        математика, программирование, безопасность">
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

                    <ul class="sub-menu">
                        <li>
                            <a class="{{ isActive('management') }}" href={{'/about/management'}}>Руководство</a>
                        </li>

                        <li>
                            <a class="{{ isActive('structure') }}" href={{'/about/structure'}}>Структурные
                                подразделения</a>
                        </li>

                        <li>
                            <a class="{{ isActive('history') }}" href={{'/about/history'}}>История</a>
                        </li>

                        <li>
                            <a class="{{ isActive('contacts') }}" href={{'/about/contacts'}}>Контакты</a>
                        </li>
                    </ul>


                    {{-- Education  --}}
                    <li>
                        <a class="{{ isActive('education') }}" href={{'/education'}}>Образование</a>
                    </li>

                    <ul class="sub-menu">
                        <li>
                            <a class="{{ isActive('faculty') }}" href={{'/education/faculty'}}>Факультет</a>
                        </li>

                        <li>
                            <a class="{{ isActive('security') }}" href={{'/education/security'}}>Информационная
                                безопасность</a>
                        </li>

                        <li>
                            <a class="{{ isActive('informatics') }}" href={{'/education/informatics'}}>Прикладная
                                информатика</a>
                        </li>

                        <li>
                            <a class="{{ isActive('maths') }}" href={{'/education/maths'}}>Прикладная математика</a>
                        </li>
                    </ul>


                    {{-- Applicants --}}
                    <li>
                        <a class="{{ isActive('applicants') }}" href={{'/applicants'}}>Поступающим</a>
                    </li>

                    <ul class="sub-menu">
                        <li>
                            <a class="{{ isActive('campaign') }}" href={{'/applicants/campaign'}}>Приемная комиссия</a>
                        </li>

                        <li>
                            <a class="{{ isActive('opendays') }}" href={{'/applicants/opendays'}}>Дни открытых
                                дверей</a>
                        </li>

                        <li>
                            <a class="{{ isActive('address') }}" href={{'/applicants/address'}}>Обращение к
                                поступающим</a>
                        </li>
                    </ul>


                    {{-- Students --}}
                    <li>
                        <a class="{{ isActive('students') }}" href={{'/students'}}>Студентам</a>
                    </li>

                    <ul class="sub-menu">
                        <li>
                            <a class="{{ isActive('timetable') }}" href={{'/students/timetable'}}>Рассписание и учебный
                                график</a>
                        </li>

                        <li>
                            <a class="{{ isActive('welcome') }}" href={{'/students/welcome'}}>Первокусникам</a>
                        </li>

                        <li>
                            <a class="{{ isActive('graduates') }}"
                               href={{'/students/graduates'}}>Студентам-выпускникам</a>
                        </li>

                        <li>
                            <a class="{{ isActive('work') }}" href={{'/students/work'}}>Работа со студентам</a>
                        </li>

                        <li>
                            <a class="{{ isActive('library') }}" href={{'/students/library'}}>Библиотека</a>
                        </li>
                    </ul>


                    {{-- Наука --}}
                    <li>
                        <a class="{{ isActive('science') }}" href={{'/science'}}>Наука</a>
                    </li>


                    <ul class="sub-menu">
                        <li>
                            <a class="{{ isActive('postgraduate') }}" href={{'/science/postgraduate'}}>Аспирантам</a>
                        </li>

                        <li>
                            <a class="{{ isActive('herald') }}" href={{'/science/herald'}}>Вестник РГГУ</a>
                        </li>

                        <li>
                            <a class="{{ isActive('jobs') }}" href={{'/science/jobs'}}>Работа студентов</a>
                        </li>
                    </ul>


                    {{-- Информация --}}
                    <li>
                        <a class="{{ isActive('news') }}" href={{'/news/posts'}}>Информация</a>
                    </li>

                    <ul class="sub-menu">
                        <li>
                            <a class="{{ isActive('posts') }}" href={{'/news/posts'}}>Новости</a>
                        </li>

                        <li>
                            <a class="{{ isActive('announcements') }}" href={{'/news/announcements'}}>Анонсы</a>
                        </li>
                    </ul>

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