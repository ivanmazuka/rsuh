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

<div class="slider">
    <div>
        <strong>Музей в главном здание</strong>
    </div>

</div>

<main class="main">

    @yield('content')
</main>
<div class="map">
    <a class="dg-widget-link"
       href="http://2gis.ru/moscow/firm/4504583175018476/center/37.597315,55.596969/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
        на карте Москвы</a>
    <div class="dg-widget-link"><a
                href="http://2gis.ru/moscow/center/37.597315,55.596969/zoom/16/routeTab/rsType/bus/to/37.597315,55.596969╎Российский государственный гуманитарный университет?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
            проезд до Российский государственный гуманитарный университет</a></div>
    <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
    <script charset="utf-8">new DGWidgetLoader({
            "width": "100%",
            "height": 300,
            "pos": {"lat": 55.596969, "lon": 37.597315, "zoom": 16},
            "opt": {"city": "moscow"},
            "org": [{"id": "4504583175018476"}]
        });</script>
    <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в
        настройках вашего браузера.
    </noscript>
</div>

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