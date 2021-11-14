create database clinica;
use clinica;

create table tbl_procedimento (
	id int(5) not null primary key auto_increment,
    nome varchar(50),
    valor decimal,
    genero char(1)
);