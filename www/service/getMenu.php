<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get menu
\******************************************************************************/

//headers
header("Access-Control-Allow-Origin: *");
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

$menu =  	'<div class="container-fluid">';
$menu .=  		'<nav class="navbar navbar-inverse navbar-static-top">';
$menu .=  			'<div id="navContainerTop">';
$menu .=  				'<div class="navbar-header">';
$menu .=					'<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navBar" aria-expanded="false">';
$menu .=					'<span class="sr-only">Toggle navigation</span>';
$menu .=					'<span class="icon-bar"></span>';
$menu .=					'<span class="icon-bar"></span>';
$menu .=					'<span class="icon-bar"></span>';
$menu .=					'</button>';
$menu .=  					'<a class="navbar-brand" href="'.$labels["menu"][0]["url"].'">';
$menu .=  						'<img src="../www/img/logo/logo_transparent.png" />';
$menu .= 					'</a>';
$menu .=  				'</div>';
$menu .=  				'<div id="navBar" class="navbar-collapse collapse">';
$menu .=  					'<ul class="nav navbar-nav">';

for ($i = 1; $i < count($labels["menu"]); $i++)
{
	if (count($labels["menu"][$i]) > 2)
	{
		$menu .=  				'<li class="dropdown">';
		$menu .=  					'<a href="#'.$labels["menu"][$i]["url"].'" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">';
		$menu .=  						$labels["menu"][$i]["name"].'&nbsp;<span class="caret"></span></a>';
		$menu .=  					'<ul class="dropdown-menu">';

		for ($j = 1; $j < count($labels["menu"][$i]); $j++)
		{
			$menu .=  					'<li><a href="'.$labels["menu"][$i][$j]["url"].'">'.$labels["menu"][$i][$j]["name"].'</a></li>';
		}

		$menu .=  					'</ul>';
		$menu .=  				'</li>';
	}
	elseif (count($labels["menu"][$i]) == 2)
	{
		$menu .=  				'<li><a href="'.$labels["menu"][$i]["url"].'">'.$labels["menu"][$i]["name"].'</a></li>';
	}
}

$menu .=  					'</ul>';
$menu .=  				'</div>';
$menu .=  			'</div>';
$menu .=  		'</nav>';
$menu .=  	'</div>';

$data = array("Menu" => $menu);

echo json_encode($data);
?>