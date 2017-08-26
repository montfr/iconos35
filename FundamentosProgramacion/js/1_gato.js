;
//Funciones anónima autoinvocadas
//versión ES5
//(function () {})();

//versión ES6
((d, w, n, c, a) => {
  //alert('funciona')
  c('funciona :)')

  const celdas = d.querySelectorAll('.gato'),
    tabla = d.querySelector('#gato'),
    combinacionesGanadoras = new Array(9)

  //Declaración y Asignación
  let turno = 1,
    turnoActual

  c(celdas, tabla)

  function jugarGato (e) {
    /* c(
      e,
      e.target,
      e.target.matches('td'),
      e.target.matches('tr'),
      e.target.matches('#c6')
    ) */
    if ( e.target.matches('td') && e.target.classList.contains('disponible')  ) {
      let celdaPresionada = e.target,
        idCeldaPresionada = celdaPresionada.id,
        posicionaAMarcar = idCeldaPresionada.substr(1) - 1

      turnoActual = turno%2

      celdaPresionada.classList.remove('disponible')

      c(
        turno,
        turnoActual
      )

      /*
        1) Cuando sean turnos pares escribir dinamicamente en la td, una X
        2) Cuando sean turnos impares escribir dinamicamente en la td, una O
        3) En la variable combinacionesGanadoras ir registrando los clics de ambos jugadores y comparar contra las 8 soluciones posible.
        4) Cuando un jugador complete alguna de las soluciones ganadoras, mandar una alerta indicando que jugador
        5) Si llegamos a los 9 turnos posibles sin un ganador mandar un alerta que indique empate
      */

      /* c(
        celdaPresionada,
        idCeldaPresionada,
        posicionaAMarcar,
        turno,
        turnoActual,
        this,
        'classList',
        celdaPresionada.classList,
        'className',
        celdaPresionada.className,
        celdaPresionada.classList.contains('gato')
      ) */

      /* celdaPresionada.classList.add('otra-clase')
      celdaPresionada.classList.remove('gato')
      celdaPresionada.classList.toggle('alternar') */

      //turno = turno + 1
      turno++
    }

  }

  tabla.addEventListener('click', jugarGato)
})(document, window, navigator, console.log, alert);
