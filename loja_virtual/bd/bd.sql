create database bd_lojaVirtual;
use bd_lojaVirtual;

create table cliente(
	cpf varchar(14) primary key,
    nome varchar(50) not null,
    email varchar(25) not null unique,
    senha varchar(25) not null
);

create table produto(
	id int auto_increment primary key,
    nome_prod varchar(50) not null,
    preco decimal(6,2) not null,
    descricao varchar(500) not null,
    foto varchar(150) not null
);