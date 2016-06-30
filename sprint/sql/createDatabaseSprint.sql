create database if not exists sprint character set utf8 collate utf8_unicode_ci;
use sprint;

grant all privileges on sprint.* to 'sprint_user'@'localhost' identified by 'secret';