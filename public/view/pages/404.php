<?php
// $query = "SELECT * FROM pages WHERE slug = '404'";
// $db_answer = mysqli_query($site_base_link, $query);
// $page = mysqli_fetch_assoc($db_answer);
$content = '<div class="text-center">Эту страницу ещё не написали...</div><div class="text-center">...вернуться на <a href="/">главную</a></div>';
$page = ['title'=> '404 page', 'content' => $content];
return $page;
?>