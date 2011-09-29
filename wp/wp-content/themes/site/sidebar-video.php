<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div class="sidebar left">
			<h1><img class="category" src="../sidebar_title.gif"></h1>
			<?php if ( in_category( 'mengqingdongtai' ) || is_category( 'mengqingdongtai' )) {
				wp_nav_menu(array('menu'=>'梦清园地','link_before'=>'<span>- </span>'));
			}else if(in_category( 'mengqingjianxun' ) || is_category( 'mengqingjianxun')) {
				wp_nav_menu(array('menu'=>'梦清园地','link_before'=>'<span>- </span>'));
			}else if(is_page('mengqingyuandi') ||  is_child('mengqingyuandi')) {
				wp_nav_menu(array('menu'=>'梦清园地','link_before'=>'<span>- </span>'));
			}else if(is_page('mengqinglansheng') ||  is_child('mengqinglansheng')) {
				wp_nav_menu(array('menu'=>'梦清揽胜','link_before'=>'<span>- </span>'));
			}else if(is_page('mengqingyoulan') ||  is_child('mengqingyoulan')) {
				wp_nav_menu(array('menu'=>'梦清游览','link_before'=>'<span>- </span>'));
			}else if(is_page('mengqingfuwu') ||  is_child('mengqingfuwu')) {
				wp_nav_menu(array('menu'=>'梦清服务','link_before'=>'<span>- </span>'));
			}else if(is_page('suzhouheshihua') ||  is_child('suzhouheshihua')) {
				wp_nav_menu(array('menu'=>'苏州河史话','link_before'=>'<span>- </span>'));
			}else if(is_page('suzhouheshihua/mengqinglveying') ||  is_child('suzhouheshihua/mengqinglveying')) {
				wp_nav_menu(array('menu'=>'梦清掠影','link_before'=>'<span>- </span>'));
			}else if(in_category('mengqingshipin') ||  is_child('mengqingshipin')) {
				wp_nav_menu(array('menu'=>'苏州河史话','link_before'=>'<span>- </span>'));
			}else{
				
			}
			?>

		</div> 