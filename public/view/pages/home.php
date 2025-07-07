<?php
$query = "SELECT * FROM pages WHERE slug = '/'";
$db_answer = mysqli_query($site_base_link, $query);
$page = mysqli_fetch_assoc($db_answer);
return $page;
?>