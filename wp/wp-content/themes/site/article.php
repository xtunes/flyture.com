<?php
/**
 * Template Name:内容页面

 */

get_header(); ?>
          <div id="main" role="main" class="article relative">
		<div class="article_top absolute"></div>
		<div class="article_bottom absolute"></div>
		<div class="pagebody">
			<?php get_sidebar(); ?>		
		<div class="col-10 left">
			<h1 class="pagetitle"><img class="category" src="title_pic.gif"></h1>
			<div class="featuredimg"><img class="category" src="pic.jpg" ></div>
			<div class="breadcrumbs">
<?php
if(function_exists('bcn_display'))
{
    bcn_display();
}
?>
</div>
			<div class="content">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // end of the loop. ?>
				<div class="gototop"><img src="/img/btn_gototop.gif"></div> 
			</div>
		</div>
		<div class="clear"></div>	
		</div>
	<div class="rightbtn absolute">
		<div>
		<a href="/mengqingfuwu/changjianwenti/"><img src="/img/btn_zixun_l.jpg"></a>
	</div>
	<div>
		<a href="/mengqingfuwu/canguanyuyue/"><img src="/img/btn_yuyue_l.jpg"></a>
	</div>
	<div>
		<a href="/mengqingyoulan/kepumengqingguan/"><img src="/img/btn_canguan_l.jpg"></a>
	</div>
	</div>	
    </div>
    </div> <!--! end of #container -->
<?php get_footer('article'); ?>