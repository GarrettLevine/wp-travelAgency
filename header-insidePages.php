<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>

  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header id="header" class="header insideHeader">
  <div class="header__wrapper">
    <div class="header__logo">
      <h1 class="header__logo insideLogo">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo('name', 'display' ); ?>" rel="home">
          <?php bloginfo( 'name' ); ?>
        </a>
      </h1>
    </div>
    <nav class="header__nav insideNav">
      <?php wp_nav_menu( array(
        'container' => 'false',
        'menu_class' => 'header__navContainer clearfix',
        'theme_location' => 'header_nav'
      )); ?>
      <?php dynamic_sidebar( 'nav-search' ); ?>
    </nav>
  </div> <!-- /.container -->
</header><!--/.header-->

