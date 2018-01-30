@extends('application.layout')

@section('title')
    {{ $announcement->title }}
@endsection

@section('content')

    @include('submenu.news')

    <main>
        <div class="announcement">
            <h1>{{ $announcement->title }}</h1>
            <span class="date">{{ $announcement->created_at->format('d.m.y в H:i:s') }}</span>
            <p>{{ $announcement->body }}</p>
            <img class="picture" src="/img/{{ $announcement->picture }}">
        </div>
    </main>

@endsection