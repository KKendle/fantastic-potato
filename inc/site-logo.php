<?php
$site_logo = get_field('site_logo', 'option');
?>

<a class="c-siteBranding__link" href="<?php echo home_url(); ?>">
  <?php if(!empty($site_logo)): ?>
    <!-- site logo -->
    <img class="c-siteBranding__logo" src="<?php echo $site_logo['url']; ?>" alt="<?php echo $site_logo['alt']; ?>" />
  <?php else: ?>
    <!-- site name -->
    <p><?php bloginfo( 'name' ); ?></p>
  <?php endif; ?>
</a>
