<?php
echo '<h1>Conexión estructurada a MySQL con PHP</h1>';
echo '<a href="./index.php">regresar</a>';

$mysqli = new mysqli('localhost', 'root', '', 'mexflix_35');
$mysqli->set_charset('utf8');

if ( $mysqli->connect_errno ) {
  echo "
    <p>Error al conectarse a MySQL</p>
    <p>N° de error: <mark>$mysqli->connect_errno</mark></p>
    <p>Mensaje del error: <mark>$mysqli->connect_error</mark></p>
  ";
  die();
}

$sql = 'SELECT * FROM countries';

if ( !$result = $mysqli->query($sql) ) {
  echo "
    <p>Error: La ejecución de la consulta falló debido a:</p>
    <p>Query: <mark>$sql</mark></p>
    <p>N° de error: <mark>$mysqli->connect_errno</mark></p>
    <p>Mensaje del error: <mark>$mysqli->connect_error</mark></p>
  ";
  die();
}

if ( $result->num_rows == 0 ) {
  echo '<p>La consulta no devolvió registros</p>';
} else {
  echo '<ul>';
    //while ( $countries = $result->fetch_row() ) {
    while ( $countries = $result->fetch_assoc() ) {
      //echo '<li>' . $countries[0] . ' - ' . $countries[1] .  '</li>';
      echo '<li>' . $countries['country_id'] . ' - ' . $countries['country_name'] .  '</li>';
      //var_dump($countries);
    }
  echo '</ul>';
}

$result->free();

/* *********************************************** */
$sql = 'SELECT * FROM genres';

if ( !$result = $mysqli->query($sql) ) {
  echo "
    <p>Error: La ejecución de la consulta falló debido a:</p>
    <p>Query: <mark>$sql</mark></p>
    <p>N° de error: <mark>$mysqli->connect_errno</mark></p>
    <p>Mensaje del error: <mark>$mysqli->connect_error</mark></p>
  ";
  die();
}

if ( $result->num_rows == 0 ) {
  echo '<p>La consulta no devolvió registros</p>';
} else {
  echo '<ul>';
    while ( $genres = $result->fetch_assoc() ) {
      echo '<li>' . $genres['genre_id'] . ' - ' . $genres['genre_name'] .  '</li>';
      //var_dump($genres);
    }
  echo '</ul>';
}

$result->free();

$mysqli->close();
