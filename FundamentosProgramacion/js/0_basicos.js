;
//Comentario de un línea
/*
  Comentario
  de
  varias
  lineas
*/
alert('Hola')
document.write('<p class="show">Hola</p>')
document.write("<p class=\"show\">Hola</p>")

//alert(document)
console.log(
  document,
  document.getElementById('saludar')
)

/* DOM = Document Object Model */

/*
Manejadores de Eventos
objeto.addEventListener('evento', function () {})
*/

const btnSaludar = document.getElementById('saludar')

btnSaludar.addEventListener('click', () => {
  alert('Hola has presionado el botón')
  document.body.style.backgroundColor = '#CCC'
})

/* En los Navegadores hay 3 objetos principales en JS */
console.log(
  btnSaludar.id,
  document,
  window,
  navigator
)
