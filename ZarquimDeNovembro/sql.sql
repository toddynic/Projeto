CREATE DATABASE sistema;
USE sistema;

CREATE TABLE cadastro (
	nome varchar(100) not null,
    cpf int not null primary key,
    data_envio timestamp default current_timestamp,
    idade int not null
);

select * from cadastro;
