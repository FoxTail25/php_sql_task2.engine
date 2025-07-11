<?php
$query = "SELECT * FROM categories";
$res = mysqli_query($site_base_link, $query);
for($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
$content = '<div>';
foreach($data as $elem) {
    $content .= "<a href=\"page/$elem[slug]\">$elem[name]</a><br/>";
};
$content .="</div>";

$page = ['title' => 'home title', 'content' => $content];
return $page;
?>