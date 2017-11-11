<?php
abstract class Poligono {
  protected static $lados;
  abstract protected function perimetro ();
  abstract protected function area ();
}

class Triangulo extends Poligono {
  private $lado_a;
  private $lado_b;
  private $lado_c;
  private $altura;
  public static $lados = 3;

  public function __construct ($a, $b, $c, $h) {
    $this->lado_a = $a;
    $this->lado_b = $b;
    $this->lado_c = $c;
    $this->altura = $h;
  }

  public function perimetro () {
    return $this->lado_a + $this->lado_b + $this->lado_c;
  }

  public function area () {
    return ( $this->lado_b * $this->altura ) / 2;
  }
}


echo '<h1>Abstracción en PHP</h1>';
echo '<a href="./index.php">regresar</a>';

echo '
  <h2>Polígonos</h2>
  <p>Figura geométrica plana que está limitada por tres o más rectas y tiene tres o más ángulos y vértices.</p>
  <h3>Perímetro</h3>
  <p>El perímetro de un polígono es igual a la suma de las longitudes de sus lados.</p>
  <h3>Área</h3>
  <p>El área de un polígono es la medida de la región o superficie encerrada por un polígono.</p>
  <hr>
';

echo '<h2>Tríangulo</h2>';
$triangulo = new Triangulo(5, 2, 6, 4);
echo '<p>Un tríangulo tiene <b>' . Triangulo::$lados .  '</b> lados</p>';
echo '<p>El perímetro de mi tríangulo es: <b>' . $triangulo->perimetro() . '</b>, y el área es <b>' . $triangulo->area() . '</b></p>';
