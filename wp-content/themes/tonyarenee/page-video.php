<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage TonyaRenee
 */

get_header(); ?>


      <!-- TOP QUOTE SECTION -->
    <div class="row whiteBkgd title">
      <div class="col-xs-12 arrowDownBoxWhite" >
        <h3 class="title">Videos</h3>
      </div>
    </div>

      <!-- MAIN VIDEO SECTION -->
    <div class="row mainVideo greyBkgd">
        <h3>Watch Latest</h3>
    </div>
    <div class="row recentVideos whiteBkgd">
      <div class="col-xs-12 col-sm-4 col-sm-offset-4">
        <h4>Recent Videos</h4>
      </div>
      <div class="col-xs-10 col-xs-offset-1 recentVideoPosts">
        <div class="col-xs-6 col-sm-4 col-sm-2 recentVideoPost1">
          <img class="img-responsive" src="http://www.lorempixel.com/150/150/abstract/1">
        </div>
        <div class="col-xs-6 col-sm-4 col-sm-2 recentVideoPost2">
          <img class="img-responsive" src="http://www.lorempixel.com/150/150/abstract/2">
        </div>
        <div class="col-xs-6 col-sm-4 col-sm-2 recentVideoPost3">
          <img class="img-responsive" src="http://www.lorempixel.com/150/150/abstract/3">
        </div>
        <div class="col-xs-6 col-sm-4 col-sm-2 recentVideoPost4">
          <img class="img-responsive" src="http://www.lorempixel.com/150/150/abstract/4">
        </div>
        <div class="col-xs-6 col-sm-4 col-sm-2 recentVideoPost5">
          <img class="img-responsive" src="http://www.lorempixel.com/150/150/abstract/5">
        </div>
        <div class="col-xs-6 col-sm-4 col-sm-2 recentVideoPost6">
          <img class="img-responsive" src="http://www.lorempixel.com/150/150/abstract/6">
        </div>
      </div>
    </div>


   
<?php 
  get_footer();