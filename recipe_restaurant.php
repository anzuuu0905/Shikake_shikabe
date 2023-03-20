<ul class="postList is-flex gutters is-offset">
<?php
  $num = 4;
  $args=array(
    'tax_query' => array( 
      array(
        'taxonomy' => 'cate', //タクソノミーを指定
        'field' => 'slug', //ターム名をスラッグで指定する
        'terms' => array( 'recipe' ) //表示したいタームをスラッグで指定
      ),
    ),
    'post_type' => 'archives', //カスタム投稿名
    'posts_per_page'=> $num, //表示件数（-1で全ての記事を表示）
  );
    $my_query = new WP_Query($args);
    if ($my_query->have_posts()) :
    while ($my_query->have_posts()) : $my_query->the_post();
?>
              
              <li class="col is-mb12 is-pc3">
                <div class="thumb">
                  
                  <?php if ( has_post_thumbnail() ): ?>
                    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/column/noimg.jpg">
                  <?php endif; ?>

                  <?php keika_time(31);?>
                </div>
                <div class="detail">
                  <div class="date"><?php echo the_time('Y.n.j'); ?></div>
                  <p class="ttl"><?php the_title(); ?></p>
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
                  <div class="writer"><span><?php the_author(); ?></span></div>
                  <ul class="hashtags">
                    <?php
                      $posttags = get_the_tags();
                      if ($posttags) {
                        foreach($posttags as $tag) {
                        echo '<li>#' . $tag->name . '</li>';
                        }
                      }
                    ?>
                  </ul>
                </div>
                <a href="<?php the_permalink(); ?>"></a>
              </li>
              
  <?php endwhile;endif;wp_reset_postdata();?>  
</ul>  