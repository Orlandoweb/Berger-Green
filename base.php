<?php
use Roots\Sage\Setup;
use Roots\Sage\Wrapper;
use Roots\Sage\Assets;
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <div class="loader-wrapper">
      <img class="loader loader-logo" src="<?= esc_url(Assets\asset_path('images/bergergreen_logo.png')); ?>" alt="Logo">
      <div class="loader-section loader-section-left"></div>
      <div class="loader-section loader-section-right"></div>
    </div>
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap" role="document">
      <div class="content">
        <?php include Wrapper\template_path(); ?>
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
