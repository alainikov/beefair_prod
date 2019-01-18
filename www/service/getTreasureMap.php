<?php
/******************************************************************************\
* Project:     Bee Fair
* Description: Fair Trade Market
* Author:      Arch A. Germann
* Document:    Service: get treasureMap
\******************************************************************************/

//headers
header("Access-Control-Allow-Origin: *");
header("Content:application/json");

//includes
require_once (dirname(__FILE__)."/../config/init.php");
require_once (dirname(__FILE__)."/init.php");

//select data
$shopTypeList = $shopTypeCtrl->getShopTypeList();
$categoryList = $categoryCtrl->getMainCategoryList();
$countryList = $countryCtrl->getCountryList();

$treasureMap = '<div id="treasureMapTop">';
$treasureMap .= 	'<h1>Schatzkarte</h1>';
$treasureMap .= 	'<p>Ermittle deine Position: <span id="treasureMapStatus">suchen...</span></p>';
$treasureMap .= 	'<div id="treasureMapAddNewEntry">';
$treasureMap .= 		'<input type="button" class="buttonBigYellow" id="btnShowNewEntry" value="Neuer Eintrag" />';
$treasureMap .= 	'</div>';

$treasureMap .= 	'<form id="treasureMapNewEntry">';
$treasureMap .=			'<div class="col-md-3">';
$treasureMap .=			'<div class="form-group">';
$treasureMap .= 			'<label>Shop-Typ:</label>';
$treasureMap .= 			'<select id="selTreasureMapShopType" class="form-control">';

$treasureMap .= 				'<option value="0" selected>-- Bitte ausw&auml;hlen --</option>';

foreach($shopTypeList as $shopType)
{
	$treasureMap .= 			'<option value="'.$shopType->id.'">'.$shopType->name.'</option>';
}

$treasureMap .= 			'</select>';
$treasureMap .= 		'</div>';
$treasureMap .= 		'</div>';

$treasureMap .=			'<div class="col-md-3">';
$treasureMap .=			'<div class="form-group">';
$treasureMap .= 			'<label>Kategorie:</label>';
$treasureMap .= 			'<select id="selTreasureMapCategory" class="form-control">';
$treasureMap .= 				'<option value="0" selected>-- Bitte ausw&auml;hlen --</option>';

foreach($categoryList as $category)
{
	$treasureMap .= 			'<option value="'.$category->id.'">'.$category->name.'</option>';
}

$treasureMap .= 			'</select>';
$treasureMap .= 		'</div>';
$treasureMap .= 		'</div>';

$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>Name:</label><input type="text" class="form-control" id="txtTreasureMapName" value="" /></div></div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>Beschreibung:</label><textarea id="txtaTreasureMapDescription" class="entryTextarea form-control"></textarea></div></div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>Strasse:</label><input type="text" class="form-control" id="txtTreasureMapStreet" value="" /></div></div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>PLZ:</label><input type="text" class="form-control" id="txtTreasureMapZipCode" value="" /></div></div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>Ort:</label><input type="text" class="form-control" id="txtTreasureMapCity" value="" /></div></div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>';
$treasureMap .= 			'Land:';
$treasureMap .= 		'</label>';
$treasureMap .= 		'';
$treasureMap .= 			'<select id="selTreasureMapCountry" class="form-control">';
$treasureMap .= 				'<option value="0" selected>-- Bitte ausw&auml;hlen --</option>';

foreach($countryList as $country)
{
	$treasureMap .= 			'<option value="'.$country->id.'">'.$country->name.'</option>';
}

$treasureMap .= 			'</select>';
$treasureMap .= 		'</div>';
$treasureMap .= 		'</div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>Telefon:</label><input type="text" class="form-control" id="txtTreasureMapPhone" value="" /></div></div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>Mobile:</label><input type="text" class="form-control" id="txtTreasureMapMobile" value="" /></div></div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>Fax:</label><input type="text" class="form-control" id="txtTreasureMapFax" value="" /></div></div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>Email:</label><input type="text" class="form-control" id="txtTreasureMapEmail" value="" /></div></div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>Website:</label><input type="text" class="form-control" id="txtTreasureMapWebsite" value="" /></div></div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>Breitengrad:</label><input type="number" class="form-control" id="txtTreasureMapLatitude" step="0.1" value="0" /></div></div>';
$treasureMap .= 		'<div class="col-md-3"><div class="form-group"><label>Längengrad:</label><input type="number" class="form-control" id="txtTreasureMapLongitude" step="0.1" value="0" /></div></div>';

$treasureMap .=  		'<div class="col-md-12 locationsubmitcontrols">';
$treasureMap .= 			'<div class="col-md-12">';
$treasureMap .= 				'<div id="treasureMapMessage"></div>';
$treasureMap .= 			'</div>';
$treasureMap .= 		'<div class="col-md-12">';
$treasureMap .=				'<input type="button" id="btnAddNewEntry" class="buttonBigGreen" value="Hinzufügen" />';
$treasureMap .=				'<input type="reset" id="btnResetNewEntry" class="buttonBigRed" value="Leeren" />';
$treasureMap .= 		'</div>';
$treasureMap .= 	'</div>';
$treasureMap .= 	'</form>';
$treasureMap .= '</div>';
$treasureMap .= '<div id="treasureMap"></div>';

$data = array("TreasureMap" => $treasureMap);

echo json_encode($data);
?>