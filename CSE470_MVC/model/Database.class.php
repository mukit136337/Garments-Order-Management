<?php
/**
 * 
 */
class Database
{
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $dbname = "Garments_V2";

	private $dbh; //database handeler
	private $error;
	private $stmt;



	function __construct(){
		// Set DSN
		$dsn = "mysql:host=".$this->host."; dbname=".$this->dbname;
		// Set Option
		$option = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);

		// PDO Instance

		try{
			$this->dbh = new PDO($dsn,$this->user,$this->pass,$option);
		} catch (PDOException $e) {
			$this->error = $e->getMessage();
		}

	}

	public function query($query){
		$this->stmt = $this->dbh->prepare($query);
	}

	public function bind($param, $value, $type = null){
		if(is_null($type)){
			switch (true) {
				case is_int($value):
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value):
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value):
					$type = PDO::PARAM_NULL;
					break;
				default:
					$type = PDO::PARAM_STR;
			}
		}
		$this->stmt->bindValue($param,$value,$type);
	}

	public function execute(){
		return $this->stmt->execute();
	}

	public function resultSet(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_OBJ);
	}
}