@extends('application.layout')

@section('title')
    Анонсы
@endsection

@section('content')

    @include('submenu.news')

    <main id="app">
        <span>// ИНФОРМАЦИЯ /</span>
        <h1>Предстоящие события</h1>
        <news-announcements></news-announcements>
    </main>

@endsection