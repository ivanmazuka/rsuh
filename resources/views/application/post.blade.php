@extends('application.layout')

@section('title')
    {{ $post->title }}
@endsection

@section('content')

    @include('submenu.news')

    <main>
        <div class="post">
            <h1>{{ $post->title }}</h1>
            <span class="date">{{ $post->created_at->format('d.m.y в H:i:s') }}</span>
            <p>{{ $post->body }}</p>
            <img class="picture" src="/img/{{ $post->picture ? $post->picture : 'default.jpg' }}">
        </div>
    </main>

@endsection