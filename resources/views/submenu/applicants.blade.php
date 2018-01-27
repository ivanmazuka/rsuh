<nav class="submenu">
    <div>
        <ul>
            <li>
                <a class="{{Route::currentRouteName() == 'campaign' ? 'active' : ''}}" href="/applicants/campaign">Приемная
                    комиссия
                </a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'opendays' ? 'active' : ''}}" href="/applicants/opendays">Дни
                    открытых дверей
                </a>
            </li>
            <li>
                <a class="{{Route::currentRouteName() == 'address' ? 'active' : ''}}" href="/applicants/address">Обращение
                    к поступающим
                </a>
            </li>
            <div class="clear"></div>
        </ul>
    </div>
</nav>