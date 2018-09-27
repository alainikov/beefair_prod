<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    fairTradeType controller
\******************************************************************************/

class FairTradeTypeController
{
	private $config;
	private $database;
	private $tableController;
	private $fairTradeTypes;
	private $fairTradeTypeList;

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
		$this->fairTradeTypes = array();
		$this->fairTradeTypeList = array();
	}

	private function setFairTradeTypes()
	{
		$this->fairTradeTypes = $this->database->query($this->config["mysql"]["fairTradeType"]["select"]);
		$this->fairTradeTypeList = array();
		
		for ($i = 0; $i < count($this->fairTradeTypes); $i++)
		{
			$fairTradeType = new FairTradeType
			(
				$this->fairTradeTypes[$i]["id"], 
				$this->fairTradeTypes[$i]["name"], 
				$this->fairTradeTypes[$i]["description"]
			);

			$this->fairTradeTypeList[count($this->fairTradeTypeList)] = $fairTradeType;
		}
	}
	
	public function createFairTradeType($name, $description)
	{
		$insertSql = $this->config["mysql"]["fairTradeType"]["insert"];
		$insertSql = str_replace("{0}", $name, $insertSql);
		$insertSql = str_replace("{1}", $description, $insertSql);
		
		return $this->database->query($insertSql);
	}

	public function getFairTradeTypes()
	{
		$this->setFairTradeTypes();

		return $this->fairTradeTypes;
	}
	
	public function getFairTradeTypeList()
	{
		$this->setFairTradeTypes();

		return $this->fairTradeTypeList;
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
