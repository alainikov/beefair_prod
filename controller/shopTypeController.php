<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    shopType controller
\******************************************************************************/

class ShopTypeController
{
	private $config;
	private $database;
	private $tableController;
	private $shopTypes;
	private $shopTypeList;

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
		$this->shopTypes = array();
		$this->shopTypeList = array();
	}

	private function setShopTypes()
	{
		$this->shopTypes = $this->database->query($this->config["mysql"]["shopType"]["select"]);
		$this->shopTypeList = array();
		
		for ($i = 0; $i < count($this->shopTypes); $i++)
		{
			$shopType = new ShopType
			(
				$this->shopTypes[$i]["id"], 
				$this->shopTypes[$i]["name"], 
				$this->shopTypes[$i]["description"]
			);

			$this->shopTypeList[count($this->shopTypeList)] = $shopType;
		}
	}
	
	public function createShopType($name, $description)
	{
		$insertSql = $this->config["mysql"]["shopType"]["insert"];
		$insertSql = str_replace("{0}", $name, $insertSql);
		$insertSql = str_replace("{1}", $description, $insertSql);
		
		return $this->database->query($insertSql);
	}

	public function getShopTypes()
	{
		$this->setShopTypes();

		return $this->shopTypes;
	}
	
	public function getShopTypeList()
	{
		$this->setShopTypes();

		return $this->shopTypeList;
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
