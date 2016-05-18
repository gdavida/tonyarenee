<?php

?><!DOCTYPE html><!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
  <head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">


    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <link rel="icon" href="../../favicon.ico">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>


  </head>

  <body>
<!-- 
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </div> <! /.nav-collapse -->
<!--       </div>
    </nav>
 -->

    <div class="container-fluid">

    <!-- HEADER NAME W LOGO -->
    <div class="row header greyBkgd">
      <div class="col-xs-12 ">
        <img class="circle trLogo" src="http://localhost:8888/tonyarenee/wp-content/themes/tonyarenee/images/logoTeal.png">
      </div>
      <div class="col-xs-12 names">
        <div class="tonyaName col-xs-6">
          <img class="pull-left" src="http://localhost:8888/tonyarenee/wp-content/themes/tonyarenee/images/tonyaName.png">
        </div>
        <div class="reneeName col-xs-6">
          <img class="pull-right" src="http://localhost:8888/tonyarenee/wp-content/themes/tonyarenee/images/reneeName.png">
        </div>
      </div>
      <div class="col-xs-12 roles">
        <h2>Lifestyle blogger +<span class="break"><br></span>
        web designer +<span class="break"><br></span>
        travel enthusiast</h2>
      </div>
    </div>
