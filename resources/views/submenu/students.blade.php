<nav class="submenu">
    <div>
        <ul>
            <li>
                <a class="{{Route::currentRouteName() == 'timetable' ? 'active' : ''}}" href="/students/timetable">
                    Рассписание и Учебный график
                </a>
            </li>

            <li>
                <a class="{{Route::currentRouteName() == 'welcome' ? 'active' : ''}}" href="/students/welcome">
                    Первокусникам
                </a>
            </li>

            <li>
                <a class="{{Route::currentRouteName() == 'graduates' ? 'active' : ''}}" href="/students/graduates">
                    Студентам-выпускникам
                </a>
            </li>

            <li>
                <a class="{{Route::currentRouteName() == 'work' ? 'active' : ''}}" href="/students/work">
                    Работа со студентам
                </a>
            </li>

            <li>
                <a class="{{Route::currentRouteName() == 'library' ? 'active' : ''}}" href="/students/library">
                    Библиотека
                </a>
            </li>

            <div class="clear"></div>
        </ul>
    </div>
</nav>