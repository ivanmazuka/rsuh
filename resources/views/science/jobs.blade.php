@extends('application.layout')

@section('description')
    Информация о работе студентов в РГГУ.
@endsection

@section('title')
    Работа студентов
@endsection

@section('content')

    @include('submenu.science')

    <main>
        <span class="bread">// НАУКА /</span>
        <div class="page-title">
            <h1>Работа студентов</h1>
        </div>
        <section>
            <h2>Исследовательский проект (научно-исследовательская работа студентов) «Вредоносные программы нового
                поколения: источники разработки, цели, характер, особенности и последствия их применения».</h2>

            <p>Данный исследовательский студенческий проект проводится совместно Институтом проблем информационной
                безопасности МГУ имени М.В.Ломоносова (ИПИБ МГУ) и Институтом информационных наук и технологий
                безопасности Российского государственного гуманитарного университета (ИИНТБ РГГУ).</p>

            <p>Целью проекта является исследование, анализ и систематизация сведений о вредоносных программах и
                средствах их доставки до атакуемых объектов, появившихся за последнее время.</p>

            <p>В рамках проекта решаются следующие задачи:</p>
            <ul>
                <li>
                    Выявление источника разработки исследуемых вредоносных программ (страны, разработчики, группы
                    разработчиков) и целей разработки данных программ.
                </li>
                <li>
                    Анализ средств доставки вредоносных программ до объектов их атаки.
                </li>
                <li>
                    Анализ характера, особенностей действия и последействия исследуемых вредоносных программ.
                </li>
                <li>
                    Анализ последствий применения исследуемых вредоносных программ для объектов их атаки.
                </li>
            </ul>

            <p>Руководитель проекта: зав. кафедры «Комплексная защита информации» д.т.н. Казарин О.В.</p>
            <p>Проект продолжается в 2017/2018 уч. г.</p>

            <p>Ссылка на отчет проекта:</p>

            <a href="http://www.rsuh.ru/upload/iintb/files_iintb/%D0%9F%D1%80%D0%BE%D0%B5%D0%BA%D1%82_%D0%BF%D0%BE%20%D0%92%D0%9F_%D0%B4%D0%B5%D0%BA%D0%B0%D0%B1%D1%80%D1%8C_2015.pdf"
               target="_blank">
                Вредноносные программы нового поколения: источники разработки, цели, характер, особенности, и
                последствия их применения
            </a>
        </section>
    </main>
@endsection