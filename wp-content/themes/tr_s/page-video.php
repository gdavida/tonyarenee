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
<?php $query1 = new WP_Query( array( 'category_name' => 'Video', 'posts_per_page' => 1 ) ); ?>

<?php if ( $query1->have_posts() ) : ?>

  <!-- pagination here -->

  <!-- the loop -->
  <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>
    <h2><?php the_title(); ?></h2>
  <?php endwhile; ?>
  <!-- end of the loop -->

  <!-- pagination here -->

  <?php wp_reset_postdata(); ?>

  <?php /* The 2nd Query (without global var) */ ?>
  <?php $query2 = new WP_Query( array( 'category_name' => 'Video', 'posts_per_page' => 6, 'offset' => 1) ); ?>

  <?php // The 2nd Loop
  while ( $query2->have_posts() ) {
    $query2->the_post();
    echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
  } ?>


<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


      <!-- TOP QUOTE SECTION -->
    <div class="row tealBkgd title">
      <div class="col-xs-12 arrowDownBoxTeal" >
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