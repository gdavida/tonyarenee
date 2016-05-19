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
      <div class="col-xs-4 recent1">
        <img class="img-responsive" src="http://www.lorempixel.com/400/300/">
        <h4 class="recentPostTitle">Title Here</h4>
        <p class="recentPostReadMore">Title Here</p>
        <p class="recentPostDate">May 5, 2016</p>
      </div>
      <div class="col-xs-4 recent2">
        <img class="img-responsive" src="http://www.lorempixel.com/400/300/">
        <h4 class="recentPostTitle">Title Here</h4>
        <p class="recentPostReadMore">Title Here</p>
        <p class="recentPostDate">May 5, 2016</p>
      </div>
      <div class="col-xs-4 recent3">
        <img class="img-responsive" src="http://www.lorempixel.com/400/300/">
        <h4 class="recentPostTitle">Title Here</h4>
        <p class="recentPostReadMore">Title Here</p>
        <p class="recentPostDate">May 5, 2016</p>
      </div>
    </div>

      <!-- MAIN ARTICLE SECTION -->
    <div class="row recentPostFeature whiteBkgd">
      <div class="col-xs-12 col-sm-5 title">
        <h5 class="sectionTitle">Featured Article</h5>
        <h1 class="articleTitle">Title of Feature Here</h1>
      </div>
      <div class="col-xs-12 col-sm-7 featuredImage">
        <img class="img-responsive" src="http://www.lorempixel.com/600/450/people">
      </div>
    </div>


   
<?php 
  get_footer();