<?php
class Perro {
  //ATRIBUTOS
  public $nombre;
  private $edad;
  public $raza;
  public $tamanio;
  private $esterilizado;
  public static $mejor_cualidad = 'Lealtad';
  public static $mejor_amigo = 'Humano';

  //MÉTODOS

  function __construct ($nombre, $edad, $raza, $tamanio, $esterilizado) {
    echo '<p><mark>Hola soy el constructor de la clase</mark></p>';
    $this->nombre = $nombre;
    $this->edad = $edad;
    $this->raza = $raza;
    $this->tamanio = $tamanio;
    $this->esterilizado = $esterilizado;
  }

  public function ladrar () {
    echo '<p>Guau guau !!!</p>';
  }

  public function comer ($comida) {
    echo "<p>$this->nombre come $comida</p>";
  }

  public function aparecer ($url) {
    //echo "<img src=\"$url\">";
    //echo "<img src='$url'>";
    echo '<img src="' . $url . '">';
  }

  public function obtener_edad () {
    echo "<p>$this->edad</p>";
  }

  public function esta_esterilizado() {
    echo "<p>$this->esterilizado</p>";
  }

  public function que_es_un_perro () {
    echo '
      <p>El perro o perro doméstico (Canis lupus familiaris) o también llamado can es un mamífero carnívoro de la familia de los cánidos, que constituye una subespecie del lobo (Canis lupus).</p>
      <p>Un estudio publicado por la revista Nature revela que, gracias al proceso de domesticación, el organismo del perro se ha adaptado a cierta clase de alimentos, en este caso el almidón.</p>
      <p>Su tamaño o talla, su forma y pelaje es muy diverso según la raza. Posee un oído y olfato muy desarrollados, siendo este último su principal órgano sensorial.</p>
      <p>En las razas pequeñas puede alcanzar una longevidad de cerca de 20 años, con atención esmerada por parte del propietario, de otra forma su vida en promedio es alrededor de los 15 años.</p>
    ';
  }

  function __destruct () {
    echo '<p><mark>Hola soy el destructor de la clase</mark></p>';
  }
}

/* ********************************************* */

echo '<h1>Programación Orientada a Objetos en PHP</h1>';
echo '<a href="./index.php">regresar</a>';

echo '<p>Mi mejor amigo es el <b>' . Perro::$mejor_amigo . '</b></p>';
echo '<p>Mi mejor cualidad es la <b>' . Perro::$mejor_cualidad . '</b></p>';
//echo Perro::$nombre;
Perro::que_es_un_perro();


//Instanciar un objeto de la clase
$kenai = new Perro('kEnAi', 5, 'Callejero', 'Grande', true);

//echo $kenai;
var_dump($kenai);
/*
object(Perro)#1 (5) {
  ["nombre"]=> string(5) "kEnAi"
  ["edad":"Perro":private]=> int(5)
  ["raza"]=> string(9)"Callejero"
  ["tamanio"]=> string(6) "Grande"
  ["esterilizado":"Perro":private]=> bool(true)
}
*/

echo "<p>$kenai->nombre</p>";
//echo "<p>$kenai->edad</p>";
$kenai->obtener_edad();
echo "<p>$kenai->raza</p>";
echo "<p>$kenai->tamanio</p>";
//echo "<p>$kenai->esterilizado</p>";
$kenai->esta_esterilizado();
$kenai->ladrar();
$kenai->comer('croquetas');
$kenai->aparecer('https://jonmircha.github.io/edjs-paradigmas2017/img/kEnAi.jpg');
