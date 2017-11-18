<?php
require('./Model.php');
require('./CountriesModel.php');
require('./GenresModel.php');

echo '<h1>Conexión orientada a objetos y operaciones CRUD</h1>';
echo '<a href="./index.php">regresar</a>';

echo '<h2>CRUD de la tabla countries</h2>';
$countries = new CountriesModel();

/* Operación CREATE */
/* $countries->create(array(
  'country_id' => 0,
  'country_name' => 'Sokovia'
)); */

/* Operación UPDATE */
/* $countries->update(array(
  'country_id' => 196,
  'country_name' => 'Bravos'
)); */

/* Operación DELETE */
//$countries->delete(195);

/* Operacion READ */
$countries_data = $countries->read();
$num_countries = count($countries_data);
//var_dump($countries_data);

echo "<h3>Numero de países: <mark>$num_countries</mark></h3>";

echo'<h3>Tabla Countries</h3>';

echo '
  <table>
    <tr>
      <th>country_id</th>
      <th>country_name</th>
    </tr>
';

for ( $n=0; $n < count($countries_data); $n++ ) {
  echo '
    <tr>
      <td>' . $countries_data[$n]['country_id']  .'</td>
      <td>' . $countries_data[$n]['country_name']  . '</td>
    </tr>
  ';
}

echo '</table>';

