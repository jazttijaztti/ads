<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>マイページ</title>
<meta name="description" content="検索エンジンの検索結果に表示されるディスクリプションの文字数は最大124文字程度、SEO的な考えからすると64文字程度です。">
<meta name="Keywords" content="平均,7個とか,SEOには,効果ないとか,でも入れといたほうがいいとか,">
<meta name="viewport" content="width=1024">
<meta name="format-detection" content="telephone=no,address=no,email=no">
 <meta property="og:type" content="website">
<meta property="og:title" content=" ">
<meta property="og:image" content=" ">
<meta property="og:site_name" content=" ">
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<link rel="stylesheet" href="/statics/common/css/style.css" media="all">
<link rel="stylesheet" href="/statics/common/css/animsition.min.css" media="all">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!--[if lt IE 9]><script type="text/javascript" src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body class="animsition">
{%include file='statics/common/include/header.php'%}

<main>
  <section id="reslut_prof_wrap">
    <div class="inner comment_wrap">
      <div class="comment">
        <h1><img src="/statics/common/images/your_type.png" alt="あなたのタイプ"></h1>
        <p>{%$yourType%}</p>
        <p>{%$yourWorks%}</p>
        <p>{%$yourKinds%}</p>
        <p>{%$nakama%}</p>
      </div><!-- comment -->
      <div class="img">
        <img src="/statics/common/images/dammy.png" alt="dammy">
      </div><!-- img -->
    </div><!-- .inner -->
  </section><!-- reslut_prof_wrap -->

    <div class="inner comment_wrap">
      <section id="btn_area">
        <a href="fbfeed.php" id="btn_style">結果をシェアする</a>
      </section><!-- section_btn -->
    </div><!-- .inner -->

  <section id="result_parson_wrap">
    <div class="good inner">
      <h1><img src="/statics/common/images/good.png" alt="相性のいいひと"></h1>
      <div class="box"><a href="">
        <img src="/statics/common/images/dammy.png" alt="dammy">
        <p class="name">ヤオイタクミ<span class="age">(24)</span></p>
      </a></div><!-- box -->
      <div class="box"><a href="">
        <img src="/statics/common/images/dammy.png" alt="dammy">
        <p class="name">ヤオイタクミ<span class="age">(24)</span></p>
      </a></div><!-- box -->
      <div class="box"><a href="">
        <img src="/statics/common/images/dammy.png" alt="dammy">
        <p class="name">ヤオイタクミ<span class="age">(24)</span></p>
      </a></div><!-- box -->
      <div class="box"><a href="">
        <img src="/statics/common/images/dammy.png" alt="dammy">
        <p class="name">ヤオイタクミ<span class="age">(24)</span></p>
      </a></div><!-- box -->
      <div class="box"><a href="">
        <img src="/statics/common/images/dammy.png" alt="dammy">
        <p class="name">ヤオイタクミ<span class="age">(24)</span></p>
      </a></div><!-- box -->
    </div><!-- good -->

    <div class="bad inner">
      <h1><img src="/statics/common/images/bad.png" alt="相性のわるいひと"></h1>
      <div class="box"><a href="">
        <img src="/statics/common/images/dammy.png" alt="dammy">
        <p class="name">ヤオイタクミ<span class="age">(24)</span></p>
      </a></div><!-- box -->
      <div class="box"><a href="">
        <img src="/statics/common/images/dammy.png" alt="dammy">
        <p class="name">ヤオイタクミ<span class="age">(24)</span></p>
      </a></div><!-- box -->
      <div class="box"><a href="">
        <img src="/statics/common/images/dammy.png" alt="dammy">
        <p class="name">ヤオイタクミ<span class="age">(24)</span></p>
      </a></div><!-- box -->
      <div class="box"><a href="">
        <img src="/statics/common/images/dammy.png" alt="dammy">
        <p class="name">ヤオイタクミ<span class="age">(24)</span></p>
      </a></div><!-- box -->
      <div class="box"><a href="">
        <img src="/statics/common/images/dammy.png" alt="dammy">
        <p class="name">ヤオイタクミ<span class="age">(24)</span></p>
      </a></div><!-- box -->
    </div><!-- bad -->
  </section><!-- result_parson_wrap -->

  <section id="prom_text">
    <div class="inner">
      <p>この企画はOverseas Weddingで京都での結婚式をサポートする<a href="http://tagaya-group.com/" target="_blank">TAGAYA BRIDAL</a>が提供しています。</p>
    </div><!-- inner -->
  </section><!-- prom_text -->

  <section id="btn_area">
    <div class="inner">
      <a href="/mypage.php" id="btn_style">マイページへ</a>
    </div><!-- inner -->
  </section><!-- section_btn -->

</main>
  
{%include file='statics/common/include/footer.php'%}

</body>
<script src="/statics/common/js/jquery.animsition.min.js"></script>
<script src="/statics/common/js/animate_triger.js"></script>
</html>
