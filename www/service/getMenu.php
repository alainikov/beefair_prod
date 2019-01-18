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
$menu .=  						'<img src="img/logo/logo_transparent.png" />';
$menu .= 					'</a>';
$menu .=  				'</div>';
$menu .=  				'<div id="navBar" class="navbar-collapse collapse">';
$menu .=  					'<ul class="nav navbar-nav">';

for ($i = 1; $i < count($labels["menu"]); $i++)
{
	$j = 0;
	
	if (array_key_exists($j, $labels["menu"][$i]))
	{
		$menu .=  				'<li class="dropdown">';
		$menu .=  					'<a href="'.$labels["menu"][$i]["url"].'" id="'.$labels["menu"][$i]["id"].'" data-toggle="dropdown">';
		$menu .=  						$labels["menu"][$i]["name"].'&nbsp;<span class="caret"></span></a>';
		$menu .=  						'<ul class="dropdown-menu" role="menu" aria-labelledby="'.$labels["menu"][$i]["id"].'">';

		while (array_key_exists($j, $labels["menu"][$i]))			
		{
			$menu .=  						'<li role="presentation"><a role="menuitem" tabindex="-1" href="'.$labels["menu"][$i][$j]["url"].'" id="'.$labels["menu"][$i][$j]["id"].'">'.$labels["menu"][$i][$j]["name"].'</a></li>';
			$j++;
		}

		$menu .=  						'</ul>';
		$menu .=  				'</li>';
	}
	else
	{
		$menu .=  				'<li>';
		$menu .=  					'<a href="'.$labels["menu"][$i]["url"].'" id="'.$labels["menu"][$i]["id"].'">'.$labels["menu"][$i]["name"].'</a>';
		$menu .=  				'</li>';
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