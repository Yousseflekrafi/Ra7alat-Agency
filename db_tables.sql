-- CREATE DATABASE ra7alat_agency;
-- USE ra7alat_agency;
/*

CREATE TABLE users (
      id int primary key auto_increment,
      username varchar(30) not null,
      email varchar(30) not null,
      password varchar(255) not null,
      created_at timestamp default current_timestamp
);

CREATE TABLE appointment(
     id int primary key auto_increment,
     firstName varchar(50) not null,
     lastName varchar(50) not null,
     age varchar(10) default null,
     cin varchar(10) not null,
     gender varchar(10) not null,
     destinationFrom varchar(60) ,
     destinationTo varchar(60) ,
     travelDetails longtext ,
     rdvDate date ,
     rdvTime time,
     phone varchar(20) not null,
     email varchar(50) 
     
     
); 

*/