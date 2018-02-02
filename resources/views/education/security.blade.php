@extends('application.layout')

@section('title')
    Информационная безопасность
@endsection

@section('content')

    @include('submenu.education')

    <main>
        <span class="bread">// ОБРАЗОВАНИЕ /</span>
        <div class="page-title">
            <h1 class="blue">Информационная безопасность</h1>
        </div>
        <section>

            <h2>Направление подготовки 10.03.01 «Информационная безопасность»</h2>
            <a href="#">ФГОС ВО</a>

            <h3>Академический бакалавриат</h3>
            <ul>
                Профиль:
                <li>Организация и технология защиты информации</li>
                <li>Комплексная защита объектов информатизации</li>
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