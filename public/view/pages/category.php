<?php
	$catSlug = $params['catSlug'];
	
	
	$query = "SELECT pages.slug, pages.title FROM pages
	LEFT JOIN
		categories ON categories.id=pages.category_id
	WHERE
		categories.slug='$catSlug'";
	
	$res = mysqli_query($site_base_link, $query) or die(mysqli_error($link));
	
	for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row); 
	
	$content = "<h4>$params[catSlug]</h4>";
	foreach ($data as $page) {
		$content .= '
		
			<div>
				<a href="/page/' . $catSlug . '/'  . $page['slug'] . '">' . $page['title'] . '</a>
			</div>
		';
	}
	
	$page = [
		'title' => 'список всех страниц категории 
			' . $catSlug, 
		'content' => $content
	];
	
	return $page;
    ?>