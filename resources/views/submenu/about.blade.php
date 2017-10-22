<nav class="submenu">
    <div>
        <ul>

            <li><a class="{{Route::currentRouteName() == 'management' ? 'active' : ''}}" href="/about/management">
                    Руководство</a></li>
            <li><a class="{{Route::currentRouteName() == 'structure' ? 'active' : ''}}" href="/about/structure">
                    Структурные подразделения</a></li>
            <li><a class="{{Route::currentRouteName() == 'history' ? 'active' : ''}}" href="/about/history">
                    История</a></li>
            <li><a class="{{Route::currentRouteName() == 'contacts' ? 'active' : ''}}"
                   href="/about/contacts">Контакты</a></li>
            <div class="clear"></div>

        </ul>
    </div>
</nav>