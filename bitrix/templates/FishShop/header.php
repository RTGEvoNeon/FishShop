<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); //Защита от подключения файла напрямую без подключения ядра
use Bitrix\Main\Page\Asset; //Подключение библиотеки для использования  Asset::getInstance()->addCss() 
global $USER;
?>
<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><? $APPLICATION->ShowTitle(); ?></title> <!-- Отображение заголовка страницы -->
	<?
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/vendor/jquery/jquery.min.js");
	$APPLICATION->ShowHead();
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/vendor/fontawesome-free/css/all.min.css");
	Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700&selection.subset=cyrillic");
	Asset::getInstance()->addCss("https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i&display=swap&subset=cyrillic");
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/vendor/magnific-popup/magnific-popup.css");
	?>
</head>

<body id="page-top">
	<div id="panel">
		<? $APPLICATION->ShowPanel(); ?> <!-- Отображение панели администратора -->
	</div>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top">РЫБЫ.НЕТ</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto my-2 my-lg-0">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#home">Главная</a> <!-- перемещение по клику к блоку About Section -->
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#news">Новости</a> <!-- перемещение по клику к блоку Новости -->
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#portfolio">Галерея</a> <!-- перемещение по клику к блоку Галерея -->
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="#contact">Контакты</a> <!-- перемещение по клику к блоку Контакты -->
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Masthead -->
	<header class="masthead">
		<div class="container h-100">
			<div class="row h-100 align-items-center justify-content-center text-center">
				<div class="col-lg-10 align-self-end">
					<h1 class="text-uppercase text-white font-weight-bold">Рыбный совхоз "Корпач"</h1>
					<hr class="divider my-4">
				</div>
				<div class="col-lg-8 align-self-baseline">
					<p class="text-white-75 font-weight-light mb-5">Одно из лучших мест для рыбалки</p>
					<a class="btn btn-primary btn-xl js-scroll-trigger" href="#home">Узнать больше</a><!-- Перемещение по клику к блоку УЗНАТЬ БОЛЬШЕ -->
				</div>
			</div>
		</div>
	</header>