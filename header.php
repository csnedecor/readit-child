<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package readit
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic|Pathway+Gothic+One' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
  <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'readit' ); ?></a>

  <div class="nav-bar">
    <header id="masthead" class="site-header" role="banner">
      <div class="grid grid-pad">
        <div class="site-branding">

              <?php if ( get_theme_mod( 'readit_logo' ) ) : ?>

              <div class="site-logo">

                  <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'readit_logo' ) ); ?>' <?php if ( get_theme_mod( 'logo_size' ) ) : ?>width="<?php echo esc_attr( get_theme_mod( 'logo_size' ), __( '120', 'readit' )); ?>"<?php endif; ?> alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
                        </a>

              </div><!-- site-logo -->

          <?php else : ?>

              <hgroup>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              </hgroup>

          <?php endif; ?>

        </div><!-- .site-branding -->
        <ul class="perrio-menu">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </ul>
      </header><!-- #masthead -->

        <div class="perrio-mobile-view navigation-container">

              <a class="cd-primary-nav-trigger" href="#0">
                    <span class="cd-menu-icon"></span>
                </a> <!-- cd-primary-nav-trigger -->

            </div>

      <nav>
        <ul class="perrio-mobile-view cd-primary-nav">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </ul>
      </nav>
    </div>
  </div>

  <div id="content" class="site-content">
