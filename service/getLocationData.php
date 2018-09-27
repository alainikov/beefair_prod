<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get locationData
\******************************************************************************/

//headers
header("Access-Control-Allow-Origin: *");
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

//TODO: set in config
$title = "Adressverzeichnis"; // <span>FAIRTRADE</span>";
$info = "<p>Hier findest du alle unsere Shops von teils FairTrade bis ganz FairTrade ist von allem was dabei</p>";
$info .= "<p><font color='#bc1414'>Klicke auf den jeweiligen Shops f&uuml;r detailierte Informationen</font></p>";
$tableId = "locationDataTable";
$fieldId = "locationDataLine";
$fields = array();
$captions = array();    
$fields[count($fields)] = "shopName";
$fields[count($fields)] = "shopTypeName";
$fields[count($fields)] = "categoryName";
$fields[count($fields)] = "street";
$fields[count($fields)] = "zipCode";
$fields[count($fields)] = "city";
$fields[count($fields)] = "countryName";
$fields[count($fields)] = "website";
$captions[count($captions)] = "Name";
$captions[count($captions)] = "Typ";
$captions[count($captions)] = "Kategorie";
$captions[count($captions)] = "Strasse";
$captions[count($captions)] = "PLZ";
$captions[count($captions)] = "Ort";
$captions[count($captions)] = "Land";
$captions[count($captions)] = "Website";

$addresses = array();
$addresses = $addressCtrl->getAddresses();

$locationData = 	'<div id="locationData">';// style="margin:0px 30px 0px 30px;">';
$locationData .= 		'<br /><br />';
$locationData .= 		$tableController->getTable($tableId, $title, $info, $addresses, $fieldId, $fields, $captions);
$locationData .= 		'<br /><br />';
$locationData .= 	'</div>';

$data = array("LocationData" => $locationData);

echo json_encode($data);
?>