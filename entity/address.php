<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    address
\******************************************************************************/

class Address
{
	private $id;
	private $shopName;
	private $shopTypeName;
	private $categoryName;
	private $street;
	private $zipCode;
	private $city;
	private $countryName;
	private $phone;
	private $mobile;
	private $fax;
	private $website;
	private $remarks;
	private $latitude;
	private $longitude;

	public function __construct($id, $shopName, $shopTypeName, $categoryName, $street, $zipCode, $city, $countryName, $phone, $mobile, $fax, $website, $remarks, $latitude, $longitude)
	{
		$this->reset();

		$this->id = $id;
		$this->shopName = $shopName;
		$this->shopTypeName = $shopTypeName;
		$this->categoryName = $categoryName;
		$this->street = $street;
		$this->zipCode = $zipCode;
		$this->city = $city;
		$this->countryName = $countryName;
		$this->phone = $phone;
		$this->mobile = $mobile;
		$this->fax = $fax;
		$this->website = $website;
		$this->remarks = $remarks;
		$this->latitude	= $latitude;
		$this->longitude = $longitude;
	}

	private function reset()
	{
		$this->id = 0;
		$this->shopName = "";
		$this->shopTypeName = "";
		$this->categoryName = "";
		$this->street = "";
		$this->zipCode = "";
		$this->city = "";
		$this->countryName = "";
		$this->phone = "";
		$this->mobile = "";
		$this->fax = "";
		$this->website = "";
		$this->remarks = "";
		$this->latitude	= 0.0;
		$this->longitude	= 0.0;
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
