<?php
require_once('helpers.php');
require_once('functions.php');
require_once('data.php');

$main_content = include_template('main.php', [
    'categories' => $categories,
    'ads' => $ads,
]);
$layout_content = include_template('layout.php', [
    'main_content' => $main_content,
    'categories' => $categories,
    'title' => 'Главная',
]);

print($layout_content);