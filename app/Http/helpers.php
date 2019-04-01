<?php

/**
 * Checks whether the route is active.
 *
 * @param string $route — Route string.
 * @return string
 */
function isActive(string $route): string
{
    return Request::is($route . '/*') || Route::currentRouteName() === $route ? 'active' : '';
}