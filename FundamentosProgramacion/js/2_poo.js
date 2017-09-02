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

  let perro2 = {
    //Atributos
    nombre: 'Tina',
    edad: 7,
    raza: 'Dalmata',
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
  perro.comer('croquetas')
  perro.aparecer('http://www.perrosamigos.com/Uploads/perrosamigos.com/ImagenesGrandes/m-perros-dalmata.html-9.jpg')
})(console.log);

((c) => {
  //POO con clases

  class Perro {
    // es un método especial que se ejecuta cuando se instancia un objeto de la clase
    constructor (nombre, edad, raza, tamanio, esterilizado) {
      //Atributos
      this.nombre = nombre
      this.edad = edad
      this.raza = raza
      this.tamanio = tamanio
      this.esterilizado = esterilizado
    }

    //Métodos
    ladrar () {
      c('Guau guau !!!')
    }

    comer ( comida ) {
      c(`Come ${comida}`)
    }

    aparecer (url) {
      document.write(`<img src="${url}">`)
    }
  }

  //instanciar un objeto de una clase determinada
  let kenai = new Perro('kenai', 5, 'Streeter', 'Grande', true),
    boni = new Perro('Boni', 12, 'Boxer', 'Grande', false)

  c(
    kenai,
    kenai.nombre,
    kenai.edad,
    kenai.raza,
    kenai.esterilizado,
    kenai.tamanio,
    boni,
    boni.nombre,
    boni.edad,
    boni.raza,
    boni.esterilizado,
    boni.tamanio
  )

  kenai.ladrar()
  boni.ladrar()
  kenai.comer('pollo')
  boni.comer('carne')
  kenai.aparecer('https://jonmircha.github.io/edjs-paradigmas2017/img/kEnAi.jpg')
  boni.aparecer('https://i2.wp.com/www.mundoperro.net/wp-content/uploads/boxer-cachorro-1-mes.jpg?w=676&h=398&crop&ssl=1')
})(console.log);
