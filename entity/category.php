<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    category
\******************************************************************************/

class Category
{
	private $id;
	private $parentId;
	private $name;
	private $description;

	public function __construct($id, $parentId, $name, $description)
	{
		$this->reset();

		$this->id = $id;
		$this->parentId = $parentId;
		$this->name = $name;
		$this->description = $description;
	}

	private function reset()
	{
		$this->id = 0;
		$this->parentId = 0;
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
