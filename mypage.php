<?php
require_once('fb/facebook.php');
//require_once('class/tool/login.php');
$base_url = 'http://local.ads.com';
$statics_url = $base_url.'/statics/';
//
require_once('libralies/smarty/Smarty.class.php');
header("Content-Type: text/html; charset=UTF-8");

$smarty = new Smarty;
//$select = new Select;
$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('base_url', $base_url);
$smarty->assign ('statics_url', $statics_url);

$smarty->display('tpl/mypage.php');

/**
//$select = new Select;
$error ="";
	$config = array(
	    'appId'  => '262907057194513',
	    'secret' => 'c48e904bd071bf1c5f068653eaedb930',
		'cookie' => true
	);
	$facebook = new Facebook($config);



//■ログインしているかどうか&ログインしてなかったらログイン前トップへ

	$login = new login;
	$userInfo = $login->getUserInfo();

	//入力エラーがある場合の処理
	if (isset($_GET['error']) and ($_GET['error'] == 'name' or $_GET['error'] == 'ma' or $_GET['error'] == 'in' or $_GET['error'] == 'oc' ) ){
		$error = '必須項目を埋めてください';
	} elseif (isset($_GET['error']) and $_GET['error'] == 'fb') {
		$error = 'FB連携周りにエラーがあります';
	}

	$fbUserId = $userInfo['fb_id'];
	$fbName   = $userInfo['name'];
	$fbEmail  = $userInfo['mail'];
	$type     = $userInfo['type'];
	$fbPic    = $fb_pic      = 'https://graph.facebook.com/'.$fbUserId.'/picture?type=large';

	$smarty->assign ('fbUserId', $fbUserId);
	$smarty->assign ('fbName'  , $fbName);
	$smarty->assign ('fbEmail' , $fbEmail);
	$smarty->assign ('fbPic'   , $fbPic);
	$smarty->assign ('type'   , $type);
	$smarty->assign ('error'   , $error);

	$smarty->display('tpl/question.php');

**/
?>
