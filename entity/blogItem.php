<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    blogItem
\******************************************************************************/

class BlogItem
{
	private $id;
	private $title;
	private $description;
	private $image;

	public function __construct($id, $title, $description, $image)
	{
		$this->reset();

		$this->id = $id;
		$this->title = $title;
		$this->description = $description;
		$this->image = $image;
	}

	private function reset()
	{
		$this->id = 0;
		$this->title = "";
		$this->description = "";
		$this->image = "";
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
