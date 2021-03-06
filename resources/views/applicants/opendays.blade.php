{{-- Parent layout --}}
@extends('application.layout')

{{-- Title --}}
@section('title', 'Дни открытых дверей')

{{-- Description --}}
@section('description', 'Даты проведения дней открытых дверей в институте.')

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.applicants')
    </div>

    <main>
        <span>// ПОСТУПАЮЩИМ /</span>
        <div class="page-title">
            <h1>Дни открытых дверей</h1>
        </div>
        <section>
            <h2>Мы всегда очень рады нашим гостям и стараемся сделать этот день максимально полезным и интересным.</h2>
            <h3>Дни открытых дверей пройдут:</h3>
            <i>на территории ИИНТБ:</i>
            <ul>
                <li>17 февраля 2018 года</li>
                <li>21 апреля 2018 года</li>
            </ul>
            <i>на общеуниверситетской территории (в главном здании РГГУ):</i>
            <ul>
                <li>11 февраля 2018 года</li>
                <li>15 апреля 2018 года</li>
                <li>20 мая 2018 года (день магистерских программ)</li>
            </ul>

            <big>Ждем Вас.</big>
        </section>
    </main>
@endsection