<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    country controller
\******************************************************************************/

class CountryController
{
	private $config;
	private $database;
	private $tableController;
	private $countries;
	private $countryList;

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
		$this->countries = array();
		$this->countryList = array();
	}

	private function setCountries()
	{
		$this->countries = $this->database->query($this->config["mysql"]["country"]["select"]);
		$this->countryList = array();
		
		for ($i = 0; $i < count($this->countries); $i++)
		{
			$country = new Country
			(
				$this->countries[$i]["id"], 
				$this->countries[$i]["name"], 
				$this->countries[$i]["iso"]
			);

			$this->countryList[count($this->countryList)] = $country;
		}
	}
	
	public function createCountry($name, $iso)
	{
		$insertSql = $this->config["mysql"]["country"]["insert"];
		$insertSql = str_replace("{0}", $name, $insertSql);
		$insertSql = str_replace("{1}", $iso, $insertSql);
		
		return $this->database->query($insertSql);
	}

	public function getCountries()
	{
		$this->setCountries();

		return $this->countries;
	}
	
	public function getCountryList()
	{
		$this->setCountries();

		return $this->countryList;
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
