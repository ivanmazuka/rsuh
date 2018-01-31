@extends('application.layout')

@section('title')
    Первокурсникам
@endsection

@section('content')

    @include('submenu.students')

    <main>
        <span>// Студентам /</span>
        <h1>Первокурсникам</h1>
        <section>
            <h2>Что надо сделать после поступления в первую очередь:</h2>
            <ol>
                <li>Получить социальную карту студента.</li>
                <li>Получить студенческий билет.</li>
                <li>Получить банковскую карточку, а на нее — стипендию.</li>
                <li>Получить отсрочку от армии.</li>
                <li>Общежитие. Как получить место в общежитии, временную регистрацию и какие документы для этого
                    необходимы.
                </li>
                <li>Личная карточка студента необходима для получения зачетной книжки, без которой вы не сможете сдать
                    экзамены и зачеты.
                </li>
                <li>Куратор.Вы наверняка хотите знать, кто может ответить на ваши животрепещущие вопросы, подсказать,
                    где расположена столовая и как выглядит декан? Найдите своего куратора!
                </li>
            </ol>
            <p>
                Как все это сделать? Ответы <a href="https://www.youtube.com/watch?v=j3Os0oldD2c"
                                               target="_blank">здесь</a>.
            </p>
            <p>
                <a href="http://student.rggu.ru/guide.html" target="_blank">Еще больше информации...</a>
            </p>
        </section>
    </main>
@endsection