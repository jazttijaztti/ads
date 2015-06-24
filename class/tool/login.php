<?php
require_once('class/db/dbConnect.php');
require_once('class/db/update.php');

class login extend dbConnect{

	public function getUserInfo($fb_id) {
		$userInfo = array();
		session_cache_limiter('none');
		if ($userinfo = fb_id){
		header('location: index.php');
		exit();{
		}else{
		
	   }

			//セッションに保存されているユーザIDからユーザ情報を取得
			$param['fb_id'] = $_SESSION["USERID"];

			$update = new update;
			//ユーザフラグ、ユーザ名、ユーザIDを取得、ユーザトークンを取得
			$userInfo = $update->getUserInfo($param);

			//ユーザ情報がなかったらログイン画面へ
//			if ($userInfo['userExistFlg'] == false) {
			if ($userInfo == false) {
				header("Location: http://localhost/");
				exit;
			} else {
				return $userInfo;
			}
		}

	}


	   }

	}	
}
?>
