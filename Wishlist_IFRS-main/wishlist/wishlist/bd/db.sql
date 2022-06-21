

CREATE DATABASE wishlist;

USE wishlist;

CREATE TABLE produtos(id int primary key not null AUTO_INCREMENT,
nomeprod varchar(50) not null,
linkprod varchar(200) not null);

CREATE TABLE usuario(
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(120) NOT NULL,
email VARCHAR(120) NOT NULL,
senha VARCHAR(120) NOT NULL,
PRIMARY KEY(id)
);