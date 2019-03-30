<!doctype html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

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

                    <div class="sub-menu">
                        <li>
                            <a class="{{ isActive('management') }}" href="/about/management">Руководство</a>
                        </li>

                        <li>
                            <a class="{{ isActive('structure') }}" href="/about/structure">Структурные подразделения</a>
                        </li>

                        <li>
                            <a class="{{ isActive('history') }}" href="/about/history">История</a>
                        </li>

                        <li>
                            <a class="{{ isActive('contacts') }}" href="/about/contacts">Контакты</a>
                        </li>
                    </div>


                    {{-- Образование  --}}

                    <li>
                        <a class="{{ isActive('education') }}" href="/education">Образование</a>
                    </li>

                    <div class="sub-menu">
                        <li>
                            <a class="{{ isActive('faculty') }}" href="/education/faculty">Факультет</a>
                        </li>

                        <li>
                            <a class="{{ isActive('security') }}" href="/education/security">Информационная
                                безопасность</a>
                        </li>

                        <li>
                            <a class="{{ isActive('informatics') }}" href="/education/informatics">Прикладная
                                информатика</a>
                        </li>

                        <li>
                            <a class="{{ isActive('maths') }}" href="/education/maths">Прикладная математика</a>
                        </li>
                    </div>


                    {{-- Поступающим --}}

                    <li>
                        <a class="{{ isActive('applicants') }}" href="/applicants">Поступающим</a>
                    </li>

                    <div class="sub-menu">
                        <li>
                            <a class="{{ isActive('campaign') }}" href="/applicants/campaign">Приемная комиссия</a>
                        </li>

                        <li>
                            <a class="{{ isActive('opendays') }}" href="/applicants/opendays">Дни открытых дверей</a>
                        </li>

                        <li>
                            <a class="{{ isActive('address') }}" href="/applicants/address">Обращение к поступающим</a>
                        </li>
                    </div>


                    {{-- Студентам --}}

                    <li>
                        <a class="{{ isActive('students') }}" href="/students">Студентам</a>
                    </li>

                    <div class="sub-menu">
                        <li>
                            <a class="{{ isActive('timetable') }}" href="/students/timetable">Рассписание и учебный
                                график</a>
                        </li>

                        <li>
                            <a class="{{ isActive('welcome') }}" href="/students/welcome">Первокусникам</a>
                        </li>

                        <li>
                            <a class="{{ isActive('graduates') }}" href="/students/graduates">Студентам-выпускникам</a>
                        </li>

                        <li>
                            <a class="{{ isActive('work') }}" href="/students/work">Работа со студентам</a>
                        </li>

                        <li>
                            <a class="{{ isActive('library') }}" href="/students/library">Библиотека</a>
                        </li>
                    </div>


                    {{-- Наука --}}

                    <li>
                        <a class="{{ isActive('science') }}" href="/science">Наука</a>
                    </li>


                    <div class="sub-menu">
                        <li>
                            <a class="{{ isActive('postgraduate') }}" href="/science/postgraduate">Аспирантам</a>
                        </li>

                        <li>
                            <a class="{{ isActive('herald') }}" href="/science/herald">Вестник РГГУ</a>
                        </li>

                        <li>
                            <a class="{{ isActive('jobs') }}" href="/science/jobs">Работа студентов</a>
                        </li>
                    </div>


                    {{-- Информация --}}

                    <li>
                        <a class="{{ isActive('news') }}" href="/news/posts">Информация</a>
                    </li>

                    <div class="sub-menu">
                        <li>
                            <a class="{{ isActive('posts') }}" href="/news/posts">Новости</a>
                        </li>

                        <li>
                            <a class="{{ isActive('announcements') }}" href="/news/announcements">Анонсы</a>
                        </li>
                    </div>

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

{{-- jQuery --}}
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function () {
            try {
                w.yaCounter47574295 = new Ya.Metrika({
                    id: 47574295,
                    clickmap: true,
                    trackLinks: true,
                    accurateTrackBounce: true,
                    webvisor: true
                });
            } catch (e) {
            }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () {
                n.parentNode.insertBefore(s, n);
            };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else {
            f();
        }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/47574295" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-93618902-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-93618902-1');
</script>

<script src="/js/app.js"></script>
</body>

</html>