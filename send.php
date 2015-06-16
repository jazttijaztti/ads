<?php
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
//if ($_POST['name']) {
//	$param['name'] = strip_tags(htmlspecialchars($_POST['fb_name'], ENT_QUOTES, 'UTF-8'));
//} else {
//	$error = "name";
//}
//if ($_POST['ma']) {
//	$param['ma'] = strip_tags(htmlspecialchars($_POST['ma'], ENT_QUOTES, 'UTF-8'));
//} else {
//	$error = "ma";
//}

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
	$url = "Location: http://careergram.jp/loginindex.php?error=".$error;
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


//■そもそも連携をディスられた場合
$config = array(
    'appId'  => '262907057194513',
    'secret' => 'c48e904bd071bf1c5f068653eaedb930',
	'cookie' => true
);
$facebook = new Facebook($config);
//友人リストを取得

$friends_list = $facebook->api('/'.$_POST['fb_id'].'/friends');
$fbIdList = '00';
$fbdata = $friends_list['data'];
foreach($fbdata as $key => $val) {
		$fbIdList .= ','.$val['id'];
}
$fbIdList .= ',01';

$select = new select;
//友人の中で合う友人を探す
$sametypefriend = $select->sameTypeFriend($fbIdList,$decidedUserType);
if ($sametypefriend[0] == null) {
	$sameFriendFlg = 0;
} else {
	$sameFriendFlg = 1;
}

$goodtypefriend = $select->goodTypeFriend($fbIdList,$decidedUserType);
if ($goodtypefriend[0] == null) {
	$goodFriendFlg = 0;
} else {
	$goodFriendFlg = 1;
}


$smarty->assign ('goodFriendFlg' , $goodFriendFlg);
$smarty->assign ('sameFriendFlg' , $sameFriendFlg);
$smarty->assign ('sametypefriend', $sametypefriend);
$smarty->assign ('goodtypefriend', $goodtypefriend);

$smarty->assign ('result', $result);
$smarty->display('tpl/result.php');

?>