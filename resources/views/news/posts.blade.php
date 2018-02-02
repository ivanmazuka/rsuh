@extends('application.layout')

@section('title')
    Новости
@endsection

@section('content')

    @include('submenu.news')

    <main id="app">
        <span>// ИНФОРМАЦИЯ /</span>
        <div class="page-title">
            <h1>Новости</h1>
        </div>
        <news-posts></news-posts>
    </main>

@endsection