;
(function (d, w, c, $) {
  $(d).ready(function () {
    $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true,
      draggable: true
    })
  })
})(document, window, console.log, jQuery);
