<?php
global $info;

// slug取得
$slug = $post->post_name;
$title = $post->post_title;
$cp_slug = get_query_var('post_type');

// title
$def_ttl_before = "【公式】北海道 鹿部町役場／津軽暖流と親潮が交わるさかな王国 しかべ おいしい水産物が この町の誇り";
$meta_ttl = $def_ttl_before;

if( is_page() || is_single() ){
  $meta_ttl = $title." | ".$def_ttl_before;
}
if( is_archive() ){
  
  if(is_category()){
    $title = single_cat_title("", false);
  }else if(is_tag()){
    $title = "タグ「" . single_tag_title("", false) . "」の記事一覧";
  }else if(is_tax()){
    $title = single_term_title("", false) ;
  }else if(is_author()){
    $title = get_the_author() . "の記事一覧";
  }else{
    $title = "新着情報";
  }
  $meta_ttl = $title." | ".$def_ttl_before;
}

?>
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="北海道鹿部町の公式漁業HP。魚介類情報、漁業について、漁師のしごとなどを紹介。ブログは、毎日更新中。鹿部町は、北海道の道南地区で函館市（旧南茅部町）、森町（砂原町）、七飯町の隣町。噴火湾（内浦湾）の湾口に位置。">
  <link rel="canonical" href="<?php echo get_permalink(); ?>">
  <link rel="icon" href="<?php echo $info['themes']; ?>/assets/img/favicon.ico" id="favicon">
  <link rel="apple-touch-icon" href="<?php echo $info['themes']; ?>/assets/img/apple-touch-icon.png">
  
  <title><?php echo $meta_ttl; ?></title>
  
  <!-- // OGP // -->
	<meta property="og:title" content="<?php echo the_title(); ?>">
	<meta property="og:type" content="article">
	<meta property="og:url" content="<?php echo get_permalink(); ?>">
	<meta property="og:site_name" content="【公式】北海道 鹿部町役場／津軽暖流と親潮が交わるさかな王国 しかべ おいしい水産物が この町の誇り">
	<meta property="og:description" content="北海道鹿部町の公式漁業HP。魚介類情報、漁業について、漁師のしごとなどを紹介。ブログは、毎日更新中。鹿部町は、北海道の道南地区で函館市（旧南茅部町）、森町（砂原町）、七飯町の隣町。噴火湾（内浦湾）の湾口に位置。">
  
  <!--// CSS //-->
  <link rel="stylesheet" href="<?php echo $info['themes']; ?>/assets/css/normalize.css">
  <link rel="stylesheet" href="<?php echo $info['themes']; ?>/assets/css/base.css">
  <link rel="stylesheet" href="<?php echo $info['themes']; ?>/assets/css/common.css">
  <link rel="stylesheet" href="<?php echo $info['themes']; ?>/assets/css/module.css">

  <!--// add-CSS //-->
	<?php $css_group = SCF::get('css-group'); ?>
	<?php if(!empty($css_group[0]['add-css'])):?>
	<?php foreach ($css_group as $field_name => $field_value ) {
	echo '<link rel="stylesheet" href="'.$info['themes'].'/assets/css/'.$field_value['add-css'].'">'."\n"."\t";
	}?>
	<?php endif; ?>

	<?php if ( is_post_type_archive('archives') || is_singular('archives') || is_tax('cate') || is_tag() || is_author() || is_search() ):?>
	<?php echo '<link rel="stylesheet" href="'.$info['themes'].'/assets/css/blog.css" >'; ?>
	<?php endif; ?>
  
	<?php if ( is_404() ):?>
	<?php echo '<link rel="stylesheet" href="'.$info['themes'].'/assets/css/404.css" >'; ?>
	<?php endif; ?>
  
  <?php wp_head(); ?>
</head>

