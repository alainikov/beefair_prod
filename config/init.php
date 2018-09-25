<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    init
\******************************************************************************/

header('Content-Type: text/html; charset=UTF-8');       //ISO-8859-1

//TODO: language
$_SESSION["language"] = "de";
$localModus = false;
$debugModus = false;
$config = array();

//ERROR
if ($debugModus)
{
	// Report all PHP errors (see changelog)
	error_reporting(E_ALL);
}
else
{
	// Turn off all error reporting
	error_reporting(0);
}

//DB
if ($localModus)
{
	//localhost
	$config["mysql"]["host"] = "localhost";
	$config["mysql"]["id"] = "root";
	$config["mysql"]["pw"] = "";
	$config["mysql"]["db"] = "beefair";
	$config["mysql"]["charset"] = "utf8";
}
else
{
	//PROD
	$config["mysql"]["host"] = "alainger.mysql.db.internal"; 		//"127.0.0.3";
	$config["mysql"]["id"] = "alainger_bf"; 						//"db307555_627";
	$config["mysql"]["pw"] = "sfzW_ud1M";
	$config["mysql"]["db"] = "alainger_bf";  						//"db307555_627";
	$config["mysql"]["charset"] = "utf8";
}

//code
$config['mysql']['code']['show'] = false;

//index
$config["logo"][0] = "img/logo/beefair01.jpg";

//wantedPoster
$config["wantedPoster"]["pictureUnknown"] = "img/wantedPoster/company/unknown.png";

//contact
$config["emailTo"] = "info@beefair.ch";
$config["emailSubject"] = "WEBSITE Kontakt";

//MYSQL selects										
//category
$config["mysql"]["category"]["select"] =			"SELECT bfc.`id`, bfc.`parentId`, bfc.`name`, bfc.`description` ".
													"FROM `bf_category` AS bfc ".
													"ORDER BY bfc.`name`";
$config["mysql"]["category"]["selectMain"] =		"SELECT bfc.`id`, bfc.`parentId`, bfc.`name`, bfc.`description` ".
													"FROM `bf_category` AS bfc ".
													"WHERE bfc.`parentId` = 0 ".
													"ORDER BY bfc.`name`";
$config["mysql"]["category"]["selectNotMain"] =		"SELECT bfc.`id`, bfc.`parentId`, bfc.`name`, bfc.`description` ".
													"FROM `bf_category` AS bfc ".
													"WHERE bfc.`parentId` > 0 ".
													"ORDER BY bfc.`name`";
$config["mysql"]["category"]["selectById"] =		"SELECT bfc.`id`, bfc.`parentId`, bfc.`name`, bfc.`description` ".
													"FROM `bf_category` AS bfc ".
													"WHERE bfc.`id` = {0} ".
													"ORDER BY bfc.`name`";
$config["mysql"]["category"]["selectByParentId"] =	"SELECT bfc.`id`, bfc.`parentId`, bfc.`name`, bfc.`description` ".
													"FROM `bf_category` AS bfc ".
													"WHERE bfc.`parentId` = {0} ".
													"ORDER BY bfc.`name`";
$config["mysql"]["category"]["insert"] = 			"INSERT INTO `bf_category` ".
													"(`parentId`, `name`, `description`) ".
													"VALUES ".
													"('{0}', '{1}', '{2}')";

//country
$config["mysql"]["country"]["select"] = "SELECT bfc.`id`, bfc.`name`, bfc.`iso` ".
										"FROM `bf_country` AS bfc";
$config["mysql"]["country"]["insert"] = "INSERT INTO `bf_country` ".
										"(`name`, `iso`) ".
										"VALUES ".
										"('{0}', '{1}')";
										
//blogItem
$config["mysql"]["blogItem"]["select"] =	"SELECT bfbi.`id`, bfbi.`title`, bfbi.`description`, bfbi.`image` ".
											"FROM `bf_blogitem` AS bfbi";
$config["mysql"]["blogItem"]["insert"] = 	"INSERT INTO `bf_blogitem` ".
											"(`name`, `description`, `image`) ".
											"VALUES ".
											"('{0}', '{1}', '{2}')";

