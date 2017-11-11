<?php
require('./CountriesModel.php');
require('./GenresModel.php');

echo '<h1>Conexión orientada a objetos y operaciones CRUD</h1>';
echo '<h2>CRUD de la tabla countries</h2>';
echo '<a href="./index.php">regresar</a>';

$countries = new CountriesModel();
$countries_data = $countries->read(60);
var_dump($countries_data);
echo '<hr>';
$genres = new GenresModel();
$genres_data = $genres->read(13);
var_dump($genres_data);
