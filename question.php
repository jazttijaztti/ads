<?php
$base_url = 'http://local.ads.com';
$statics_url = $base_url.'/statics/';
require_once('libralies/smarty/Smarty.class.php');
/**
require_once('fb/facebook.php');
require_once('class/tool/content.php');
require_once('class/tool/login.php');
require_once('class/db/select.php');
require_once('class/db/insert.php');
require_once('class/db/update.php');
**/


header("Content-Type: text/html; charset=UTF-8");
$smarty = new Smarty;
//$select = new Select;
$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('base_url', $base_url);
$smarty->assign ('statics_url', $statics_url);
$error ="";
$smarty->display('tpl/question.php');
exit;


