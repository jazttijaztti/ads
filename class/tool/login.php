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



	   }

	}	
}
?>
