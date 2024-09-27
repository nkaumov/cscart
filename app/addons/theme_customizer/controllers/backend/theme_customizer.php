<?php
if (!defined('BOOTSTRAP')) { die('Access denied'); }

use Tygh\Registry;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Обработка POST-запросов
}

// Загрузка страницы настроек модуля
if ($mode == 'settings') {
    Registry::get('view')->assign('settings', fn_get_theme_customizer_settings());
}

function fn_get_theme_customizer_settings()
{
    // Вернуть настройки модуля (пока пусто)
    return [];
}
