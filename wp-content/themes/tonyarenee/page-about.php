<?php
/**
 * Template Name: Tonya Renee
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


      <!-- TOP QUOTE SECTION -->
    <div class="row whiteBkgd title">
      <div class="col-xs-12 arrowDownBoxWhite" >
        <h3 class="title">About Me</h3>
      </div>
    </div>

      <!-- ABOUT ME WRITE UP -->
    <div class="row aboutMeSection greyBkgd">
      <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 aboutMeImage">
        <img class="img-responsive" src="<?php the_field('me_image'); ?>">
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-4 
      col-sm-offset-1 aboutMeWriteUp">
        <div class="col-xs-12">
          <h4><?php the_field('introduction_title'); ?></h4>
          <p><?php the_field('about_me'); ?></p>
        </div>


      <div class="contactInfoSection">
        <h4 class>
          <i class="fa fa-envelope" aria-hidden="true"></i>
            tonya@tonya.com
        </h4>
        <h4>
          <i class="fa fa-phone" aria-hidden="true"></i>
            (402) 123-4567
        </h4>
          <div class="col-xs-4">
            <i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
          </div>
          <div class="col-xs-4">
            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
          </div>
          <div class="col-xs-4">
            <i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
          </div>
        </div>
      </div>
    </div>


   
<?php 
  get_footer();