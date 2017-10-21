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
  UPDATE movie_series SET
    title = 'Rocky Balboa',
    author = 'Sylvester Stallone',
    poster = 'https://images-na.ssl-images-amazon.com/images/M/MV5BNWIyNmQyNjctYmVmMS00MGI4LWIxMmUtNjA0ODYzOTA0Yjk0L2ltYWdlXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_UY268_CR6,0,182,268_AL_.jpg'
    WHERE imdb_id = 'tt0479143';

/* DELETE */
  DELETE FROM movie_series WHERE imdb_id = 'tt0479143';
