<?php
require('helpers.php');
require('data.php');
require('functions.php');

$page_content = include_template('main.php', [
    "categories" => $categories,
    "goods" => $goods
]);
$layout_content = include_template('layout.php', [
	'content' => $page_content,
	'categories' => $categories,
	'title' => "Главная"
]);

print($layout_content);
?>