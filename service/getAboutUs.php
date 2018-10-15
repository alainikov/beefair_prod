<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get aboutus
\******************************************************************************/

//headers
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

$aboutUs = '<blockquote>';
$aboutUs .=  '<p>Unser Ziel ist es eine Orientierungsm&ouml;glickeit f&uuml;r einen humanen und &ouml;kologischen Einkauf zu schaffen.</p>';
$aboutUs .= '<footer>Eure BEEFAIR-FREUNDE</footer>';
$aboutUs .= '</blockquote>';

$data = array("AboutUs" => $aboutUs);

echo json_encode($data);
?>
