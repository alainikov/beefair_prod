<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get wantedPoster
\******************************************************************************/

//headers
header("Access-Control-Allow-Origin: *");
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

$wantedPoster = "";
$company["name"] = "";
$company["picture"] = $config["wantedPoster"]["pictureUnknown"];
$company["contactPerson"] = "";
$company["street"] = "";
$company["zipCode"] = "";
$company["city"] = "";
$company["countryName"] = "";
$company["remarks"] = "";
$company["special"] = "";
	
if (isset($_GET['addressId']) && $_GET['addressId'] > 0)
{
	$addressId = $_GET['addressId'];
	$query = str_replace("{0}", $addressId, $config["mysql"]["wantedPoster"]["select"]);

	$connection = new mysqli($config["mysql"]["host"], $config["mysql"]["id"], $config["mysql"]["pw"], $config["mysql"]["db"]);

	if ($connection->connect_errno)
	{
		echo "Error: Failed to make a MySQL connection, here is why: \n";
		echo "Errno: " . $connection->connect_errno . "\n";
		echo "Error: " . $connection->connect_error . "\n";	
		exit;
	}

	if (!$connection->set_charset("utf8"))
	{
		echo "Error loading character set utf8:" . $connection->error;
		exit;
	}

	if (!$result = $connection->query($query)) 
	{
		echo "Errno: " . $connection->errno . "\n";
		echo "Error: " . $connection->error . "\n";	
		exit;
	}

	if ($row = $result->fetch_assoc())
	{
		$company["name"] = $row['storeName'];
		$company["picture"] = $row['picture'] != "" ? $row['picture'] : $config["wantedPoster"]["pictureUnknown"];
		$company["contactPerson"] = $row['storeName'];
		$company["street"] = $row['street'];
		$company["zipCode"] = $row['zipCode'];
		$company["city"] = $row['city'];
		$company["countryName"] = $row['countryName'];
		$company["remarks"] = $row['remarks'];
		$company["special"] = "";
	}
	else
	{
		exit;
	}
}

$wantedPoster = 	'<div id="wantedPosterMain">';
$wantedPoster .= 		'<div id="wantedPosterHeader">';
$wantedPoster .= 			'<h1>'.$company["name"].'</h1>';
$wantedPoster .= 		'</div>';
$wantedPoster .= 		'<div id="wantedPosterContent">';
$wantedPoster .= 			'<div id="wantedPosterTablePicture">';
$wantedPoster .= 				'<div id="wantedPosterPicture" style="background:url('.$company['picture'].') no-repeat center;">';
$wantedPoster .= 					'<p align="right"><img src="img/wantedPoster/paperclip.png" width="120px" alt="'.$company['name'].'"></p>';
$wantedPoster .= 				'</div>';
$wantedPoster .= 				'<div id="wantedPosterTable">';
$wantedPoster .= 					'<table>';
$wantedPoster .= 						'<tr>';
$wantedPoster .= 							'<td width="120px" height="32px" valign="top"><p><b>Name:</b></p></td>';
$wantedPoster .= 							'<td width="20px">&nbsp;</td>';
$wantedPoster .= 							'<td width="180px" valign="top"><p>'.$company["name"].'</p></td>';
$wantedPoster .= 						'</tr>';
$wantedPoster .= 						'<tr>';
$wantedPoster .= 							'<td width="120px" height="32px" valign="top"><p><b>Kontaktperson:</b></p></td>';
$wantedPoster .= 							'<td width="20px">&nbsp;</td>';
$wantedPoster .= 							'<td width="180px" valign="top"><p>'.$company["contactPerson"].'</p></td>';
$wantedPoster .= 						'</tr>';
$wantedPoster .= 						'<tr>';
$wantedPoster .= 							'<td width="120px" height="32px" valign="top"><p><b>Strasse:</b></p></td>';
$wantedPoster .= 							'<td width="20px">&nbsp;</td>';
$wantedPoster .= 							'<td width="180px" valign="top"><p>'.$company["street"].'</p></td>';
$wantedPoster .= 						'</tr>';
$wantedPoster .= 						'<tr>';
$wantedPoster .= 							'<td width="120px" height="32px" valign="top"><p><b>PLZ/Ort:</b></p></td>';
$wantedPoster .= 							'<td width="20px">&nbsp;</td>';
$wantedPoster .= 							'<td width="180px" valign="top"><p>'.$company["zipCode"]." ".$company["city"].'</p></td>';
$wantedPoster .= 						'</tr>';
$wantedPoster .= 						'<tr>';
$wantedPoster .= 							'<td width="120px" height="32px" valign="top"><p><b>Land:</b></p></td>';
$wantedPoster .= 							'<td width="20px">&nbsp;</td>';
$wantedPoster .= 							'<td width="180px"><p>'.$company["countryName"].'</p></td>';
$wantedPoster .= 						'</tr>';
$wantedPoster .= 						'<tr>';
$wantedPoster .= 							'<td colspan="3">&nbsp;</td>';
$wantedPoster .= 						'</tr>';
$wantedPoster .= 					'</table>';
$wantedPoster .= 				'</div>';
$wantedPoster .= 			'</div>';
$wantedPoster .= 			'<div id="wantedPosterDescription">';
$wantedPoster .= 				'<p><b>Beschreibung:</b></p>';
$wantedPoster .= 				'<p>'.$company["remarks"].'</p>';
$wantedPoster .= 			'</div>';
$wantedPoster .= 			'<div id="wantedPosterSpecial">';
$wantedPoster .= 				'<p><b>Spezielles:</b></p>';
$wantedPoster .= 				'<p>'.$company["special"].'</p>';
$wantedPoster .= 			'</div>';
$wantedPoster .= 			'<div id="wantedPosterMap">';
$wantedPoster .= 				'<p><b>Map:</b></p>';
$wantedPoster .= 				'<p>Ermittle Position: <span id="wantedPosterStatus">suchen...</span></p>';
$wantedPoster .= 			'</div>';
$wantedPoster .= 		'</div>';
$wantedPoster .= 		'<div id="wantedPosterFooter">';
$wantedPoster .= 			'<p>&nbsp;</p>';
$wantedPoster .= 		'</div>';
$wantedPoster .= 	'</div>';

$data = array("WantedPoster" => $wantedPoster);

echo json_encode($data);
?>