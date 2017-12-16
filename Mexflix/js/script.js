;
(function (d, w, c, $) {
  $(d).ready(function () {
    $('.button-collapse').sideNav({
      menuWidth: 300, // Default is 300
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true,
      draggable: true
    })

    $('#form-login').submit(function (e) {
      e.preventDefault()
      //alert('Enviando Form Login')
      $.ajax({
        method: 'POST',
        url: 'login',
        data: $(this)
      })
      .done(function (data) {
        c('Éxito:', data)
      })
      .fail(function (error) {
        c('Error:', error)
      })
    })
  })
})(document, window, console.log, jQuery);
