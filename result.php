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

$content = new content;

$type = $_SESSION['decidedUserType'];
$output_reslut = $content->getTypeContent($type);

$smarty = new Smarty;
$select = new Select;
$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('base_url', $base_url);
$smarty->assign ('statics_url', $statics_url);
$smarty->assign ('user_name', "808feet");


$smarty->assign ('yourType', $output_reslut["yourType"]);
$smarty->assign ('yourWorks', $output_reslut["yourWorks"]);
$smarty->assign ('yourKinds', $output_reslut["yourKinds"]);
$smarty->assign ('nakama', $output_reslut["nakama"]);
$smarty->assign ('type', $output_reslut["type"]);



$smarty->display('tpl/result.php');

?>
