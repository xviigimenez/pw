create database produtos_estoque_e_vendas;

create table tab_login (
	`id` int(6) not null primary key auto_increment,
	`usuario` varchar(24) not null,
	`senha` int(32) not null
);

create table tab_produtos (
    `id` int(6) not null primary key auto_increment,
	`cod_prod` int(5) not null,
    `descricao` varchar(128) not null,
    `valor` decimal(5,2) not null,
    `vencimento` date not null
);

create table tab_vendas (
    `id` int(6) not null primary key auto_increment,
	`cod_venda`int(5) not null,
    `cod_prod` int(5),
    `quantidade` int(3) not null,
    `data`date not null
);

create table tab_estoque (
    `id` int(6) not null primary key auto_increment,
	 `cod_movimento` int(5) not null,
     `data_movimento` date not null,
     `tipo` enum('Entrada','Saída') not null,
     `cod_prod` int(6)
);

-- ALTER TABLE `tab_vendas`
-- ADD CONSTRAINT `cod_prod_fk` FOREIGN KEY (`cod_prod`) REFERENCES `tab_produtos` (`cod_prod`);
