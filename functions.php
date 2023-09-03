<?php
function format_price($price): string
{
    return number_format(ceil($price), 0, '', ' ') . ' ₽';
}

function get_dt_range($datetime):array
{
    date_default_timezone_set('Europe/Moscow');

    $interval = strtotime($datetime) - time();
    $hours = floor($interval / 3600);
    $minutes = floor(($interval - ($hours * 3600)) / 60);

    return [
        str_pad($hours, 2, '0', STR_PAD_LEFT),
        str_pad($minutes, 2, '0', STR_PAD_LEFT)
    ];
}