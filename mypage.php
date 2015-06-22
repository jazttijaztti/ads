<?php
require_once('fb/facebook.php');
//use Facebook\FacebookRequest;
require_once('class/tool/login.php');

$base_url = 'http://localhost';
$statics_url = $base_url.'/statics/';
require_once('libralies/smarty/Smarty.class.php');
header("Content-Type: text/html; charset=UTF-8");
if (!$_SESSION['fb_id']) {
   echo "ログインしていないからその処理をかく"; //林さん
} 


$fb_id = $_SESSION['fb_id'];
$user_name = $_SESSION['fb_name'];
$param = array('fb_id' =>$fb_id , 'user_name' =>$user_name);

//まずこのfb_idがDBにあるのか確認する
$login = new login;
$b = $login->is_user($fb_id);
if ($b == true) {
   //あるならuserテーブルからそのユーザの情報をもってくる
   $user_info = $login->get_user_info($fb_id);
} else {
   //fb_idがDBにないなら新規ユーザだから登録する
   $res = $Login->insert_new_user($param);
   if ($res) {
       //登録したらそのユーザの情報をすべてもってくる
       $user_info = $login->get_user_info($fb_id);
   } else {
       //redirectする ?error=3
   }
}


$user_name = $user_info['user_name'];
$fb_id     = $user_info['fb_id'];

$smarty = new Smarty;
//$select = new Select;
$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('yaopa', $base_url);
$smarty->assign ('statics_url', $statics_url);
$smarty->assign ('user_name', $user_name);
$smarty->assign ('fb_id',$fb_id);
$smarty->display('tpl/mypage.php');

?>
