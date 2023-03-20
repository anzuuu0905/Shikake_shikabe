<?php
	global $info;
?>
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
    <?php wp_footer(); ?>
  </div><!-- /.wrapper -->
  
  <!--// JavaScript //-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
  <script src="<?php echo $info['themes']; ?>/assets/js/jquery.matchHeight-min.js"></script>
  <script src="<?php echo $info['themes']; ?>/assets/js/config.js"></script>

  <!--// add-JavaScript //-->
  <?php $js_group = SCF::get('js-group'); ?>
  <?php if(!empty($js_group[0]['add-javascript'])):?>
  <?php foreach ($js_group as $field_name => $field_value ) {
  echo '<script src="'.$info['themes'].'/assets/js/'.$field_value['add-javascript'].'"></script>'."\n"."\t";
  }?>
  <?php endif; ?> 
  
</body>
</html>