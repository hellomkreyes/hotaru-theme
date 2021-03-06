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


<body id="pageTop" <?php body_class(); ?>>

<nav class="main-nav">
    <a href=" <?php echo esc_url( get_permalink( get_page_by_title('Home'))); ?> "><?php echo get_logo(); ?></a>
    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
</nav><!--/.nav-->

<nav class="mobile-nav">
  <?php echo get_logo(); ?>
  <div class="menu-btn">
    <div class="bar"></div>
  </div>
  <div class="mobile-nav-container">
    <?php wp_nav_menu( array(
    'container' => false,
    'theme_location' => 'primary'
    )); ?>
  </div>
</nav>