<?php
/**
 * The template for displaying the header
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- for screen readers to not have to tab through all nav items etc -->
<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dan-develops-wp' ); ?></a>

<?php do_action( 'da_before_site_header' ); ?>

<header class="site-header" id="masthead">

	<div class="header__inner container">

		<div class="site-branding">						
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		</div><!-- .site-branding -->

		<div class="header__burger">
			<span></span>
			<span></span>
			<span></span>
		</div>

		<?php if( has_nav_menu( 'main' ) ) : ?>	
		<?php get_template_part( 'template-parts/primary-navigation' ); ?>
		<?php endif; ?>

	</div><!-- .container -->

</header><!-- #site-header -->

<?php do_action( 'da_after_site_header' ); ?>