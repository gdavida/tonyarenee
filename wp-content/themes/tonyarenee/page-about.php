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
        <h3 class="title">About Me</h3>
      </div>
    </div>

      <!-- ABOUT ME WRITE UP -->
    <div class="row aboutMeSection greyBkgd">
      <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 aboutMeImage">
        <img class="img-responsive" src="http://localhost:8888/tonyarenee/wp-content/themes/tonyarenee/images/tonyaProfile.jpg">
      </div>
      <div class="col-xs-10 col-xs-offset-1 col-sm-4 col-sm-offset-1 aboutMeWriteUp">
        <h4>Title line of write up.</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vel lorem eleifend, finibus est a, consequat mi. Maecenas scelerisque dolor nec odio eleifend, in auctor est commodo. Sed elementum elit vel nisl fermentum malesuada. Nam sed massa in odio varius semper eget id dui. Sed vel porta sem. Cras sit amet dui a urna mollis fermentum sed eget enim. Donec sollicitudin id dui non pharetra.</p>
        <p>Fusce ac orci at dolor sollicitudin maximus. Maecenas iaculis turpis a urna posuere pretium. Pellentesque neque neque, lacinia et ex sit amet, fringilla euismod purus. Integer ac bibendum ante, a lacinia tellus. Aenean volutpat, nibh ut malesuada rhoncus, augue nibh rutrum diam, quis egestas mi massa semper ex. Cras quis felis auctor, eleifend felis et, pretium magna. Ut ac efficitur lacus, quis interdum massa. Etiam in metus tempor, ornare ipsum vitae, ornare dui.</p>
      <div class="contactInfoSection">
        <h4 class>
            <i class="fa fa-envelope" aria-hidden="true"></i>
            tonya@tonya.com
          </h4>
          <h4>
            <i>phone</i>
            (402) 123-4567
          </h4>
          <div class="col-xs-4">fb</div>
          <div class="col-xs-4">inst</div>
          <div class="col-xs-4">li</div>
        </div>
      </div>
    </div>


   
<?php 
  get_footer();