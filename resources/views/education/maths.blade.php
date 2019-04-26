{{-- Parent layout --}}
@extends('application.layout')

{{-- Title --}}
@section('title', 'Прикладная математика')

{{-- Description --}}
@section('description', 'Информация о направлении подготовки 01.03.04 «Прикладная математика»')

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.education')
    </div>

    <main>
        <span class="bread">// ОБРАЗОВАНИЕ /</span>
        <div class="page-title">
            <h1 class="purple">Прикладаная математика</h1>
        </div>
        <section>

            <h2>Направление подготовки 01.03.04 «Прикладная математика (академический бакалавриат)»</h2>
            <p>
                <a href="#">ФГОС ВО</a>
            </p>
            <p>
                <a href="#">Учебный план</a>
            </p>
            <p>
                <a href="#">Аннотации дисциплин</a>
            </p>

            <h2>Направление подготовки 01.04.04 «Прикладная математика»</h2>
            <a href="#">ФГОС ВО</a>

            <h3>Магистратура</h3>
            <ul>
                Программа:
                <li>Математические методы и модели обработки и защиты информации в социотехнических системах</li>
            </ul>
            <p>
                <a href="#">Учебный план</a>
            </p>
            <p>
                <a href="#">Аннотации дисциплин</a>
            </p>
        </section>
    </main>
@endsection