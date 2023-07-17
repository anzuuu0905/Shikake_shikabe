<?php
global $info;
?>
<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width">
  <meta name="format-detection" content="telephone=no">
  <meta name="description" content="北海道鹿部町の公式漁業HP。魚介類情報、漁業について、漁師のしごとなどを紹介。ブログは、毎日更新中。鹿部町は、北海道の道南地区で函館市（旧南茅部町）、森町（砂原町）、七飯町の隣町。噴火湾（内浦湾）の湾口に位置。">
  <link rel="canonical" href="<?php echo home_url('/'); ?>">
  <link rel="icon" href="<?php echo $info['themes']; ?>/assets/img/favicon.ico" id="favicon">
  <link rel="apple-touch-icon" href="<?php echo $info['themes']; ?>/assets/img/apple-touch-icon.png">

  <title>【公式】北海道 鹿部町役場／津軽暖流と親潮が交わるさかな王国 しかべ おいしい水産物が この町の誇り</title>

  <!-- // OGP // -->
  <meta property="og:title" content="【公式】北海道 鹿部町役場／津軽暖流と親潮が交わるさかな王国 しかべ おいしい水産物が この町の誇り">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo home_url('/'); ?>">
  <meta property="og:site_name" content="【公式】北海道 鹿部町役場／津軽暖流と親潮が交わるさかな王国 しかべ おいしい水産物が この町の誇り">
  <meta property="og:description" content="北海道鹿部町の公式漁業HP。魚介類情報、漁業について、漁師のしごとなどを紹介。ブログは、毎日更新中。鹿部町は、北海道の道南地区で函館市（旧南茅部町）、森町（砂原町）、七飯町の隣町。噴火湾（内浦湾）の湾口に位置。">
  <meta property="og:image" content="<?php echo $info['themes']; ?>/assets/img/ogp_image.jpg" />

  <!--// CSS //-->
  <link rel="stylesheet" href="<?php echo $info['themes']; ?>/assets/css/normalize.css">
  <link rel="stylesheet" href="<?php echo $info['themes']; ?>/assets/css/base.css?20230715">
  <link rel="stylesheet" href="<?php echo $info['themes']; ?>/assets/css/common.css?20230715">
  <link rel="stylesheet" href="<?php echo $info['themes']; ?>/assets/css/module.css">

  <!--// add-CSS //-->
  <link rel="stylesheet" href="<?php echo $info['themes']; ?>/assets/css/index.css?20230715">

</head>

