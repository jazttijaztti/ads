<?php
session_start();
require_once('fb/facebook.php');
//use Facebook\FacebookRequest;
require_once('class/tool/login.php');
require_once('class/tool/content.php');
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
$param = array('fb_id' =>$fb_id , 'fb_name' =>$user_name);
$login = new login;
$user_info = $login->is_user($fb_id);
if ($user_info == false) {
   $content_res = "";
   $type ="";
   //DBにないから新規ユーザです。
   $new_user = $login->insert_new_user($param); 
   //insertしてください
    if ($new_user == true) {
        //ここで登録したユーザの情報を改めてもってくる
        $user_data = $login->getUserInfo($fb_id);
        
   } else {
        //ここに入ってくるならそもそもデーターベースに登録失敗してるからリダイレクト
	header("Location: /index.php ");
   } 
}else{
    $_SESSION['name'] = $user_info['name'];
    $type = $user_info["type"];
    $content = new content;
    $content_res = $content->getTypeContent($type);
}

$user_name = $user_info['name'];
$fb_id     = $user_info['fb_id'];

$smarty = new Smarty;
//$select = new Select;
$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('yaopa', $base_url);
$smarty->assign ('statics_url', $statics_url);
$smarty->assign ('name', $user_name);
$smarty->assign ('content_res', $content_res);
$smarty->assign ('type', $type);
$smarty->assign ('fb_id',$fb_id);
$smarty->display('tpl/mypage.php');

?>
