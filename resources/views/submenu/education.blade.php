<nav class="submenu">
    <div>
        <ul>
            <li>
                <a class="{{Route::currentRouteName() == 'faculty' ? 'active' : ''}}" href="/education/faculty">
                    Факультет
                </a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'security' ? 'active' : ''}}" href="/education/security">
                    Информационная безопасность
                </a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'informatics' ? 'active' : ''}}" href="/education/informatics">
                    Прикладная информатика
                </a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'maths' ? 'active' : ''}}" href="/education/maths">
                    Прикладная математика
                </a>
            </li>
            <div class="clear"></div>
        </ul>
    </div>
</nav>