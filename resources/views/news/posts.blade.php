@extends('application.layout')

@section('title')
    Новости
@endsection

@section('content')

    @include('submenu.news')

    <main id="app">
        <span>// ИНФОРМАЦИЯ /</span>
        <h1>Новости</h1>
        <news-posts></news-posts>
    </main>

@endsection