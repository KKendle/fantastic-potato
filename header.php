<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package common
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'common' ); ?></a>

  <?php if(!is_page_template('template-styleguide.php')): ?>
    <header id="masthead" class="site-header">

      <!-- Secondary navigation -->
      <div class="c-navigation__secondary">
        <div class="l-row l-row__container">
          <div class="c-navigation__search">
            <?php include 'template-parts/searchform.php' ?>
          </div>
          <div class="c-navigation__social">
            <?php //include 'inc/social-links.php'; ?>
          </div>
          <div class="c-navigation__burger">
            <button class="c-hamburger" data-js="site-burger" aria-expanded="false">
              <div class="c-hamburger__line"></div>
              <div class="c-hamburger__line"></div>
              <div class="c-hamburger__line"></div>
              <span class="screen-reader-text">Navigation</span>
            </button>
          </div>
        </div>
      </div>

      <!-- Full site navigation items (burger nav) -->
      <div class="c-navigation__full" tabindex="-1"><!-- somehow the nav container is focusable -->
        <nav id="navigation__primary--mobile" class="c-navigation" aria-label="Primary navigation, small screen size.">
          <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'menu__primary--mobile',
            'container_class' => ''
          ) );
          ?>
        </nav>

        <nav id="navigation__secondary" class="c-navigation" aria-label="Secondary navigation.">
          <?php
          wp_nav_menu( array(
            'theme_location' => 'menu-1',
            'menu_id'        => 'menu__secondary',
            'container_class' => ''
          ) );
          ?>
        </nav>
      </div>

      <!-- Primary navigation -->
      <div class="c-navigation__primary">
        <div class="l-row l-row__container l-flex__middle l-flex__between">
          <div class="c-siteBranding">
            <?php //include 'inc/site-logo.php'; ?>
          </div>

          <nav id="navigation__primary" class="c-navigation" aria-label="Primary navigation.">
            <?php
            wp_nav_menu( array(
              'theme_location' => 'menu-1',
              'menu_id'        => 'menu__primary',
              'container_class' => ''
            ) );
            ?>
          </nav>
        </div>
      </div>

    </header>
  <?php endif; ?>

	<main id="content" class="site-content">
