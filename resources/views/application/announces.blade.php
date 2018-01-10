@extends('application.layout')

@section('title')
    ИИНТБ | Главная
@endsection

@section('content')
    @include('submenu.news')
    <div class="postin">
        @foreach($announcements as $key=>$announcement)
            <div class="announcement">
                <div class="circle">
                    <div>{{ $announcement->announcementDay() }}<br>{{ $announcement->announcementMonth() }}</div>
                </div>
                <a class="post-title" href="/news/announcements/{{ $announcement->id }}">
                    <h3 class="title">{{ $announcement->title}} </h3>
                    

                </a>

                <div class="clear"></div>

            </div>
        @endforeach
    </div>
@endsection