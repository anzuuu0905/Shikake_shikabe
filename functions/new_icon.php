<?php
/* ================================
	fn. 新着アイコン
================================ */
function keika_time($days){
    $today = date_i18n('U');
    $entry_day = get_the_time('U');
    $keika = date('U',($today - $entry_day)) / 86400;
    if ( $days > $keika ):
        echo '<div class="new"><img src="/wp-content/themes/shikabe2022/assets/img/blog/new-ico.png" alt=""></div>';
    endif;
}