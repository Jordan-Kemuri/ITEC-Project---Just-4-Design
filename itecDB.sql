DROP DATABASE IF EXISTS  ItecDB;
CREATE DATABASE ItecDB;
USE ItecDB;

CREATE TABLE Contact_Us(  
    contactID int NOT NULL primary key AUTO_INCREMENT ,
    contactName varchar(75) NOT NULL,
    contactEmail varchar(75) NOT NULL,
    contactMessage varchar(254) NOT NULL
);

CREATE TABLE Customer (
    customerEmail VARCHAR(75) PRIMARY KEY NOT NULL,
    customerAddressLine1 VARCHAR(45) NOT NULL,
	customerAddressLine2 VARCHAR(45) NULL,
    customerProvince VARCHAR(45) NOT NULL,
    customerPostalCode INT NOT NULL,
    customerPassword VARCHAR(255) NOT NULL
);

CREATE TABLE Product (
    productName VARCHAR(45) NOT NULL,
    productDescription VARCHAR(45) NOT NULL,
    productValue DOUBLE NOT NULL
);

CREATE TABLE Cart (
    orderNumber INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    customerEmail VARCHAR(75) NOT NULL REFERENCES Customer(custmerID),
    orderTotal DOUBLE 
);
    
    CREATE TABLE CartDetails (
    orderNumber INT NOT NULL REFERENCES Cart(orderNumber) ,
    productName VARCHAR(45) NOT NULL REFERENCES Product(productName),
    details varchar (75),
    PRIMARY KEY (orderNumber, productName)
);
  
INSERT INTO Product (productName, productDescription ,productValue)
	VALUES 	("Mens Hoodies","Hoodies for Men","250"),
        	("Womens Hoodies","Hoodies for Women","250"),
			("Mens T-Shirts","Shirts for Men","160"),
			("Womens T-Shirts","Shirts for Women","160"),
			("Buffs","Buffs","50"),
			("Keychains","Keychains","95"),
			("Masks","Masks","50"),
			("Mugs","Mugs","120");
