CREATE DATABASE disciplinas;
USE disciplinas;

CREATE TABLE disciplinas (
	periodo enum('M', 'T', 'N') NOT NULL,
    curso enum('Info', 'Mecânica', 'ADM', 'Elétrica') NOT NULL,
    disciplina enum('Banco', 'Programação', 'Fundamentos', 'Desenho', 'Negócios', 'RH', 'Esquemas', 'SO') NOT NULL
);

INSERT INTO disciplinas VALUES
('M','Info','Banco'), ('M','Info','Programação'), ('M','Mecânica','Fundamentos'), ('M','Mecânica','Desenho'),
('T','ADM','Negócios'), ('T','ADM','RH'), ('N','Info','Fundamentos'), 
('N','Info','SO'), ('N','Elétrica','Fundamentos'), ('N','Elétrica','Esquemas');