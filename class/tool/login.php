<?php
require_once('class/db/dbConnect.php');
class login extends dbConnect {
	public function getUserInfo() {
		$userInfo = array();
		session_cache_limiter('none');
		//session_start();
$_SESSION['USERID'] = '1';
		if (!isset($_SESSION["USERID"]) or $_SESSION["USERID"] ==null) {
			header("Location: http://localhost/");
			exit;
		} else {
			//ログイン中ならこっちにはいる。

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
   
           //return $ret;
       }
        

}
?>
