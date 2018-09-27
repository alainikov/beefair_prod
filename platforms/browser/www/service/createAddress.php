<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: create address
\******************************************************************************/

//headers
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

function is_decimal($val)
{
    return is_numeric($val) && floor($val) != $val;
}

$createAddress = "";
$emailTo = $config["emailTo"];

// validation expected data exists 
if (!isset($_GET['treasureMapShopType']) ||
	!isset($_GET['treasureMapCategory']) ||
	!isset($_GET['treasureMapName']) ||
	!isset($_GET['treasureMapDescription']) ||
	!isset($_GET['treasureMapStreet']) ||
	!isset($_GET['treasureMapZipCode']) ||
	!isset($_GET['treasureMapCity']) ||
	!isset($_GET['treasureMapCountry']) ||
	!isset($_GET['treasureMapPhone']) ||
	!isset($_GET['treasureMapMobile']) ||
	!isset($_GET['treasureMapFax']) ||
	!isset($_GET['treasureMapEmail']) ||
	!isset($_GET['treasureMapWebsite']) ||
	!isset($_GET['treasureMapLatitude']) ||
	!isset($_GET['treasureMapLongitude']))
{
	$createAddress = '<font color="#bc1414"><b>Ein interner Fehler beim Eintragen des neuen Shops ist entstanden. <br />Schreib uns doch bitte auf <a href="mailto:'.$emailTo.'">'.$emailTo.'</a></b></font><br /><br />';
}
else
{
	$shopTypeId = $_GET['treasureMapShopType']; 			// required
	$categoryId = $_GET['treasureMapCategory']; 			// required
	$name = $_GET['treasureMapName']; 						// required
	$description = $_GET['treasureMapDescription'];			// not required
	$street = $_GET['treasureMapStreet']; 					// required one of these
	$zipCode = $_GET['treasureMapZipCode']; 				// required one of these
	$city = $_GET['treasureMapCity']; 						// required one of these
	$countryId = $_GET['treasureMapCountry']; 				// required one of these
	$phone = $_GET['treasureMapPhone']; 					// not required
	$mobile = $_GET['treasureMapMobile']; 					// not required
	$fax = $_GET['treasureMapFax']; 						// not required
	$email = $_GET['treasureMapEmail']; 					// not required
	$website = $_GET['treasureMapWebsite']; 				// not required
	$latitude = $_GET['treasureMapLatitude']; 				// required one of these
	$longitude = $_GET['treasureMapLongitude']; 			// required one of these

	//TODO: latitude/longitude or address, countryId
	$picture = "";			//TODO: picture upload
	$shopId = $shopCtrl->createShop($name, $description);
		
	if ($shopId == 0)
	{
		$createAddress = '<font color="#bc1414"><b>Ein interner Fehler beim Eintragen des neuen Shops ist entstanden. <br />Schreib uns doch bitte auf <a href="mailto:'.$emailTo.'">'.$emailTo.'</a></b></font><br /><br />';
	}
	else
	{
		$addressCtrl->createAddress($shopId, $shopTypeId, $categoryId, $name, $street, $zipCode, $city, $countryId, $phone, $mobile, $fax, $email, $website, $description, $picture, $latitude, $longitude);
	}
}

$data = array("CreateAddress" => $createAddress);

echo json_encode($data);
?>