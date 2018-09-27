<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    address controller
\******************************************************************************/

class AddressController
{
	private $config;
	private $database;
	private $tableController;
	private $addresses;
	private $addressList;

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
		$this->addresses = array();
		$this->addressList = array();
	}

	private function setAddresses()
	{
		$this->addresses = $this->database->query($this->config["mysql"]["address"]["select"]);
		$this->addressList = array();
		
		for ($i = 0; $i < count($this->addresses); $i++)
		{
			//$this->addresses[$i]["shopName"] = "<a href='?addressId=".$this->addresses[$i]["id"]."#wantedPoster'>".$this->addresses[$i]["shopName"]."</a>";
			//$this->addresses[$i]["shopName"] = "<a href='#wantedPosterMain'>".$this->addresses[$i]["shopName"]."</a>";

			if (!empty($this->addresses[$i]["website"]))
			{
				$this->addresses[$i]["website"] = "<a href='".$this->addresses[$i]["website"]."' target='blank'>".$this->addresses[$i]["website"]."</a>";
			}

			$address = new Address
			(
				$this->addresses[$i]["id"], 
				$this->addresses[$i]["shopName"], 
				$this->addresses[$i]["shopTypeName"], 
				$this->addresses[$i]["categoryName"], 
				$this->addresses[$i]["street"], 
				$this->addresses[$i]["zipCode"], 
				$this->addresses[$i]["city"], 
				$this->addresses[$i]["countryName"], 
				$this->addresses[$i]["phone"],
				$this->addresses[$i]["mobile"],
				$this->addresses[$i]["fax"],
				$this->addresses[$i]["email"],
				$this->addresses[$i]["website"],
				$this->addresses[$i]["remarks"],
				$this->addresses[$i]["latitude"], 
				$this->addresses[$i]["longitude"]
			);

			$this->addressList[count($this->addressList)] = $address;
		}
	}
	
	public function createAddress($shopId, $shopTypeId, $categoryId, $name, $street, $zipCode, $city, 
		$countryId, $phone, $mobile, $fax, $email, $website, $remarks, $picture, $latitude, $longitude)
	{
		$insertSql = $this->config["mysql"]["address"]["insert"];
		$insertSql = str_replace("{0}", $shopId, $insertSql);
		$insertSql = str_replace("{1}", $shopTypeId, $insertSql);
		$insertSql = str_replace("{2}", $categoryId, $insertSql);
		$insertSql = str_replace("{3}", $name, $insertSql);
		$insertSql = str_replace("{4}", $street, $insertSql);
		$insertSql = str_replace("{5}", $zipCode, $insertSql);
		$insertSql = str_replace("{6}", $city, $insertSql);
		$insertSql = str_replace("{7}", $countryId, $insertSql);
		$insertSql = str_replace("{8}", $phone, $insertSql);
		$insertSql = str_replace("{9}", $mobile, $insertSql);
		$insertSql = str_replace("{10}", $fax, $insertSql);
		$insertSql = str_replace("{11}", $email, $insertSql);
		$insertSql = str_replace("{12}", $website, $insertSql);
		$insertSql = str_replace("{13}", $remarks, $insertSql);
		$insertSql = str_replace("{14}", $picture, $insertSql);
		$insertSql = str_replace("{15}", $latitude, $insertSql);
		$insertSql = str_replace("{16}", $longitude, $insertSql);
		
		return $this->database->query($insertSql);
	}

	public function getAddresses()
	{
		$this->setAddresses();

		return $this->addresses;
	}
	
	public function getAddressList()
	{
		$this->setAddresses();

		return $this->addressList;
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
