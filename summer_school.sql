CREATE DATABASE summer_school

CREATE TABLE accounts(id int PRIMARY KEY NOT NULL AUTO_INCREMENT, nume varchar(30), prenume varchar(30), email varchar(30), profesie varchar(30), password varchar(255), cod_verificare varchar(30), rol int)

CREATE TABLE cursuri(id int PRIMARY KEY NOT NULL AUTO_INCREMENT, nume_curs varchar(30), data_desfasurare date, ora_desfasurare time)

CREATE TABLE participants(id int PRIMARY KEY NOT NULL AUTO_INCREMENT, nume varchar(30), prenume varchar(30), email varchar(30), curs1 int, curs2 int, curs3 int)