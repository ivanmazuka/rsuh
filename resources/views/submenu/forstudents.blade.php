<nav class="submenu">
    <div>
        <ul>
            <li><a class="{{Route::currentRouteName() == 'timetable' ? 'active' : ''}}" href="/forstudents/timetable">Рассписание
                    и Учебный график</a></li>
            <li><a class="{{Route::currentRouteName() == 'welcome' ? 'active' : ''}}" href="/forstudents/welcome">Первокусникам</a>
            </li>
            <li><a class="{{Route::currentRouteName() == 'graduates' ? 'active' : ''}}" href="/forstudents/graduates">Студентам-выпускникам</a>
            </li>
            <li><a class="{{Route::currentRouteName() == 'work-with-students' ? 'active' : ''}}"
                   href="/forstudents/work-with-students">Работа со студентам</a></li>
            <li><a class="{{Route::currentRouteName() == 'library' ? 'active' : ''}}" href="/forstudents/library">Библиотека</a>
            </li>
            <div class="clear"></div>
        </ul>
    </div>
</nav>