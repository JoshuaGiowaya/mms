(function($) {
  // Site title
  wp.customize('blogname', function(value) {
    value.bind(function(to) {
      $('.brand').text(to);
    });
  });
})(jQuery);

 jQuery('.bxslider').bxSlider({
    mode: 'fade',
    captions: true,
    slideWidth: 600
  });