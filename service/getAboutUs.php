<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get aboutus
\******************************************************************************/

//headers
header("Access-Control-Allow-Origin: *");
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

$aboutUs = 	'<br><br><br><br>';
$aboutUs .= '<p class="textBig">Unser Ziel ist es eine Orientierungsm&ouml;glickeit f&uuml;r einen humanen und &ouml;kologischen Einkauf zu schaffen.<br><br>';
$aboutUs .= 'Eure BEEFAIR-FREUNDE</p>';
$aboutUs .= '<br><br><br><br>';

$data = array("AboutUs" => $aboutUs);

echo json_encode($data);
?>
