<?php
///Database class

class Database
{
	private $host = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbname = 'scandiweb';

	public function connect()
	{
		try
		{
			$pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);

			return $pdo;
		} catch (PDOException $e) 
		{
			die("Connection failed: " . $e->getMessage());
		}
	}
}


?>