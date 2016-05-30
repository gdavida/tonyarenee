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


      <!-- TITLE SECTION -->
    <div class="row tealBkgd title">
      <div class="col-xs-12 arrowDownBoxTeal" >
        <h3 class="title">Recent Posts</h3>
      </div>
    </div>


      <!-- TITLE SECTION -->
    <div class="row whiteBkgd recentPosts">
      <nav class="col-xs-4 col-xs-offset-8">
        <ul class="pagination pull-right">
          <li>
            <a href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li>
            <a href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
          <!-- first loop for featured Article loop -->
      <?php $query1 = new WP_Query( array( 'category_name' => 'Article', 'posts_per_page' => 3, 'offset' => 1 ) ); ?>

      <?php while ( $query1->have_posts() ) : $query1->the_post(); ?>

        <div class="col-xs-4 recent1">
          <img src="<?php the_field('image'); ?>" class="img-responsive">
          <h4 class="recentPostTitle"><?php the_field('title'); ?></h4>
          <p class="recentPostDate"><?php the_field('article_publish_date'); ?></p>
        </div>


      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>
  <!-- end of the featured article loop -->


    </div>


      <!-- second loop for featured Article loop -->
      <?php $query2 = new WP_Query( array( 'category_name' => 'Article', 'posts_per_page' => 1) ); ?>

      <?php while ( $query2->have_posts() ) : $query2->the_post(); ?>

      <!-- MAIN ARTICLE SECTION -->
    <div class="row recentPostFeature whiteBkgd">
      <div class="col-xs-12 col-sm-5 title">
        <h5 class="articleTagline"><?php the_field('article_tagline'); ?></h5>
        <h1 class="articleTitle"><?php the_field('title'); ?></h1>
      </div>
      <div class="col-xs-12 col-sm-7 featuredImage">
        <img class="img-responsive" src="<?php the_field('image'); ?>">
      </div>
    </div>


      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>
  <!-- end of the featured article loop -->

   
<?php 
  get_footer();