create database produtos_estoque_e_vendas;
use produtos_estoque_e_vendas;

-- select * from tab_produtos;
-- drop database produtos_estoque_e_vendas;

create table tab_login (
	`usuario` varchar(24) not null primary key,
	`senha` varchar(32) not null
);

create table tab_produtos (
	`cod_prod` int(5) not null primary key,
    `descricao` varchar(128) not null,
    `valor` decimal(6,2) not null,
    `vencimento` date not null
);

create table tab_vendas (
	`cod_venda`int(5) not null primary key,
    `cod_prod` int(5),
    `quantidade` int(3) not null,
    `data` date not null
);

create table tab_estoque (
	 `cod_movto` int(5) not null primary key,
     `data_movto` date not null,	
     `tipo` enum('Entrada','Saida') not null,
     `cod_prod` int(5)
);

ALTER TABLE `tab_vendas`
ADD CONSTRAINT `cod_prod_fk1` FOREIGN KEY (`cod_prod`) REFERENCES `tab_produtos` (`cod_prod`);

ALTER TABLE `tab_estoque`
ADD CONSTRAINT `cod_prod_fk2` FOREIGN KEY (`cod_prod`) REFERENCES `tab_produtos` (`cod_prod`);

insert into tab_login values ('admin','1234');
insert into tab_produtos values ('1','paçoca',15.56,'2004-08-08');
insert into tab_produtos values ('2','guarana',0.50,'2009-08-08');
insert into tab_produtos values ('3','banana',1.50,'2011-11-08');
insert into tab_vendas values (1,1,3,'2010-11-09');
insert into tab_vendas values (2,2,6,'2020-07-09');
insert into tab_vendas values (3,3,2,'2015-04-09');
insert into tab_estoque values (1,'2015-04-09','Entrada',1);
insert into tab_estoque values (2,'2018-02-09','Saida',2);
insert into tab_estoque values (3,'2012-09-15','Saida',3);

-- SELECT v.cod_venda, v.cod_prod, p.descricao, v.quantidade, p.valor from tab_vendas v left join tab_produtos p on v.cod_prod = p.cod_prod;
-- SELECT e.cod_movto, e.data_movto, e.tipo, p.descricao from tab_estoque e left join tab_produtos p on e.cod_prod = p.cod_prod;
-- SELECT * from tab_produtos;
-- select * from tab_estoque;
-- delete from tab_produtos where cod_prod = 54;