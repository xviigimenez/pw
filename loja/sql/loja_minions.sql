create database loja_minions;
use loja_minions;

-- select * from loja;
-- select * from loja where servico = 'Rede' and dt_servico between '2008-01-01' and '2009-12-12';
-- select * from loja where servico = 'Rede'
-- select * from loja where tipo_cliente = 'Rede' and dt_servico between '2022-06-01' and '2022-06-30'

create table loja(
	pedido int(4) primary key,
    tipo_cliente enum('Contrato','Avulso') not null,
    servico enum('Rede','Sistema','Hardware') not null,
    dt_servico date not null,
    valor decimal(6,2) not null
);

insert into loja values (1,'Contrato','Hardware','2022-06-17', 416);
insert into loja values (2,'Avulso','Sistema','2022-06-03', 623.55);
insert into loja values (3,'Contrato','Hardware','2008-08-08', 12.50);
insert into loja values (4,'Contrato','Sistema','2009-06-02', 51);

-- delete from loja where pedido = 23;