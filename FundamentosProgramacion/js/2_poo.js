;
((c) => {
  //objeto literal

  let perro = {
    //Atributos
    nombre: 'kEnAi',
    edad: 5,
    raza: 'Criollo',
    tamanio: 'Grande',
    esterilizado: true,
    //Métodos
    ladrar: function () {
      c('Guau guau !!!')
    },
    comer: function (comida) {
      c(`Come ${comida}`)
    },
    aparecer: function (url) {
      document.write(`<img src="${url}">`)
    }
  }

  c(
    perro,
    perro.nombre, //notacion punto
    perro['edad'], //notación arreglo
    perro.raza,
    perro['esterilizado'],
    perro.tamanio
  )

  perro.ladrar()
  perro.comer('tacos')
  perro.aparecer('https://jonmircha.github.io/edjs-paradigmas2017/img/kEnAi.jpg')
})(console.log);
