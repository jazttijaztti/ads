<?php
session_start();
//ここにルートをbase_urlとして格納
$base_url = 'http://localhost/';
$statics_url = $base_url.'/statics/';
require_once('libralies/smarty/Smarty.class.php');
require_once('fb/facebook.php');
require_once('class/db/select.php');
$smarty = new Smarty;
$select = new Select;
$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('base_url', $base_url);
$smarty->assign ('statics_url', $statics_url);
$smarty->assign ('login_btn', $login_btn);
$smarty->assign ('name', "top");

$smarty->display('tpl/index.php');
exit;
?>
