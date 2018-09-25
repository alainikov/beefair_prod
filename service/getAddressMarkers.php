<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get address markers
\******************************************************************************/

//headers
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

function parseToXML($htmlStr)
{
	$xmlStr = str_replace('<', '&lt;', $htmlStr);
	$xmlStr = str_replace('>', '&gt;', $xmlStr);
	$xmlStr = str_replace('"', '&quot;', $xmlStr);
	$xmlStr = str_replace("'", '&#39;', $xmlStr);
	$xmlStr = str_replace("&", '&amp;', $xmlStr);
	return $xmlStr;
}

$query = $config["mysql"]["treasureMap"]["select"];
$rows = $databaseCtrl->query($query);

//header("Content-type: text/xml");

// Start XML file, echo parent node
$addressMarkers =	'<markers>';

// Iterate through the rows, printing XML nodes for each
foreach ($rows as &$row)
{
	// Add to XML document node
	$addressMarkers .=	'<marker ';
	$addressMarkers .=	'name="' . parseToXML($row['storeName']) . '" ';
	$addressMarkers .=	'address="' . parseToXML($row['street'] . ", " . $row['zipCode'] . " ".$row['city']) . '" ';
	$addressMarkers .=	'lat="' . $row['latitude'] . '" ';
	$addressMarkers .=	'lng="' . $row['longitude'] . '" ';
	$addressMarkers .=	'type="' . $row['categoryId'] . '" ';
	$addressMarkers .=	'/>';
}

// End XML file
$addressMarkers .=	'</markers>';

$data = array("AddressMarkers" => $addressMarkers);

echo json_encode($data);
?>
