<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    database controller
\******************************************************************************/

class DatabaseController
{
	private $config = array();
	private $database = null;
	private $databaseList = array();
		
	public function __construct($config)
	{
		$this->config = $config;
	}
	
	public function create($server, $username, $password, $database)
	{
		$this->database = new Database($server, $username, $password, $database);
		$this->add($this->database);
		
		return $this->database;
	}
	
	public function add($newDatabase)
	{
		$this->databaseList[count($this->databaseList)] = $newDatabase;
	}
	
	public function clear()
	{
		$this->database = null;
	}
	
	public function clearList()
	{
		$this->databaseList = array();
	}

	private function connect()
	{		
		$this->database->setConnection(new mysqli($this->database->getServer(), $this->database->getUsername(), $this->database->getPassword(), $this->database->getDatabase()));

		if ($this->database->getConnection()->connect_errno)
		{
			//TODO: write to log -> $this->connection->connect_error
			return false;
		}
		
		if (!$this->database->getConnection()->set_charset($this->config["mysql"]["charset"]))
		{
			//TODO: write to log -> $this->connection->error
			return false;
		}

		mysqli_query($this->database->getConnection(), "SET NAMES '" . $this->config["mysql"]["charset"] . "'");
		
		return true;
	}

	public function query($sql)
	{
		$rows = array();
		
		try
		{
			if (!$this->connect())
			{
				return null;
			}
			
			if ($this->config['mysql']['code']['show'])
			{
				echo "<br><hr><br>".$sql."<br><hr><br>";
			}

			$this->database->setResult($this->database->getConnection()->query($sql));
			
			if (is_bool($this->database->getResult()))
			{
				return mysqli_insert_id($this->database->getConnection());
				//return $this->database->getResult();
			}
			
			if ($this->database->getResult())
			{
				//TODO: on update, delete return true; ?
				//for large data content: if ($result = $this->connection->query($sql, MYSQLI_USE_RESULT))
				//while ($row = $this->database->getResult()->fetch_array(MYSQLI_ASSOC))
				while ($row = $this->database->getResult()->fetch_assoc())
				{
					$rows[count($rows)] = $row;
				}
				
				return $rows;
			}
			
			return null;
		}
		catch (Exception $e)
		{
			//TODO: write to log -> $e->getMessage()
			return null;
		}
	}
	
	public function get()
	{
		return $this->database;
	}
	
	public function set($database)
	{
		$this->database;
	}
	
	public function getList()
	{
		return $this->databaseList;
	}
	
	public function setList($databaseList)
	{
		$this->databaseList = databaseList;
	}
	
	public function __destruct()
	{
		if ($this->database->getConnection() != null)
		{
			$this->database->getConnection()->close();
		}
	}
}
?>