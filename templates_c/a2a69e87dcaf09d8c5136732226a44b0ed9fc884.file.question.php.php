<?php /* Smarty version Smarty-3.1.13, created on 2015-06-18 08:38:35
         compiled from "tpl/question.php" */ ?>
<?php /*%%SmartyHeaderCode:20392513145582676b6ad5b5-57609692%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2a69e87dcaf09d8c5136732226a44b0ed9fc884' => 
    array (
      0 => 'tpl/question.php',
      1 => 1434496970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20392513145582676b6ad5b5-57609692',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'statics_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5582676b6cffa5_81875143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5582676b6cffa5_81875143')) {function content_5582676b6cffa5_81875143($_smarty_tpl) {?><!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>大事なワードは28文字以内に。平均32文字程度に。</title>
<meta name="description" content="検索エンジンの検索結果に表示されるディスクリプションの文字数は最大124文字程度、SEO的な考えからすると64文字程度です。">
<meta name="Keywords" content="平均,7個とか,SEOには,効果ないとか,でも入れといたほうがいいとか,">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
<meta name="format-detection" content="telephone=no,address=no,email=no">
 <meta property="og:type" content="website"><!--http://www.inventory.co.jp/labo/facebook/facebook-open-graph-protocol-ogtype.html ここに全種類サンプル-->
<meta property="og:title" content=" ">
<meta property="og:image" content=" ">
<meta property="og:site_name" content=" ">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['statics_url']->value;?>
/common/css/style.css" media="all">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--[if lt IE 9]><script type="text/javascript" src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<script>
$(function(){
  var box = $(".box");
  var box_len = $(box).length;
  $("#counter").find("span").text(box_len);
  
  var radio = $(box).find("input[type='radio']");
  
  $(radio).on("change",function(){
    var radio_checked = $(box).find("input[type='radio']:checked").size();
    $("#counter").find("span").text(box_len-radio_checked);
  });
});
</script>


</head>

<body>
<!-- ▼▼▼▼▼ COMMON_HEADER ▼▼▼▼▼ -->
<<?php ?>?php
  $webroot = $_SERVER['DOCUMENT_ROOT'];
  include( $webroot."/common/include/header.php" );
?<?php ?>>
<!-- ▲▲▲▲▲ COMMON_HEADER ▲▲▲▲▲ -->
  
<main>
  
  <section id="question_wrap">
    
  <h1>診断スタート！</h1>
  
  <p id="counter">残り<span>50</span>問</p>
    <form action="result.php">
      
      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q1" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q1" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q2" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q2" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q3" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q3" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q4" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q4" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q5" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q5" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q6" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q6" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q7" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q7" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q8" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q8" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q9" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q9" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q10" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q10" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q11" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q11" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q12" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q12" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q13" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q13" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q14" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q14" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q15" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q15" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q16" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q16" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q17" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q17" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q18" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q18" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q19" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q19" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <div class="box">
        <div class="radio">
          <label class="yes">
            yes<input type="radio" name="q20" value="1">
          </label>
          <label class="no">
            no<input type="radio" name="q20" value="0">
          </label>
        </div><!-- radio --><div class="q_text">
          <p>ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。ここに質問内容がはいります。</p>
        </div><!-- q_text -->      
      </div><!-- box -->      

      <section id="btn_area">
        <input type="submit" value="診断結果へ！" class="submit" id="btn_style">
      </section><!-- section_btn -->

    </form>   
  </section>
</main>
  
<!-- ▼▼▼▼▼ COMMON_FOOTER ▼▼▼▼▼ -->
<<?php ?>?php
  include( $webroot."/common/include/footer.php" );
?<?php ?>>
<!-- ▲▲▲▲▲ COMMON_FOOTER ▲▲▲▲▲ -->
</body>
</html>
<?php }} ?>