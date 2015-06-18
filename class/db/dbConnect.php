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
		$this->passwd = "";


		if(!$this->con=mysql_connect($this->hostname,$this->userid,$this->passwd)){
			echo "error";
			exit;
		}
	}
}
?>
