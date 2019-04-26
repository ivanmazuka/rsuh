{{-- Parent layout --}}
@extends('application.layout')

{{-- Title --}}
@section('title', 'Руководство')

{{-- Description --}}
@section('description', 'Руководство Института Информационных Наук и Технологий Безопасности.')

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.about')
    </div>

    <main>
        <span class="bread">// ОБ ИНСТИТУТЕ /</span>
        <div class="page-title">
            <h1>Руководство</h1>
        </div>
        <section>

            <div class="manager">
                <div class="image" style="background-image: url({{'/img/roganov.jpg'}})"></div>
                <div class="body">
                    <h2>Роганов Андрей Арьевич</h2>
                    <p>Кандидат технических наук, доцент; и.о. директора Института информационных наук и технологий
                        безопасности РГГУ.</p>
                    <p>Тел.: <a href="tel:+7 (495) 250-63-74">+7 (495) 250-63-74</a></p>
                    <p>E-mail: <a href="mailto:ism@rggu.ru">ism@rggu.ru</a></p>
                </div>
                <div class="clear"></div>
            </div>

            <div class="manager">
                <div class="image" style="background-image: url({{'/img/ohapkina.jpg'}})"></div>
                <div class="body">
                    <h2>Охапкина Елена Павловна</h2>
                    <p>Заместитель декана по учебной работе</p>
                    <p>Тел.: <a href="tel:+7 (495) 250-64-36">+7 (495) 250-64-36</a></p>
                    <p>E-mail: <a href="mailto:ism@rggu.ru">ism@rggu.ru</a></p>
                </div>
                <div class="clear"></div>
            </div>

            <div class="manager">
                <div class="image" style="background-image: url({{'/img/shevtsova.jpg'}})"></div>
                <div class="body">
                    <h2>Шевцова Галина Александровна</h2>
                    <p>Заместитель декана по научной работе</p>
                    <p>Тел.: <a href="tel:+7 (495) 250-63-56">+7 (495) 250-63-56</a></p>
                    <p>E-mail: <a href="mailto:ism@rggu.ru">ism@rggu.ru</a></p>
                </div>
                <div class="clear"></div>
            </div>

            <div class="manager">
                <div class="image" style="background-image: url({{'/img/ohapkin.jpg'}})"></div>
                <div class="body">
                    <h2>Охапкин Валентин Павлович</h2>
                    <p>Заместитель декана по работе со студентами</p>
                    <p>Тел.: <a href="tel:+7 (495) 250-66-99">+7 (495) 250-66-99</a></p>
                    <p>E-mail: <a href="mailto:ism@rggu.ru">ism@rggu.ru</a></p>
                </div>
                <div class="clear"></div>
            </div>
        </section>
    </main>
@endsection