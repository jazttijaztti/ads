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
if (!$userInfo['type']) {
	header("Location: http://local.ads.com");
}

//¡‚»‚à‚»‚à˜AŒg‚ðƒfƒBƒX‚ç‚ê‚½ê‡
$config = array(
    'appId'  => '262907057194234513',
    'secret' => 'c48e904bd07sfds1bf1c5f068653eaedb930',
	'cookie' => true
);
$facebook = new Facebook($config);
//—FlƒŠƒXƒg‚ðŽæ“¾

$friends_list = $facebook->api('/'.$userInfo['fb_id'].'/friends');
$fbIdList = '00';
$fbdata = $friends_list['data'];
foreach($fbdata as $key => $val) {
		$fbIdList .= ','.$val['id'];
}
$fbIdList .= ',01';

$select = new select;
//—Fl‚Ì’†‚Å‡‚¤—Fl‚ð’T‚·
$sametypefriend = $select->sameTypeFriend($fbIdList,$userInfo['type']);
if ($sametypefriend[0] == null) {
	$sameFriendFlg = 0;
} else {
	$sameFriendFlg = 1;
}

$goodtypefriend = $select->goodTypeFriend($fbIdList,$userInfo['type']);
if ($goodtypefriend[0] == null) {
	$goodFriendFlg = 0;
} else {
	$goodFriendFlg = 1;
}

$content  = new content;
$decidedUserType = $userInfo['type'];
$result = $content->getTypeContent($decidedUserType);

$smarty->assign ('goodFriendFlg' , $goodFriendFlg);
$smarty->assign ('sameFriendFlg' , $sameFriendFlg);
$smarty->assign ('sametypefriend', $sametypefriend);
$smarty->assign ('goodtypefriend', $goodtypefriend);

$smarty->assign ('result', $result);
$smarty->display('tpl/result.php');

?>
