<nav class="submenu">
    <div>
        <ul>
            <li><a class="{{Route::currentRouteName() == 'faculty' ? 'active' : ''}}" href="/education/faculty">
                    Факультет</a></li>
            <li><a class="{{Route::currentRouteName() == 'info-appl' ? 'active' : ''}}" href="/education/info-appl">
                    Информационная безопасность</a></li>
            <li><a class="{{Route::currentRouteName() == 'infosec' ? 'active' : ''}}" href="/education/infosec">Прикладная
                    информатика</a></li>
            <li><a class="{{Route::currentRouteName() == 'math-appl' ? 'active' : ''}}" href="/education/math-appl">
                    Прикладная математика</a></li>
            <div class="clear"></div>
        </ul>
    </div>
</nav>