<?php
/* ================================
	ログイン画面ロゴ
================================ */

function login_logo() {
  echo '<style type="text/css">.login h1 a {background-image: url('.get_bloginfo('template_directory').'/assets/img/common/logo.png);width:78px;height:77px;background-size:contain;}</style>';
}
add_action('login_head', 'login_logo');