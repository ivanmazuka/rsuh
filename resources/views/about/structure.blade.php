@extends('application.layout')

@section('description', 'Структурные подразделения института.')

@section('title')
    Структура
@endsection

@section('content')

    @include('submenu.about')

    <main>
        <span class="bread">// ОБ ИНСТИТУТЕ /</span>
        <div class="page-title">
            <h1>Структура</h1>
        </div>
        <section>
            
            <div class="manager">
                <div class="image" style="background-image: url('/img/it.jpg')"></div>
                <div class="body">
                    <h2>
                        <a href="#">Кафедра Информационных технологий и систем</a>
                    </h2>
                    <p>Зав. кафедрой: <a href="#" target="_blank">Роганов Андрей Арьевич</a></p>
                    <p>кандидат технических наук, доцент</p>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="manager">
                <div class="image" style="background-image: url('/img/is.jpg')"></div>
                <div class="body">
                    <h2>
                        <a href="#">Кафедра Информационной безопасности</a>
                    </h2>
                    <p>Зав. кафедрой: <a href="#" target="_blank">Шевцова Галина Александровна</a></p>
                    <p>кандидат исторических наук, доцент</p>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="manager">
                <div class="image" style="background-image: url('/img/cis.jpg')"></div>
                <div class="body">
                    <h2>
                        <a href="#">Кафедра Комплексной защиты информации</a>
                    </h2>
                    <p>Зав. кафедрой: <a href="#" target="_blank">Казарин Олег Викторович</a></p>
                    <p>доктор технических наук, старший научный сотрудник</p>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="manager">
                <div class="image" style="background-image: url('/img/am.jpg')"></div>
                <div class="body">
                    <h2>
                        <a href="#">Кафедра Фундаментальной и прикладной математики</a>
                    </h2>
                    <p>Зав. кафедрой: <a href="#" target="_blank">Жаров Валентин Константинович</a></p>
                    <p>доктор педагогических наук, профессор</p>
                </div>
                <div class="clear"></div>
            </div>
            
            <div class="manager">
                <div class="image" style="background-image: url('/img/cl.jpg')"></div>
                <div class="body">
                    <h2>
                        <a href="#">Лаборатория компьютерной техники и средств защиты информации</a>
                    </h2>
                    <p>И.О. зав. кафедрой: <a href="#" target="_blank">Иванов Сергей Анатольевич</a></p>
                </div>
                <div class="clear"></div>
            </div>
        </section>
    </main>
@endsection