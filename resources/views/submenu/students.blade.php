<nav class="submenu">
    <ul class="submenu-list">
        <li>
            <a class="{{ isActive('timetable') }}" href={{'/students/timetable'}}>Рассписание и учебный
                график</a>
        </li>

        <li>
            <a class="{{ isActive('welcome') }}" href={{'/students/welcome'}}>Первокусникам</a>
        </li>

        <li>
            <a class="{{ isActive('graduates') }}"
               href={{'/students/graduates'}}>Студентам-выпускникам</a>
        </li>

        <li>
            <a class="{{ isActive('work') }}" href={{'/students/work'}}>Работа со студентам</a>
        </li>

        <li>
            <a class="{{ isActive('library') }}" href={{'/students/library'}}>Библиотека</a>
        </li>
    </ul>
</nav>