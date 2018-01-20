@extends('application.layout')

@section('title')
    ИИНТБ | Главная
@endsection

@section('content')

    <div class="slider">
        <div>
            <strong>Музей в главном здание</strong>
        </div>
    </div>

    <main>
        <div class="left">
            <h2>Новости</h2>
            <div class="left-column">
                @foreach ($posts as $key => $post)
                    @if($key<4)
                        @if (($key + 1) % 2 == 1)
                            @include('application.main-posts')
                        @endif
                    @endif
                @endforeach
            </div>

            <div class="right-column">
                @foreach ($posts as $key => $post )
                    @if($key<4)
                        @if (($key + 1) % 2 == 0)
                            @include('application.main-posts')
                        @endif
                    @endif
                @endforeach
            </div>

            <a class="post-href" href="/news/posts"> Все посты › </a>
            <div class="clear"></div>
        </div>

        <div class="right">
            <h2>Анонсы</h2>
            @foreach($announcements as $key=>$announcement)
                @if($key<4)
                    <div class="announcement">
                        <div class="circle">
                            <div>{{ $announcement->created_at }}
                            </div>
                        </div>
                        <h3 class="title"><a class="an-href" href="/news/announcements/{{ $announcement->id }}">
                                {{ $announcement->title}}
                            </a>
                        </h3>

                        <div class="clear"></div>

                    </div>
                @endif
            @endforeach
            <a class="all-an-href" href="/news/announcements"> Все анонсы › </a>
        </div>

        <div class="clear"></div>

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


@endsection