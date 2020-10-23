create database dbmsbloodbank;
use dbmsbloodbank;

create table register(adhaarcardno long,email varchar(30) primary key,password varchar(20));

create table wishtodonate(slno int primary key auto_increment,name char(30),dob date,
bloodgroup varchar(3),gender char(10),contact_no long not null,blood_donated_details char(3),
surgery_details char(3),medical_details varchar(200),entered_date date,email varchar(30)
references register(email));

create table donar(sl_no int primary key auto_increment,name char(30),bloodgroup varchar(3),gender char(10),
contact_no long not null,weight float,dob date,currentdate date,quantity int);

create table receiver(sl_no int primary key auto_increment,hospital_name char(35)
,hospital_id char(10),doctor_name varchar(30),pateint_name char(30),age int,gender char(10),quantity int,
bloodgroup char(3),guardian_name char(30),contact_no long,currentdate date);

create table staff(name char(20),id varchar(20) primary key,designation char(30),gender char(10),bloodgroup varchar(3),
salary int,address varchar(40),pincode int,contactno long);

create table blooddetails(bloodgroup char(3) primary key,total int);

insert into blooddetails values('a+',0);
insert into blooddetails values('a-',0);
insert into blooddetails values('b+',0);
insert into blooddetails values('b-',0);
insert into blooddetails values('ab+',0);
insert into blooddetails values('ab-',0);
insert into blooddetails values('o+',0);
insert into blooddetails values('o-',0);
