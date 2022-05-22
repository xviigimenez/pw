-- criar database e usar
create database aluno_e_notas;
use aluno_e_notas;

-- comandos de teste
select * from aluno;
select * from notas;
delete from aluno;

-- criar tabela aluno
CREATE TABLE `aluno` (
  `matricula` int(4) NOT NULL PRIMARY KEY,
  `aluno` varchar(50) NOT NULL,
  `nascimento` date NOT NULL
);

-- criar tabela notas
CREATE TABLE `notas` (
  `id_nota` int(4) NOT NULL PRIMARY KEY auto_increment,
  `matricula` int(4) DEFAULT NULL,
  `nota_1` decimal(4,2) NOT NULL,
  `nota_2` decimal(4,2) NOT NULL
);

-- adicionar foreign key nas tabelas
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `aluno` (`matricula`);

-- inserir valores na tabela aluno
INSERT INTO `aluno` (`matricula`, `aluno`, `nascimento`) VALUES
(1, 'Gustavo', '2004-08-08'),
(2, 'Gabriel', '2004-11-17'),
(3, 'Shrek', '1500-12-31'),
(4, 'Shrek2', '1501-12-31');

-- inserir valores na tabela notas
INSERT INTO `notas` (`id_nota`, `matricula`, `nota_1`, `nota_2`) VALUES
(11, 1, '2.2', '3.3'),
(12, 2, '10.0', '9.0'),
(14, 3, '5.0', '5.0');
  
-- right join
SELECT n.id_nota, a.matricula, a.aluno, n.nota_1, n.nota_2 from notas n right join aluno a on a.matricula = n.matricula where id_nota = 12;
SELECT g.id_nota, a.matricula, a.aluno, g.nota_1, g.nota_2 from notas g right join aluno a on a.matricula = g.matricula where id_nota = ? order by a.matricula;
UPDATE aluno set aluno = 'Abublé', nascimento = '2022/04/08' where matricula = 4;
UPDATE notas set nota_1 = 9, nota_2 = 5 where id_nota = 12;

select matricula,aluno,nascimento from aluno where matricula = 1;