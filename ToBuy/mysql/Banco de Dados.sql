create schema tobuy;

use tobuy;

create table usuario(
	codigo int not null primary key auto_increment,
	nome varchar(100) not null,
	email varchar(100) not null unique,
	senha varchar(100) not null
);

create table produto(
	codigo int not null primary key auto_increment,
    id_user int not null,
    nome varchar(100) not null,
    valor decimal(10,2) not null,
    descricao text not null,
	CONSTRAINT produto FOREIGN KEY (id_user) REFERENCES usuario(codigo)
);