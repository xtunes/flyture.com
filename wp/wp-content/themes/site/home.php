<?php
/**
 * Template Name: 首页

 */

get_header(); ?>

    <div id="main" role="main">
    	<div class="container">
    	<div class="homeswf">
		<object id="flashObj" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="910" height="460">
        <param name="movie" value="/swf/flash.swf" />
        <param name="quality" value="high" />
        <param name="wmode" value="transparent" />
        <embed id="myFlash" src="/swf/flash.swf" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="910" height="460"></embed>
      </object>
		</div>
		</div>
    </div>
 <!--! end of #container -->
<?php get_footer(); ?>