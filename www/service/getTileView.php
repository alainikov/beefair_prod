<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get tileView
\******************************************************************************/

//headers
header("Access-Control-Allow-Origin: *");
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

// $tileView = 	'<div id="tileViewCenter">';
$tileView = 		'<a class="aLinkBig" id="honeyBlogTile" href="#honeyBlogMain">Honey Blog</a>';
$tileView .= 		'<a class="aLinkBig" id="treasureMapTile" href="#treasureMapMain">Schatzkarte</a>';
$tileView .= 		'<a class="aLinkBig" id="locationDataTile" href="#locationDataMain">Adressverzeichnis</a>';
//$tileView .= 	'</div>';

$data = array("TileView" => $tileView);

echo json_encode($data);
?>
