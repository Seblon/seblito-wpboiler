<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Seblito
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta
		charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'seblito'); ?></a>

		<header id="masthead" class="site-header">
			<!-- Removed <div class="site-branding"></div> -->

			<!-- Start Bootstrap Navigation bar -->

			<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
				<div class="container">

					<?php if (function_exists('the_custom_logo') && has_custom_logo()) : the_custom_logo();
                    else : ?>
					<a class="navbar-brand"
						href="<?php echo esc_url(home_url('/')); ?>"
						rel="home"
						title="<?php bloginfo('name'); ?>">
						<img class="custom-logo"
							src="<?php echo get_stylesheet_directory_uri(); ?>/images/svg/logo.svg"
							alt="<?php bloginfo('name'); ?>"
							width="100" height="30" />
					</a>
					<?php endif;

                $seblito_description = get_bloginfo('description', 'display');
                    if ($seblito_description || is_customize_preview()) :
                ?>
					<p class="site-description"><?php echo $seblito_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped?>
					</p>
					<?php endif; ?>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu"
						aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="main-menu">
						<?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
					</div>
				</div>
			</nav>

			<!-- End Bootstrap Navigation bar -->

		</header><!-- #masthead -->