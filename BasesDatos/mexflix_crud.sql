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
  SELECT * FROM movie_series;

  SELECT title, rating, author, premiere, country, genres, category FROM movie_series;

  SELECT COUNT(*) FROM movie_series;

  SELECT * FROM movie_series WHERE premiere = 2008;
  SELECT * FROM movie_series WHERE country = 'Estados Unidos';

  SELECT * FROM movie_series WHERE premiere IN (2008, 2009, 2010);

  SELECT * FROM movie_series WHERE genres LIKE '%Drama';
  SELECT * FROM movie_series WHERE genres LIKE 'Action%';
  SELECT * FROM movie_series WHERE genres LIKE '%Drama%';

  SELECT * FROM movie_series WHERE country LIKE '%Estados Unidos%' AND category = 'Serie';
  SELECT * FROM movie_series WHERE country LIKE '%Estados Unidos%' AND NOT category = 'Movie';
  SELECT * FROM movie_series WHERE country LIKE '%Estados Unidos%' AND category = 'Movie' OR category = 'Serie';

  SELECT title, rating, author, premiere, country, genres, category FROM movie_series ORDER BY rating;

  SELECT title, rating, author, premiere, country, genres, category FROM movie_series ORDER BY rating DESC;

  SELECT title, rating, author, premiere, country, genres, category FROM movie_series ORDER BY premiere, rating;

  SELECT title, rating, author, premiere, country, genres, category FROM movie_series ORDER BY premiere, rating DESC;

/* UPDATE */
  UPDATE movie_series SET
    title = 'Rocky Balboa',
    author = 'Sylvester Stallone',
    poster = 'https://images-na.ssl-images-amazon.com/images/M/MV5BNWIyNmQyNjctYmVmMS00MGI4LWIxMmUtNjA0ODYzOTA0Yjk0L2ltYWdlXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_UY268_CR6,0,182,268_AL_.jpg'
    WHERE imdb_id = 'tt0479143';

/* DELETE */
  DELETE FROM movie_series WHERE imdb_id = 'tt0479143';
