// Menu dropdowns for larger screens (over 600px)
jQuery(document).ready(function($){
  $('li.menu-item-has-children').hover(
    function () {
      $(this).children('ul.sub-menu').fadeIn('slow');
      $(this).children('ul.sub-menu').addClass('menu-dropdown')
    },
    function () {
      $(this).children('ul.sub-menu').fadeOut('slow');
    }
  );
});
