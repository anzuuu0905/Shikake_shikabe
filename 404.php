<?php
  get_header();
?>

      <div class="mainContents">
        

        <div class="inner notFound">
          <p>
            <b style="font-size: 2.4rem">ページが見つかりません。</b><br>
            お探しのページは削除、または移動された可能性があります。
          </p>
          
          <div class="btn btn-basic is-center">
            <a href="/">トップページへ</a>
          </div>
        </div>
        
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