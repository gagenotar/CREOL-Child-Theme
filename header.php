<!DOCTYPE html>
<html lang="en-us">
	<head>
		<?php wp_head(); ?>
	</head>
	<body ontouchstart <?php body_class(); ?>>
		<?php do_action( 'after_body_open' ); ?>
		<header class="site-header">
			<?php 
			//echo get_header_markup(); 
				$videos = $images = null;
				$obj = get_queried_object();

				if ( is_single() || is_page() ) {
					$videos = get_header_videos( $obj );
					$images = get_header_images( $obj );
				}

				echo get_nav_markup();

				if ( $videos || $images ) {
					echo get_header_media_markup( $obj, $videos, $images );
				}
			// removed titles for people and posts
			// end of get_header_markup
			// Additional CSS
			// body.elementor-page-4828 h1.entry-title, .elementor-page-title {display: block !important;}
			?>
		</header>
		<main id="main" class="site-main">
