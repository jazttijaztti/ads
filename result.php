<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 04b3ffb86c5ef47dd77cc7cd54421b2e7c0eed83
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
<<<<<<< HEAD

=======
>>>>>>> 04550172cdfb4a37093bd91d9b8393c3a98b1377
=======
>>>>>>> 04b3ffb86c5ef47dd77cc7cd54421b2e7c0eed83
<?php
require_once('fb/facebook.php');
//require_once('class/tool/login.php');
$base_url = 'http://local.ads.com';
$statics_url = $base_url.'/statics/';
//
require_once('libralies/smarty/Smarty.class.php');
<<<<<<< HEAD
//header("Content-Type: text/html; charset=UTF-8");
=======
>>>>>>> 04b3ffb86c5ef47dd77cc7cd54421b2e7c0eed83

$smarty = new Smarty;
//$select = new Select;
$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('base_url', $base_url);
$smarty->assign ('statics_url', $statics_url);

$smarty->display('tpl/result.php');

?>
