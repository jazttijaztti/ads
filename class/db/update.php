<?php
require_once('class/db/dbConnect.php');
class update extends dbConnect {


	public function getUserInfo($params) {
		$fb_id = $params['fb_id'];

    try {
    $dbh = new PDO('mysql:host=localhost;dbname=marryme;charset=utf8','root','root',
    array(PDO::ATTR_EMULATE_PREPARES => false));
    } catch (PDOException $e) {
     exit('データベース接続失敗。'.$e->getMessage());
    }


//		mysql_set_charset("UTF8",$this->con);
//		$row = mysql_select_db($this->dbname,$this->con);
		$sql = "SELECT * FROM user where fb_id=".$fb_id;
		if(!$res = $dbh->query($sql)){
//		if(!$res = mysql_query($sql)){
			echo "SQL";
//			mysql_close($con);
      $dbh = null;
			exit;
		} else {
		    while($row = mysql_fetch_array($res)) {
		  		$return[] = $row;
   		    }
   		    $ret = $return[0];
   		    if ($fb_id == $ret['fb_id']) {
   		    	$return[0]['userExistFlg'] = true;
   		    } else {
   		    	$return[0]['userExistFlg'] = false;
   		    }
   		    return $return[0];
		}

	}
	public function inputType($params) {

		$fb_id = $params['fb_id'];
		$type = $params['type'];
		mysql_set_charset("UTF8",$this->con);
		$row = mysql_select_db($this->dbname,$this->con);
		$sql = "UPDATE user SET type = '".$type."'  WHERE fb_id = '$fb_id' ;";

		if(!$res = mysql_query($sql)){
			echo "SQL";
			mysql_close($con);
			exit;
		} else {
			return true;
		}


		return true;
	}

	public function updateToken($params) {

			session_cache_limiter('none');
			session_start();
			$token = $params['token'];
			$fb_id = $params['fbUserId'];
			mysql_set_charset("UTF8",$this->con);
			$row = mysql_select_db($this->dbname,$this->con);
			$sql = "UPDATE user SET token = '$token' WHERE fb_id = '$fb_id' ;";

			if(!$res = mysql_query($sql)){
				echo "SQL";
				mysql_close($con);
				return false;
			} else {

				$_SESSION["USERID"] = $fb_id;
				return true;
			}
	}
}
