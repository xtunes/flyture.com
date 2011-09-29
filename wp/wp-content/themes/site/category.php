<?php

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
			<ul class="caselist">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				   <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
				   	<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('fullsize');?></a>
				   </li>
				   <?php endwhile; endif; ?>
				</ul>
</div>    				
    		</div>
    		    <div class="clear"></div>	
		</div>
    </div>

		</div>
		<div class="clear"></div>	
		</div>

<?php get_footer(); ?>