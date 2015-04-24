<div class="container">
  <div class="row">
    <ul class="swatches">
      <li class="blue"></li>
      <li class="green"></li>
      <li class="pink"></li>
      <li class="orange"></li>
      <li class="grey"></li>
    </ul>
  </div>
  <div class="row">
    <a class="logotype" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/logotype.png" alt="<?php bloginfo('name'); ?>" /></a>
  </div>
</div>

<?php use Roots\Sage\Nav\NavWalker; ?>

<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="row">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <nav class="collapse navbar-collapse" role="navigation">
        <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new NavWalker(), 'menu_class' => 'nav navbar-nav']);
        endif;
        ?>

        <?php echo do_shortcode( '[et_social_follow icon_style="simple" icon_shape="rounded" icons_location="top" col_number="3" outer_color="dark"]' ); ?>
      </nav>
    </div>
  </div>
</header>
