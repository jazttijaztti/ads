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

//�����������A�g���f�B�X��ꂽ�ꍇ
$config = array(
    'appId'  => '262907057194234513',
    'secret' => 'c48e904bd07sfds1bf1c5f068653eaedb930',
	'cookie' => true
);
$facebook = new Facebook($config);
//�F�l���X�g���擾

$friends_list = $facebook->api('/'.$userInfo['fb_id'].'/friends');
$fbIdList = '00';
$fbdata = $friends_list['data'];
foreach($fbdata as $key => $val) {
		$fbIdList .= ','.$val['id'];
}
$fbIdList .= ',01';

$select = new select;
//�F�l�̒��ō����F�l��T��
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
