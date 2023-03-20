<?php if( comments_open() ){ ?>
      <div class="commentForm">       
        <div class="formWrap">
        <?php comment_form(array('fields' => array(
'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' . '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' /></p>',
'email'  => '<input id="email" name="email" type="hidden" value="' . substr(md5($_SERVER["REMOTE_ADDR"].'shikabe'), 11, 10) . '@shikabe-gyogyou.jp' . '" />',
'url'    => '',
))); ?>
        </div>          
        <?php if( have_comments() ){ ?>
        <h5 id="comments-count" class="comments-count"><?php echo get_comments_number().' 件のコメント'; ?></h5>
        <ul id="comments-list" class="comments-list">
          <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>
        </ul>
        <?php } ?>
	   </div><!-- /.commentForm -->
<?php } ?>