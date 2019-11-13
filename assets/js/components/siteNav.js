jQuery(document).ready(function($) {

  // hide mobile nav items until nav is expanded
  $('.c-navigation__full').find('a').attr('tabindex', '-1');

  // mobile burger nav
  $('[data-js="site-burger"]').on('click', function() {
    $(this).toggleClass('is-active');
    if ($(this).attr( 'aria-expanded') === 'true') {
      $(this).attr( 'aria-expanded', 'false');
    } else {
      $(this).attr( 'aria-expanded', 'true');
    }
    $('.c-navigation__full').toggleClass('is-active');
    linkToggle('.c-navigation__full');
  });

  // toggle mobile nav links tabindex
  function linkToggle(parent) {
    $(parent).find('a').attr('tabindex', function() {
      if ($(this).attr( 'tabindex') === '-1') {
      $(this).attr( 'tabindex', '0');
    } else {
      $(this).attr( 'tabindex', '-1');
    }
    });
  }

  // arrow sub nav
  // jQuery('._menuArrow a').on('click', function() {
  //   jQuery(this).closest('.sub-menu').toggleClass('is-active');
  // });
}, jQuery);
