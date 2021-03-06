{{-- Parent layout --}}
@extends('application.layout')

{{-- Description --}}
@section('description', 'Общая информация о факультете: напраления подготовки, положение, краткая историческая справка.')

{{-- Title --}}
@section('title', 'Факультет')

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.education')
    </div>

    <main>
        <span class="bread">// ОБРАЗОВАНИЕ /</span>
        <div class="page-title">
            <h1>Факультет</h1>
        </div>
        <section>
            <h2>Факультет информационных систем и безопасности (ФИСБ)</h2>
            <p>
                Факультет информационных систем и безопасности ИИНТБ создан в 2013 году на базе факультета защиты
                информации и факультета информатики (приказ РГГУ от 23.07.2913 № 01-233/осн). Область профессиональной
                деятельности выпускников включает сферы науки, техники и технологии, связанные с созданием и
                функционированием современных информационных систем, а также обеспечения защищённости
                объектов информатизации (государственных, муниципальных, коммерческих структур).
            </p>
            <p>
                Образовательные программы на факультете предусматривают не только изучение теоретических знаний, но и
                приобретение опыта их применения в рамках производственных практик в ведущих российских компаниях и на
                предприятиях различных форм собственности. В этих организациях студенты занимаются разработкой и
                эксплуатацией различных информационных систем, а также обеспечением информационной безопасности объектов
                информационной инфраструктуры.
            </p>
            <p>
                <a href="{{'/about/history'}}">Краткая историческая справка факультета</a>
            </p>
            <p>
                <a href="{{'/docs/iisst.pdf'}}">Положение о факультете информационных систем и безопасности</a>
            </p>

            <h2>Направления подготовки</h2>

            <h3>10.03.01 «Информационная безопасность» (академический бакалавриат)</h3>
            <ul>
                Профили:
                <li>Организация и технология защиты информации</li>
                <li>Комплексная защита объектов информатизации</li>
            </ul>

            <h3>09.03.03 «Прикладная информатика» (академический бакалавриат)</h3>
            <ul>
                Профили:
                <li>Прикладная информатика в информационной сфере</li>
                <li>Прикладная информатика в экономике</li>
            </ul>

            <h3>09.03.03 «Прикладная информатика» (прикладной бакалавриат)</h3>
            <ul>
                Профили:
                <li>Прикладная информатика в гуманитарной сфере</li>
            </ul>

            <h3>01.03.04 «Прикладная математика» (академический бакалавриат)</h3>

            <h3>09.04.03 «Прикладная информатика» (магистратура)</h3>
            <ul>
                Программа:
                <li>Управление данными и знаниями в компьютерных сетях</li>
            </ul>

            <h3>01.04.04 «Прикладная математика» (магистратура)</h3>
            <ul>
                Программа:
                <li>Математические методы и модели обработки и защиты информации в социотехнических системах</li>
            </ul>

            <h3>10.06.01 «Информационная безопасность» (аспирантура)</h3>
            <ul>
                Программа:
                <li>Методы и системы защиты информации, информационная безопасность</li>
            </ul>

            <h3>09.06.01 «Информатика и вычислительная техника» (аспирантура)</h3>
            <ul>
                Программы:
                <li>Теоретические основы информатики</li>
                <li>Информационные процессы и системы</li>
            </ul>

        </section>
    </main>
@endsection