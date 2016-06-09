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

  <nav>
    <div class="fa fa-bars fa-2x"></div>
    <div class="container">

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </div> <!-- /.container -->
  </nav> <!--/nav -->
<header>
  <div class="container">
    <h1>Corey Lantz</h1>
    <h2>Front End Developer</h2>
    <h2><a href="#about"><i class="fa fa-angle-double-down animated bounce infinite" aria-hidden="true"></i>
    </a></h2>
  </div>
</header><!--/.header-->

