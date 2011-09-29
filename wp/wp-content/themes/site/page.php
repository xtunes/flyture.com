<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

    <div id="main" role="main">
    	<div class="container">
    		<?php get_sidebar(); ?>
    		<div class="content right">
    			<div class="breadcrumbs">
<?php
if(function_exists('bcn_display'))
{
    bcn_display();
}
?>
</div>
<div class="detail">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
		<?php endwhile; // end of the loop. ?>
</div>    				
    		</div>
    		    <div class="clear"></div>	
		</div>
    </div>

<?php get_footer(); ?>
