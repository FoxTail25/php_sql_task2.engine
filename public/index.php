<?php
$url = $_SERVER['REQUEST_URI'];
require('db/connect.php');
$layout = file_get_contents('view/baseview/layout.html');
$header = file_get_contents('view/baseview/header.html');
$layout = str_replace('{{ header in layout }}', $header, $layout);
$footer = file_get_contents('view/baseview/footer.html');
$layout = str_replace('{{ footer in  layout }}', $footer, $layout);



	$route = '^/page/(?<catSlug>[a-zA-Z0-9_-]+)/(?<pageSlug>[a-zA-Z0-9_-]+)$';
	if (preg_match("#$route#", $url, $params)) {
		$page = include 'view/pages/cities.php';
	}
	
	$route = '^/page/(?<catSlug>[a-zA-Z0-9_-]+)$';
	if (preg_match("#$route#", $url, $params)) {
		$page = include 'view/pages/countries.php';
	}
	
	$route = '^/$';
	if (preg_match("#$route#", $url, $params)) {
		$page = include 'view/pages/all.php';
	}

if(!isset($page)) {
	$page = include 'view/pages/404.php';
}

$layout = str_replace('{{ title in layout }}', $page['title'], $layout);
$layout = str_replace('{{ content in layout }}', $page['content'], $layout);
echo $layout;
?>