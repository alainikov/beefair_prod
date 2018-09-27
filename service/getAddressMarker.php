<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get address marker
\******************************************************************************/

//headers
header("Access-Control-Allow-Origin: *");
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

$addressMarker = "";

if (isset($_GET['addressId']) && $_GET['addressId'] > 0)
{
	$query = str_replace("{0}", $_GET['addressId'], $config["mysql"]["wantedPoster"]["select"]);
	$rows = $databaseCtrl->query($query);

	//header("Content-type: text/xml");

	// Start XML file, echo parent node
	$addressMarker = 	'<markers>';

	// Iterate through the rows, printing XML nodes for each
	foreach ($rows as &$row)
	{
		// Add to XML document node
		$addressMarker .= 	'<marker ';
		$addressMarker .= 	'name="' . parseToXML($row['storeName']) . '" ';
		$addressMarker .= 	'address="' . parseToXML($row['street'] . ", " . $row['zipCode'] . " ".$row['city']) . '" ';
		$addressMarker .= 	'lat="' . $row['latitude'] . '" ';
		$addressMarker .= 	'lng="' . $row['longitude'] . '" ';
		$addressMarker .= 	'type="' . $row['categoryId'] . '" ';
		$addressMarker .= 	'/>';
	}

	// End XML file
	$addressMarker .= 	'</markers>';
}

$data = array("AddressMarker" => $addressMarker);

echo json_encode($data);
?>
