<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    shop controller
\******************************************************************************/

class ShopController
{
	private $config;
	private $database;
	private $tableController;
	private $shops;
	private $shopList;

	public function __construct($config, $database)
	{
		$this->reset();
		
		$this->config = $config;
		$this->database = $database;
		$this->tableController = new TableController($config);
	}

	private function reset()
	{
		$this->config = array();
		$this->database = null;
		$this->tableController = null;
		$this->shops = array();
		$this->shopList = array();
	}

	private function setShops()
	{
		$this->shops = $this->database->query($this->config["mysql"]["shop"]["select"]);
		$this->shopList = array();
		
		for ($i = 0; $i < count($this->shops); $i++)
		{
			$shop = new Shop
			(
				$this->shops[$i]["id"], 
				$this->shops[$i]["name"], 
				$this->shops[$i]["description"]
			);

			$this->shopList[count($this->shopList)] = $shop;
		}
	}
	
	public function createShop($name, $description)
	{
		$insertSql = $this->config["mysql"]["shop"]["insert"];
		$insertSql = str_replace("{0}", $name, $insertSql);
		$insertSql = str_replace("{1}", $description, $insertSql);
		
		return $this->database->query($insertSql);
	}

	public function getShops()
	{
		$this->setShops();

		return $this->shops;
	}
	
	public function getShopList()
	{
		$this->setShops();

		return $this->shopList;
	}

	public function __get($property)
	{
		if (property_exists($this, $property))
		{
			return $this->$property;
		} 
	} 

	public function __set($property, $value)
	{
		if (property_exists($this, $property))
		{
			$this->$property = $value;
		}

		return $this;
	}
}
?>
