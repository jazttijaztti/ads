<?php

//TEST
require_once('libralies/smarty/Smarty.class.php');
require_once('class/db/update.php');
require_once('class/db/select.php');
require_once('fb/facebook.php');
require_once('class/tool/content.php');
require_once('class/tool/login.php');
require_once('fb/facebook.php');
$smarty = new Smarty;
//$reserve = new reserve;
header("Content-Type: text/html; charset=UTF-8");

$login = new login;
$userInfo = $login->getUserInfo();
$times = "";
$name  = "";
$error = "";

$param = array();

if ($_POST['fbName']) {
	$param['name'] = strip_tags(htmlspecialchars($_POST['fb_name'], ENT_QUOTES, 'UTF-8'));
} else {
	$error = "fb";
}
if ($_POST['fb_id']) {
	$param['fb_id'] = strip_tags(htmlspecialchars($_POST['fb_id'], ENT_QUOTES, 'UTF-8'));
} else {
	$error = "fb";
}
if ($_POST['fbEmail']) {
	$param['mail'] = strip_tags(htmlspecialchars($_POST['mail'], ENT_QUOTES, 'UTF-8'));
} else {
	$error = "fb";
}
if ($error != "") {
	$url = "Location: http://local.ads.com/mypage.php?error=".$error;
	header($url);
	exit;
}


//質問のカテゴリー毎に配列を格納する
//書き方の効率が悪いけれど次にどのレベルの人が見るかわからないので
//極めて明示的に記述している
$type = array();
$noSelectFlg = true;


if ($_POST['ts1']) {
	$count_ts1_val = array_count_values($_POST['ts1']);
	$type['type1'] = $count_ts1_val['on'];
	$noSelectFlg = false;
}

if ($_POST['ts2']) {
	$count_ts2_val = array_count_values($_POST['ts2']);
	$type['type2'] = $count_ts2_val['on'];
	$noSelectFlg = false;
}

if ($_POST['ts3']) {
	$count_ts3_val = array_count_values($_POST['ts3']);
	$type['type3'] = $count_ts3_val['on'];
	$noSelectFlg = false;
}

if ($_POST['ts4']) {
	$count_ts4_val = array_count_values($_POST['ts4']);
	$type['type4'] = $count_ts4_val['on'];
	$noSelectFlg = false;
}


if ($_POST['ts5']) {
	$count_ts5_val = array_count_values($_POST['ts5']);
	$type['type5'] = $count_ts5_val['on'];
	$noSelectFlg = false;
}


if ($_POST['ts6']) {
	$count_ts6_val = array_count_values($_POST['ts6']);
	$type['type6'] = $count_ts6_val['on'];
	$noSelectFlg = false;
}


if ($_POST['ts7']) {
	$count_ts7_val = array_count_values($_POST['ts7']);
	$type['type7'] = $count_ts7_val['on'];
	$noSelectFlg = false;
}


if ($_POST['ts8']) {
	$count_ts8_val = array_count_values($_POST['ts8']);
	$type['type8'] = $count_ts8_val['on'];
	$noSelectFlg = false;
}

if ($_POST['ts9']) {
	$count_ts9_val = array_count_values($_POST['ts9']);
	$type['type9'] = $count_ts9_val['on'];
	$noSelectFlg = false;
}



//値順に並べる
arsort($type);
//一番多かったタイプを取得する
$decidedUserType = Key($type);
$content  = new content;


if ($noSelectFlg == true ) {
	$param['type'] = $decidedUserType ='type9';
} else {
	$param['type'] = $decidedUserType;
}
$result = $content->getTypeContent($decidedUserType);

//結果をDBに保存する
$update  = new update;
$ret = $update->inputType($param);


$smarty->assign ('goodFriendFlg' , '1');
$smarty->assign ('sameFriendFlg' , '1');
$smarty->assign ('sametypefriend', '1');
$smarty->assign ('goodtypefriend', '1');

$smarty->assign ('result', $result);
$smarty->display('tpl/result.php');

?>
