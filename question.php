<?php
session_start();
$base_url = 'http://localhost';
$statics_url = $base_url.'/statics/';
require_once('libralies/smarty/Smarty.class.php');
//require_once('class/tool/session.php');
/**
require_once('fb/facebook.php');
require_once('class/tool/content.php');
require_once('class/tool/login.php');
require_once('class/db/select.php');
require_once('class/db/insert.php');
require_once('class/db/update.php');
**/
$name = $_SESSION['fb_name'];
$fb_id = $_SESSION['fb_id'];


if(isset($_SESSION["qPost"])){
  
  $session_memory = $_SESSION["qPost"];
  $session_array = array();
  
  foreach($session_memory as $key=>$val){
    $firstKey = $key;
    if($firstKey!="USERID" && $firstKey!="fb_id" && $firstKey!="fb_name" && $firstKey!="name" && $firstKey!="FBRLH_state"){
      foreach((array)$session_memory[$firstKey] as $key=>$val){
        $session_array[] = $val;
      }
    }
  }

  $json_data=json_encode($session_array);

}else {

  $json_data=json_encode(0);

}

//session_destroy();

header("Content-Type: text/html; charset=UTF-8");
$smarty = new Smarty;
//$select = new Select;
$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('base_url', $base_url);
$smarty->assign ('statics_url', $statics_url);
$smarty->assign ('name', $name);
$smarty->assign ('fb_id', $fb_id);
$smarty->assign ('json_data', $json_data);
$error ="";
$smarty->display('tpl/question.php');
exit;

?>