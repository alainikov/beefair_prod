<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    category controller
\******************************************************************************/

class CategoryController
{
	private $config;
	private $database;
	private $tableController;
	private $categories;
	private $categoryList;

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
		$this->categories = array();
		$this->categoryList = array();
	}

	private function setCategories()
	{
		$this->categories = $this->database->query($this->config["mysql"]["category"]["select"]);
		$this->categoryList = array();
		
		for ($i = 0; $i < count($this->categories); $i++)
		{
			$category = new Category
			(
				$this->categories[$i]["id"], 
				$this->categories[$i]["parentId"], 
				$this->categories[$i]["name"], 
				$this->categories[$i]["description"]
			);

			$this->categoryList[count($this->categoryList)] = $category;
		}
	}
	
	private function setMainCategories()
	{		
		$this->categories = $this->database->query($this->config["mysql"]["category"]["selectMain"]);
		$this->categoryList = array();
		
		for ($i = 0; $i < count($this->categories); $i++)
		{
			$category = new Category
			(
				$this->categories[$i]["id"], 
				$this->categories[$i]["parentId"], 
				$this->categories[$i]["name"], 
				$this->categories[$i]["description"]
			);

			$this->categoryList[count($this->categoryList)] = $category;
		}
	}
	
	private function setNotMainCategories()
	{		
		$this->categories = $this->database->query($this->config["mysql"]["category"]["selectNotMain"]);
		$this->categoryList = array();
		
		for ($i = 0; $i < count($this->categories); $i++)
		{
			$category = new Category
			(
				$this->categories[$i]["id"], 
				$this->categories[$i]["parentId"], 
				$this->categories[$i]["name"], 
				$this->categories[$i]["description"]
			);

			$this->categoryList[count($this->categoryList)] = $category;
		}
	}
	
	private function setCategoriesById($id)
	{
		if ($id == null || $id == 0)
		{
			return;
		}
		
		$this->categories = $this->database->query(str_replace("{0}", $id, $this->config["mysql"]["category"]["selectById"]));
		$this->categoryList = array();
		
		for ($i = 0; $i < count($this->categories); $i++)
		{
			$category = new Category
			(
				$this->categories[$i]["id"], 
				$this->categories[$i]["parentId"], 
				$this->categories[$i]["name"], 
				$this->categories[$i]["description"]
			);

			$this->categoryList[count($this->categoryList)] = $category;
		}
	}
	
	private function setCategoriesByParentId($parentId)
	{
		if ($parentId == null || $parentId == 0)
		{
			return;
		}
		
		$this->categories = $this->database->query(str_replace("{0}", $parentId, $this->config["mysql"]["category"]["selectByParentId"]));
		$this->categoryList = array();
		
		for ($i = 0; $i < count($this->categories); $i++)
		{
			$category = new Category
			(
				$this->categories[$i]["id"], 
				$this->categories[$i]["parentId"], 
				$this->categories[$i]["name"], 
				$this->categories[$i]["description"]
			);

			$this->categoryList[count($this->categoryList)] = $category;
		}
	}
	
	public function createCategory($parentId, $name, $description)
	{
		$insertSql = $this->config["mysql"]["category"]["insert"];
		$insertSql = str_replace("{0}", $parentId, $insertSql);
		$insertSql = str_replace("{1}", $name, $insertSql);
		$insertSql = str_replace("{2}", $description, $insertSql);
		
		return $this->database->query($insertSql);
	}

	public function getCategories()
	{
		$this->setCategories();

		return $this->categories;
	}
	
	public function getCategoryList()
	{
		$this->setCategories();

		return $this->categoryList;
	}
	
	public function getMainCategories()
	{
		$this->setMainCategories();

		return $this->categories;
	}
	
	public function getMainCategoryList()
	{
		$this->setMainCategories();

		return $this->categoryList;
	}
	
	public function getNotMainCategories()
	{
		$this->setNotMainCategories();

		return $this->categories;
	}
	
	public function getNotMainCategoryList()
	{
		$this->setNotMainCategories();

		return $this->categoryList;
	}
	
	public function getCategoriesById($id)
	{
		$this->setCategoriesById($id);

		return $this->categories;
	}
	
	public function getCategoryListById($id)
	{
		$this->setCategoriesById($id);

		return $this->categoryList;
	}
	
	public function getCategoriesByParentId($parentId)
	{
		$this->setCategoriesByParentId($parentId);

		return $this->categories;
	}
	
	public function getCategoryListByParentId($parentId)
	{
		$this->setCategoriesByParentId($parentId);

		return $this->categoryList;
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
