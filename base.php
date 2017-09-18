<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class('stretched'); ?>>

    <div id="wrapper" class="clearfix">

      <!--[if IE]>
        <div class="alert alert-warning">
          <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
        </div>
      <![endif]-->
      <div id="home" class="page-section" style="position:absolute;top:0;left:0;width:100%;height:200px;z-index:-2;"></div>

      <?php
        do_action('get_header');
        get_template_part('templates/header');
        get_template_part('templates/slider');
      ?>
      <section id="content">
        <div class="content-wrap">
          <?php 
            get_template_part('templates/about');
            get_template_part('templates/services');
            get_template_part('templates/testimonial');
            get_template_part('templates/partners');
            get_template_part('templates/contact');
          ?>
        </div>
      </section>
      <!-- div class="wrap container" role="document">
        <div class="content row">
          <main class="main">
            <?php // include Wrapper\template_path(); ?>
          </main> 
          <?php //if (Setup\display_sidebar()) : ?>
            <aside class="sidebar">
              <?php // include Wrapper\sidebar_path(); ?>
            </aside>
          <?php // endif; ?>
        </div>
      </div><-/.wrap -->
      <?php
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      ?>

    </div>

    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/velocity.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/app.min.js"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.min.js"></script>
  </body>
</html>
