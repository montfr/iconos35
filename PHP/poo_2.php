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

final class SmartPhone extends Celular {
  public $datos = 'Tengo WIFI';

  function __construct($marca, $modelo) {
    parent::__construct($marca, $modelo);
  }

  public function conectar () {
    echo '<p>Tengo acceso a Internet!!!</p>';
  }

  public function ver_info () {
    echo "
      <ul>
        <li>$this->marca</li>
        <li>$this->modelo</li>
        <li>$this->medio</li>
        <li>$this->transmision</li>
        <li>$this->datos</li>
      </ul>
    ";
  }
}

/* class NeuroPhone extends SmartPhone {} */

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
$sp = new SmartPhone('Motorola', 'G5');
$sp->llamar();
$sp->vibrar();
$sp->textear('Hola Mundo desde WA ;)');
$sp->ver_info();
