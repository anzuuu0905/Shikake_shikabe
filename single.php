<?php
  get_header();

//ユーザー情報取得
  $ID = $post->post_author;

?>

      <div class="mainContents">
        
        <div class="breadcrumb">
          <ol>
            <li><a href="/">トップ</a></li>
            <?php
              $terms = get_the_terms( $post->ID, 'cate' );
              if ( $terms && ! is_wp_error( $terms ) ) {
                $term = $terms[0];
                if ( $term->parent ) {
                  $parent_term = get_term( $term->parent, 'cate' );
                  echo '<li><a href="'.get_term_link($parent_term->slug,'cate').'">'.$parent_term->name.'</a></li>';
                  echo '<li><a href="'.get_term_link($term->slug,'cate').'">'.$term->name.'</a></li>';
                } else {
                  echo '<li><a href="'.get_term_link($term->slug,'cate').'">'.$term->name.'</a></li>';
                }
              }
            ?>                     
            <li><?php the_title(); ?></li>
          </ol>
        </div>
    
        <section class="blogWrap">

          <?php if ( has_post_thumbnail() ): ?>
            <div class="blogMain">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
            </div><!-- /.blogMain -->
          <?php endif; ?>
          
          <div class="blogInner">
            
            <div class="blogHead">
              <div class="date"><?php echo the_time('Y年n月j日'); ?></div>

                  <?php
                      if ($terms = get_the_terms($post->ID, 'cate')) {
                          foreach ( $terms as $term ) {
                              $term_slug = $term -> slug;
                              echo ('<div class="cate ') ;
                              echo esc_html($term_slug) ;
                              echo ('">') ;
                              echo esc_html($term->name)  ;
                              echo ('</div>') ;
                          }
                      }
                  ?> 
              
              <h2 class="blogTtl"><?php the_title(); ?></h2>
            <?php if( has_term( array('blog','tsushin','recipe','relay','business','market') ,'cate') ) : ?>
              <?php if ( get_the_tags() ): ?>
              <ul class="hashTag">
                <?php
                $tags = get_the_tags();
                foreach( $tags as $tag) { 
                echo '<li><a href="'. get_tag_link($tag->term_id) .'">#' . $tag->name . '</a></li>';
                }
                ?>
              </ul>
              <?php endif; ?>
            <?php endif; ?> 
            </div><!-- /.blogHead -->
            
            <div class="blogBody">
              <?php the_content(); ?>
              
<?php if( has_term( array('blog','tsushin','recipe','relay','business','market') ,'cate') ) : ?>
              <div class="writerArea">
                <div class="is-flex gutters is-mobile is-cut">
                  <div class="thumb col is-mb4 is-pc3">
                    <?php echo get_avatar( $post->post_author , 300 ); ?>
                  </div>
                  
                  <div class="txt col is-mb8 is-pc9">
                    <h3>この記事を書いた人</h3>
                    <p class="name">
                      <?php
                        echo get_the_author_meta('display_name',$ID);
                      ?>
                    </p>
                    <p class="introduction">
                      <?php
                        echo get_the_author_meta('description',$ID);
                      ?>
                    </p>
                  </div>
                </div>
                <div class="link">
                  <a href="/archives/author/<?php echo get_the_author_meta('user_nicename',$ID); ?>" rel="author">この投稿者の記事をもっと見る</a>
                </div>
              </div>
<?php endif; ?>             
              
              <div class="snsSare">
                <?php echo do_shortcode('[addtoany]'); ?>
              </div>
              
            </div><!-- /.blogBody -->
            
            <!-- ▼コメント欄▼ -->
            <?php comments_template(); ?>
            <!-- ▲コメント欄▲ -->
            
            <div class="detailPager">
              <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
              <div class="prev">
                  <a href="<?php echo get_permalink($prevpost->ID); ?>">
                    <span>《</span> 
                    <?php
                    if(mb_strlen($prevpost->post_title, 'UTF-8')>8){
                      $title= mb_substr($prevpost->post_title, 0, 8, 'UTF-8');
                      echo $title.'…';
                    }else{
                      echo $prevpost->post_title;
                    }
                    ?> 
                  </a>
              </div>
              <?php endif; ?>
              <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
              <div class="next">
                  
                  <a href="<?php echo get_permalink($nextpost->ID); ?>">
                    <?php
                    if(mb_strlen($nextpost->post_title, 'UTF-8')>8){
                      $title= mb_substr($nextpost->post_title, 0, 8, 'UTF-8');
                      echo $title.'…';
                    }else{
                      echo $nextpost->post_title;
                    }
                    ?> 
                    <span>》</span>
                  </a>
              </div>
              <?php endif; ?>
            </div><!-- /.detailPager -->
  
          </div><!-- /.blogInner -->
        </section><!-- /.blogWrap -->
        
          
        <div class="recommend">
          <div class="inner">
            <h4>関連記事</h4>         
<?php
 global $post;
 $term = array_shift(get_the_terms($post->ID, 'cate')); 
 $args = array(
  'numberposts' => 4, //(8件表示の場合)
  'post_type' => 'archives', //カスタム投稿タイプ名
  'taxonomy' => 'cate', //タクソノミー名
  'term' => $term->slug, //ターム名 
  'post__not_in' => array($post->ID)
 );
?>
<?php $myPosts = get_posts($args); if($myPosts) : ?>
<ul class="is-flex gutters is-mobile is-cut"> 
<?php foreach($myPosts as $post) : setup_postdata($post); ?>             
  <li class="col is-mb6 is-pc3">
    <div class="thumb">
      <?php if ( has_post_thumbnail() ): ?>
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
      <?php else: ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/column/noimg.jpg">
      <?php endif; ?>


      <?php
          if ($terms = get_the_terms($post->ID, 'cate')) {
              $term_p = $term->parent;
              if ( $term_p != 0 ){
                foreach ( $terms as $term ) {
                    $term_slug = $term -> slug;
                    echo ('<div class="cate ') ;
                    echo esc_html($term_slug) ;
                    echo ('">') ;
                    echo esc_html($term->name)  ;
                    echo ('</div>') ;
                }
              }
          }
      ?> 
    </div>
    <p class="date"><?php echo the_time('Y年n月j日'); ?></p>
    <p class="ttl"><?php the_title(); ?></p>
    <a href="<?php the_permalink(); ?>"></a>
  </li>
<?php endforeach; ?>
</ul>
<?php else : ?>
 <p>投稿が見つかりません</p>
<?php endif; wp_reset_postdata(); ?>
              
 
          </div><!-- /.inner -->
        </div><!-- /.recommend -->     
        
        <div class="bnrArea">
          <a href="https://www.town.shikabe.lg.jp/choseijoho/furusatonozei/1106.html" target="_blank"><img src="<?php echo $info['themes']; ?>/assets/img/index/bnr.jpg" alt=""></a>
          <small>※鹿部町ホームページの<br class="spOnly">「ふるさと納税」ページへ移動します</small>
        </div>
        
          <div class="snsBlk spOnly">
            <div class="inner">
              <ul>
                <li class="facebook">
                  <a href="https://www.facebook.com/shikabe.tourism" target="_blank">
                    <img src="<?php echo $info['themes']; ?>/assets/img/common/fb_bnr.jpg" alt="">
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