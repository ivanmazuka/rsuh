{{-- Parent layout --}}
@extends('application.layout')

{{-- Title --}}
@section('title', $post->title)

{{-- Description --}}
@section('description', "Пост от {$post->created_at->format('d.m.y')}")

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.news')
    </div>

    {{-- Main content --}}
    <main>

        {{-- Post --}}
        <div class="post">

            {{-- Heading --}}
            <h1>{{ $post->title }}</h1>

            {{-- Date --}}
            <span class="date">{{ $post->created_at->format('d.m.y в H:i:s') }}</span>

            {{-- Post body --}}
            <p>{{ $post->body }}</p>

            {{-- Post image --}}
            <img alt="{{ $post->title }}" class="picture" src="/img/{{ $post->picture ?: 'default.jpg' }}">

        </div>

    </main>

@endsection