<?php
$ms = new MovieSeriesModel();

$ms_data = $ms->read_series();
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
