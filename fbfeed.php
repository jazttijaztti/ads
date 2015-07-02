<?php
session_start();
require_once('libralies/smarty/Smarty.class.php');
require_once('fb/facebook.php');
require_once('class/db/update.php');
require_once('class/tool/content.php');
require_once('class/tool/login.php');
require_once('class/db/select.php');


$smarty = new Smarty;

header("Content-Type: text/html; charset=UTF-8");

$session_data = $_SESSION;

$update = new update;
$userInfo = $update->getUserInfo($session_data);
$config = array(
      'appId'  => '838352262913026',
      'secret' => '28daeb117c66fbcb466ecf9727360dcd',
      'cookie' => true,
      'fileUpload' => true,
);

//$facebook = new Facebook($config);

//var_dump($_POST);
//exit;

//■セッションのFBIDからトークンを取得する

$select = new select;
//$token  = $select->getToken($userInfo['fb_id']);
$token = $select->getToken($session_data['fb_id']);
var_dump($token);
$token_v = explode("=", $token)['1'];
//■FEEDするパラメータを整形する
$comment = $_POST['comment'];
$sameTypeName = $_POST;

$shareType = $_POST['shareType'];
if($shareType){
  $exp = $_POST['exp'];
  $exp = mb_strimwidth($exp, 0, 150, '...続きはアプリで', 'utf-8');
//■FEEDする
//photoAPIを使う場合
  $base_dir =  dirname(dirname(__FILE__));
  $source   =  "http://careergram.jp/tpl/img/careergramfeed.png";
  //$source = 'http://careergram.jp/tpl/img/share' . $shareType.'.jpg';
  $photo_source = $base_dir.'/tpl/img/share'.$shareType.'.jpg';
  $message = $comment;
  if($message) {
  	$message = $message . "
  							【あなたはどんな性格でしょう｜結婚が向いている友達もわかる|タガヤOVERSEAS】
  							 http://local.ads.com
  							";
  } else {
    $message = '';
  }
  $array =  array(
    "message" => '',
    "picture" => $source,
    "link" => 'http://local.ads.com',
    "name" => 'pverseas',
    "caption" => 'どの友達と結婚したらうまくいく？性格と一緒に算出します。',
    "description" => $exp,
    "action" => json_encode(array(
                  "name" => 'OVERSEAS',
                  "link" => 'http://local.ads.com'))
  );


//At the time of writing it is necessary to enable upload support in the Facebook SDK, you do this with the line:
  try {
    //feed
    $result = $facebook->api('/'.$userInfo['fb_id'].'/feed?'.$token,"post",$array);
    $facebook->setFileUploadSupport(true);
    //get albums messages
    $album_array = $facebook->api('/'.$userInfo['fb_id'].'/albums', 'get', array(
      'access_token' => "$token_v",
    ));
    $album_id = '';
    foreach ($album_array as $album_value) {
      $album_value['name'];
      if(isset($album_value['name'])&&$album_value['name'] == 'Careergram'){
        $album_id = $album_value['id'];
      }
    }
    if(!$album_id){
      //create albums
      $album_details = array(
              'access_token' => "$token_v",
              'message'=> 'Careergram Album',
              'name'=> 'Careergram'
      );
      $create_album = $facebook->api('/'.$userInfo['fb_id'].'/albums', 'post', $album_details);
      $album_id = $create_album['id'];
    }

    //upload photo to albums.
    $photo_details = array(
        'access_token' => "$token_v",
        'message'=> "$message",
        'image'  => '@' . $photo_source,

    );
    $upload_photo = $facebook->api('/'.$album_id.'/photos', 'post', $photo_details);
  } catch (FacebookApiException $e) {
    throw $e;
    //完了画面を表示
  }
  $smarty->display('tpl/result.php');
  exit;
} else {
  //header("Location: localhost/index.php");
  exit;
}