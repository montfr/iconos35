CREATE DATABASE mexflix_35;

USE mexflix_35;

CREATE TABLE genres(
  genre_id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  genre_name VARCHAR(15) NOT NULL
);

INSERT INTO genres (genre_id, genre_name) VALUES
  (1, 'Action'),
  (2, 'Adventure'),
  (3, 'Animation'),
  (4, 'Biography'),
  (5, 'Comedy'),
  (6, 'Crime'),
  (7, 'Documentary'),
  (8, 'Drama'),
  (9, 'Family'),
  (10, 'Fantasy'),
  (11, 'Film-Noir'),
  (12, 'Game-Show'),
  (13, 'History'),
  (14, 'Horror'),
  (15, 'Music'),
  (16, 'Musical'),
  (17, 'Mystery'),
  (18, 'News'),
  (19, 'Reality-TV'),
  (20, 'Romance'),
  (21, 'Sci-Fi'),
  (22, 'Sport'),
  (23, 'Talk-Show'),
  (24, 'Thriller'),
  (25, 'War'),
  (26, 'Western');

CREATE TABLE countries(
  country_id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  country_name VARCHAR(40) NOT NULL
);

INSERT INTO countries (country_id, country_name) VALUES
  (1, 'Afganistán'),
  (2, 'Albania'),
  (3, 'Alemania'),
  (4, 'Andorra'),
  (5, 'Angola'),
  (6, 'Antigua y Barbuda'),
  (7, 'Arabia Saudita'),
  (8, 'Argelia'),
  (9, 'Argentina'),
  (10, 'Armenia'),
  (11, 'Australia'),
  (12, 'Austria'),
  (13, 'Azerbaiyán'),
  (14, 'Bahamas'),
  (15, 'Bangladés'),
  (16, 'Barbados'),
  (17, 'Baréin'),
  (18, 'Bélgica'),
  (19, 'Belice'),
  (20, 'Benín'),
  (21, 'Bielorrusia'),
  (22, 'Birmania'),
  (23, 'Bolivia'),
  (24, 'Bosnia y Herzegovina'),
  (25, 'Botsuana'),
  (26, 'Brasil'),
  (27, 'Brunéi'),
  (28, 'Bulgaria'),
  (29, 'Burkina Faso'),
  (30, 'Burundi'),
  (31, 'Bután'),
  (32, 'Cabo Verde'),
  (33, 'Camboya'),
  (34, 'Camerún'),
  (35, 'Canadá'),
  (36, 'Catar'),
  (37, 'Chad'),
  (38, 'Chile'),
  (39, 'China'),
  (40, 'Chipre'),
  (41, 'Ciudad del Vaticano'),
  (42, 'Colombia'),
  (43, 'Comoras'),
  (44, 'Corea del Norte'),
  (45, 'Corea del Sur'),
  (46, 'Costa de Marfil'),
  (47, 'Costa Rica'),
  (48, 'Croacia'),
  (49, 'Cuba'),
  (50, 'Dinamarca'),
  (51, 'Dominica'),
  (52, 'Ecuador'),
  (53, 'Egipto'),
  (54, 'El Salvador'),
  (55, 'Emiratos Árabes Unidos'),
  (56, 'Eritrea'),
  (57, 'Eslovaquia'),
  (58, 'Eslovenia'),
  (59, 'España'),
  (60, 'Estados Unidos'),
  (61, 'Estonia'),
  (62, 'Etiopía'),
  (63, 'Filipinas'),
  (64, 'Finlandia'),
  (65, 'Fiyi'),
  (66, 'Francia'),
  (67, 'Gabón'),
  (68, 'Gambia'),
  (69, 'Georgia'),
  (70, 'Ghana'),
  (71, 'Granada'),
  (72, 'Grecia'),
  (73, 'Guatemala'),
  (74, 'Guyana'),
  (75, 'Guinea'),
  (76, 'Guinea ecuatorial'),
  (77, 'Guinea-Bisáu'),
  (78, 'Haití'),
  (79, 'Honduras'),
  (80, 'Hungría'),
  (81, 'India'),
  (82, 'Indonesia'),
  (83, 'Irak'),
  (84, 'Irán'),
  (85, 'Irlanda'),
  (86, 'Islandia'),
  (87, 'Islas Marshall'),
  (88, 'Islas Salomón'),
  (89, 'Israel'),
  (90, 'Italia'),
  (91, 'Jamaica'),
  (92, 'Japón'),
  (93, 'Jordania'),
  (94, 'Kazajistán'),
  (95, 'Kenia'),
  (96, 'Kirguistán'),
  (97, 'Kiribati'),
  (98, 'Kuwait'),
  (99, 'Laos'),
  (100, 'Lesoto'),
  (101, 'Letonia'),
  (102, 'Líbano'),
  (103, 'Liberia'),
  (104, 'Libia'),
  (105, 'Liechtenstein'),
  (106, 'Lituania'),
  (107, 'Luxemburgo'),
  (108, 'Madagascar'),
  (109, 'Malasia'),
  (110, 'Malaui'),
  (111, 'Maldivas'),
  (112, 'Malí'),
  (113, 'Malta'),
  (114, 'Marruecos'),
  (115, 'Mauricio'),
  (116, 'Mauritania'),
  (117, 'México'),
  (118, 'Micronesia'),
  (119, 'Moldavia'),
  (120, 'Mónaco'),
  (121, 'Mongolia'),
  (122, 'Montenegro'),
  (123, 'Mozambique'),
  (124, 'Namibia'),
  (125, 'Nauru'),
  (126, 'Nepal'),
  (127, 'Nicaragua'),
  (128, 'Níger'),
  (129, 'Nigeria'),
  (130, 'Noruega'),
  (131, 'Nueva Zelanda'),
  (132, 'Omán'),
  (133, 'Países Bajos'),
  (134, 'Pakistán'),
  (135, 'Palaos'),
  (136, 'Panamá'),
  (137, 'Papúa Nueva Guinea'),
  (138, 'Paraguay'),
  (139, 'Perú'),
  (140, 'Polonia'),
  (141, 'Portugal'),
  (142, 'Reino Unido'),
  (143, 'República Centroafricana'),
  (144, 'República Checa'),
  (145, 'República de Macedonia'),
  (146, 'República del Congo'),
  (147, 'República Democrática del Congo'),
  (148, 'República Dominicana'),
  (149, 'República Sudafricana'),
  (150, 'Ruanda'),
  (151, 'Rumanía'),
  (152, 'Rusia'),
  (153, 'Samoa'),
  (154, 'San Cristóbal y Nieves'),
  (155, 'San Marino'),
  (156, 'San Vicente y las Granadinas'),
  (157, 'Santa Lucía'),
  (158, 'Santo Tomé y Príncipe'),
  (159, 'Senegal'),
  (160, 'Serbia'),
  (161, 'Seychelles'),
  (162, 'Sierra Leona'),
  (163, 'Singapur'),
  (164, 'Siria'),
  (165, 'Somalia'),
  (166, 'Sri Lanka'),
  (167, 'Suazilandia'),
  (168, 'Sudán'),
  (169, 'Sudán del Sur'),
  (170, 'Suecia'),
  (171, 'Suiza'),
  (172, 'Surinam'),
  (173, 'Tailandia'),
  (174, 'Tanzania'),
  (175, 'Tayikistán'),
  (176, 'Timor Oriental'),
  (177, 'Togo'),
  (178, 'Tonga'),
  (179, 'Trinidad y Tobago'),
  (180, 'Túnez'),
  (181, 'Turkmenistán'),
  (182, 'Turquía'),
  (183, 'Tuvalu'),
  (184, 'Ucrania'),
  (185, 'Uganda'),
  (186, 'Uruguay'),
  (187, 'Uzbekistán'),
  (188, 'Vanuatu'),
  (189, 'Venezuela'),
  (190, 'Vietnam'),
  (191, 'Yemen'),
  (192, 'Yibuti'),
  (193, 'Zambia'),
  (194, 'Zimbabue');

