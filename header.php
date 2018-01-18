<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
	<!doctype html>
	<html class="no-js" <?php language_attributes(); ?> >

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	</head>

	<body <?php body_class(); ?>>

		<!-- Google Analytics Code Begins -->
		<script>
			(function(i, s, o, g, r, a, m) {
				i['GoogleAnalyticsObject'] = r;
				i[r] = i[r] || function() {
					(i[r].q = i[r].q || []).push(arguments)
				}, i[r].l = 1 * new Date();
				a = s.createElement(o), m = s.getElementsByTagName(o)[0];
				a.async = 1;
				a.src = g;
				m.parentNode.insertBefore(a, m)
			})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
			ga('create', 'UA-39767596-1', 'auto');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
		</script>
		<!-- Google Analytics Code Ends -->

		<?php do_action( 'foundationpress_after_body' ); ?>


		<div class="off-canvas-wrapper">
			<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>


			<?php do_action( 'foundationpress_layout_start' ); ?>
			<header class="site-header" role="banner">
				<div class="site-title-bar show-for-small show-for-medium-up">
					<div class="mobile-bar" data-toggle="<?php foundationpress_mobile_menu_id();?>">
						<div class="mobile-bar__left">
	            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
	              <?php
	  					     // Display the Custom Logo, default logo, or the site's name
	  					     if ( has_custom_logo() ) {
	  									the_custom_logo();
	  						   }
	                 else { ?>
	  							 <img src="http://upbh2/wp-content/uploads/2018/01/logo-main-1.png" class="custom-logo" alt="Muir Wood Logo" itemprop="logo" />
	               <?php } ?>
							</a>
						</div>
						<div class="mobile-bar__right">
							<img  class="call"  src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/call.png">
							<button class="menu-icon" type="button"></button>
						</div>
					</div>
					<nav class="site-navigation top-bar" role="navigation">
						<div class="call-bar-right">
							<?php dynamic_sidebar( 'header-call-number' ); ?>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/call.png">
						</div>

						<div class="top-bar">
							<div class="site-desktop-title top-bar-left">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                  <?php
                     // Display the Custom Logo, default logo, or the site's name
                     if ( has_custom_logo() ) {
                        the_custom_logo();
                     }
                     else { ?>
                     <img src="http://upbh2/wp-content/uploads/2018/01/logo-main-1.png" class="custom-logo" alt="Muir Wood Logo" itemprop="logo" />
                   <?php } ?>
                </a>
							</div>

							<div class="top-bar-right">
								<?php foundationpress_program_bar_r(); ?>
							</div>
						</div>
					</nav>
				</div>
			</header>
			<section class="container">
				<?php do_action( 'foundationpress_after_header' );
