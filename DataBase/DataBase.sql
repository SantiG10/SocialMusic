-- grant all privileges on *.* to SocialMusic@localhost identified by '1234';
grant all privileges on *.* to SocialMusic@localhost identified by '1234';
drop database if exists SocialMusic;
create database if not exists SocialMusic;
use SocialMusic;

create table usuarios(
user varchar(15) primary key,
nombre varchar(15) not null,
apellido varchar(15) not null,
password varchar(20) not null,
pregunta varchar(20) not null,
respuesta varchar(20) not null,
estado varchar(3) not null);

create table musica(
id int(3) primary key,
usuario varchar(15) not null,
direccion varchar(50) not null,
foreign key(usuario) references usuarios(user));



