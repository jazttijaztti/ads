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

echo "<pre>";

//var_dump($_SESSION);

foreach($_SESSION as $key=>$val){
  $test = $_SESSION[$key];
  foreach($test as $key=>$val){
    var_dump($test);  
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
$error ="";
$smarty->display('tpl/question.php');
exit;

