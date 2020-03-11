CREATE DATABASE kredihay;

USE kredihay;

CREATE TABLE creditdeals (
  creditdealId int PRIMARY KEY AUTO_INCREMENT,
  creditdealDescription varchar(255) NOT NULL
);

CREATE TABLE statuses(
   statusId int PRIMARY KEY AUTO_INCREMENT,
   statusDescription varchar(50) not null
);

CREATE TABLE creditloans(
  creditId int PRIMARY KEY AUTO_INCREMENT,
  firstname varchar(50) not null,
  lastname varchar(50) not null,
  email varchar(80) not null,
  phone varchar(20),
  countOfRates int not null,
  deadline date,
  fk_creditdealsId int, 
  fk_statusId int,
  FOREIGN KEY(fk_creditdealsId) REFERENCES creditdeals(creditdealId),
  FOREIGN KEY(fk_statusId) REFERENCES statuses(statusId)
);