//shop
$config["mysql"]["shop"]["select"] =    "SELECT bfs.`id`, bfs.`name`, bfs.`description` ".
										"FROM `bf_shop` AS bfs";
$config["mysql"]["shop"]["insert"] = 	"INSERT INTO `bf_shop` ".
										"(`name`, `description`) ".
										"VALUES ".
										"('{0}', '{1}')";
										
//shopType
$config["mysql"]["shopType"]["select"] =			"SELECT bfst.`id`, bfst.`name`, bfst.`description` ".
													"FROM `bf_shoptype` AS bfst";
$config["mysql"]["shopType"]["insert"] = 			"INSERT INTO `bf_shoptype` ".
													"(`name`, `description`) ".
													"VALUES ".
													"('{0}', '{1}')";
													
//fairTradeType
$config["mysql"]["fairTradeType"]["select"] =		"SELECT bfftt.`id`, bfftt.`name`, bfftt.`description` ".
													"FROM `bf_fairtradetype` AS bfftt";
$config["mysql"]["fairTradeType"]["insert"] = 		"INSERT INTO `bf_fairtradetype` ".
													"(`name`, `description`) ".
													"VALUES ".
													"('{0}', '{1}')";
				
//address
$config["mysql"]["address"]["select"] = "SELECT bfa.`id`, bfc.`name` AS 'shopName', bfst.`name` AS 'shopTypeName', bfcat.`name` AS 'categoryName', bfa.`name` AS 'storeName', bfa.`street`, bfa.`zipCode`, ".
										"bfa.`city`, bfcry.`name` AS 'countryName', bfa.`phone`, bfa.`mobile`, bfa.`fax`, bfa.`email`, ".
										"bfa.`website`, bfa.`remarks`, bfa.`latitude`, bfa.`longitude` ".
										"FROM `bf_address` AS bfa ".
										"INNER JOIN `bf_shop` AS bfc ON (bfc.`id` = bfa.`shopId`) ".
										"INNER JOIN `bf_shoptype` AS bfst ON (bfst.`id` = bfa.`shopTypeId`) ".
										"INNER JOIN `bf_category` AS bfcat ON (bfcat.`id` = bfa.`categoryId`) ".
										"INNER JOIN `bf_country` AS bfcry ON (bfcry.`id` = bfa.`countryId`)";
$config["mysql"]["address"]["insert"] =	"INSERT INTO `bf_address` ".
										"(`shopId`, `shopTypeId`, `categoryId`, `name`, `street`, `zipCode`, `city`, `countryId`, `phone`, `mobile`, `fax`, `email`, ".
										"`website`, `remarks`, `picture`, `latitude`, `longitude`) ".
										"VALUES ".
										"('{0}', '{1}', '{2}', '{3}', '{4}', '{5}', '{6}', '{7}', '{8}', '{9}', '{10}', '{11}', '{12}', '{13}', '{14}', '{15}', '{16}')";
													
//treasureMap
$config["mysql"]["treasureMap"]["select"] = "SELECT bfa.`id`, bfc.`name` AS 'shopName', bfst.`name` AS 'shopTypeName', bfa.`categoryId`, bfcat.`name` AS 'categoryName', bfa.`name` AS 'storeName', bfa.`street`, bfa.`zipCode`, ".
											"bfa.`city`, bfcry.`name` AS 'countryName', bfa.`phone`, bfa.`mobile`, bfa.`fax`, bfa.`email`, ".
											"bfa.`website`, bfa.`remarks`, bfa.`latitude`, bfa.`longitude` ".
											"FROM `bf_address` AS bfa ".
											"INNER JOIN `bf_shop` AS bfc ON (bfc.`id` = bfa.`shopId`) ".
											"INNER JOIN `bf_shoptype` AS bfst ON (bfst.`id` = bfa.`shopTypeId`) ".
											"INNER JOIN `bf_category` AS bfcat ON (bfcat.`id` = bfa.`categoryId`) ".
											"INNER JOIN `bf_country` AS bfcry ON (bfcry.`id` = bfa.`countryId`)";
