{{-- Parent layout--}}
@extends('application.layout')

{{-- Title --}}
@section('title', 'Аспирантам')

{{-- Description --}}
@section('description', 'Информация для аспирантов РГГУ, направления подготовки аспирантуры.')

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.science')
    </div>

    <main>
        <span class="bread">// НАУКА /</span>
        <div class="page-title">
            <h1>Аспирантам</h1>
        </div>
        <section>
            <p>
                Поступающие в аспирантуру сдают конкурсные вступительные экзамены по специальности, иностранному языку и
                философии. ФИСБ ведет подготовку кадров высшей квалификации через аспирантуру по специальностям:
            </p>

            <ul>
                <li>05.25.05 «Информационные системы и процессы, правовые аспекты информатики».</li>
                <li>05.13.19 «Методы и системы защиты информации, информационная безопасность».</li>
                <li>05.13.03 «Системный анализ, управление обработкой информации».</li>
            </ul>

            <a href="http://aspirant.rggu.ru/" target="_blank">Аспирантура и докторантура РГГУ</a>
        </section>
    </main>

@endsection