{{-- Parent layout --}}
@extends('application.layout')

{{-- Title --}}
@section('title'){{ $announcement->title }}@endsection

{{-- Description --}}
@section('description', "Анонс от {$announcement->created_at->format('d.m.y')}")

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.news')
    </div>

    {{-- Main content --}}
    <main>

        {{-- Announcement --}}
        <div class="announcement">

            {{-- Title --}}
            <h1>{{ $announcement->title }}</h1>

            {{-- Date --}}
            <span class="date">{{ $announcement->created_at->format('d.m.y в H:i:s') }}</span>

            {{-- Announcement body --}}
            <p>{{ $announcement->body }}</p>

            {{-- Announcement image --}}
            <img alt="{{ $announcement->title }}" class="picture"
                 src="/img/{{ $announcement->picture ?: 'default.jpg' }}">
        </div>

    </main>

@endsection