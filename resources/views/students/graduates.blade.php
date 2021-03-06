{{-- Parent layout --}}
@extends('application.layout')

{{-- Title --}}
@section('title', 'Студентам-выпускникам')

{{-- Description --}}
@section('description', $description)

{{-- Content --}}
@section('content')

    {{-- Submenu --}}
    <div class="sitePage-submenu">
        @include('submenu.students')
    </div>

    <main>
        <span>// Студентам /</span>
        <div class="page-title">
            <h1>Студентам-выпускникам</h1>
        </div>
        <section>
            <h2>Материалы для Государственной итоговой аттестации (ГИА) ФИСБ ИИНТБ (бакалавриат)</h2>
            <h3>Государственный междисциплинарный экзамен</h3>
            <p>Контрольные вопросы государственного междисциплинарного экзамена в редакции 2016/17 учебного года:</p>
            <ul>
                <li>
                    по направлению подготовки 10.03.01 — <a href="#" target="_blank">«Информационная безопасность»</a>
                </li>
                <li>
                    по направлению подготовки 09.03.03 — <a href="#" target="_blank">«Прикладная информатика»</a>
                </li>
                <li>
                    по направлению подготовки 01.03.04 — <a href="#" target="_blank">«Прикладная математика»</a>
                </li>
            </ul>

            <h3>Выпускная квалификационная работа</h3>
            <ul>
                <li>
                    <a href="{{'/docs/1.doc'}}" target="_blank">Форма заявления</a> студента об утверждении темы
                    выпускной квалификационной работы (ВКР) и назначении научного руководителя.
                </li>
                <li>
                    <a href="{{'/docs/2.doc'}}" target="_blank">Форма задания</a> студенту на выполнение выпускной
                    квалификационной работы (ВКР).
                </li>
                <li>
                    <a href="{{'/docs/3.doc'}}" target="_blank">Форма отзыва</a> научного руководителя на работу
                    студента и справки по оригинальности текста ВКР.
                </li>
                <li>
                    <a href="{{'/docs/4.doc'}}" target="_blank">Форма рецензии</a> на выпускную квалификационную работу
                    (ВКР) студента.
                </li>
                <li>
                    <a href="{{'/docs/5.doc'}}" target="_blank">Образец титульного</a> листа выпускной квалификационной
                    работы (ВКР).
                </li>
            </ul>

            <h3>Методические рекомендации по подготовке выпускных квалификационных работ:</h3>
            <ul>
                <li>
                    по направлению подготовки 10.03.01 — <a
                            href="http://rggu.ru/upload/iintb/raspis/%D0%A0%D0%B5%D0%BA%D0%BE%D0%BC%D0%B5%D0%BD%D0%B4%D0%B0%D1%86%D0%B8%D0%B8%20%D0%BF%D0%BE%20%D0%92%D0%9A%D0%A0.pdf"
                            target="_blank">«Информационная безопасность»</a>
                </li>
                <li>
                    по направлению подготовки 09.03.03 — <a
                            href="http://rggu.ru/upload/iintb/raspis/Программа%20ГИА%20ПИвИС(Эк)%202017.pdf"
                            target="_blank">«Прикладная информатика»</a>
                </li>
                <li>
                    по направлению подготовки 01.03.04 — <a
                            href="http://rggu.ru/upload/iintb/files_iintb/gosud-itog-attest/%D0%9F%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B0%20%D0%93%D0%98%D0%90%20%D0%9F%D0%9C%202016.pdf"
                            target="_blank">«Прикладная математика»</a>
                </li>
            </ul>
            <p>
                <a href="http://rggu.ru/upload/iintb/raspis/%D0%A1%D0%BF%D0%B8%D1%81%D0%BE%D0%BA%20%D0%B4%D0%BE%D0%BA%D1%83%D0%BC%D0%B5%D0%BD%D1%82%D0%BE%D0%B2%20%D0%BA%20%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D0%B5%20%D0%92%D0%9A%D0%A0.pdf">Перечень
                    документов</a> передаваемых секретарю ГЭК для защиты ВКР.
            </p>
            <p>
                <a href="{{'/docs/6.doc'}}" target="_blank">Форма</a> лицензионного договора.
            </p>
            <p>
                <a href="http://rggu.ru/upload/iintb/raspis/%D0%93%D1%80%D0%B0%D1%84%D0%B8%D0%BA%20%D0%93%D0%98%D0%90%202017%20%D1%81%D1%82%D0%B5%D0%BD%D0%B4.pdf"
                   target="_blank">График
                    работы</a> ГЭК в 2017 году.
            </p>
        </section>
    </main>

@endsection