CREATE TABLE movie_series(
  imdb_id CHAR(9) PRIMARY KEY,
  title VARCHAR(80) NOT NULL,
  plot TEXT,
  author VARCHAR(100) DEFAULT 'Pending',
  actors VARCHAR(100) DEFAULT 'Pending',
  genres VARCHAR(80) NOT NULL,
  country VARCHAR(100) NOT NULL,
  premiere YEAR(4) NOT NULL,
  poster VARCHAR(200) DEFAULT 'no-poster.jpg',
  trailer VARCHAR(100) DEFAULT 'no-trailer.jpg',
  rating DECIMAL(2, 1) UNSIGNED DEFAULT 0,
  category ENUM('Movie', 'Serie') NOT NULL
);

INSERT INTO movie_series (imdb_id, title, plot, author, actors, genres, country, premiere, poster, trailer, rating, category) VALUES
  ('tt2356180', 'Bhaag Milkha Bhaag', 'The true story of the "Flying Sikh" - world champion runner and Olympian Milkha Singh -- who overcame the massacre of his family, civil war during the India-Pakistan partition, and homelessness to become one of India\'s most iconic athletes.', 'Rakeysh Omprakash Mehra', 'Farhan Akhtar, Sonam Kapoor, Pavan Malhotra, Art Malik', 'Biography, Drama, History', 'India', 2013, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTY1Nzg4MjcwN15BMl5BanBnXkFtZTcwOTc1NTk1OQ@@._V1_UY268_CR2,0,182,268_AL_.jpg', 'https://www.youtube.com/watch?v=u71swQ4ksgI', '8.3', 'Movie'),
  ('tt1442449', 'Spartacus', 'Watch the story of history\'s greatest gladiator unfold with graphic violence and the passions of the women that love them. This is Spartacus.', 'Steven S. DeKnight', 'Andy Whitfield, Manu Bennett, Daniel Feuerriegel, Peter Mensah, Lucy Lawless', 'Action, Adventure, Biography', 'Estados Unidos', 2010, 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTA2NDU2MzM5Nl5BMl5BanBnXkFtZTcwMTk3Njg3OA@@._V1_UX182_CR0,0,182,268_AL_.jpg', 'https://www.youtube.com/watch?v=ptX_pjz5s2k', '8.6', 'Serie'),
  ('tt1606384', 'My Way', 'In World War II-era Korea, rival runners, one Korean (Jang Dong-gun) and one Japanese (Joe Odagiri), go to war together against the Soviets.', 'Je-kyu Kang', 'Dong-gun Jang, Joe Odagiri, Bingbing Fan, In-kwon Kim', 'Action, Adventure, Drama', 'Corea del Sur', 2011, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjM2MTI4OTc5OF5BMl5BanBnXkFtZTgwNDk1MTAzMjE@._V1_UY268_CR2,0,182,268_AL_.jpg', 'https://www.youtube.com/watch?v=HpYk5ww8Jjc', '7.8', 'Movie'),
  ('tt0944947', 'Game of Thrones', 'While a civil war brews between several noble families in Westeros, the children of the former rulers of the land attempt to rise to power.', 'David Benioff, D.B. Weiss', 'Peter Dinklage, Lena Headey, Emilia Clarke, Kit Harington', 'Adventure, Drama, Fantasy', 'Estados Unidos, Reino Unido', 2011, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjE3NTQ1NDg1Ml5BMl5BanBnXkFtZTgwNzY2NDA0MjI@._V1_UX182_CR0,0,182,268_AL_.jpg', 'https://www.youtube.com/watch?v=522l0YE9hRQ', '9.5', 'Serie'),
  ('tt4853102', 'Batman: The Killing Joke', 'As Batman hunts for the escaped Joker, the Clown Prince of Crime attacks the Gordon family to prove a diabolical point mirroring his own fall into madness.', 'Sam Liu, Brian Azzarello, Brian Bolland, Bob Kane, Bill Finger', 'Kevin Conroy, Mark Hamill, Tara Strong, Ray Wise', 'Animation, Action, Crime', 'Estados Unidos', 2016, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTdjZTliODYtNWExMi00NjQ1LWIzN2MtN2Q5NTg5NTk3NzliL2ltYWdlXkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_UX182_CR0,0,182,268_AL_.jpg', 'https://www.youtube.com/watch?v=iC8NdK2Cwd4', '6.5', 'Movie'),
  ('tt2575988', 'Silicon Valley', 'In the high-tech gold rush of modern Silicon Valley, the people most qualified to succeed are the least capable of handling success. A comedy partially inspired by Mike Judge\'s own experiences as a Silicon Valley engineer in the late 1980s.', 'John Altschuler, Mike Judge, Dave Krinsky', 'Thomas Middleditch, T.J. Miller, Josh Brener, Martin Starr', 'Comedy', 'Estados Unidos', 2014, 'https://images-na.ssl-images-amazon.com/images/M/MV5BOTA4MTE3MTQwMF5BMl5BanBnXkFtZTgwNzk4MTg4MTI@._V1_UX182_CR0,0,182,268_AL_.jpg', 'https://www.youtube.com/watch?v=69V__a49xtw', '8.6', 'Serie'),
  ('tt0380538', 'Matando Cabos', 'In Mexico City, the powerful and violent magnate of steel Oscar Cabos catches his daughter Paulina having sex with her boyfriend and his employee Javier "Jaque" and he works Jaque over. On the next day, Jaque pays a visit to Cabos in his office and the angry man comes with a golf club to hit Jaque again. However, Cabos accidentally trips on a golf ball, falls on the floor and faints. Jaque calls his best friend Mudo to help him, but the janitor Nacho finds his boss fainted on the floor and he steals and dresses himself with Cabos\' clothes and jewels. Meanwhile, Nacho\'s son Botcha and his friend Nico have planned to kidnap Cabos and they are waiting for him in the parking garage. When he walks in the parking garage, the two kidnappers hit him on the back of the head, believing that he is Cabos, they cover his head with a bag. They head with the abducted man to the house of Botcha\'s girlfriend Lula. Meanwhile, Jaque and Mudo calls their wrestler friend Ruben "Mascarita" and his midget partner Tony \'El Canibal\' to help them to get rid of Cabos in his birthday party. But both plans do not work well along the night.', 'Alejandro Lozano', 'Tony Dalton, Ana Claudia Talancón, Pedro Armendáriz Jr., Kristoff', 'Action, Adventure, Comedy', 'México', 2004, 'http://www.imdb.com/title/tt0380538/mediaviewer/rm2914426112?ref_=tt_ov_i', 'https://www.youtube.com/watch?v=nujJ3sXSU18', '7.6', 'Movie'),
  ('tt4158110', 'Mr. Robot', 'Elliot Alderson, a young cyber-security engineer living in New York who assumes the role of a vigilante hacker by night. Elliot meets a mysterious anarchist known as "Mr. Robot" who recruits Elliot to join his team of hackers, "fsociety". Elliot, who has a social anxiety disorder and connects to people by hacking them, is intrigued but uncertain if he wants to be part of the group. The show follows Mr. Robot\'s attempts to engage Elliot in his mission to destroy the corporation Elliot is paid to protect. Compelled by his personal beliefs, Elliot struggles to resist the chance to take down the multinational CEOs that are running (and ruining) the world.', 'Sam Esmail', 'Rami Malek, Carly Chaikin, Portia Doubleday, Martin Wallström', 'Crime, Drama, Thriller', 'Estados Unidos', 2015, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTYzMDE2MzI4MF5BMl5BanBnXkFtZTgwNTkxODgxOTE@._V1_UX182_CR0,0,182,268_AL_.jpg', 'https://www.youtube.com/watch?v=Ug4fRXGyIak', '8.6', 'Serie'),
  ('tt0468569', 'The Dark Knight', 'Batman raises the stakes in his war on crime. With the help of Lieutenant Jim Gordon and District Attorney Harvey Dent, Batman sets out to dismantle the remaining criminal organizations that plague the city streets. The partnership proves to be effective, but they soon find themselves prey to a reign of chaos unleashed by a rising criminal mastermind known to the terrified citizens of Gotham as The Joker.', 'Christopher Nolan', 'Christian Bale, Heath Ledger, Aaron Eckhart, Michael Caine', 'Action, Crime, Drama', 'Estados Unidos, Reino Unido', 2008, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_UX182_CR0,0,182,268_AL_.jpg', 'https://www.youtube.com/watch?v=--z4YzxlT8o', '9.0', 'Movie'),
  ('tt0903747', 'Breaking Bad', 'A chemistry teacher diagnosed with terminal lung cancer teams up with his former student to cook and sell crystal meth.', 'Vince Gilligan', 'Bryan Cranston, Anna Gunn, Aaron Paul, Dean Norris', 'Crime, Drama, Thriller', 'Estados Unidos', 2008, 'https://images-na.ssl-images-amazon.com/images/M/MV5BZDNhNzhkNDctOTlmOS00NWNmLWEyODQtNWMxM2UzYmJiNGMyXkEyXkFqcGdeQXVyNTMxMjgxMzA@._V1_UY268_CR4,0,182,268_AL_.jpg', 'https://www.youtube.com/watch?v=--z4YzxlT8o', '9.5', 'Serie');

CREATE TABLE users(
  user VARCHAR(20) PRIMARY KEY,
  email VARCHAR(80) UNIQUE NOT NULL,
  name VARCHAR(100) NOT NULL,
  birthday DATE NOT NULL,
  pass CHAR(32) NOT NULL,
  role ENUM('User', 'Admin') NOT NULL
);

INSERT INTO users (user, email, name, birthday, pass, role) VALUES
  ( '@jonmircha', 'jonmircha@gmail.com', 'Jonathan MirCha', '1984-05-23', MD5('los perros rifan'), 'Admin' ),
  ( '@user', 'usuario@loquesea.com', 'Usuario Mortal', '2000-12-19', MD5('usuario sin privilegios'), 'User');

CREATE TABLE contact_form (
  contact_id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  contact_date DATE NOT NULL,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(80) NOT NULL,
  subject VARCHAR(100) NOT NULL,
  comments TEXT
);
