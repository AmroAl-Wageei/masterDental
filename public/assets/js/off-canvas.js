(function($) {
  'use strict';
  $(function() {
  console.log("test fun", toggleClass('active'));

    $('[data-toggle="offcanvas"]').on("click", function() {
      $('.sidebar-offcanvas').toggleClass('active')
    });
  });
})(jQuery);