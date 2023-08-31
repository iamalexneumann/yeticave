<?php
function format_price($price): string
{
    return number_format(ceil($price), 0, '', ' ') . ' ₽';
}
