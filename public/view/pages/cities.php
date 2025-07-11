<?php
	$catSlug = $params['catSlug'];
	$pageSlug = $params['pageSlug'];
	
	$query = "SELECT cities.title, cities.content 
		FROM cities
	LEFT JOIN
		countries ON countries.id=cities.country_id
	WHERE
		cities.slug='$pageSlug' AND countries.slug='$catSlug'";
	
	$res = mysqli_query($site_base_link, $query) or die(mysqli_error($link));
	$page = mysqli_fetch_assoc($res);
	
	return $page;
?>