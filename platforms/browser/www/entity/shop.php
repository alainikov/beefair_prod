<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    shop
\******************************************************************************/

class Shop
{
	private $id;
	private $name;
	private $description;

	public function __construct($id, $name, $description)
	{
		$this->reset();

		$this->id = $id;
		$this->name = $name;
		$this->description = $description;
	}

	private function reset()
	{
		$this->id = 0;
		$this->name = "";
		$this->description = "";
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
