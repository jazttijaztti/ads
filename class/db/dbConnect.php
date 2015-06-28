<?php
class dbConnect {

	public $dbname;
	public $hostname;
	public $userid;
	public $passwd;
	public $con;
	public $pdo;
	public function __construct() {
		$this->dbname = "marryme";
		$this->hostname = "localhost";
		$this->userid = "root";
		$this->passwd = "";
//DBに接続

    try {
      $this->pdo = new PDO("mysql:dbname=$this->dbname;host=$this->hostname","$this->userid","$this->passwd");
	} catch (PDOException $e) {
      	  //die($e->getMessage());
	  var_dump($e->getMessage());
          exit;
        }

//echo "Success!";
//exit; 

  }

//USER存在してるか確認
	public function user_flg($param) {
var_dump($param);
exit;
	if (!isset($param)) {
	$stmt = $pdo -> prepare("INSERT INTO user (fb_id, name) VALUES (:fb_id, :name)");
        $stmt->execute();
  	exit;
 	}else{
	header('Location: /question.php');
	exit;	
} 

    }





}

?>
