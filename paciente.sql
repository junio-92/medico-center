create DATABASE cadastro_paciente;

use cadastro_paciente;
drop database cadastro_paciente;


create table tbl_paciente(

	id_paciente INT(5) not null primary KEY AUTO_INCREMENT,

	nome varchar(45),

	rua varchar(45),

	logradouro varchar(45),

	numero int(5),

	complemento varchar(45),

	bairro varchar(45),

	cep int(11),

	email varchar(45),

	telefone_fixo int(8),

	celular int(10),

	telefone_secundario int(8),

	assist char (1),

	a_data date

);