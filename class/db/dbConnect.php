<?php
class dbConnect {

	public $dbname;
	public $hostname;
	public $userid;
	public $passwd;
	public $con;

	public function __construct() {
		$this->dbname = "marryme";
		$this->hostname = "localhost";
		//userid
		$this->userid = "root";
		//password
		$this->passwd = "root";

    try {
      $pdo = new PDO("mysql:dbname=$this->dbname;host=$this->hostname","$this->userid","$this->passwd",
      array(
      PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET `utf8`"));
		} catch (PDOException $e) {
      die($e->getMessage());
    }		
	}
}
?>
