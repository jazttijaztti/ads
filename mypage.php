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
$user_info = $login->is_user($fb_id);
if ($user_info == false) {
   //DBにないから新規ユーザです。
   $テーブルに挿入した結果 = $login->insert_new_user($param); 
   //insertしてください
   if ($テーブルに挿入した結果 == true) {
       //ここで登録したユーザの情報を改めてもってくる
         $ユーザの情報 = $login->get_user_info($fb_id);
   } else {
        //ここに入ってくるならそもそもデーターベースに登録失敗してるからリダイレクト
	header('Location: /');
   } 
} else {
   //新規ユーザではない
   //$user_infoにすでに情報が入ってる
}
echo "a";
exit;

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
