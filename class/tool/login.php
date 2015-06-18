<?php
require_once('class/db/update.php');
class login {

	public function getUserInfo() {
		$userInfo = array();
		session_cache_limiter('none');
		session_start();

		if (!isset($_SESSION["USERID"]) or $_SESSION["USERID"] ==null) {
			header("Location: http://local.ads.com/index.php");
			exit;

		} else {
			//ログイン中ならこっちにはいる。

			//セッションに保存されているユーザIDからユーザ情報を取得
			$param['fb_id'] = $_SESSION["USERID"];

			$update = new update;

			//ユーザフラグ、ユーザ名、ユーザIDを取得、ユーザトークンを取得
			$userInfo = $update->getUserInfo($param);

			//ユーザ情報がなかったらログイン画面へ
			if ($userInfo['userExistFlg'] == false) {
				header("Location: http://local.ads.com/index.php");
				exit;
			} else {
				return $userInfo;
			}
		}

	}



}
?>
