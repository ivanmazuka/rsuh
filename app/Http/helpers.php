<?php

function isActive($route) {
    return Request::is($route . '/*') || Route::currentRouteName() == $route ? 'active' : '';
}