<body>
  
  <div id="wrapper" class="wrapper">
    
    <header id="header">    
      <div class="headerBlk">
        <div class="inner">
          
          <h1 class="pcOnly"><a href="/"><img src="<?php echo $info['themes']; ?>/assets/img/common/logo.png" alt=""></a></h1>
          
          <!--===▼ PC gnav ▼====-->
          <div class="pcNav pcOnly">
            <?php $url = $_SERVER['REQUEST_URI']; ?>
            <nav>
              <ul>
                <li<?php if(strstr($url,'fish_information')==true): ?> class="current"<?php else: endif; ?>><a href="/fish_information/">鹿部町の魚介類</a></li>
                <li<?php if(strstr($url,'fishing_industry')==true): ?> class="current"<?php else: endif; ?>><a href="/fishing_industry/">鹿部町の漁業</a></li>
                <li<?php if(strstr($url,"fishermans_work")==true): ?> class="current"<?php else: endif; ?>><a href="/fishermans_work/">漁師のしごと</a></li>
                <li<?php if(strstr($url,'blog')==true): ?> class="current"<?php else: endif; ?>><a href="/archives/cate/blog/">漁業ブログ</a></li>
                <li<?php if(strstr($url,'sitemap')==true): ?> class="current"<?php else: endif; ?>><a href="/sitemap/">サイトマップ</a></li>
              </ul>
            </nav>
          </div>
          <div class="pcContact pcOnly">
            <a href="/contact/">お問い合わせ</a>
          </div>
          <!--===▲ PC gnav ▲====-->
          
          <!--===▼ SP gnav ▼====-->
          <div class="menu-trigger">
            <span></span>
            <span></span>
            <span></span>
          </div>

        </div><!-- /.inner -->
      </div><!-- /.headerBlk -->
      
      <div class="gnavWrap">
        <nav>
          <div class="wrap">
            <div class="box">
              <div class="btn btn-basic">
                <a href="/contact/">お問い合わせ</a>
              </div>
              <ul class="sns">
                <li class="facebook">
                  <a href="https://www.facebook.com/shikabe.tourism" target="_blank"><img src="<?php echo $info['themes']; ?>/assets/img/common/icon-facebook_white.svg" alt=""></a>
                </li>
<!--
                <li class="twitter">
                  <a href="#test" target="_blank"><img src="<?php echo $info['themes']; ?>/assets/img/common/icon-twitter_white.svg" alt=""></a>
                </li>
                <li class="youtube" target="_blank">
                  <a href="#test"><img src="<?php echo $info['themes']; ?>/assets/img/common/icon-youtube_white.svg" alt=""></a>
                </li>
-->
              </ul>
            </div>          

            <ul class="gnav">
              <li><a href="/">トップページ</a></li>
              <li>
                <a href="/fish_information/">鹿部の魚介類</a>
                <ul class="child">
                  <li><a href="/fish_information/fish_species/">取扱魚種</a></li>
                  <li><a href="/fish_information/fishing_calendar/">水揚げカレンダー</a></li>
                  <li><a href="/fish_information/major_fish_species/">鹿部町の主要魚種のこだわり</a></li>
                  <li><a href="/fish_information/recipe_restaurant/">漁師めし</a></li>
                </ul>
              </li>
              <li>
                <a href="/fishing_industry/">鹿部町の漁業</a>
                <ul class="child">
                  <li><a href="/fishing_industry/aquaculture/">養殖の種類・方法</a></li>
                  <li><a href="/fishing_industry/freshness_hygiene/">鮮度・衛生への取組</a></li>
                  <li><a href="/fishing_industry/fish_market_shikabe/">鹿部地方卸売市場</a></li>
                </ul>              
              </li>
              <li>
                <a href="/fishermans_work/">漁師のしごと</a>
                <ul class="child">
                  <li><a href="/fishermans_work/fishermen/">漁師の紹介</a></li>
                  <li><a href="/fishermans_work/be_a_fisherman/">漁師になるための方法・過程</a></li>
                </ul>              
              </li>
              <li>
                <a href="/archives/cate/blog/">漁業ブログ</a>
                <ul class="child">
                  <li><a href="/archives/">すべて</a></li>
                  <li><a href="/archives/cate/blog/tsushin/">漁港通信</a></li>
                  <li><a href="/archives/cate/blog/recipe/">浜のレシピ</a></li>
                  <li><a href="/archives/cate/blog/relay/">漁業日記</a></li>
                  <li><a href="/archives/cate/blog/market/">市場情報</a></li>
                  <li><a href="/archives/cate/blog/business/">事業、取組紹介</a></li>
                  <li><a href="/archives/cate/info/">お知らせ・イベント情報</a></li>
                  <li><a href="/archives/cate/recruit/">海のお仕事情報</a></li>
                </ul>              
              </li>
              <li>
                <a href="/sitemap/">サイトマップ</a>
              </li>
            </ul>
          </div>
        </nav>
        <div class="overlay"></div>
      </div><!-- /.gnav -->
      
    </header><!-- /#header -->
    
    <main>    