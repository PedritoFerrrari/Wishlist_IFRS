CREATE DATABASE wishlist;

USE wishlist;

CREATE TABLE login( 
id int not null AUTO_INCREMENT primary key,
nome varchar(220) not null,
email varchar(220) not null,
senha varchar(120) not null,
);

CREATE TABLE produtos(
id int primary key not null AUTO_INCREMENT,
nomeprod varchar(50) not null,
linkprod varchar(200) not null,
descriprod varchar(250),
valorprod float,
descontoprod float,
imageprod varchar(250),
id_user int not null,
FOREIGN key (id_user) references login(id)
);



