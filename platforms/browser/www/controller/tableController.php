<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    table controller
\******************************************************************************/

class TableController
{
	private $config;
	private $table;

	public function __construct($config)
	{
		$this->reset();
		
		$this->config = $config;
	}

	private function reset()
	{
		$this->config       = null;
		$this->table        = "";
	}
	
	public function getTable($tableId, $title, $info, $data, $fieldId, $fields, $captions)
	{        
		$this->table = "<section>";

		if (isset($title) && !empty($title))
		{
			$this->table .= "<h1>".$title."</h1>";
		}

		if (isset($info) && !empty($info))
		{
			$this->table .= "<div class='info'>".$info."</div>";
		}

		$this->table .= "<table id='".$tableId."' class='display'>";
		$this->table .= "<thead>";
		$this->table .= "<tr>";

		for ($i = 0; $i < count($captions); $i++)
		{
			$this->table .= "<th><span>".$captions[$i]."</span></th>";
		}

		$this->table .= "</tr>";
		$this->table .= "</thead>";
		$this->table .= "<tfoot>";
		$this->table .= "<tr>";

		for ($i = 0; $i < count($captions); $i++)
		{
			$this->table .= "<th><span>".$captions[$i]."</span></th>";
		}

		$this->table .= "</tr>";
		$this->table .= "</tfoot>";
		$this->table .= "<tbody>";

		for ($i = 0; $i < count($data); $i++)
		{
			if (!empty($fieldId))
			{
				$this->table .= "<tr id='".$fieldId."Id".$data[$i]['id']."' class='".$fieldId."'>";
			}
			else
			{
				$this->table .= "<tr>";
			}

			for ($j = 0; $j < count($fields); $j++)
			{
				$this->table .= "<td>".$data[$i][$fields[$j]]."</td>";
			}

			$this->table .= "</tr>";
		}

		$this->table .= "</tbody>";
		$this->table .= "</table>";
		$this->table .= "</section>";
		
		return $this->table;
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