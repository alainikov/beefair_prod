<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get carousel
\******************************************************************************/

//headers
header("Access-Control-Allow-Origin: *");
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

$carousel = 	'<ol class="carousel-indicators">';

for ($i = 0; $i < count($config["logo"]); $i++)
{
	if ($i == 0)
	{
		$carousel .=	'<li data-target="#" data-slide-to="'.$i.'" class="active"></li>';
	}
	else
	{
		$carousel .= 	'<li data-target="#" data-slide-to="'.$i.'"></li>';
	}
}

$carousel .= 	'</ol>';
$carousel .= 	'<div id="carouselList" class="carousel-inner" role="listbox">';

for ($i = 0; $i < count($config["logo"]); $i++)
{
	$carousel .= 	'<div id="carouselItem" class="item active">';
	$carousel .= 		'<img id="carouselImage" class="first-slide" src="'.$config["logo"][$i].'" alt="BIO is IN">';
	$carousel .= 		'<div id="carouselContainer">';
	$carousel .= 			'<div id="carouselCaption" class="carousel-caption">';
	$carousel .= 				'<h1>BEEFAIR</h1>';
	$carousel .= 				'<h2>FAIRTRADE PORTAL</h2>';
	$carousel .= 				'<p><font color="#000000">Hast Du Fairtrade Angebote oder gute Ideen?</font></p>';
	$carousel .= 				'<p><a class="btn btn-lg btn-primary" href="#contactFormMain" role="button">Jetzt Mitmachen</a></p>';
	$carousel .= 			'</div>';
	$carousel .= 		'</div>';
	$carousel .= 	'</div>';
}

$carousel .= 	'</div>';
$data = array("Carousel" => $carousel);

echo json_encode($data);
?>