<body>

  <div id="wrapper" class="wrapper">

    <header id="header">
      <div class="headerBlk">
        <div class="inner">

          <h1 class="pcOnly"><a href="/"><img src="<?php echo $info['themes']; ?>/assets/img/common/logo.png" alt=""></a></h1>

          <!--===▼ PC gnav ▼====
          <div class="pcNav pcOnly">
            <nav>
              <ul>
                <li class="current"><a href="/fish_information/">鹿部町の魚介類</a></li>
                <li><a href="/fishing_industry/">鹿部町の漁業</a></li>
                <li><a href="/fishermans_work/">漁師のしごと</a></li>
                <li><a href="/archives/cate/blog/">漁業ブログ</a></li>
              </ul>
            </nav>
          </div>
          <div class="pcContact pcOnly">
            <a href="/contact/">お問い合わせ</a>
          </div>
          -===▲ PC gnav ▲====-->

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

      <section class="sec-fv">
        <h2><img src="<?php echo $info['themes']; ?>/assets/img/index/fv_logo.png" alt=""></h2>

        <div id="videoArea" class="videoArea">
          <video id="video" class="video" poster="<?php echo $info['themes']; ?>/assets/img/index/fv_bg-pc.jpg" webkit-playsinline playsinline muted autoplay loop>
            <source src="<?php echo $info['themes']; ?>/assets/movie/movie.mp4" type="video/mp4">
          </video>
        </div><!--/.videoArea-->

        <div class="wave wave01"></div>
        <div class="wave wave02"></div>

      </section><!-- /.sec-fv -->

      <div class="mainContents top">

        <div class="pcIndexNav pcOnly js-fade-in">
          <div class="inner">
            <div class="nav-illust">
              <div class="nav-illust__img">
                <img src="<?php echo $info['themes']; ?>/assets/img/index/menu-img-01.png" alt="スケトウダラ" width="136" height="49">
              </div>
            </div>
            <ul class="nav">
              <li class="nav__list"><a href="/fish_information/">鹿部町の魚介類</a>
                <ul class="dropdown__lists">
                  <li class="dropdown__list"><a href=" /fish_information/fish_species/">取扱魚種</a></li>
                  <li class="dropdown__list"><a href="/fish_information/major_fish_species/">鹿部町の主要魚種のこだわり</a></li>
                  <li class="dropdown__list"><a href="/fish_information/fishing_calendar/">水揚げカレンダー</a></li>
                  <li class="dropdown__list"><a href="/fish_information/recipe_restaurant/">漁師めし</a></li>
                </ul>
              </li>
              <li class="nav__list"><a href="/fishing_industry/">鹿部町の漁業</a>
                <ul class="dropdown__lists">
                  <li class="dropdown__list"><a href="/fishing_industry/aquaculture/">養殖の種類・方法</a></li>
                  <li class="dropdown__list"><a href="/fishing_industry/freshness_hygiene/">鮮度・衛生への取組</a></li>
                  <li class="dropdown__list"><a href="/fishing_industry/fish_market_shikabe/">鹿部地方卸売市場</a></li>
                </ul>
              </li>
              <li class="nav__list"><a href="/fishermans_work/">漁師のしごと</a>
                <ul class="dropdown__lists">
                  <li class="dropdown__list"><a href="/fishermans_work/fishermen/">漁師の紹介</a></li>
                  <li class="dropdown__list"><a href="/fishermans_work/be_a_fisherman/">漁師になるための方法・過程</a></li>
                </ul>

              </li>
              <li class="nav__list"><a href="/archives/cate/blog/">漁業ブログ</a>
                <ul class="dropdown__lists">
                  <li class="dropdown__list"><a href="/archives/">すべて</a></li>
                  <li class="dropdown__list"><a href="/archives/cate/blog/tsushin/">漁港通信</a></li>
                  <li class="dropdown__list"><a href="/archives/cate/blog/recipe/">浜のレシピ</a></li>
                  <li class="dropdown__list"><a href="/archives/cate/blog/relay/">漁業日記</a></li>
                  <li class="dropdown__list"><a href="/archives/cate/blog/market/">市場情報</a></li>
                  <li class="dropdown__list"><a href="/archives/cate/blog/business/">事業、取組紹介</a></li>
                  <li class="dropdown__list"><a href="/archives/cate/info/">お知らせ・イベント情報</a></li>
                  <li class="dropdown__list"><a href="/archives/cate/recruit/">海のお仕事情報</a></li>
                </ul>
              </li>
              <!-- <li class="nav__list"><a href="/sitemap/">サイトマップ</a>
              </li> -->
            </ul>
            <ul class="sns">
              <li class="facebook">
                <a href="https://www.facebook.com/shikabe.tourism" target="_blank"><img src="<?php echo $info['themes']; ?>/assets/img/common/icon-facebook.svg" width="36" height="36" alt=""></a>
              </li>
            </ul>
          </div>
        </div>

        <section class="sec-intro sec">
          <div class="inner">
            <div class="wrap">
              <div class="top-illust">
                <div class="top-illust__wrap">
                  <div class="top-illust__img top-illust__img--tara spOnly">
                    <img src="<?php echo $info['themes']; ?>/assets/img/index/menu-img-01.png" alt="スケトウダラ" width="73" height="26">
                  </div>
                  <div class="top-illust__img top-illust__img--hotate">
                    <img src="<?php echo $info['themes']; ?>/assets/img/index/menu-img-02.png" alt="ほたて" width="52" height="51">
                  </div>
                  <div class="top-illust__img top-illust__img--konbu">
                    <img src="<?php echo $info['themes']; ?>/assets/img/index/menu-img-03.png" alt="わかめ" width="34" height="58">
                  </div>
                </div>
              </div>
              <!-- <div class="txtArea"> -->
              <!-- <p class="catch">漁師の誇りと<br>北海道の豊かな自然が<br>出会う町</p> -->
              <!-- </div> -->
              <div class="imgArea">
                <picture>
                  <source media="(max-width: 767px)" srcset="<?php echo $info['themes']; ?>/assets/img/index/intro_img_sp.jpg">
                  <img srcset="<?php echo $info['themes']; ?>/assets/img/index/intro_img_pc.jpg" alt="" loading=”lazy”>
                  <!-- <img srcset="<?php echo $info['themes']; ?>/assets/img/index/intro_img_pc.jpg" alt="" loading=”lazy” width="376" height="200"> -->

                </picture>
                <!-- <img src="<?php echo $info['themes']; ?>/assets/img/index/intro_img.jpg" alt="漁師の誇りと北海道の豊かな自然が出会う町"> -->
              </div>
            </div>
          </div><!-- /.inner -->
        </section><!-- /.sec-intro -->

        <section class="sec-post sec">
          <div class="inner">

            <div class="ttlArea">
              <div><img src="<?php echo $info['themes']; ?>/assets/img/index/news_deco.png" alt=""></div>
              <h2>BLOG<span>鹿部の漁業の話</span></h2>
            </div>

            <ul class="postList is-flex gutters is-offset">
              <?php
              if (wp_is_mobile()) {
                $num = 4;
              } else {
                $num = 8;
              }
              $args = array(
                'tax_query' => array(
                  array(
                    'taxonomy' => 'cate', //タクソノミーを指定
                    'field' => 'slug', //ターム名をスラッグで指定する
                    'terms' => array('recipe', 'relay', 'tsushin', 'business', 'market') //表示したいタームをスラッグで指定
                  ),
                ),
                'post_type' => 'archives', //カスタム投稿名
                'posts_per_page' => $num, //表示件数（-1で全ての記事を表示）
              );
              $my_query = new WP_Query($args);
              if ($my_query->have_posts()) :
                while ($my_query->have_posts()) : $my_query->the_post();
              ?>

                  <li class="col is-mb12 is-pc3">
                    <div class="thumb">

                      <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                      <?php else : ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/column/noimg.jpg">
                      <?php endif; ?>

                      <?php keika_time(31); ?>
                    </div>
                    <div class="detail">
                      <div class="date"><?php echo the_time('Y.n.j'); ?></div>
                      <p class="ttl"><?php the_title(); ?></p>
                      <?php
                      if ($terms = get_the_terms($post->ID, 'cate')) {
                        foreach ($terms as $term) {
                          $term_slug = $term->slug;
                          echo ('<div class="cate ');
                          echo esc_html($term_slug);
                          echo ('">');
                          echo esc_html($term->name);
                          echo ('</div>');
                        }
                      }
                      ?>
                      <div class="writer"><span><?php the_author(); ?></span></div>
                      <ul class="hashtags">
                        <?php
                        $posttags = get_the_tags();
                        if ($posttags) {
                          foreach ($posttags as $tag) {
                            echo '<li>#' . $tag->name . '</li>';
                          }
                        }
                        ?>
                      </ul>
                    </div>
                    <a href="<?php the_permalink(); ?>"></a>
                  </li>

              <?php endwhile;
              endif;
              wp_reset_postdata(); ?>

            </ul>

            <div class="btn btn-basic is-center">
              <a href="/archives/">過去の投稿をもっと見る</a>
            </div>

          </div><!-- /.inner -->
        </section><!-- /.sec-post -->

        <section class="sec-news">
          <div class="inner">

            <div class="ttlArea">
              <div><img src="<?php echo $info['themes']; ?>/assets/img/index/news_deco.png" alt=""></div>
              <h2>NEWS</h2>
            </div>

            <div class="is-flex is-offset">
              <div class="col newsBlk blk">
                <h3>お知らせ・イベント情報</h3>

                <ul class="newsList">
                  <?php
                  $args = array(
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'cate', //タクソノミーを指定
                        'field' => 'slug', //ターム名をスラッグで指定する
                        'terms' => array('news', 'event') //表示したいタームをスラッグで指定
                      ),
                    ),
                    'post_type' => 'archives', //カスタム投稿名
                    'posts_per_page' => 4, //表示件数（-1で全ての記事を表示）
                  );
                  $my_query = new WP_Query($args);
                  if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) : $my_query->the_post();
                  ?>
                      <li>
                        <div class="newsCate">
                          <?php
                          $term = get_the_terms($post->ID, 'cate');
                          echo $term[0]->name;
                          ?>
                        </div>
                        <div class="wrap">
                          <div class="date"><?php echo the_time('Y.n.j'); ?></div>
                          <p class="txt"><?php the_title(); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>"></a>
                      </li>

                  <?php endwhile;
                  endif;
                  wp_reset_postdata(); ?>
                </ul>

                <div class="btn btn-basic is-center">
                  <a href="/archives/cate/info/">お知らせ・イベントをもっと見る</a>
                </div>
              </div>

              <div class="col recruitBlk blk">
                <h3>海のおしごと情報</h3>

                <ul class="newsList">
                  <?php
                  $args = array(
                    'tax_query' => array(
                      array(
                        'taxonomy' => 'cate', //タクソノミーを指定
                        'field' => 'slug', //ターム名をスラッグで指定する
                        'terms' => array('full', 'not_full') //表示したいタームをスラッグで指定
                      ),
                    ),
                    'post_type' => 'archives', //カスタム投稿名
                    'posts_per_page' => 4, //表示件数（-1で全ての記事を表示）
                  );
                  $my_query = new WP_Query($args);
                  if ($my_query->have_posts()) :
                    while ($my_query->have_posts()) : $my_query->the_post();
                  ?>
                      <li>
                        <div class="newsCate">
                          <?php
                          $term = get_the_terms($post->ID, 'cate');
                          echo $term[0]->name;
                          ?>
                        </div>
                        <div class="wrap">
                          <div class="date"><?php echo the_time('Y.n.j'); ?></div>
                          <p class="txt"><?php the_title(); ?></p>
                        </div>
                        <a href="<?php the_permalink(); ?>"></a>
                      </li>

                  <?php endwhile;
                  endif;
                  wp_reset_postdata(); ?>
                </ul>

                <div class="btn btn-basic is-center">
                  <a href="/archives/cate/recruit/">海のお仕事情報をもっと見る</a>
                </div>
              </div>

            </div>

          </div><!-- /.inner -->
        </section><!-- /.sec-news -->

        <section class="sec-shikabe">
          <div class="inner">
            <div class="wrap">
              <div class="sec-shikabe__title-wrap">
                <h2 class="sec-shikabe__title"><span>どんなところ？</span>“さかな王国 <ruby>鹿部<rt >しかべ</rt></ruby>”</h2>
              </div>
              <div class="sec-shikabe__map shikabe-map">
                <div class="shikabe-map__text-wrap">
                  <h3 class="shikabe-map__text where-text">
                    津軽暖流と親潮が<br>
                    交わる場所だから<br>
                    色々な魚介類が獲れる
                  </h3>
                  <div class="where-link__wrap">
                    <a class="where-link" href="/fish_information">魚介類について ＞</a>
                    <a class="where-link" href="/fishing_calendar">季節ごとの水揚げカレンダー ＞</a>
                  </div>
                </div>
                <div class="shikabe-map__img">


                  <picture>
                    <source media="(max-width: 767px)" srcset="<?php echo $info['themes']; ?>/assets/img/index/shikabe_map_sp.png">
                    <!-- <img src="<?php echo $info['themes']; ?>/assets/img/index/shikabe_map_pc.png" width="444" height="398" alt="さかな王国鹿部地図"> -->
                    <img src="<?php echo $info['themes']; ?>/assets/img/index/shikabe_map_pc.png" alt="さかな王国鹿部地図">


                  </picture>



                </div>
              </div>
              <div class="sec-shikabe__feature feature">
                <div class="feature__text-wrap">
                  <h3 class="feature__text where-text">
                    「すけとうだら」「ほたて」<br>「こんぶ」が多く獲れる町
                  </h3>
                  <div class="where-link__wrap pcOnly">
                    <a class="where-link" href="/fish_species#tara">「すけとうだら」について ＞</a>
                    <a class="where-link" href="/fish_species#hotate">「ほたて」について ＞</a>
                    <a class="where-link" href="/fish_species#konbu">「こんぶ」について ＞</a>
                  </div>
                </div>
                <div class="feature__img-wrap">
                  <div class="feature__img feature__img--left">
                    <img src="<?php echo $info['themes']; ?>/assets/img/index/feature_img01.png" alt="すけとうだら">
                  </div>
                  <div class="feature-illust feature-illust--tara">
                    <img src="<?php echo $info['themes']; ?>/assets/img/index/menu-img-01.png" alt="スケトウダラ" width="136" height="49">
                  </div>
                </div>
                <div class="spOnly">
                  <a class="where-link" href="/fish_species#tara">「すけとうだら」について ＞</a>
                </div>
                <div class="feature__img-wrap feature__img-wrap--hotate">
                  <div class="feature__img feature__img--right">
                    <img src="<?php echo $info['themes']; ?>/assets/img/index/feature_img02.png" alt="ほたて">
                  </div>
                  <div class="feature-illust feature-illust--hotate">
                    <img src="<?php echo $info['themes']; ?>/assets/img/index/menu-img-02.png" alt="ほたて" width="108" height="105">
                  </div>
                </div>
                <div class="spOnly">
                  <a class="where-link" href="/fish_species#hotate">「ほたて」について ＞</a>
                </div>
                <div class="feature__img-wrap feature__img-wrap--konbu">
                  <div class="feature__img feature__img--left">
                    <img src="<?php echo $info['themes']; ?>/assets/img/index/feature_img03.png" alt="こんぶ">
                  </div>
                  <div class="feature-illust feature-illust--konbu">
                    <img src="<?php echo $info['themes']; ?>/assets/img/index/menu-img-03.png" alt="わかめ" width="66" height="110">
                  </div>
                </div>
                <div class="spOnly">
                  <a class="where-link" href="/fish_species#konbu">「こんぶ」について ＞</a>
                </div>
              </div>
              <div class="sec-shikabe__feature2 eat">
                <div class="eat__text-wrap">
                  <h3 class="eat__text  where-text">
                    漁師町ならでは！<br>
                    おいしい漁師めしが<br class="pcOnly">ある町
                  </h3>
                  <div class="where-link__wrap pcOnly">
                    <a class="where-link" href="/recipe_restaurant">漁師めし レシピ ＞</a>
                    <a class="where-link" href="/recipe_restaurant#info">漁師めしが食べられる所 ＞</a>
                  </div>
                </div>
                <div class="eat__img eat__img--right">
                  <img src="<?php echo $info['themes']; ?>/assets/img/index/feature_img04.png" alt="すけとうだら">
                </div>
                <div class="eat__img eat__img--left">
                  <img src="<?php echo $info['themes']; ?>/assets/img/index/feature_img05.png" alt="ほたて">
                </div>
                <div class="spOnly">
                  <a class="where-link" href="/recipe_restaurant#info">漁師めし レシピ ＞</a>
                  <a class="where-link" href="/recipe_restaurant#info">漁師めしが食べられる所 ＞</a>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="sec-links sec">
          <ul>
            <!-- <li>
              <div class="img">
                <img src="<?php echo $info['themes']; ?>/assets/img/index/links_img01.png" alt="">
              </div>
              <div class="txt">
                <h2><span>鹿部町の魚介類情報</span></h2>
                <div class="box">
                  <p>鹿部町で漁獲されている魚の水揚量・水揚時期などの情報や各漁法の行使規則、主要魚種である「すけとうだら」・「ほたて」・「こんぶ」のこだわり、漁師が普段食べている料理レシピや漁師めしが食べられる場所を紹介</p>

                  <div class="btn-more">
                    <a href="/fish_information/">
                      <span>詳しく見る</span>
                    </a>
                  </div>
                </div>
              </div>
            </li> -->

            <li class="info-wrap">
              <div class="img">
                <img src="<?php echo $info['themes']; ?>/assets/img/index/links_img02.png" alt="">
              </div>
              <div class="info-wrap__box">
                <div class="info-wrap__box-inner">
                  <h2 class="info-wrap__title">漁業について</h2>
                  <div class="info-wrap__btn btn-more btn-more--white">
                    <a href="/fishing_industry/">
                      <span>詳しく見る</span>
                    </a>
                  </div>
                </div>
              </div>
            </li>

            <li class="info-wrap">
              <div class="img">
                <img src="<?php echo $info['themes']; ?>/assets/img/index/links_img03.png" alt="">
              </div>
              <div class="info-wrap__box">
                <div class="info-wrap__box-inner">
                  <h2 class="info-wrap__title">漁師のしごと</h2>
                  <div class="info-wrap__btn btn-more btn-more--white">
                    <a href="/fishermans_work/">
                      <span>詳しく見る</span>
                    </a>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </section><!-- /.sec-links -->

        <section class="sec-about sec">

          <div class="forewordBlk">
            <h2><ruby>鹿部町<rt>しかべちょう</rt></ruby>の魚介類をご家庭へ</h2>
            <p class="txt">
              鹿部町では、多くの魚介類・水産加工品をふるさと納税の返礼品として提供しています。皆様の応援で、水産資源の維持・増大を図るための事業費や関連する施設の整備費等に活用させていただいております。<br>
              皆様のご支援に応えられるよう多くの返礼品をご用意しております。遠方でなかなか鹿部町の魚介類を目にする機会が無い方にもお召し上がりいただけます。<br><br>
              <b>ぜひ、鹿部町へのご支援を<br class="spOnly">よろしくお願いいたします。</b>
            </p>
            <div class="bnr">
              <a href="https://www.town.shikabe.lg.jp/choseijoho/furusatonozei/1106.html" target="_blank"><img src="<?php echo $info['themes']; ?>/assets/img/index/bnr.jpg" alt=""></a>
              <small>※鹿部町ホームページの<br class="spOnly">「ふるさと納税」ページへ移動します</small>
            </div>
          </div>

          <img src="<?php echo $info['themes']; ?>/assets/img/index/img01.jpg" alt="" class="img">

          <div class="wrap is-flex gutters is-offset">
            <div class="col is-mb12 is-pc6 imgArea">
              <img src="<?php echo $info['themes']; ?>/assets/img/index/img02-pc.jpg" alt="">
            </div>
            <div class="col is-mb12 is-pc6 txtArea">
              <h2 class="pcOnly">鹿部町の漁業について</h2>
              <p class="txt">
                鹿部町は、噴火湾の湾口に位置し、この海域は、秋には日本海系の津軽暖流、2月から3月には親潮が流入しております。この2つの海流の交流によってプランクトンが多量に発生し、好漁場を形成しており、多種の魚介類が漁獲できます。<br>
                <br>
                <b>「すけとうだら」・「ほたて」・「こんぶ」が代表的な漁獲物</b>であり、漁業生産額は30～35億円を推移しております。<br>
                <b>鹿部・本別・出来澗の3つの漁港</b>があり、流通拠点漁港として位置づけられている鹿部漁港は、衛生管理型漁港として「新鮮」で「安全」な水産物をお届けするため、荷捌場には荷揚から出荷までの床面を表面処理するとともに屋根を施しております。<br>
                <br>
                さらに、水産物の鮮度保持や清潔を保つため、洗浄用海水を港外から取水し、紫外線殺菌したものを、荷揚の際の洗浄や市場で利用しており、また、ナノバブル発生装置を導入し、活魚として出荷するなど<b>環境保全や漁獲物の付加価値向上に力を入れております。</b><br>
                <br>
                その他にも、漁業者の高齢化が進み、後継者問題に直面している中、町内にある北海道立漁業研修所で海洋技術を学ぶための学費等を助成するなど、<b>未来を担う次世代の育成にも力を入れております。</b>
              </p>

              <div class="img02">
                <img src="<?php echo $info['themes']; ?>/assets/img/index/img03.jpg" alt="">
              </div>
            </div>
          </div>

          <img src="<?php echo $info['themes']; ?>/assets/img/index/img04.jpg" alt="">
          <img src="<?php echo $info['themes']; ?>/assets/img/index/img05-pc.jpg" alt="">
          <img src="<?php echo $info['themes']; ?>/assets/img/index/img06-pc.jpg" alt="">
        </section><!-- /.sec-about -->

        <div class="snsBlk spOnly">
          <div class="inner">
            <ul>
              <li class="facebook">
                <a href="https://www.facebook.com/shikabe.tourism" target="_blank">
                  <img src="<?php echo $info['themes']; ?>/assets/img/common/fb_bnr.jpg" alt="">
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="bottomLinks pcOnly">
          <ul>
            <li><a href="/">TOP</a></li>
            <li><a href="/fish_information/">鹿部町の魚介類</a></li>
            <li><a href="/fishing_industry/">鹿部町の漁業</a></li>
            <li><a href="/fishermans_work/">漁師のしごと</a></li>
            <li><a href="/archives/cate/blog/">漁業ブログ</a></li>
            <!-- <li><a href="/sitemap/">サイトマップ</a></li> -->
          </ul>
        </div>

      </div><!-- /.mainContents -->
    </main>

    <div id="pagetop" class="pagetop"><img src="<?php echo $info['themes']; ?>/assets/img/common/pagetop.png" alt=""></div>

    <footer>
      <div class="inner">

        <div class="address">
          <img src="<?php echo $info['themes']; ?>/assets/img/common/footer_logo.png" alt="" class="logo">
          <p class="fnt-noto">〒041-1498　<br class="spOnly">北海道茅部郡鹿部町字鹿部252番地1<br>電話番号　01372-7-2111</p>
        </div>

        <ul class="links">
          <li><a href="/copyright/">著作権について</a></li>
          <li><a href="/link/">リンクについて</a></li>
          <li><a href="/privacy/">個人情報の取扱について</a></li>
          <li><a href="/legalnotice/">免責事項</a></li>
          <li class="fContact"><a href="/contact/">お問い合わせ</a></li>
        </ul>

        <ul class="bnrs">
          <li>
            <a href="https://www.pref.hokkaido.lg.jp/sr/ssk/" target="_blank">
              <img src="<?php echo $info['themes']; ?>/assets/img/common/footer_bnr01.jpg" alt="">
            </a>
          </li>
          <li>
            <a href="http://www.town.shikabe.lg.jp/" target="_blank">
              <img src="<?php echo $info['themes']; ?>/assets/img/common/footer_bnr02.jpg" alt="">
            </a>
          </li>
        </ul>
        <p class="ttl">津軽暖流と親潮が交じわるさかな王国 <br class="spOnly">しかべ　おいしい水産物がこの町の誇り</p>
        <p class="copylight">Copyright (c) Shikabe Town. All Rights Reserved.</p>
      </div><!-- /.inner -->
    </footer>

  </div><!-- /.wrapper -->

  <!--// JavaScript //-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  <script src="<?php echo $info['themes']; ?>/assets/js/jquery.matchHeight-min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/ScrollTrigger.min.js"></script>
  <script src="<?php echo $info['themes']; ?>/assets/js/config.js"></script>

</body>

</html>
