<?php
/* ================================
	コメントフォームカスタマイズ
================================ */
add_filter( 'comment_form_default_fields', 'remove_comment_url_fields' );
function remove_comment_url_fields( $fields ) {
  unset( $fields['url'] );
  unset( $fields['email'] );
    $fields =  array(
        // 名前
        'author' => '<p class="comment-form-author">' . '<input id="author" name="author" type="text" placeholder="お名前" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />' . ( $req ? '<span class="required">*</span>' : '' ) . '</p>',
    );
  return $fields;
}

add_filter( 'comment_form_defaults', 'custom_comment_form' );
function custom_comment_form( $args ) {
  $args['title_reply'] = 'コメントはこちらから';
  $args['comment_notes_before'] = '';
  $args['label_submit'] = '内容を確認して送信';
  return $args;
}


?>
<?php
/* ================================
	ReallySimpleCaptcha
================================ */
if ( !is_user_logged_in() && class_exists('ReallySimpleCaptcha') ) :

function my_comment_captcha() {
    $captcha = new ReallySimpleCaptcha();
    // 以下キャプチャのサイズや色をカスタマイズ
    // $captcha->img_size = array( '72', '24' ); //画像サイズ
    // $captcha->fg = array( '0', '0', '0' ); // 文字色
    // $captcha->bg = array( '255', '255', '255' ); // 画像背景色
    $captcha_word = $captcha->generate_random_word();
    $captcha_prefix = mt_rand();
    $captcha_src = $captcha->generate_image($captcha_prefix, $captcha_word); // Generate CAPTCHA image
?>
<p class="comment-form-captcha">
    <img src="<?php echo site_url(). '/wp-content/plugins/really-simple-captcha/tmp/' . $captcha_src; ?>" alt="captcha" width="<?php echo $captcha->img_size[0]; ?>" height="<?php echo $captcha->img_size[1]; ?>" />
    <p class="captcha-txt">上に表示された文字を入力してください。</p>
    <input id="comment_captcha_code" name="comment_captcha_code" size="<?php echo $captcha->char_length; ?>" type="text" />
    <input id="comment_captcha_prefix" name="comment_captcha_prefix" type="hidden" value="<?php echo $captcha_prefix; ?>" />
</p>
<p class="note">
  本サイト運営サイドからの返信は致しません。大変申し訳ありませんが、ご了承ください。皆様から頂きます御意見はしっかりと拝見した中で出来ること出来ないことございますが、これからのHP運営に活かしていきます。
</p>
<?php
}
add_action( 'comment_form_after_fields' , 'my_comment_captcha' );//#url.inputと#comment.textareaの間に挿入

function my_check_comment_captcha( $approved, $comment_data ) {
    $captcha = new ReallySimpleCaptcha();
    $captcha_prefix = $_POST['comment_captcha_prefix']; // ユーザー入力によるキャプチャレスポンス
    $captcha_code = $_POST['comment_captcha_code']; // ヴァリデーション
    $captcha_correct = $captcha->check( $captcha_prefix, $captcha_code ); // ヴァリデーションチェックが通ると[true]を返す
    if ( !$captcha_correct ) wp_die('キャプチャコードが間違っています。再入力してください。', 200); //エラーコード200を設定すると、他のコメントヴァリデートと同じ挙動になる
    $captcha->remove( $captcha_prefix );
    $captcha->cleanup();
    return $approved;
}
add_filter( 'pre_comment_approved', 'my_check_comment_captcha', 99, 2 );

endif; // if ( class_exists('ReallySimpleCaptcha') ):
?>

<?php
/* ================================
	コメントリスト表示用カスタマイズコード
================================ */
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
     <div id="comment-<?php comment_ID(); ?>" class="comment-list-wrap">
       
        <div class="comment-author vcard">
          <div class="comment-avatar"> <?php echo get_avatar( $comment );//アバター画像の表示：48はサイズ ?></div>
          <div class="comment-name">
          <?php printf(__('<cite class="fn">%s</cite>'), get_comment_author_link()) ?>
          </div>          
        </div>

        <div class="comment-listCon">
          <?php if ($comment->comment_approved == '0') : ?>
             <em><?php _e('Your comment is awaiting moderation.') ?></em>
             <br />
          <?php endif; ?>

          <?php comment_text() ?>
          
       
          <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>

          <div class="reply">
             <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
          </div>
        </div>
    </div>
<?php
        }
?>