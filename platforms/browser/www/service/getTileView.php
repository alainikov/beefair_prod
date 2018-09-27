<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get tileView
\******************************************************************************/

//headers
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

$tileView = 	'<div id="tileViewCenter">';
$tileView .= 		'<a class="aLinkBig" href="#honeyBlogMain"><div id="honeyBlogTile">Honey Blog</div></a>';
$tileView .= 		'<a class="aLinkBig" href="#treasureMapMain"><div id="treasureMapTile">Schatzkarte</div></a>';
$tileView .= 		'<a class="aLinkBig" href="#locationDataMain"><div id="locationDataTile">Adressverzeichnis</div></a>';
$tileView .= 	'</div>';

$data = array("TileView" => $tileView);

echo json_encode($data);
?>
