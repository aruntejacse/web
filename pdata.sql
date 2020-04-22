create database demo1;

use demo1;

create table studentdem (
firstname varchar(30),
lastname varchar(30),
phone varchar(12),
username varchar(30),
email varchar(40),
password varchar(30),
primary key(username,email,password)
);

select * from studentdem;

DELETE FROM studentdem WHERE password='arunteja';

create table teacherdem (
name varchar(30),
branch varchar(10),
interests varchar(50),
email varchar(40),
password varchar(30),
primary key(email,password)
);

select * from teacherdem;

create table userprofile (
username varchar(30),
email varchar(40),
quest int,
answ int,
primary key(username,email),
constraint fk_up foreign key(username,email) references studentdem(username,email)
);

select * from userprofile;

insert into userprofile
values ('kdkdks','kishorenagasamudram@bmsce.ac.in',3,4);
