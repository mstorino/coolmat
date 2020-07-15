<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coolmat
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
	<!-- here we use bloginfo('template_url'); and then join our css file location  on the end -->

	<!-- <link rel="stylesheet" href="<?php bloginfo('template_url');
?>/css/custom.css"> -->

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">


	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'coolmat' ); ?></a>

	<!-- This is the outer element that takes up the full width -->
	<header id="masthead" class="site-header">
		<!-- inner width -->
		<div class="header-inner container">
			<div class="site-branding">
				<!-- add logo -->
				<img class="logo" src="<?php bloginfo('template_url');?>/assets/coolmat_logo.svg">
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->
			
			<!-- todo make this actually work -->
			<div class = "language-select">
				<a lang="ko-KR" hreflang="ko-KR" href="<?php echo site_url('/kr'); ?>">KR</a> |
				<a lang="en-US" hreflang="en-US" href="<?php echo site_url(); ?>">EN</a>
			</div>
		</div>

		
	</header><!-- #masthead -->
