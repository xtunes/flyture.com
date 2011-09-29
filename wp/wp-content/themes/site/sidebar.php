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
			<?php if ( is_page( 'about' ) || is_child( 'about' )) {
				wp_nav_menu(array('menu'=>'about'));
			}else if( in_category( 'cases' ) || is_category( 'cases')) {
				wp_nav_menu(array('menu'=>'case'));
			}else if( in_category( 'qiyezhanting' ) || is_category( 'qiyezhanting')) {
				wp_nav_menu(array('menu'=>'case'));
			}else if( in_category( 'shangyehuodong' ) || is_category( 'shangyehuodong')) {
				wp_nav_menu(array('menu'=>'case'));
			}else if( in_category( 'shizhengzhanting' ) || is_category( 'shizhengzhanting')) {
				wp_nav_menu(array('menu'=>'case'));
			}else if(is_page('contact') ||  is_child('contact')) {
				wp_nav_menu(array('menu'=>'contact'));
			}else if(is_page('qualification') ||  is_child('qualification')) {
				wp_nav_menu(array('menu'=>'qualification'));
			}else if(is_page('tech') ||  is_child('tech')) {
				wp_nav_menu(array('menu'=>'tech'));
			}else if(is_page('product') ||  is_child('product')) {
				wp_nav_menu(array('menu'=>'product'));
			}else{
				
			}
			?>

		</div> 