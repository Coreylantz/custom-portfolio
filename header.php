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
    <div class="container">

      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </div> <!-- /.container -->
  </nav> <!--/nav -->
<header>
  <div class="container">
    <h1 class="animated fadeInLeft ">Corey Lantz</h1>
    <h2 class="animated fadeInRight ">Front End Developer</h2>
    <a href="#about"><h2><i class="fa fa-angle-double-down animated bounce infinite" aria-hidden="true"></i>
    </h2></a>
  </div>
</header><!--/.header-->

