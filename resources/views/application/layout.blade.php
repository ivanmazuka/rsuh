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
            <h1 class="mobile-title">ИИНТБ</h1>

            <nav class="main">
                <ul>
                    <div class="wrap-nav"></div>

                    {{-- Подменю --}}

                    <li>
                        <a class="{{ isActive('about') }}" href="/about">Об институте</a>
                    </li>

                    <li class="hidden-element">
                        <a class="{{ isActive('management') }}" href="/about/management">Руководство</a>
                    </li>
                    
                    <li class="hidden-element">
                        <a class="{{ isActive('structure') }}" href="/about/structure">Структурные подразделения</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('history') }}" href="/about/history">История</a>
                    </li class="hidden-element">
        
                    <li class="hidden-element">
                        <a class="{{ isActive('contacts') }}" href="/about/contacts">Контакты</a>
                    </li>


                    {{-- Образование  --}}

                    <li>
                        <a class="{{ isActive('education') }}" href="/education">Образование</a>
                    </li>

                    <li class="hidden-element">
                        <a class="{{ isActive('faculty') }}" href="/education/faculty">Факультет</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('security') }}" href="/education/security">Информационная безопасность</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('informatics') }}" href="/education/informatics">Прикладная информатика</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('maths') }}" href="/education/maths">Прикладная математика</a>
                    </li>


                    {{-- Поступающим --}}

                    <li>
                        <a class="{{ isActive('applicants') }}" href="/applicants">Поступающим</a>
                    </li>

                    <li class="hidden-element">
                        <a class="{{ isActive('campaign') }}" href="/applicants/campaign">Приемная комиссия</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('opendays') }}" href="/applicants/opendays">Дни открытых дверей</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('address') }}" href="/applicants/address">Обращение к поступающим</a>
                    </li>


                    {{-- Студентам --}}

                    <li>
                        <a class="{{ isActive('students') }}" href="/students">Студентам</a>
                    </li>

                    <li class="hidden-element">
                        <a class="{{ isActive('timetable') }}" href="/students/timetable">Рассписание и учебный график</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('welcome') }}" href="/students/welcome">Первокусникам</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('graduates') }}" href="/students/graduates">Студентам-выпускникам</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('work') }}" href="/students/work">Работа со студентам</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('library') }}" href="/students/library">Библиотека</a>
                    </li>


                    {{-- Наука --}}
                    
                    <li>
                        <a class="{{ isActive('science') }}" href="/science">Наука</a>
                    </li>

                    <li class="hidden-element">
                        <a class="{{ isActive('postgraduate') }}" href="/science/postgraduate">Аспирантам</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('herald') }}" href="/science/herald">Вестник РГГУ</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('jobs') }}" href="/science/jobs">Работа студентов</a>
                    </li>


                    {{-- Информация --}}

                    <li>
                        <a class="{{ isActive('news') }}" href="/news/posts">Информация</a>
                    </li>

                    <li class="hidden-element">
                        <a class="{{ isActive('posts') }}" href="/news/posts">Новости</a>
                    </li>
        
                    <li class="hidden-element">
                        <a class="{{ isActive('announcements') }}" href="/news/announcements">Анонсы</a>
                    </li>

                    <div class="clear"></div>
                </ul>
            </nav>

            <div class="unwrap-nav"></div>

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