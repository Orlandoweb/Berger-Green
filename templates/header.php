<?php
use Roots\Sage\Assets;
$logo = get_field('sage_header_logo','option');
$logo = isset($logo) ? $logo : Assets\asset_path('images/bergergreen_logo.png');

$sage_header_text = get_field('sage_header_text','option');
$sage_header_text = isset($sage_header_text) ? $sage_header_text : 'Call Today for a FREE Consultation: <span>(412) 661-1400</span>';
?>
<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-10 col-md-4">
        <div class="header__col__left">
          <a href="<?php home_url();?>">
            <img class="img-fluid" src="<?= esc_url($logo); ?>" />
          </a>
        </div>
      </div>
      <div class="col-2 col-md-8">
        <div class="header__col__right text-md-right text-white">
          <p class="hidden-md-down header__col__right__cta b-4"><?= $sage_header_text;?></p>
          <nav class="navbar navbar-default navbar-toggleable-md header__col__right__menu nav-primary p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar" class="navbar-collapse collapse">
              <?php
              if (has_nav_menu('primary_navigation')) :
                wp_nav_menu(['theme_location' => 'primary_navigation']);
              endif;
              ?>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
