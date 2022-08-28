CREATE DATABASE disciplinas;
USE disciplinas;

CREATE TABLE disciplinas (
	periodo enum('M', 'T', 'N') NOT NULL,
    curso enum('Info', 'Mecânica', 'ADM', 'Elétrica') NOT NULL,
    disciplina enum('Banco', 'Programação', 'Fundamentos', 'Desenho', 'Negócios', 'RH', 'Esquemas') NOT NULL
);