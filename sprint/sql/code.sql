drop table if exists connexion;

create table connexion (
id integer not null primary key auto_increment,
login varchar(50) not null,
pass varchar(50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
