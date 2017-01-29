<?php 
	
	require_once("mapHtml.php");
	require_once("htmlTemplate.php");
	$title = "Food Finder"; 
	$body = generateMap("[\"\", \"\", 0.0, 0.0, \"\"]", $title);
	echo generatePage($body, $title);
?>