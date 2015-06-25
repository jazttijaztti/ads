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

foreach($_SESSION as $key=>$val){
  $firstKey = $key;
  if($firstKey!="USERID"){
    foreach((array)$_SESSION[$firstKey] as $key=>$val){
      echo $val;
    }
  }
}

//session_destroy();

//header("Content-Type: text/html; charset=UTF-8");
$smarty = new Smarty;
//$select = new Select;
$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('base_url', $base_url);
$smarty->assign ('statics_url', $statics_url);
$smarty->assign ('user_name', "808feet");

$smarty->register_function('valCheck', 'sessionValCheck');

function sessionValCheck($params, &$smarty){
  if(empty($params['format'])) {
    $format = "%b %e, %Y";
  } else {
    $format = $params['format'];
  }
  return strftime($format,time());
}

$error ="";
$smarty->display('tpl/question.php');
exit;

