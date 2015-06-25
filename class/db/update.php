<?php
//test
require_once('class/db/dbConnect.php');
class update extends dbConnect {


	public function getUserInfo($params) {
		$fb_id = $params['fb_id'];
    // 仮のfb_ID
		$fb_id = 1;
		$sql = "SELECT * FROM user where fb_id=".$fb_id;
		if(!$res = $this->pdo->query($sql)){
			echo "SQL";
      $this->pdo = null;
			exit;
		} else {
      $pdo_pre = $this->pdo->prepare($sql);
      $ret = $pdo_pre->execute();
	    return $ret;
		}

	}
	public function inputType($params) {
		$fb_id = $params['fb_id'];
		$type = $params['type'];
		$sql = "UPDATE user SET type = '".$type. "' WHERE fb_id =".$fb_id;

		if(!$res = $this->pdo->query($sql)){
			echo "SQL";
			$this->pdo = null;
			exit;
		} else {
      $pdo_pre = $this->pdo->prepare($sql);
      $ret = $pdo_pre->execute();
			return $ret;
		}
	}

	public function updateToken($params) {
			session_cache_limiter('none');
			session_start();
			$token = $params['token'];
			$fb_id = $params['fbUserId'];

			$sql = "UPDATE user SET token = '$token' WHERE fb_id = '$fb_id' ;";
			if(!$res = $this->pdo->query($sql)){
				echo "SQL";
        $this->pdo = null;
				return false;
			} else {
        $pdo_pre = $this->pdo->prepare($sql);
        $ret = $pdo_pre->execute();
				$_SESSION["USERID"] = $fb_id;
				return $ret;
			}
	}
}
