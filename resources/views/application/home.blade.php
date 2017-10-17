@extends('application.layout')

@section('title')
    ИИНТБ | Главная
@endsection

@section('content')
    <div class="left">
        <h2>Новости</h2>
        <div class="left-column">
            @foreach ($posts as $key => $post)
                @if($key<4)
                    @if (($key + 1) % 2 == 1)
                        @include('application.main-posts')
                    @endif
                @endif
            @endforeach

        </div>
        <div class="right-column">
            @foreach ($posts as $key => $post )
                @if($key<4)
                    @if (($key + 1) % 2 == 0)
                        @include('application.main-posts')
                    @endif
                @endif
            @endforeach

        </div>
        <a class="post-href" href="#"> Все посты › </a>
        <div class="clear"></div>


    </div>

    <div class="right">
        <h2>Анонсы</h2>
        @foreach($announcements as $key=>$announcement)
            @if($key<4)
                <div class="announcement">
                    <div class="circle"><div>{{  $announcement->time2()  }}</div></div>
                    <h3 class="title">{{ $announcement->title}} </h3>

                    <div class="clear"></div>

                </div>
            @endif
        @endforeach
        <a class="an-href" href="#"> Все анонсы › </a>
    </div>

    <div class="clear"></div>

@endsection