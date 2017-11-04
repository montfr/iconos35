<?php
class Telefono {
  public $marca;
  public $modelo;
  protected $medio = 'alámbrico';
  protected $transmision = 'análoga';

  function __construct ($marca, $modelo) {
    $this->marca = $marca;
    $this->modelo = $modelo;
  }

  public function llamar () {
    echo '<p>Riiin Riiing !!!!</p>';
  }

  public function ver_info () {
    echo "
      <ul>
        <li>$this->marca</li>
        <li>$this->modelo</li>
        <li>$this->medio</li>
        <li>$this->transmision</li>
      </ul>
    ";
  }
}

class Celular extends Telefono {
  protected $medio = 'inalámbrico';
  protected $transmision = 'digital';

  function __construct ($marca, $modelo) {
    parent::__construct($marca, $modelo);
  }

  public function vibrar () {
    echo '<p>BRRR BRRR !!!</p>';
  }

  public function textear ($mensaje) {
    echo "<p>$mensaje</p>";
  }
}

class SmarthPhone {

}

/* ********************************************* */

echo '<h1>Herencia y Polimorfismo en PHP</h1>';
echo '<a href="./index.php">regresar</a>';

echo '<h2>Evolución del Teléfono</h2>';

echo '<h3>Teléfono:</h3>';
$tel_fijo = new Telefono('Siemens', 'Teléfono de Disco');
$tel_fijo->llamar();
$tel_fijo->ver_info();

echo '<h3>Celular:</h3>';
$cel = new Celular('Nokia', '5120');
$cel->llamar();
$cel->vibrar();
$cel->textear('Hola Mundo desde un SMS ;)');
$cel->ver_info();

echo '<h3>SmarthPhone:</h3>';
