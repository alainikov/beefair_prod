<?php
/******************************************************************************\
* Project: Bee Fair
* Description: Fair Trade Market
* Author:Arch A. Germann
* Document:Service: get blog
\******************************************************************************/

//headers
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

$blogItemList = array();
$blogItemList = $blogItemCtrl->getBlogItemList();

$blog = 	'<br /><br />';
$blog .= 	'<section class="honeyBlogSection">';
$blog .= 		'<div class="honeyBlogContainer">';
$blog .= 			'<h1>Honey Blog</h1>';
$blog .= 			'<hr class="hrBlack" />';
$blog .= 		'</div>';
$blog .= 	'</section>';

if (count($blogItemList) <= 0)
{
	$blog .= 	'<section class="honeyBlogSection">';
	$blog .= 		'<div class="honeyBlogContainer">';
	$blog .= 			'<p>Keine Eintr&auml;ge vorhanden</p>';
	$blog .= 			'<hr class="hrBlack" />';
	$blog .= 		'</div>';
	$blog .= 	'</section>';
}

foreach($blogItemList as $blogItem)
{
	$blog .= 	'<section class="honeyBlogSection">';
	$blog .= 		'<div class="honeyBlogContainer">';
	$blog .= 			'<h2>'.$blogItem->title.'</h2>';
	$blog .= 			'<img src="'.$blogItem->image.'" class="img-responsive" alt="'.$blogItem->title.'" />';
	$blog .= 			'<p>'.$blogItem->description.'</p>';	//class="lead text-muted"
	//TODO: $blog .= 			'<p><input type="button" class="buttonBigYellow" id="btnBlogDetailId'.$blogItem->id.'" value="Details"></p>';
	$blog .= 			'<hr class="hrBlack" />';
	$blog .= 		'</div>';
	$blog .= 	'</section>';
}

//TODO: 
/*$blog .= 	'<section class="honeyBlogSection">';
$blog .= 		'<div class="honeyBlogContainer">';
$blog .= 			'<p><input type="button" class="buttonBigBlue" id="btnBlogMore" value="Mehr anzeigen"></p>';
$blog .= 			'<hr class="hrBlack" />';
$blog .= 		'</div>';
$blog .= 	'</section>';*/
$blog .= 	'<br /><br />';

$data = array("Blog" => $blog);

echo json_encode($data);
?>