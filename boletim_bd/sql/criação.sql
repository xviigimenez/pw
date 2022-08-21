CREATE DATABASE IF NOT EXISTS boletim;
USE boletim;

CREATE TABLE aluno (
  matricula int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(50) NOT NULL,
  nota_1 float(3,1) NOT NULL,
  nota_2 float(3,1) NOT NULL,
  nota_3 float(3,1) NOT NULL
);

insert into aluno (nome , nota_1, nota_2, nota_3) values ('Gimas', '3', '4', '1');
insert into aluno (nome , nota_1, nota_2, nota_3) values ('Rangel', '9', '10', '8');