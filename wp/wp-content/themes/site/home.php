<?php
/**
 * Template Name: 首页

 */

get_header(); ?>

    <div id="main" role="main">
    	<div class="container">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
		</div>
    </div>
 <!--! end of #container -->
<?php get_footer(); ?>