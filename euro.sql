create database if not exists euro;
use euro;


create table if not exists Pais (
	id int not null auto_increment primary key,
	nome varchar (20) not null unique, 
	fucao enum('normal', 'organizador')
);


create table if not exists Grupo (
	id int not null auto_increment primary key,
	nome varchar(1) not null unique
);


create table if not exists Cidade (
	id int not null auto_increment primary key,
	nome varchar(30) not null unique,
	pais int not null,
    foreign key (pais) references Pais(id)
);


create table if not exists Selecao (
	id int not null auto_increment primary key,
	nome varchar(30) not null unique,
	pais int not null,
    foreign key (pais) references Pais (id), 
	grupo int not null,
    foreign key (grupo) references Grupo (id)
);


create table if not exists Jogador (
	id int not null auto_increment primary key,
	nome varchar (50) not null,
	nacionalidade varchar (20) not null,
	camisola int not null unique,
	selecao int not null,
    foreign key (selecao) references Selecao (id),
	golos int not null
);


create table if not exists Estadio (
	id int not null auto_increment primary key,
	nome varchar(30) not null unique,
	cidade int not null,
    foreign key (cidade) references Cidade (id)
);


create table if not exists Resultado (
	id int not null auto_increment primary key,
	golos_equipa1 int not null,
	golo_equipa2 int not null
);


create table if not exists Jogo (
	id int not null auto_increment primary key,
	resultado int,
    foreign key (resultado) references Resultado (id)
);


create table if not exists EstatisticaTime (
	id int not null auto_increment primary key,
	remates int not null default 0,
	livres int not null default 0,
	foras_jogo int not null default 0,
	jogo int not null,
    foreign key (jogo) references Jogo (id)
);


create table if not exists EstatisticasIndividuais (
	id int not null auto_increment primary key,
	jogador int not null,
    foreign key (jogador) references Jogador (id),
	passes int not null,
	assistencias int not null default 0,
	remates int not null default 0,
	minutos int not null,
	jogo int not null,
    foreign key (jogo) references Jogo (id)
);


create table if not exists Calendario (
	id int not null auto_increment primary key,
	selecao1 int not null,
    foreign key (selecao1) references Selecao (id),
	selecao2 int not null,
    foreign key (selecao2) references Selecao (id),
	jogo int not null,
    foreign key (jogo) references Jogo (id),
	data_jogo date not null
);