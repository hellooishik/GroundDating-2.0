<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <main id="main">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GroundedDating
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> data-theme="light">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'grounded-dating' ); ?></a>

	<header id="masthead" class="site-header gd-header">
        <div class="gd-container gd-header-inner d-flex align-center justify-between">
            <div class="site-branding">
                <?php
                // Display Custom Logo or Site Title
                if ( has_custom_logo() ) :
                    the_custom_logo();
                else :
                    ?>
                    <p class="site-title gd-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                endif;
                ?>
            </div><!-- .site-branding -->

            <nav id="site-navigation" class="main-navigation">
                <!-- Mobile Menu Button -->
                <button class="menu-toggle gd-btn gd-btn-outline" aria-controls="primary-menu" aria-expanded="false">
                    <span class="menu-icon-bars"></span>
                </button>
                
                <div class="gd-nav-wrapper">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                            'fallback_cb'    => false, // We'll handle fallback elsewhere if needed
                        )
                    );
                    ?>
                    
                    <div class="gd-header-actions d-flex align-center gap-4">
                        <a href="<?php echo esc_url( wp_login_url() ); ?>" class="gd-nav-link text-heading">Login</a>
                        <a href="<?php echo esc_url( wp_registration_url() ); ?>" class="gd-btn gd-btn-primary">Join Now</a>
                        <button id="theme-toggle" class="gd-theme-toggle" aria-label="Toggle dark mode">
                            🌙
                        </button>
                    </div>
                </div>
            </nav><!-- #site-navigation -->
        </div><!-- .gd-container -->
	</header><!-- #masthead -->
