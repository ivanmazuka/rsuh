{{-- Parent layout --}}
@extends('application.layout')

{{-- Title --}}
@section('title', 'Новости')

{{-- Description --}}
@section('description', 'Список всех новостей сайта.')

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.news')
    </div>

    <main id="app">
        <span>// ИНФОРМАЦИЯ /</span>
        <div class="page-title">
            <h1>Новости</h1>
        </div>
        <news-posts></news-posts>
    </main>

@endsection