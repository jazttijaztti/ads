<?php
require_once('class/db/dbConnect.php');
class select extends dbConnect {

	public function getToken($fb_id){
	//	$fb_id = $params['fb_id'];
		$sql = "SELECT * FROM user WHERE fb_id = '$fb_id' ;";
		$db = $this->pdo->query($sql);
		if(!$res = $this->pdo->query($sql)){
			echo "SQL";
			$this->pdo = null;
			exit;
		} else {
		  while($row = $db->fetch(PDO::FETCH_ASSOC)) {
		       $return[] = $row;
 		  }
		  if(isset($return[0]['fb_id'])) {
		  	 return $return[0]['token'] ;
		  } else {
		  	 return false;
		  }
		}
	}

	public function checkAlreadyUser($fb_id) {
		mysql_set_charset("UTF8",$this->con);
		$row = mysql_select_db($this->dbname,$this->con);
		$sql = "SELECT * FROM user WHERE fb_id = '$fb_id' ;";
		if(!$res = mysql_query($sql)){
			echo "SQL";
			mysql_close($con);
			exit;
		} else {
		  while($row = mysql_fetch_array($res)) {
		       $return[] = $row;
   		  }
		  if (isset($return[0]['fb_id'])) {
		  	 return true ;
		  } else {
		  	 return false;
		  }
		}
	}

	public function sameTypeFriend($listFb,$type) {
		mysql_set_charset("UTF8",$this->con);
		$row = mysql_select_db($this->dbname,$this->con);
		$sql = "SELECT fb_id , name FROM user WHERE fb_id IN (".$listFb.") and type ='$type';";
		if(!$res = mysql_query($sql)){
			echo "SQL";
			mysql_close($con);
			exit;
		} else {
		  while($row = mysql_fetch_array($res)) {
		       $return[] = $row;
   		  }

		  if (isset($return[0])) {
		  	 return $return ;
		  } else {
		  	 return false;
		  }
		}
	}
	public function goodTypeFriend($listFb,$type) {

		$goodType = $this->_searchGoodType($type);
		mysql_set_charset("UTF8",$this->con);
		$row = mysql_select_db($this->dbname,$this->con);
		$sql = "SELECT fb_id , name FROM user WHERE fb_id IN (".$listFb.") and type ='$goodType';";
		if(!$res = mysql_query($sql)){
			echo "SQL";
			mysql_close($con);
			exit;
		} else {
		  while($row = mysql_fetch_array($res)) {
		       $return[] = $row;
   		  }
		  if (isset($return[0])) {
		  	 return $return ;
		  } else {
		  	 return false;
		  }
		}
	}

	private function _searchGoodType($type) {
		switch ($type) {
	    case 'type1':
	         $ret = 'type4';
	        break;
	    case 'type2':
	         $ret = 'type1';
	        break;
	    case 'type3':
	         $ret = 'type6';
	        break;
	    case 'type4':
	         $ret = 'type7';
	        break;
	    case 'type5':
	         $ret = 'type8';
	        break;
	    case 'type6':
	         $ret = 'type2';
	        break;
	    case 'type7':
	        $ret = 'type5';
	        break;
	    case 'type8':
	        $ret = 'type9';
	        break;
	    case 'type9':
	         $ret = 'type3';
	        break;
	    default:
	         $ret = 'type3';
		}
		return $ret;
	}

}

?>