$config["mysql"]["treasureMap"]["insert"] = "INSERT INTO `bf_address` ".
											"(`shopId`, `shopTypeId`, `categoryId`, `name`, `street`, `zipCode`, `city`, `countryId`, `phone`, `mobile`, ".
											"`fax`, `email`, `website`, `remarks`, `picture`, `latitude`, `longitude`) ".
											"VALUES ".
											"('{0}', '{1}', '{2}', '{3}', '{4}', '{5}', '{6}', '{7}', '{8}', '{9}', '{10}', '{11}', '{12}', '{13}', '{14}', '{15}', '{16}')";
											
//wantedPoster
$config["mysql"]["wantedPoster"]["select"] = 	"SELECT bfa.`id`, bfc.`name` AS 'shopName', bfst.`name` AS 'shopTypeName', bfa.`categoryId`, bfcat.`name` AS 'categoryName', bfa.`name` AS 'storeName', bfa.`street`, bfa.`zipCode`, ".
												"bfa.`city`, bfcry.`name` AS 'countryName', bfa.`phone`, bfa.`mobile`, bfa.`fax`, bfa.`email`, ".
												"bfa.`website`, bfa.`remarks`, bfa.`picture`, bfa.`latitude`, bfa.`longitude` ".
												"FROM `bf_address` AS bfa ".
												"INNER JOIN `bf_shop` AS bfc ON (bfc.`id` = bfa.`shopId`) ".
												"INNER JOIN `bf_shoptype` AS bfst ON (bfst.`id` = bfa.`shopTypeId`) ".
												"INNER JOIN `bf_category` AS bfcat ON (bfcat.`id` = bfa.`categoryId`) ".
												"INNER JOIN `bf_country` AS bfcry ON (bfcry.`id` = bfa.`countryId`) ".
												"WHERE bfa.`id` = {0}";
	
//includes
//controllers
require_once (dirname(__FILE__)."/language/".$_SESSION["language"].".php");
require_once (dirname(__FILE__)."/../controller/databaseController.php");
require_once (dirname(__FILE__)."/../controller/countryController.php");
require_once (dirname(__FILE__)."/../controller/blogItemController.php");
require_once (dirname(__FILE__)."/../controller/shopController.php");
require_once (dirname(__FILE__)."/../controller/shopTypeController.php");
require_once (dirname(__FILE__)."/../controller/fairTradeTypeController.php");
require_once (dirname(__FILE__)."/../controller/categoryController.php");
require_once (dirname(__FILE__)."/../controller/addressController.php");
require_once (dirname(__FILE__)."/../controller/tableController.php");
//entities
require_once (dirname(__FILE__)."/../entity/database.php");
require_once (dirname(__FILE__)."/../entity/country.php");
require_once (dirname(__FILE__)."/../entity/blogItem.php");
require_once (dirname(__FILE__)."/../entity/shop.php");
require_once (dirname(__FILE__)."/../entity/shopType.php");
require_once (dirname(__FILE__)."/../entity/fairTradeType.php");
require_once (dirname(__FILE__)."/../entity/category.php");
require_once (dirname(__FILE__)."/../entity/address.php");

//objects
$databaseCtrl = new DatabaseController($config);
$countryCtrl = new CountryController($config, $databaseCtrl);
$blogItemCtrl = new BlogItemController($config, $databaseCtrl);
$shopCtrl = new ShopController($config, $databaseCtrl);
$shopTypeCtrl = new ShopTypeController($config, $databaseCtrl);
$fairTradeTypeCtrl = new FairTradeTypeController($config, $databaseCtrl);
$categoryCtrl = new CategoryController($config, $databaseCtrl);
$addressCtrl = new AddressController($config, $databaseCtrl);
$tableController = new TableController($config);

//sql create
$databaseCtrl->create($config["mysql"]["host"], $config["mysql"]["id"], $config["mysql"]["pw"], $config["mysql"]["db"]);
?>
