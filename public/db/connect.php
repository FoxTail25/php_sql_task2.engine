<?php
$host = "MySQL-8.0";
$user = "root";
$pass = "";
$baseName = "php_sql_task";

$site_base_link = mysqli_connect($host, $user, $pass, $baseName);
mysqli_query($site_base_link, "SET NAMES 'utf8'");
?>