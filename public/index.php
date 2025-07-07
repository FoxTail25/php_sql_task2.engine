<?php
$url = $_SERVER['REQUEST_URI'];
require('db/connect.php');
$layout = file_get_contents('view/baseview/layout.html');
$header = file_get_contents('view/baseview/header.html');
$layout = str_replace('{{ header in layout }}', $header, $layout);
$footer = file_get_contents('view/baseview/footer.html');
$layout = str_replace('{{ footer in  layout }}', $footer, $layout);

if($url == '/') {
	$page = include 'view/pages/home.php';
}
// if(preg_match('#user/new_user#', $url, $match)){
// 	$page = include 'view/pages/new_user.php';
// }
// if(preg_match('#user/all_user#', $url, $match)){
// 	$page = include 'view/pages/all_users.php';
// }
// if(preg_match('#user/user#', $url, $match)){
// 	$page = include 'view/pages/user.php';
// }

if(!isset($page)) {
	$page = include 'view/pages/404.php';
}

// $layout = str_replace('{{ title in layout }}', $page['title'], $layout);
// $layout = str_replace('{{ content in layout }}', $page['content'], $layout);
echo $layout;
?>