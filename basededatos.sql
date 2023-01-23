DROP DATABASE IF EXISTS POLI;
CREATE DATABASE POLI;
USE POLI;
CREATE TABLE POLI(
	hora time,
	dia date,
	reserva integer,
	nombre varchar(50),
	telefono integer,
	correo varchar(50),
	deportes varchar(30),
	mensaje varchar(300),
	constraint pk_primary primary key (hora, dia, reserva)
);