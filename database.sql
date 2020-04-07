CREATE DATABASE IF NOT EXISTS blog_personal;
USE blog_personal;

CREATE TABLE users(
	id int(255) auto_increment not null,
	nombre varchar(50) not null, 
	apellido varchar(50) not null, 
	email varchar(255) not null,
	nombre_user varchar(255) not null,
	clave varchar(30) not null,
	fecha_creacion datetime DEFAULT CURRENT_TIMESTAMP,
	activo varchar(2),
	administrador varchar(2),
CONSTRAINT pk_users PRIMARY KEY(id)	
)ENGINE =innoDb;

CREATE TABLE posts(
	id int(255) auto_increment not null,
	autor  int(255) not null, 
	titulo varchar(100) not null, 
	cuerpo varchar(500) not null,	
	fecha_creacion datetime DEFAULT CURRENT_TIMESTAMP,	
CONSTRAINT pk_posts PRIMARY KEY(id),	
CONSTRAINT fk_post_user FOREIGN KEY(autor) REFERENCES users(id)	
)ENGINE =innoDb;

ALTER TABLE users MODIFY clave varchar(100);

/*
Tablas renombradas en ingles
******************************/
CREATE TABLE users(
	id int(255) auto_increment not null,
	name varchar(255) not null, 
	surname varchar(255) not null, 
	email varchar(255) not null,
	nick varchar(255) not null,
	password varchar(255) not null,
	create_at datetime DEFAULT CURRENT_TIMESTAMP,
	active varchar(50),
	administrator varchar(50),
CONSTRAINT pk_users PRIMARY KEY(id)	
)ENGINE =innoDb;

CREATE TABLE posts(
	id int(255) auto_increment not null,
	author  int(255) not null, 
	title varchar(100) not null, 
	body varchar(500) not null,	
	create_at datetime DEFAULT CURRENT_TIMESTAMP,	
CONSTRAINT pk_posts PRIMARY KEY(id),	
CONSTRAINT fk_post_user FOREIGN KEY(author) REFERENCES users(id)	
)ENGINE =innoDb;