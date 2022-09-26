create database dbEstudo;
use dbEstudo;

create table tbUsuario(
	idUsuario int primary key auto_increment,
    nomeUsuario varchar(50) not null,
    emailUsuario varchar(80) not null,
    senhaUsuario char(8) not null,
    cargoUsuario int not null
);
create table tbCargo(
	idCargo int primary key auto_increment,
    nomeCargo varchar(50) not null
);
alter table tbUsuario add foreign key(cargoUsuario) references tbCargo(idCargo);

insert into tbCargo(nomeCargo) values ('TI');
insert into tbCargo(nomeCargo) values ('ADM');
insert into tbCargo(nomeCargo) values ('MKT');
insert into tbUsuario(nomeUsuario,emailUsuario,senhaUsuario,cargoUsuario) values ('Lucas','Lucas@gmail.com','12345678',1);

select * from tbUsuario;