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
    <div class="row tealBkgd title">
      <div class="col-xs-12 arrowDownBoxTeal" >
        <h3 class="title">Videos</h3>
      </div>
    </div>




    <!-- first loop for featured Video loop -->
      <?php $query1 = new WP_Query( array( 'category_name' => 'Video', 'posts_per_page' => 1 ) ); ?>

      <?php if ( $query1->have_posts() ) : ?>

      <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>
        <img src="<?php the_field('video_image'); ?>">



      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>
  <!-- end of the featured video loop -->


      <!-- MAIN VIDEO SECTION -->
    <div class="row mainVideo greyBkgd">
        <h3>Watch Latest</h3>
    </div>

    <div class="row recentVideos whiteBkgd">
      <div class="col-xs-12 col-sm-4 col-sm-offset-4">
        <h4>Recent Videos</h4>
      </div>
      <div class="col-xs-10 col-xs-offset-1 recentVideoPosts">
        <?php $query2 = new WP_Query( array( 'category_name' => 'Video', 'posts_per_page' => 6, 'offset' => 1 ) ); ?>
 
        <?php while ( $query2->have_posts() ) : $query2->the_post(); ?>
        <div class="col-xs-6 col-sm-4 col-sm-2 recentVideoPost1">
          <img class="img-responsive" src="<?php the_field('video_image'); ?>">
        </div>
        



  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

      </div>
    </div>

<!-- end of the multiloop if there's nothing that meets criteria -->
<?php else : ?>
  <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

   
<?php 
  get_footer();