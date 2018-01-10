@extends('application.layout')

@section('title')
    ИИНТБ | Главная
@endsection
@section('content')
    @include('submenu.news')
    <div class="postin">
        @foreach ($posts as $key => $post)

            @include('application.main-posts')

        @endforeach

    </div>
@endsection