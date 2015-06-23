<?php
session_start();

require_once('fb/facebook.php');
//use Facebook\FacebookRequest;
require_once('class/tool/login.php');
$base_url = 'http://localhost';
$statics_url = $base_url.'/statics/';
require_once('libralies/smarty/Smarty.class.php');
//header("Content-Type: text/html; charset=UTF-8");
if (!isset($_SESSION['fb_id'])) {
    header('Location: /');
exit;
} 
//var_dump ($_SESSION);
//exit;

$fb_id = $_SESSION['fb_id'];
$user_name = $_SESSION['fb_name'];
$param = array('fb_id' =>$fb_id , 'user_name' =>$user_name);
$login = new login;
<<<<<<< HEAD
//$b = $login->is_user($fb_id);
$b = $login->getUserInfo($fb_id);

=======
$b = $login->getUserInfo($fb_id);
>>>>>>> bdf0dff4062918fd0fde4147f86df0136d0fede3
if ($b == true) {
   //あるならuserテーブルからそのユーザの情報をもってくる
   $user_info = $login->getUserInfo($fb_id);
} else {
   //fb_idがDBにないなら新規ユーザだから登録する
   $res = $Login->insert_new_user($param);
   if ($res) {
       //登録したらそのユーザの情報をすべてもってくる
       $user_info = $login->get_user_info($fb_id);
   } else {
       //redirectする ?error=3
    header('Location: localhost/');
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
