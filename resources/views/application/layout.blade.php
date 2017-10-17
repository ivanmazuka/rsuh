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
</body>

</html>