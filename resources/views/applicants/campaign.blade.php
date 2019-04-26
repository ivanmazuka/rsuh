{{-- Parent layout--}}
@extends('application.layout')

{{-- Title --}}
@section('title', 'Приемная комиссия')

{{-- Description --}}
@section('description', 'Информация о работе приемной комиссии.')

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.applicants')
    </div>

    <main>
        <span>// ПОСТУПАЮЩИМ /</span>
        <div class="page-title">
            <h1>Приемная комиссия</h1>
        </div>
        <section>
            <h2>Телефоны справочной службы Приемной комиссии:</h2>
            <ul>
                <li>
                    <a href="tel:+7 (499) 973-40-16">+7 (499) 973-40-16</a>
                </li>
                <li>
                    <a href="tel:+7 (499) 973-40-17">+7 (499) 973-40-17</a>
                </li>
            </ul>
            <p>
                Электронная почта: <a href="mailto:priem@rggu.ru">priem@rggu.ru</a>
            </p>
            <p>
                <a href="#">Приёмная комиссия РГГУ в 2018 году</a>
            </p>

            <h2>Адрес</h2>
            <p>
                Документы от абитуриентов принимаются по адресу:
                <br>
                г. Москва, Миусская площадь, д. 6., корпус 2, корпус 5.
            </p>

            <script type="text/javascript" charset="utf-8" async
                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A268a2f5f4bda4477d80d09d67aa9fb1c6ca6079ee4c2a56879b532bf907b9756&amp;width=100%25&amp;height=512&amp;lang=ru_RU&amp;scroll=true"></script>
        </section>
    </main>
@endsection