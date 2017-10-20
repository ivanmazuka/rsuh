@extends('application.layout')

@section('title')
    ИИНТБ | Главная
@endsection
@section('content')

    <div class="announcement">
        <div class="circle">
            <div>{{ $announcement->created_at }}</div>
        </div>
        <h3 class="title">{{ $announcement->title }} </h3>
        <h4>  {{ $announcement->body }}  </h4>

        <div class="clear"></div>

    </div>

@endsection