@extends('application.layout')

@section('title')
    Об институте
@endsection
@section('content')
    @include('submenu.about')

    <main>
        <h1>Об институте</h1>
        <section>
            <h2>Институт информационных наук и технологий безопасности</h2>
            <img src="/img/iintb.jpg">
            
            <p>
                Институт имеет высококвалифицированный профессорско-преподавательский состав, отдельное здание, оборудованное современными техническими средствами и компьютерными классами, необходимыми для подготовки компетентных кадров по направлениям подготовки:
            </p>
            <ul>
                <li>Информационная безопасность</li>
                <li>Прикладная информатика</li>
                <li>Прикладная математика</li>
            </ul>

            <p>
                В состав института входят:
            </p>
            <ul>
                <li>
                    <a href="/education/faculty">
                        Факультет информационных систем и безопасности
                    </a>
                </li>
                <li>
                    <a href="/structure/laboratory">
                        Лаборатория компьютерной техники и средств защиты информации
                    </a>
                </li>
            </ul>

            <h2>Перспективы трудоустройства</h2>
            <p>
                Выпускники института работают в качестве: менеджеров ИТ-проектов, системных аналитиков, бизнес-аналитиков, системных интеграторов, системных администраторов, аудиторов информационных систем и информационной безопасности, постановщиков прикладных задач и прикладных программистов. Для того, чтобы учебный процесс образования гибко реагировал на постоянно изменяющийся спрос на специалистов в области прикладной информатики и технологий безопасности, в институте преподавателям предоставлена возможность творческого поиска и реализации оптимальных форм, методов, содержания обучения, использования современных отечественных и зарубежных информационных технологий. Поэтому целью образования в институте является не просто преподавание дисциплин, а обучение студентов умению мыслить, рассуждать, самостоятельно изучать новые разделы различных знаний. Особенность подготовки специалистов состоит в фундаментальности, конкретности, практической направленности обучения, основной принцип которого - повышение роли самостоятельной работы студентов. Студенты, прошедшие подготовку в рамках образовательных программ института, получают прекрасное представление не только о состоянии и новейших достижениях в области ИТ - технологий и технологий безопасности, но и прочно овладевают современными экономико-математическими методами анализа экономических процессов, научно-практическим потенциалом, способностью квалифицированно решать нестандартные задачи, что позволяет им чувствовать себя социально защищенными специалистами в условиях современного неустойчивого рынка труда.
            </p>

            <p>
                <a href="/docs/iisst.pdf">Положение об ИИНТБ</a>
            </p>
        </section>
    </main>
@endsection