<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    blogItem controller
\******************************************************************************/

class BlogItemController
{
	private $config;
	private $database;
	private $tableController;
	private $blogItems;
	private $blogItemList;

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
		$this->blogItems = array();
		$this->blogItemList = array();
	}

	private function setBlogItems()
	{
		$this->blogItems = $this->database->query($this->config["mysql"]["blogItem"]["select"]);
		$this->blogItemList = array();
		
		for ($i = 0; $i < count($this->blogItems); $i++)
		{
			$blogItem = new BlogItem
			(
				$this->blogItems[$i]["id"], 
				$this->blogItems[$i]["title"], 
				$this->blogItems[$i]["description"],
				$this->blogItems[$i]["image"]
			);

			$this->blogItemList[count($this->blogItemList)] = $blogItem;
		}
	}
	
	public function createBlogItem($title, $description, $image)
	{
		$insertSql = $this->config["mysql"]["blogItem"]["insert"];
		$insertSql = str_replace("{0}", $title, $insertSql);
		$insertSql = str_replace("{1}", $description, $insertSql);
		$insertSql = str_replace("{1}", $image, $insertSql);
		
		return $this->database->query($insertSql);
	}

	public function getBlogItems()
	{
		$this->setBlogItems();

		return $this->blogItems;
	}
	
	public function getBlogItemList()
	{
		$this->setBlogItems();

		return $this->blogItemList;
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
