<?php
require_once('class/db/dbConnect.php');
class login extends dbConnect {

        public function is_user($fb_id) {

            $sql = "SELECT * from user WHERE fb_id =".$fb_id;
            $res = $this->pdo->prepare($sql);
            $res->execute();
            $ret = false;
            while($result = $res->fetch(PDO::FETCH_ASSOC)) {
               $ret = $result; 
            }
            return $ret;           
        }
       public function insert_new_user($arr) {
            //pdoのinsertを書く
        //$arrは絶対に二つのキーを持つ配列でなければならない
        //そのキーを二つの変数にばらす
    	$stmt = $this->pdo -> prepare("INSERT INTO user (fb_id, name) VALUES (:fb_id, :name)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':fb_id', $fb_id);
    	$stmt->execute();
           //return $ret;
       }
        	
}
?>
