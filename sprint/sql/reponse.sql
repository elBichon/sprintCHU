drop table if exists reponse;

create table reponse (
id integer not null primary key auto_increment,
date datetime not null,
nom varchar(50) not null,
nomFormulaire varchar(50) not null,
prenom varchar(50) not null,
numero varchar(50) not null,
age integer not null,
sexe varchar(50) not null,
passage varchar(50) not null,
reponse varchar(50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
