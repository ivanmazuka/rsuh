@extends('application.layout')

@section('title')
    Анонсы
@endsection

@section('content')

    @include('submenu.news')

    <main id="app">
        <span>// ИНФОРМАЦИЯ /</span>
        <div class="page-title">
            <h1>Предстоящие события</h1>
        </div>
        <news-announcements></news-announcements>
    </main>

@endsection