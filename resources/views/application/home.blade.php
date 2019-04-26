{{-- Parent layout --}}
@extends('application.layout')

{{-- Description --}}
@section('description', 'Институт Информационных Наук и Технологий Безопасности Российского Государственного Гуманитарного Университета.')

{{-- Title --}}
@section('title', 'ИИНТБ | Главная')

{{-- Content --}}
@section('content')

    {{-- App itself --}}
    <div id="app">

        {{-- Slider --}}
        <div class="slider">
            <homepage-slider></homepage-slider>
        </div>

        {{-- Main conetnt --}}
        <main>

            {{-- Left part --}}
            <div class="left">
                <homepage-news></homepage-news>
            </div>

            {{-- Right part --}}
            <div class="right">
                <homepage-announcements></homepage-announcements>
            </div>

            <div class="clear"></div>

        </main>

    </div>

    {{-- Main map --}}
    <div class="map">
        <script type="text/javascript" charset="utf-8" async
                src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aceeb918194538ee4f3aee7d646d2f132223bdd545c858e03995d7db3ce87b783&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>
    </div>

@endsection