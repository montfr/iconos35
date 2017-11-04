<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fundamentos de Programación en PHP</title>
  <style>
    html {
      font-family: sans-serif;
      font-size: 16px;
    }

    body {
      width: 70%;
      margin: auto;
    }

    h1, h2 {
      padding: .5rem 1rem;
      background-color: #8892BF;
      color: #4F5B93;
    }

    img {
      margin: auto;
      display:block;
      max-width: 70%;
      height: auto;
    }
  </style>
</head>
<body>
  <h1>Fundamentos de Programación en PHP</h1>
  <p>Significa <b>Personal Home Pages</b> (PHP)</p>
	<p>Creador Rasmus Lerdoff</p>
	<p>Originalmente no se pensó como un lenguaje de programación.</p>
	<p>Existen 3 formas de programar con PHP</p>
  <ol>
		<li>Como preprocesador de HTML</li>
		<li>PHP Estructurado</li>
		<li>PHP Orientado a Objetos</li>
	</ol>
  <h2>Fuentes:</h2>
	<ul>
		<li><a href="http://php.net/manual/es/" target="_blank">Documentación Oficial de PHP</a></li>
		<li><a href="http://www.etnassoft.com/biblioteca/poo-y-mvc-en-php/" target="_blank">POO y MVC en PHP de Eugenia Bahit</a></li>
		<li><a href="http://bextlan.com/tutoriales/php/" target="_blank">Tutoriales PHP</a></li>
		<li><a href="http://bextlan.com/cursos/poo-php-mysql/" target="_blank">Curso de POO con PHP y MySQL</a></li>
	</ul>
  <h2>Ejercicios básicos:</h2>
	<ul>
		<li><a href="basicos.php">PHP básico</a></li>
		<li><a href="formularios.php">Formularios GET y POST</a></li>
    <li><a href="uploader.php">Subir archivos al servidor</a></li>
    <li><a href="./sesiones/index.php">Manejo de sesiones</a></li>
    <li><a href="./send_mail.php">Envío de correo electrónico</a></li>
	</ul>
  <h2>PHP Orientada a Objetos</h2>
  <h3>Características:</h3>
  <ul>
    <li>
      <h4>Modificadores de Acceso</h4>
      <p>Los métodos y atributos de una clase pueden tener diferentes níveles de acceso, los cuales pueden ser:</p>
      <ul>
        <li><b>public:</b> Acceso desde cualquier método de la clase u objeto que lo invoque</li>
        <li><b>private:</b> Acceso sólo desde los métodos de la clase, los objetos no los pueden invocar</li>
        <li><b>protected:</b> Acceso sólo desde los métodos de la clase y subclases que la hereden, los objetos no los pueden invocar</li>
        <li><b>static:</b> Pueden ser accedidos sin necesidad de instanciar un objeto y su valor es estático (no cambia)</li>
      </ul>
    </li>
    <li>
      <h4><b><code>::</code></b> es el operador de resolución de ámbito</h4>
      <p>Se puede usar con el nombre de la clase o con la palabra reservada self. Sirve para invocar:</p>
      <ul>
        <li>
          Fuera de la Clase:
          <ul>
            <li>Métodos Estáticos</li>
            <li>Atributos Estáticos</li>
          </ul>
        </li>
        <li>
          Dentro de la Clase
          <ul>
            <li>Métodos Estáticos o No Estáticos</li>
            <li>Atributos Estáticos</li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
      <h4><a href="http://php.net/manual/es/language.oop5.magic.php" target="_blank">Métodos Mágicos de PHP</a></h4>
      <ul>
        <li><b>Constructor:</b> método que se ejecuta automáticamente al inicio de instanciar la clase</li>
        <li><b>Destructor:</b> método que se ejecuta automáticamente al final de instanciar la clase</li>
      </ul>
    </li>
    <li>
      <h4>Herencia</h4>
      <p>Los objetos pueden heredar propiedades y métodos de otros, mediante la extensión (herencia) de clases, cuya característica representa la relación existente entre diferentes objetos. Para definir una clase como extención de otra se utiliza la palabra clave <b><code>extends</code></b>.</p>
    </li>
    <li>
      <h4>Polimorfismo</h4>
      <p>Es la capacidad que da a diferentes objetos, la posibilidad de contar con métodos y atributos de igual nombre, sin que los de un objeto interfieran con el de otro.</p>
    </li>
  </ul>
  <h3>Tipos de Clases en PHP:</h3>
  <ul>
    <li><b>Instanciables:</b> Ser instanciada (se pueden crear objetos) y/o se pueden heredar</li>
    <li><b>Heredadas:</b> Guardar relación con métodos y atributos de otra</li>
    <li><b>Finales:</b> Es Instanciables pero no se puede heredar</li>
    <li>
      <b>Abstractas:</b> Sirven de modelo para otras, NO se pueden instanciar y DEBEN heredarse
      <ul>
        <li>Cuando una clase abstracta, tiene métodos abstractos, estos sólo se deben definir, no deben tener cuerpo</li>
        <li>El algoritmo del método abstracto debe ser implementado en las clases que hereden la clase abstracta</li>
        <li>Las clases que heredan una abstracta, deben de implementar todos los métodos abstractos de la clase padre</li>
        <li>NO existen atributos abstractos</li>
      </ul>
    </li>
  </ul>
  <img src="http://bextlan.com/img/para-cursos/tipos-clases-php.png">
  <h3>Ejercicios:</h3>
  <ul>
    <li><a href="./poo.php">Básicos</a></li>
    <li><a href="./poo_2.php">Herencia y polimorfismo</a></li>
    <li><a href="./poo_3.php">Abstracción</a></li>
  </ul>
</body>
</html>
