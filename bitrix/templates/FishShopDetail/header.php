<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?> <!-- Служебный код, необходим для защиты подключения этого файла без подключения ядра -->
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><? $APPLICATION->ShowTitle(); ?></title> <!-- Отображение заголовка страницы -->
	<? $APPLICATION->ShowHead();  ?> <!--  Вывод в шаблоне сайта основных полей тега head (мета-теги Content-Type, robots, keywords, description; стили CSS; скрипты) -->
	<!-- Font Awesome Icons -->
	<link href="<?= SITE_TEMPLATE_PATH ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700&selection.subset=cyrillic" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i&display=swap&subset=cyrillic' rel='stylesheet' type='text/css'>
</head>

<body id="page-top">
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?> <!-- Отображение административной панели внизу страницы -->
	</div>