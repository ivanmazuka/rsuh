{{-- Parent layout --}}
@extends('application.layout')

{{-- Title --}}
@section('title', 'Расписание')

{{-- Description --}}
@section('description', 'Расписания занятий ИИНТБ.')

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.students')
    </div>

    <main>
        <span>// Студентам /</span>
        <div class="page-title">
            <h1>Расписание</h1>
        </div>
        <section>
            <p>
                В этом семестре расписание составляется <a href="http://rggu.ru/raspis/"
                                                           target="_blank">централизовано</a>.
            </p>
            <p>
                Диспетчер факультета: Блинова Елена-Алёна Игоревна, каб. 103, e-mail: <a
                        href="mailto:eai.blinova@rggu.ru">blinova@rggu.ru</a>
            </p>
            <p>
                <a href="{{'/docs/practices.pdf'}}" target="_blank">График проведения практик</a>
            </p>
            <p>
                <a href="{{'/docs/timetable.pdf'}}" target="_blank">График учебного процесса ИИНТБ</a>
            </p>
            <p>
                <a href="{{'/docs/comissions.pdf'}}" target="_blank">Расписание пересдач с комиссией промежуточной
                    аттестации осеннего семестра 2016-2017 учебного года</a>
            </p>
        </section>
    </main>

@endsection