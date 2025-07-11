<?php
$query = "SELECT * FROM countries";
$res = mysqli_query($site_base_link, $query);
for($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
$content = "<h4>Список стран</h4>";
$content .= '<div>';
foreach($data as $elem) {
    $content .= "<a href=\"/page/$elem[slug]\">$elem[name]</a><br/>";
};
$content .="</div>";

$page = ['title' => 'Страны', 'content' => $content];
return $page;
?>