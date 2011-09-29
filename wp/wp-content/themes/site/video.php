<?php
/**
 * Template Name:视频页面

 */

get_header(); ?>
          <div id="main" role="main" class="video relative">
		<div class="gallery_top absolute"></div>
		<div class="gallery_bottom absolute"></div>
		<div class="pagebody">
				<?php get_sidebar(); ?>
		<div class="col-11 left">
			<h1 class="pagetitle"><img class="category" src="title_pic.gif"></h1>
			<div class="content relative">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
			</div>
		</div>
		<div class="clear"></div>	
		</div>
	</div>	
    </div>
    </div> <!--! end of #container -->
<?php get_footer(); ?>