<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package common
 */

?>

	</main><!-- #content -->

  <footer id="colophon" class="site-footer">

      <?php if ( function_exists('is_sidebar_active') && is_sidebar_active('footer-3') ): ?>
        <!-- Top, full-width widgets -->
        <div class="l-row l-row__container">
          <div class="c-widget c-widget__footer c-widget__footer--top">
            <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
              <div id="footer-widget-3">
                <?php dynamic_sidebar( 'footer-4' ); ?>
              </div>
            <?php  endif; ?>
          </div>
        </div>
      <?php endif; ?>

      <!-- Main middle widgets -->
      <div class="l-row l-row__container">
        <?php if ( function_exists('is_sidebar_active') && is_sidebar_active('footer-1') ): ?>
          <div class="c-widget c-widget__footer c-widget__footer--1">
            <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
              <div id="footer-widget-1">
                <?php dynamic_sidebar( 'footer-1' ); ?>
              </div>
            <?php  endif; ?>
          </div>
        <?php endif; ?>

        <?php if ( function_exists('is_sidebar_active') && is_sidebar_active('footer-2') ): ?>
          <div class="c-widget c-widget__footer c-widget__footer--2">
            <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
              <div id="footer-widget-2">
                <?php dynamic_sidebar( 'footer-2' ); ?>
              </div>
            <?php  endif; ?>
          </div>
        <?php endif; ?>

        <?php if ( function_exists('is_sidebar_active') && is_sidebar_active('footer-3') ): ?>
          <div class="c-widget c-widget__footer c-widget__footer--3">
            <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
              <div id="footer-widget-3">
                <?php dynamic_sidebar( 'footer-3' ); ?>
              </div>
            <?php  endif; ?>
          </div>
        <?php endif; ?>
      </div>


      <?php if ( function_exists('is_sidebar_active') && is_sidebar_active('footer-5') ): ?>
        <!-- Bottom, full-width widgets -->
        <div class="l-row l-row__container">
          <div class="c-widget c-widget__footer c-widget__footer--top">
            <?php if ( is_active_sidebar( 'footer-5' ) ) : ?>
              <div id="footer-widget-3">
                <?php dynamic_sidebar( 'footer-5' ); ?>
              </div>
            <?php  endif; ?>
          </div>
        </div>
      <?php endif; ?>

    <?php //include 'inc/social-links.php'; ?>
  </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php // include_once 'inc/vendor/aos/aos.php'; ?>

</body>
</html>
