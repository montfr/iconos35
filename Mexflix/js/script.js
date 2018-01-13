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
        url: './ajax.php',
        data: $(this).serialize()
      })
      .done(function (data) {
        c(data)
        if ( data ) {
          w.location.href = './'
        } else {
          $('#message').html('Tu usuario y/o contraseña son incorrectos')
        }
      })
      .fail(function (error) {
        c('Error:', error)
      })
    })

    $('#form-contact').submit(function (e) {
      e.preventDefault()
      alert('Enviando Form Contact')
      c($(this).serialize())
      $.ajax({
        method: 'POST',
        url: './ajax.php',
        data: $(this).serialize()
      })
        .done(function (data) {
          c(data)
          $('#message').html(data)
        })
        .fail(function (error) {
          c('Error:', error)
        })
    })
  })
})(document, window, console.log, jQuery);
