<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    country
\******************************************************************************/

class Country
{
	private $id;
	private $name;
	private $iso;

	public function __construct($id, $name, $iso)
	{
		$this->reset();

		$this->id = $id;
		$this->name = $name;
		$this->iso = $iso;
	}

	private function reset()
	{
		$this->id = 0;
		$this->name = "";
		$this->iso = "";
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
