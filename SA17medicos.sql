create database registro_de_medicos;

use registro_de_medicos;

drop table medicos;

create table medicos(
id_medicos int(5)not null primary key auto_increment,
nome varchar(45),
rua varchar(45),
numero varchar(45),
logadouro varchar(45),
complemento varchar(45),
bairro varchar(45),
cep varchar(45),
email varchar(45),
celular int(11),
fixo int (11),
secundario int(11),
data_nasc date
);

select * from medicos;