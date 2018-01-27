@extends('application.layout')

@section('title')
    ИИНТБ | Главная
@endsection

@section('content')

    <div id="app">
        <div class="slider">
            <homepage-slider></homepage-slider>
        </div>

        <main>
            <div class="left">
                <homepage-news></homepage-news>
            </div>

            <div class="right">
                <homepage-announcements></homepage-announcements>
            </div>

            <div class="clear"></div>

        </main>
    </div>

    <div class="map">
        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aceeb918194538ee4f3aee7d646d2f132223bdd545c858e03995d7db3ce87b783&amp;width=100%25&amp;height=512&amp;lang=ru_RU&amp;scroll=true"></script>
    </div>

@endsection