<?php
//ここにルートをbase_urlとして格納
$base_url = 'http://local.ads.com';
$statics_url = $base_url.'/statics/';
require_once('libralies/smarty/Smarty.class.php');
require_once('fb/facebook.php');
$t = require_once('class/db/select.php');
header("Content-Type: text/html; charset=UTF-8");
$smarty = new Smarty;
$select = new Select;


$smarty->left_delimiter  = "{%";
$smarty->right_delimiter = "%}";
$smarty->assign ('base_url', $base_url);
$smarty->assign ('statics_url', $statics_url);
$smarty->display('tpl/index.php');
exit;

/**
//facebook系のオフジェクとを作る
$config = array(
    'appId'  => '26290705719459313',
    'secret' => 'c48e904bd071bf123c5f068653eaedb930',
    'cookie' => true
);
$facebook = new Facebook($config);
$user_id = $facebook->getUser();
  if(isset($_GET['error']) and $_GET['error'] == 'access_denied') {
    header("Location: http://local.ads.com/?error=101");
    exit;
  }
  //is user login
  if ($user_id) {
    $page_id = "231896820289043";
    $likes_array = $facebook->api('/me/likes/'.$page_id);
    //is click "Like Button"
    if(isset($likes_array['data'])&&!empty($likes_array['data'])) {
      $click_like = 'yes';
    } else {
      $click_like = 'no';
    }
  } else {
    $click_like = 'no_user';
  }

  //■本処理 click the button
  if (isset($_GET['code'])) {
    $access_token = "access_token=".$facebook->getAccessToken();
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
    $gender      = $fb_user->gender;
    $birthday    = $fb_user->birthday;

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
    $param = array('fbUserId' => $fbUserId, 'fbName' => $fbName, 'fbEmail' => $fbEmail, 'token' => $access_token , 'fbCompany' => $fbCompany , 'fbEducation' => $fbEducation , 'fbLink' => $fbLink,'gender' => $gender,'birthday' => $birthday);

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
        header("Location: $base_url/?error=101");
      exit;
    } else {
      //is click "Like Button"
      if($click_like == 'yes') {
        header("Location: $base_url/mypage.php");
        exit();
      } 
    }
  }
  $params = array(//'display'=>'popup',
    'redirect_uri' => 'http://local.ads.com',
    'scope' => 'email,publish_stream,user_photos,photo_upload,read_stream,user_likes,read_friendlists,user_work_history,manage_pages',
    'states'=> 'fromindex'
  );
//未ログインならログイン URL を取得してリンクを出力
  $loginUrl = $facebook->getLoginUrl($params);
  $smarty->assign ('loginUrl', $loginUrl);
  $smarty->assign ('click_like', $click_like);
  $smarty->assign ('error', '');
  $smarty->display('tpl/index.html');
  exit();

**/
