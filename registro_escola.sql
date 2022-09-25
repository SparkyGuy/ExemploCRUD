use registro_escola;

create table escola(

id int not null auto_increment primary key,
nome varchar(100) not null,
tel char(10) not null,
nome varchar(150) not null,
cnpj varchar(18) not null,
senha varchar(20) not null
);