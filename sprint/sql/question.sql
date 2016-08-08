--table contenant les questions

drop table if exists question;

create table question (
id integer not null primary key auto_increment,
nomFormulaire varchar(50) not null,
type varchar(50) not null,
question varchar (50) not null,
qId varchar (50) not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
