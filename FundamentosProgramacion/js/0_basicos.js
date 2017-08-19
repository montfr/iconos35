;
//Comentario de un línea
/*
  Comentario
  de
  varias
  lineas
*/
//alert('Hola')
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


/*
  Tipos de Datos
  https://jonmircha.github.io/edjs-paradigmas2017/#/60
  para declarar tipos de datos vamos a usar const y let
*/
const PI = 3.1416
console.log(PI)

/* Tipos de Datos Primitivos (Porque accedo directamente al valor) String, Number, Boolean */
let nombre = 'Jonathan',
  email = 'jonmircha@gmail.com',
  edad = 33,
  seProgramar = true

console.log('Hola, me llamo Mariel, tengo 27 años')
/* template string */
console.log(`Hola, me llamo ${nombre}, tengo ${edad} años`)

/* Tipos de Datos Complejos (Por que accedo a la referencia del valor) Objetos, Arreglos y Funciones */

/* Objeto */
let libro = {
  titulo: 'Ready Player One',
  autor: {
    nombre: 'Ernest Cline',
    pais: 'EU',
    nacimiento: '29-Marzo-1972'
  },
  editorial: 'Random House',
  generoLiterario: 'Novela',
  generos: [
    'Ciencia Ficción',
    'Video Juegos',
    'Realidad Virtual'
  ],
  anio: 2011,
  paginas: 462,
  poster: 'https://imagessl9.casadellibro.com/a/l/t0/79/9788466649179.jpg',
  isbn: '978-0307887443',
  publicado: true,
  citar: function () {
    console.log(`${this.titulo}, ${this.autor.nombre}. Editorial ${this.editorial}. ${this.anio}, ${this.autor.pais}`)
  }
}

console.log(
  libro,
  libro.generos[1],
  libro.autor.nacimiento
)

libro.citar()

document.write(`<img src="${libro.poster}">`)

/* Creando elementos en HTML con JS */
let imagenLibro = document.createElement('img')
imagenLibro.src = libro.poster
document.body.appendChild(imagenLibro)
