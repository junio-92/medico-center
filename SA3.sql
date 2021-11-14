create database clinica;
use clinica;
DROP table cadastro_pacientes;

use cadastro_paciente;
create table cadastro_paciente(
id_Paciente int (5)not null primary key auto_increment ,
	Nome varchar(45),
    Rua VARCHAR(45) ,
	Logradouro VARCHAR(45),
	Numero INT(5),
	Complemento VARCHAR(45),
	Bairro VARCHAR (45),
	CEP INT(11),
	Email VARCHAR(45),
	Telefone_Fixo INT(12),
	Celular INT(12),
	Telefone_Secundario INT(12),
	assist CHAR(1),
     a_data DATE 
);



create table cadastro_medicos(
id_medicos int (5)not null primary key auto_increment ,
	Nome varchar(45),
    Rua VARCHAR(45) ,
	Logradouro VARCHAR(45),
	Numero INT(5),
	Complemento VARCHAR(45),
	Bairro VARCHAR (45),
	CEP INT(11),
	Email VARCHAR(45),
	Telefone_Fixo INT(12),
	Celular INT(12),
	Telefone_Secundario INT(12),
	assist CHAR(1),
     a_data DATE 
);



create table convenio(
id_convenio int (5)not null primary key auto_increment ,
nome varchar(45),
nome_empresa varchar(45),
cnpj int (14),
email varchar(45),
nome_contato varchar(45),
home_page varchar(45),
telefone1 int(12),
telefone2 int(12),
a_data date

);



create table especialidades(
id_especialidades int(5)not null primary key auto_increment ,
especilaidade varchar(45),
a_data date
);



create table procedimentos(
id_procedimentos int(5)not null primary key auto_increment ,
codigo int (10),
nome varchar (45),
valor int (12),
genero varchar (45),
execao varchar(45),
a_data date
);

select  * from especialidades;

