<?php
/******************************************************************************\
 * Project:     Bee Fair
 * Description: Fair Trade Market
 * Author:      Arch A. Germann
 * Document:    database
\******************************************************************************/

class Database
{
    private $connection = null;
    private $server = '';
    private $username = '';
    private $password = '';
    private $database = '';
    private $result = null;
    
    public function __construct($server, $username, $password, $database)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    
    public function getConnection()
    {
        return $this->connection;
    }
    
    public function setConnection($connection)
    {
        $this->connection = $connection;
    }
    
    public function getServer()
    {
        return $this->server;
    }
    
    public function setServer($server)
    {
        return $this->server = $server;
    }
    
    public function getUsername()
    {
        return $this->username;
    }
    
    public function setUsername($username)
    {
        return $this->username = $username;
    }
    
    public function getPassword()
    {
        return $this->password;
    }
    
    public function setPassword($password)
    {
        return $this->password = $password;
    }
    
    public function getDatabase()
    {
        return $this->database;
    }
    
    public function setDatabase($database)
    {
        return $this->database = $database;
    }
    
    public function getResult()
    {
        return $this->result;
    }
    
    public function setResult($result)
    {
        return $this->result = $result;
    }
}
?>