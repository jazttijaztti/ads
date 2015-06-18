<<<<<<< HEAD
=======
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>マイページ1_1</title>
<meta name="description" content="検索エンジンの検索結果に表示されるディスクリプションの文字数は最大124文字程度、SEO的な考えからすると64文字程度です。">
<meta name="Keywords" content="平均,7個とか,SEOには,効果ないとか,でも入れといたほうがいいとか,">
<meta name="viewport" content="width=1024">
<meta name="format-detection" content="telephone=no,address=no,email=no">
 <meta property="og:type" content="website">
<meta property="og:title" content=" ">
<meta property="og:image" content=" ">
<meta property="og:site_name" content=" ">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<link rel="stylesheet" href="/common/css/style.css" media="all">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--[if lt IE 9]><script type="text/javascript" src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
<!-- ▼▼▼▼▼ COMMON_HEADER ▼▼▼▼▼ -->
>>>>>>> e89eff6ee5455ac1ec3dc810e9178e2ff5cfdc9b
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

$smarty->display('tpl/result.php');

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
