-- grant all privileges on *.* to SocialMusic@localhost identified by '1234';
grant all privileges on *.* to SocialMusic@localhost identified by '1234';
drop database if exists SocialMusic;
create database if not exists SocialMusic;
use SocialMusic;

create table usuarios(
user varchar(30) primary key,
nombre varchar(30) not null,
apellido varchar(40) not null,
password varchar(20) not null,
pregunta varchar(1) not null,
respuesta varchar(20) not null,
estado varchar(3) not null);

create table musica(
id int auto_increment primary key,
usuario varchar(30) not null,
nombre varchar(30) not null,
direccion varchar(50) not null,
estado varchar(3) not null,
descripcion varchar(250),
foreign key(usuario) references usuarios(user));



