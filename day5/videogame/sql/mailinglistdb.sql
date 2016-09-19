CREATE DATABASE mailinglistdb;


CREATE TABLE `email_list` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `first_name` VARCHAR(20) NOT NULL,
  `last_name` VARCHAR(20) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`)
);
