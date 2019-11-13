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
<form class="c-search__form" method="get" action="<?php echo esc_url(home_url()); ?>" role="search" data-js="search">
  <label class="c-search__label" for="search">
    <span class="visibility--hidden">Search</span>
    <svg xmlns="http://www.w3.org/2000/svg" width="23.431" height="28.332" viewBox="0 0 23.431 28.332" class="c-search__icon"><g transform="translate(-1654 -18)"><g transform="translate(1654 18)" fill="none" stroke="" stroke-width="3"><circle cx="9.82" cy="9.82" r="9.82" stroke="none"/><circle cx="9.82" cy="9.82" r="8.32" fill="none"/></g><path d="M-15692.457,38.777l7.879,10.425" transform="translate(17360.813 -3.775)" fill="none" stroke="" stroke-width="3"/></g></svg>
  </label>
  <input id="search" class="c-search__input" type="search" name="s" accesskey="s">
  <input id="searchSubmit" class="c-search__submit visibility--hidden" type="submit" value="Search">
</form>
