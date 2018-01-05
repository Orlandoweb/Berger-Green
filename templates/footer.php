<?php
use Roots\Sage\Assets;
?>
<footer id="footer" class="footer wow fadeInUp" data-wow-duration="2s">
  <div class="footer__top">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4">
            <?php dynamic_sidebar('footer-sidebar-1'); ?>
          </div>
          <div class="col-12 col-md-2">
            <?php dynamic_sidebar('footer-sidebar-2'); ?>
          </div>
          <div class="col-12 col-md-2">
            <?php dynamic_sidebar('footer-sidebar-3'); ?>
          </div>
          <div class="col-12 col-md-4">
            <?php dynamic_sidebar('footer-sidebar-4'); ?>
          </div>
        </div>
      </div>
  </div>
  <div class="footer__middle">
    <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6">
            <div class="footer__middle__social">
              <a class="footer__middle__social__links" target="_blank" href="<?= esc_url(get_field('facebook_link','option'));?>">
                <img src="<?= esc_url(Assets\asset_path('images/facebook.png')); ?>" />
              </a>
              <a class="footer__middle__social__links" target="_blank" href="<?= esc_url(get_field('linkedin_link','option'));?>">
                <img src="<?= esc_url(Assets\asset_path('images/linkedin.png')); ?>" />
              </a>
              <a class="footer__middle__social__links" target="_blank" href="<?= esc_url(get_field('youtube_link','option'));?>">
                <img src="<?= esc_url(Assets\asset_path('images/youtube.png')); ?>" />
              </a>
              <a class="footer__middle__social__links" target="_blank" href="<?= esc_url(get_field('google_plus_link','option'));?>">
                <img src="<?= esc_url(Assets\asset_path('images/googleplus.png')); ?>" />
              </a>
            </div>
          </div>
          <div class="col-12 col-md-6">
            <div class="text-center text-md-right">
                <p class="footer__middle__copyright mb-0">©  Copyright 2017/2018 Berger & Green</p>
            </div>
          </div>
        </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="row no-gutters align-items-center">
      <?php
      $sage_add_ctas = get_field('sage_add_ctas', 'option');
      if( isset($sage_add_ctas) ) {
        for( $i=1; $i<=count($sage_add_ctas); $i++ ) {
          if( $i == 1 ) {
            $anchor_class = 'footer__bottom__link footer__bottom__link--whitebackground footer__bottom__link--first';
            $main_class = 'col col-md-3';
          } else if( $i === count($sage_add_ctas) ) {
            $anchor_class = 'footer__bottom__link footer__bottom__link--last';
            $main_class = 'col';
          } else {
            $anchor_class = 'footer__bottom__link';
            $main_class = 'col';
          }
          ?>
            <div class="<?= $main_class;?>">
              <a class="<?= $anchor_class;?>" href="<?= $sage_add_ctas[$i-1]['link'];?>">
                <span class="footer__bottom__link__content"><?= $sage_add_ctas[$i-1]['title'];?></span>
              </a>
            </div>

          <?php
        }
      }
      ?>
    </div>
  </div>
</footer>
