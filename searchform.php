<?php
/**
 * Search Input
 *
 * Template for searchform markup.
 *
 * @since 1.0.0
 * @package WP
 */

?>
<form class="c-search__form" method="get" action="<?php echo esc_url(home_url()); ?>" role="search">
  <label class="c-search__label">
    <span class="c-search__innerLabel">Search</span>
    <input class="c-search__input" type="search" name="s">
  </label>
  <input class="c-search__submit" type="submit" value="Search">
</form>
