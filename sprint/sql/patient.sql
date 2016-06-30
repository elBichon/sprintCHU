drop table if exists patient;

create table patient (
id integer not null primary key auto_increment,
date datetime not null,
nom varchar(50) not null,
prenom varchar(50) not null,
numero varchar(50) not null,
sexe varchar(50),
passage varchar(50)
) engine=innodb character set utf8 collate utf8_unicode_ci;