<?php

if( !class_exists( 'up_layout_switcher' ) ){
	
	class up_layout_switcher{
		
		function __construct(){
		}
		
		function load_layout( $layout, $user_id, $args, $template, $i ){
			global $userpro;
			$profile_thumb_size = $args['profile_thumb_size'];
			/* Dequeue userpro default style before adding new */
			wp_dequeue_style('userpro_skin_min');
			wp_enqueue_style( 'layout_style', userpro_url.'profile-layouts/layout'.$layout.'/css/style.css' );
			wp_enqueue_style('up_layout_bootstrap', userpro_url.'profile-layouts/layout'.$layout.'/css/bootstrap.css');
			wp_enqueue_script('up_layout_script',userpro_url.'profile-layouts/layout'.$layout.'/script.js','','',true);
			include_once userpro_path.'profile-layouts/layout'.$layout.'/layout.php';
		}
		
	}
}