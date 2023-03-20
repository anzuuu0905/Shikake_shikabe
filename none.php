<?php
  get_header();
?>

<?php
    global $wp_query;
    $total_results = $wp_query->found_posts;
    $search_query = get_search_query();
?>

      <div class="mainContents">
        
        <div class="breadcrumb">
          <ol>
            <li><a href="/">トップ</a></li>
            <li>「<?php echo $search_query; ?>」の検索結果</li>
          </ol>
        </div>
        
        <section class="blogHead">
          <div class="inner">
            <h2 class="pageTtl">「<?php echo $search_query; ?>」の検索結果</h2>
            
            <div id="pc-categoryLinks" class="pc-categoryLinks">
              <ul class="categoryLink">
                <li<?php if( is_post_type_archive('archives')  ): ?> class="current"<?php else: endif; ?>><a href="/archives/">すべて</a></li>
              </ul>
              <ul class="categoryLink">
                <li<?php if( $term == 'tsushin' ): ?> class="current"<?php else: endif; ?>><a href="/archives/cate/blog/tsushin/">漁港通信</a></li>
                <li<?php if( $term == 'recipe' ): ?> class="current"<?php else: endif; ?>><a href="/archives/cate/blog/recipe/">浜のレシピ</a></li>
                <li<?php if( $term == 'relay' ): ?> class="current"<?php else: endif; ?>><a href="/archives/cate/blog/relay/">漁業日記</a></li>
                <li<?php if( $term == 'market' ): ?> class="current"<?php else: endif; ?>><a href="/archives/cate/blog/market/">市場情報</a></li>
                <li<?php if( $term == 'business' ): ?> class="current"<?php else: endif; ?>><a href="/archives/cate/blog/business/">事業、取組紹介</a></li>
              </ul>
              <ul class="categoryLink">
                <li<?php if( $term == 'info' || $term == 'news' || $term == 'event' ): ?> class="current"<?php else: endif; ?>><a href="/archives/cate/info/">お知らせ・イベント情報</a></li>
                <li<?php if( $term == 'recruit' || $term == 'full' || $term == 'not_full' ): ?> class="current"<?php else: endif; ?>><a href="/archives/cate/recruit/">海のお仕事情報</a></li>
              </ul>
            </div>
            
            <div class="sp-categoryLinks">
              <select name="select" onChange="location.href=value;">
                <option value="/archives/">すべて</option>
                <option value="/archives/cate/blog/tsushin/">漁港通信</option>
                <option value="/archives/cate/blog/recipe/">浜のレシピ</option>
                <option value="/archives/cate/blog/relay/">漁業日記</option>
                <option value="/archives/cate/blog/market/">市場情報</option>
                <option value="/archives/cate/blog/business/">事業、取組紹介</option>
                <option value="/archives/cate/info/">お知らせ・イベント情報</option>
                <option value="/archives/cate/recruit/">海のお仕事情報</option>
              </select>
            </div>
            
            <?php get_search_form(); ?>
            
          </div><!-- /.inner -->
        </section><!-- /.blogHead -->
        
        <section class="blogList">
          <div class="inner">
            
            <p>キーワード入力がされていません</p>
            
          </div><!-- /.inner -->
        </section><!-- /.blogList -->
        
        
        <div class="bnrArea">
          <a href="https://www.town.shikabe.lg.jp/choseijoho/furusatonozei/1106.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/index/bnr.jpg" alt=""></a>
          <small>※鹿部町ホームページの<br class="spOnly">「ふるさと納税」ページへ移動します</small>
        </div>
        
          <div class="snsBlk spOnly">
            <div class="inner">
              <ul>
                <li class="facebook">
                  <a href="https://www.facebook.com/shikabe.tourism" target="_blank">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/fb_bnr.jpg" alt="">
                  </a>
                </li>
<!--
                <li class="twitter">
                  <a href="#test" target="_blank"><img src="assets/img/common/icon-twitter.svg" alt=""></a>
                </li>
                <li class="youtube">
                  <a href="#test" target="_blank"><img src="assets/img/common/icon-youtube.svg" alt=""></a>
                </li>
-->
              </ul>          
            </div>
          </div>
          
      </div><!-- /.mainContents -->

<?php get_footer();