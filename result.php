<?php
session_start();
//TEST
require_once('libralies/smarty/Smarty.class.php');
require_once('class/db/dbConnect.php');
require_once('class/db/update.php');
require_once('class/db/select.php');
//require_once('fb/facebook.php');
require_once('class/tool/content.php');
require_once('class/tool/login.php');
$smarty = new Smarty;
//$reserve = new reserve;
header("Content-Type: text/html; charset=UTF-8");

$base_url = 'http://local.ads.com';
$statics_url = $base_url.'/statics/';

$smarty = new Smarty;
$select = new Select;
$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('base_url', $base_url);
$smarty->assign ('statics_url', $statics_url);

$smarty->display('tpl/result.php');

?>
