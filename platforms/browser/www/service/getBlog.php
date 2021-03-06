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

//TODO: MLA
$blog = 		'<div class="honeyBlogContainer">';
$blog .= 			'<h1>Honey Blog</h1>';

//TODO: MLA
if (count($blogItemList) <= 0)
{
	$blog .= 		'<div class="honeyBlogContainer">';
	$blog .= 			'<p>Keine Eintr&auml;ge vorhanden</p>';
	$blog .= 		'</div>';
}

//TODO: MLA
foreach($blogItemList as $blogItem)
{
	$blog .= 			'<h2>'.$blogItem->title.'</h2>';
	$blog .= 			'<p><img src="'.$blogItem->image.'" alt="'.$blogItem->title.'" /></p>';
	$blog .= 			'<p>'.$blogItem->description.'</p>';	//class="lead text-muted"
	//TODO: $blog .= 			'<p><input type="button" class="buttonBigYellow" id="btnBlogDetailId'.$blogItem->id.'" value="Details"></p>';
	// $blog .= 			'<hr class="hrBlack" />';
}

//TODO: 
/*$blog .= 	'<section class="honeyBlogSection">';
$blog .= 		'<div class="honeyBlogContainer">';
$blog .= 			'<p><input type="button" class="buttonBigBlue" id="btnBlogMore" value="Mehr anzeigen"></p>';
$blog .= 			'<hr class="hrBlack" />';
$blog .= 		'</div>';
$blog .= 	'</section>';*/
// $blog .= 	'<br /><br />';

$data = array("Blog" => $blog);

echo json_encode($data);
?>