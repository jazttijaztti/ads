<?php
$base_url = 'http://local.ads.com';
$statics_url = $base_url.'/statics/';
require_once('libralies/smarty/Smarty.class.php');
/**
require_once('fb/facebook.php');
require_once('class/tool/content.php');
require_once('class/tool/login.php');
require_once('class/db/select.php');
require_once('class/db/insert.php');
require_once('class/db/update.php');
**/


header("Content-Type: text/html; charset=UTF-8");
$smarty = new Smarty;
//$select = new Select;
$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('base_url', $base_url);
$smarty->assign ('statics_url', $statics_url);
$error ="";
$smarty->display('tpl/question.php');
exit;

/*
 * FBコードを持っているかどうかで質問ページに飛ばすかログインページに飛ばすかを判断する
 * もしFBコードを持っていたらFBコードを使いアクセストークンを取得する
 * そのあとDBを見て同じfb_idがあったらトークンは更新しloginindexにリダイレクトする
 * おなじfb_idがなかったらinsertしてloginindexにリダイレクトする
 *
 */
	//■そもそも連携をディスられた場合
	$config = array(
	    'appId'  => '2629070500000000071094513',
	    'secret' => 'cisdfsaf48e904bd071bf1c5f068653eaedb930',
		'cookie' => true
	);
	$facebook = new Facebook($config);


	if(isset($_GET['error']) and $_GET['error'] == 'access_denied') {
		//アクセスを拒否された場合
		//未ログインならログイン URL を取得してリンクを出力
		$params = array(//'display'=>'popup',
						'redirect_uri' => 'http://local.ads.com/question.php',
						'scope' => 'email,publish_stream,user_photos,photo_upload,read_friendlists,user_work_history,manage_pages'
					);
		$loginUrl = $facebook->getLoginUrl($params);
		$smarty->assign ('error', 'FBからのアクセスを許可しない場合こちらのアプリは使用できません。');
		$smarty->assign ('loginUrl', $loginUrl);
		$smarty->display('tpl/index.html');
		exit;
	}

	//■本処理
	if (isset($_GET['code'])) {

		$code = $_GET['code'];
		$callback = 'http://local.ads.com/question.php';
		$token_url = 'https://graph.facebook.com/oauth/access_token?client_id=262907057194513&redirect_uri=' . urlencode($callback) . '&client_secret=c48e904bd071bf1c5f068653eaedb930&code=' . $code;

		$access_token = file_get_contents($token_url);

		$access_token = preg_replace('/\&.*/', '', $access_token);
		// ユーザ情報json取得してdecode

		$user_json = file_get_contents('https://graph.facebook.com/me?' . $access_token);
		$fb_user = json_decode($user_json);

		// facebook の user_id + name(表示名)をセット
		$fbUserId    = $fb_user->id;
		$fbName      = $fb_user->name;
		$fbEmail     = $fb_user->email;
		$fbLink      = $fb_user->link;
		$work        = $fb_user->work;
		$university  = $fb_user->education;


		//FBの設定によってはここがnullで来る可能性がある
		if ($work != null) {
			foreach ($work as $key => $val) {
				$fbCompany .= '/'.$val->employer->name;
			}
		} else {
			$work = '非公開';
		}
		if ($university != null) {
			foreach ($university as $key => $val) {
				$fbEducation .= '/'.$val->school->name;
			}
		} else {
			$fbEducation = '非公開';
		}

		$fbPic       = 'https://graph.facebook.com/'.$fb_user_id.'/picture?type=large';

		$param = array('fbUserId' => $fbUserId, 'fbName' => $fbName, 'fbEmail' => $fbEmail, 'token' => $access_token , 'fbCompany' => $fbCompany , 'fbEducation' => $fbEducation , 'fbLink' => $fbLink);

		//このfb_idがすでにDBにあるのかどうかを調べ、新規ユーザか既存ユーザでinsertかupdateを分ける。
		$select = new select;
		$checkAlreadyUserFlg = $select->checkAlreadyUser($fbUserId);

		if ($checkAlreadyUserFlg) {
			//トークン更新
			$update = new update;
			$ret = $update->updateToken($param);

		} else {
		    //新規登録
			$insert = new insert;
			$ret = $insert->fbUserInfo($param);
		}

		//更新や登録が成功したら質問ページへ
		if ($ret == false) {
				header("Location: http://local.ads.com/error=101");
			exit;
		} else {
			header("Location: http://local.ads.com/mypage.php");
			exit;
		}

	} else {
	header("Location: http://local.ads.com?error=nocode");
	exit;

	}
