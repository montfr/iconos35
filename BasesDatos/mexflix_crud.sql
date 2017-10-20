/* Listado de operaciones CRUD */

/* CREATE */
INSERT INTO movie_series (imdb_id, title, plot, author, actors, genres, country, premiere, poster, trailer, rating, category) VALUES
  ('tt0479143', 'Rocky Valvoa', '', 'Silvestre Stallone', ' Sylvester Stallone, Antonio Tarver, Milo Ventimiglia', 'Drama, Sport', 'Estados Unidos', 2006, '', '', 7.2, 'Movie');

INSERT INTO movie_series (imdb_id, title, author, actors, genres, country, premiere, rating, category) VALUES
  ('tt0479143', 'Rocky Valvoa', 'Silvestre Stallone', ' Sylvester Stallone, Antonio Tarver, Milo Ventimiglia', 'Drama, Sport', 'Estados Unidos', 2006, 7.2, 'Movie');

INSERT INTO movie_series SET
  title = 'Rocky Valvoa',
  imdb_id = 'tt0479143',
  actors = 'Sylvester Stallone, Antonio Tarver, Milo Ventimiglia',
  author = 'Silvestre Stallone',
  country = 'Estados Unidos',
  premiere = 2006,
  rating = 7.2,
  genres = 'Drama, Sport',
  category = 'Movie';
/* READ */

/* UPDATE */

/* DELETE */
