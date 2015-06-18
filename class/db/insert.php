<?php
require_once('class/db/dbConnect.php');
class insert extends dbConnect {

	public function registType($params) {
		$fb_id	  	= $params['fb_id'];
		$mail	  	= $params['mail'];
		$name	  	= $params['name'];
		$type	  	= $params['type'];

		mysql_set_charset("UTF8",$this->con);
		$row = mysql_select_db($this->dbname,$this->con);
		$sql = "INSERT INTO user (fb_id,mail,name,type) VALUES ('$fb_id','$mail','$name','$type');";
		if(!$res = mysql_query($sql)){
			echo "SQL";
			mysql_close($this->con);//
			exit;
		} else {

			return true;
		}
	}

	public function fbUserInfo($params) {
		session_cache_limiter('none');
		session_start();
		$fb_id        = $params['fbUserId'];
		$name         = $params['fbName'];
		$mail         = $params['fbEmail'];
		$token        = $params['token'];
		$fblink       = $params['fbLink'];
		$fbAge        = $params['fbAge'];
		$gender　　　 = $params['gender'];
		$birthday     = $params['birthday'];

		mysql_set_charset("UTF8",$this->con);
		$row = mysql_select_db($this->dbname,$this->con);
		$sql = "INSERT INTO user (fb_id,mail,name,token,fblink,age,gender,birthday) VALUES ('$fb_id','$mail','$name','$token','$fblink','age','$gender','$birthday');";
		if(!$res = mysql_query($sql)){
			echo "SQL";
			mysql_close($this->con);//
			exit;
		} else {
			$_SESSION["USERID"] = $fb_id;
			return true;
		}
	}
}
?>
