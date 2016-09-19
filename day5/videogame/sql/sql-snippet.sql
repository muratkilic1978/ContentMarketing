
CREATE TABLE Platforms
(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  platformname VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE Publishers
(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  publishername VARCHAR(100) NOT NULL,
  website VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE VideoGames
(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  title VARCHAR(100) NOT NULL,
  price DECIMAL(6,2) NOT NULL,
  description VARCHAR(300) NOT NULL,
  platformid INT NOT NULL,
  publisherid INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (platformid) REFERENCES Platforms(id),
  FOREIGN KEY (publisherid) REFERENCES Publishers(id)
);


CREATE TABLE Platforms
(
  id INT NOT NULL AUTO_INCREMENT,
  platformname VARCHAR(200) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE Publishers
(
  id INT NOT NULL AUTO_INCREMENT,
  publishername VARCHAR(200) NOT NULL,
  website VARCHAR(100) NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE VideoGames
(
  id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(200) NOT NULL,
  price DECIMAL(6,2) NOT NULL,
  description VARCHAR(500) NOT NULL,
  platformid INT NOT NULL,
  publisherid INT NOT NULL,
  PRIMARY KEY (id),
  FOREIGN KEY (platformid) REFERENCES Platforms(id),
  FOREIGN KEY (publisherid) REFERENCES Publishers(id)
);


INSERT INTO `testvideogames`.`Platforms` (`id`, `platformname`) VALUES (NULL, 'Playstation 2'), (NULL, 'Playstation 3'), (NULL, 'Playstation 4');

INSERT INTO `testvideogames`.`Publishers` (`id`, `publishername`, `website`) VALUES (NULL, 'Codemasters', 'http://www.codemasters.com/'), (NULL, 'Rockstar', 'http://www.rockstargames.com/');

ALTER TABLE videogames DROP FOREIGN KEY `videogames_ibfk_1`

ALTER TABLE videogames DROP FOREIGN KEY `videogames_ibfk_2`

TRUNCATE TABLE videogames;