{{-- Parent layout --}}
@extends('application.layout')

{{-- Title --}}
@section('title', 'Анонсы')

{{-- Description --}}
@section('description', 'Список всех предстоящих событий.')

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.news')
    </div>

    <main id="app">
        <span>// ИНФОРМАЦИЯ /</span>
        <div class="page-title">
            <h1>Предстоящие события</h1>
        </div>
        <news-announcements></news-announcements>
    </main>

@endsection