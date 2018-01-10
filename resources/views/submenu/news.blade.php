<nav class="submenu">
    <div>
        <ul>
            <li><a class="{{Route::currentRouteName() == 'posts' ? 'active' : ''}}" href="/news/posts">Новости</a></li>
            <li><a class="{{Route::currentRouteName() == 'annouces' ? 'active' : ''}}"
                   href="/news/announcements">Анонсы</a></li>
            <li><a class="{{Route::currentRouteName() == 'useful-information' ? 'active' : ''}}"
                   href="/news/useful-information/">Полезная информация</a></li>
            <div class="clear"></div>
        </ul>
    </div>
</nav>