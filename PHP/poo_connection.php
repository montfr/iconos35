<?php
require('./Model.php');
require('./CountriesModel.php');
require('./GenresModel.php');
require('./MovieSeriesModel.php');


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

echo '<hr>';

echo '<h2>CRUD de la tabla genres</h2>';

$genres = new GenresModel();

/* $genres->create(array(
  'genre_id' => 0,
  'genre_name' => 'Super Heros'
)); */

/* $genres->update(array(
  'genre_id' => 28,
  'genre_name' => 'Gamers'
)); */

/* $genres->delete(27); */

$genres_data = $genres->read();
$num_genres = count($genres_data);
//var_dump($genres_data);

echo "<h3>Numero de géneros: <mark>$num_genres</mark></h3>";

echo'<h3>Tabla Genres</h3>';

echo '
  <table>
    <tr>
      <th>genre_id</th>
      <th>genre_name</th>
    </tr>
';

for ( $n=0; $n < count($genres_data); $n++ ) {
  echo '
    <tr>
      <td>' . $genres_data[$n]['genre_id']  .'</td>
      <td>' . $genres_data[$n]['genre_name']  . '</td>
    </tr>
  ';
}

echo '</table>';

echo '<hr>';

echo '<h2>CRUD de la tabla movie_series</h2>';

$ms = new MovieSeriesModel();

/* $ms->create(array(
  'imdb_id' => 'tt0974015',
  'title' => 'Justice League',
  'plot' => '',
  'author' => 'Zack Snyder',
  'actors' => 'Ben Affleck, Gal Gadot, Jason Momoa',
  'genres' => 'Action, Adventure, Fantasy',
  'country' => 'Estados Unidos',
  'premiere' => 2017,
  'poster' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BNDgwNjMwNjM1OV5BMl5BanBnXkFtZTgwNjA2Njk5MzI@._V1_UX182_CR0,0,182,268_AL_.jpg',
  'trailer' => '',
  'rating' => '7.7',
  'category' => 'Movie'
)); */

/* $ms->update(array(
  'imdb_id' => 'tt0974016',
  'title' => 'Liga de la Justicia',
  'plot' => 'Fueled by his restored faith in humanity and inspired by Supermans selfless act, Bruce Wayne enlists the help of his newfound ally, Diana Prince, to face an even greater enemy.',
  'author' => 'Zack Snyder',
  'actors' => 'Ben Affleck, Gal Gadot, Jason Momoa',
  'genres' => 'Action, Adventure, Fantasy',
  'country' => 'Estados Unidos',
  'premiere' => 2017,
  'poster' => 'https://images-na.ssl-images-amazon.com/images/M/MV5BNWQ0MDUyNmItNmE1Zi00MzY2LTgzNDEtMDAyZTFlMmIzNjY0XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_UY268_CR4,0,182,268_AL_.jpg',
  'trailer' => '',
  'rating' => '8.6',
  'category' => 'Serie'
)); */

/* $ms->delete('tt0974016'); */

$ms_data = $ms->read();
$num_ms = count($ms_data);
//var_dump($ms_data);

echo "<h3>Numero de películas y series: <mark>$num_ms</mark></h3>";

echo'<h3>Tabla MovieSeries</h3>';

echo '
  <table>
    <tr>
      <th>imdb_id</th>
      <th>title</th>
      <th>plot</th>
      <th>author</th>
      <th>actors</th>
      <th>genres</th>
      <th>country</th>
      <th>premiere</th>
      <th>poster</th>
      <th>trailer</th>
      <th>rating</th>
      <th>category</th>
    </tr>
';

for ( $n=0; $n < count($ms_data); $n++ ) {
  echo '
    <tr>
      <td>' . $ms_data[$n]['imdb_id']  .'</td>
      <td>' . $ms_data[$n]['title']  . '</td>
      <td>' . $ms_data[$n]['plot']  . '</td>
      <td>' . $ms_data[$n]['author']  . '</td>
      <td>' . $ms_data[$n]['actors']  . '</td>
      <td>' . $ms_data[$n]['genres']  . '</td>
      <td>' . $ms_data[$n]['country']  . '</td>
      <td>' . $ms_data[$n]['premiere']  . '</td>
      <td><img src="' . $ms_data[$n]['poster']  . '"></td>
      <td><a href="' . $ms_data[$n]['trailer']  . '" target="_blank">Ver Trailer</a></td>
      <td>' . $ms_data[$n]['rating']  . '</td>
      <td>' . $ms_data[$n]['category']  . '</td>
    </tr>
  ';
}
echo '</table>';
