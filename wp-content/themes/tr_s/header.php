<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tr_s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'tr_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">

    <!-- HEADER NAME W LOGO -->
    <div class="row header greyBkgd">
      <div class="col-xs-12 ">
        <img class="circle trLogo" src="http://localhost:8888/tonyarenee/wp-content/themes/tonyarenee/images/logoTeal.png">
      </div>
      <div class="col-xs-12 names">
        <div class="tonyaName col-xs-6">
          <img class="" src="http://localhost:8888/tonyarenee/wp-content/themes/tonyarenee/images/tonyaName.png">
        </div>
        <div class="reneeName col-xs-6">
          <img class="" src="http://localhost:8888/tonyarenee/wp-content/themes/tonyarenee/images/reneeName.png">
        </div>
      </div>
      <div class="col-xs-12 roles">
        <h2>Lifestyle blogger +<span class="break"><br></span>
        web designer +<span class="break"><br></span>
        travel enthusiast</h2>
      </div>

	</header><!-- #masthead -->


    <div class="container-fluid">

    </div>

	<div id="content" class="site-content">
