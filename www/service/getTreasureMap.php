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

$treasureMap = '<form name="frmTreasureMap">';
$treasureMap .= '<div id="treasureMapTop">';
$treasureMap .= 	'<h1>Schatzkarte</h1>';
$treasureMap .= 	'<p>Ermittle deine Position: <span id="treasureMapStatus">suchen...</span></p>';
$treasureMap .= 	'<div id="treasureMapAddNewEntry">';
$treasureMap .= 		'<input type="button" class="buttonBigYellow" id="btnShowNewEntry" value="Neuer Eintrag" />';
$treasureMap .= 	'</div>';
$treasureMap .= 	'<div id="treasureMapNewEntry">';
$treasureMap .= 		'<div class="entryTitle">';
$treasureMap .= 			'Shop-Typ:';
$treasureMap .= 		'</div>';
$treasureMap .= 		'<div class="entryField">';
$treasureMap .= 			'<select id="selTreasureMapShopType">';

$treasureMap .= 				'<option value="0" selected>-- Bitte ausw&auml;hlen --</option>';

foreach($shopTypeList as $shopType)
{
	$treasureMap .= 			'<option value="'.$shopType->id.'">'.$shopType->name.'</option>';
}

$treasureMap .= 			'</select>';
$treasureMap .= 		'</div>';
$treasureMap .= 		'<div class="entryTitle">';
$treasureMap .= 			'Kategorie:';
$treasureMap .= 		'</div>';
$treasureMap .= 		'<div class="entryField">';
$treasureMap .= 			'<select id="selTreasureMapCategory">';
$treasureMap .= 				'<option value="0" selected>-- Bitte ausw&auml;hlen --</option>';

foreach($categoryList as $category)
{
	$treasureMap .= 			'<option value="'.$category->id.'">'.$category->name.'</option>';
}

$treasureMap .= 			'</select>';
$treasureMap .= 		'</div>';
$treasureMap .= 		'<div class="entryTitle">Name:</div><div class="entryField"><input type="text" id="txtTreasureMapName" value="" /></div>';
$treasureMap .= 		'<div class="entryTitle">Beschreibung:</div><div class="entryText"><textarea id="txtaTreasureMapDescription" class="entryTextarea"></textarea></div>';
$treasureMap .= 		'<div class="entryTitle">Strasse:</div><div class="entryField"><input type="text" id="txtTreasureMapStreet" value="" /></div>';
$treasureMap .= 		'<div class="entryTitle">PLZ:</div><div class="entryField"><input type="text" id="txtTreasureMapZipCode" value="" /></div>';
$treasureMap .= 		'<div class="entryTitle">Ort:</div><div class="entryField"><input type="text" id="txtTreasureMapCity" value="" /></div>';
$treasureMap .= 		'<div class="entryTitle">';
$treasureMap .= 			'Land:';
$treasureMap .= 		'</div>';
$treasureMap .= 		'<div class="entryField">';
$treasureMap .= 			'<select id="selTreasureMapCountry">';
$treasureMap .= 				'<option value="0" selected>-- Bitte ausw&auml;hlen --</option>';

foreach($countryList as $country)
{
	$treasureMap .= 			'<option value="'.$country->id.'">'.$country->name.'</option>';
}

$treasureMap .= 			'</select>';
$treasureMap .= 		'</div>';
$treasureMap .= 		'<div class="entryTitle">Telefon:</div><div class="entryField"><input type="text" id="txtTreasureMapPhone" value="" /></div>';
$treasureMap .= 		'<div class="entryTitle">Mobile:</div><div class="entryField"><input type="text" id="txtTreasureMapMobile" value="" /></div>';
$treasureMap .= 		'<div class="entryTitle">Fax:</div><div class="entryField"><input type="text" id="txtTreasureMapFax" value="" /></div>';
$treasureMap .= 		'<div class="entryTitle">Email:</div><div class="entryField"><input type="text" id="txtTreasureMapEmail" value="" /></div>';
$treasureMap .= 		'<div class="entryTitle">Website:</div><div class="entryField"><input type="text" id="txtTreasureMapWebsite" value="" /></div>';
$treasureMap .= 		'<div class="entryTitle">Breitengrad:</div><div class="entryField"><input type="number" id="txtTreasureMapLatitude" step="0.1" value="0" /></div>';
$treasureMap .= 		'<div class="entryTitle">Längengrad:</div><div class="entryField"><input type="number" id="txtTreasureMapLongitude" step="0.1" value="0" /></div>';
$treasureMap .= 		'<div id="treasureMapMessage"></div>';
$treasureMap .=			'<input type="button" class="buttonBigGreen" id="btnAddNewEntry" value="Hinzufügen" />';
//$treasureMap .= 			'<input type="reset" class="buttonBigRed" id="btnResetNewEntry" value="Leeren" />';
$treasureMap .=			'<input type="reset" class="buttonBigRed" value="Leeren" />';
$treasureMap .= 	'</div>';
$treasureMap .= '</div>';
$treasureMap .= '</form>';
$treasureMap .= '<div id="treasureMap"></div>';

$data = array("TreasureMap" => $treasureMap);

echo json_encode($data);
?>