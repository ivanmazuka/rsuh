@extends('application.layout')

@section('title')
    ИИНТБ | Главная
@endsection

@section('content')
    <div class="left">
        <h2>Новости</h2>
        <div class="left-column">
            @foreach ($posts as $key => $post)
                @if (($key + 1) % 2 == 1)
                    @include('application.main-posts')
                @endif
            @endforeach

        </div>
        <div class="right-column">
            @foreach ($posts as $key => $post )
                @if (($key + 1) % 2 == 0)
                    @include('application.main-posts')
                @endif
            @endforeach

        </div>

        <div class="clear"></div>


    </div>

    <div class="right">
        <h2>Анонсы</h2>
        @foreach($announcements as $announcement)
            <div class="announcement">
                <div class="circle"></div>
                <h3 class="title">{{ $announcement->title}} </h3>

                <div class="clear"></div>

            </div>
        @endforeach

    </div>

    <div class="clear"></div>
@endsection