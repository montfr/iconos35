<?php
final class MovieSeriesModel extends Model {
  public $imdb_id;
  public $title;
  public $plot;
  public $author;
  public $actors;
  public $genres;
  public $country;
  public $premiere;
  public $poster;
  public $trailer;
  public $rating;
  public $category;

  public function create ( $data = array() ) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    $this->sql = "INSERT INTO movie_series SET imdb_id = '$imdb_id', title = '$title', plot = '$plot', author = '$author', actors = '$actors', genres = '$genres', country = '$country', premiere = $premiere, poster = '$poster', trailer = '$trailer', rating = '$rating', category = '$category'";
    $this->set_query();
  }

  public function read ( $id = '' ) {
    $this->sql = ( $id != '' )
      ? "SELECT * FROM movie_series WHERE imdb_id = '$id'"
      : "SELECT * FROM movie_series";

    $this->get_query();
    $data = array();
    foreach ($this->rows as $key => $value) {
      array_push($data, $value);
    }

    return $data;
  }

  public function read_desc ( $id = '' ) {
    $this->sql = ( $id != '' )
      ? "SELECT * FROM countries WHERE country_id = $id ORDER BY country_id DESC"
      : "SELECT * FROM countries ORDER BY country_id DESC";

    $this->get_query();
    $data = array();
    foreach ($this->rows as $key => $value) {
      array_push($data, $value);
    }

    return $data;
  }

  public function update ( $data = array() ) {
    foreach ($data as $key => $value) {
      $$key = $value;
    }

    $this->sql = "UPDATE movie_series SET title = '$title', plot = '$plot', author = '$author', actors = '$actors', genres = '$genres', country = '$country', premiere = $premiere, poster = '$poster', trailer = '$trailer', rating = '$rating', category = '$category' WHERE imdb_id = '$imdb_id'";
    $this->set_query();
  }

  public function delete ( $id = '' ) {
    $this->sql = "DELETE FROM movie_series WHERE imdb_id = '$id'";
    $this->set_query();
  }
}
