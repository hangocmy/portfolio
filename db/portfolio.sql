-- create and select the database
DROP DATABASE IF EXISTS portfolio;
CREATE DATABASE portfolio;
USE portfolio;

-- =========================================================================== --
--create table

--create table
CREATE TABLE products (
  productID        INT(11)        NOT NULL   AUTO_INCREMENT,
  productCode      VARCHAR(10)    NOT NULL   UNIQUE,
  productName      VARCHAR(255)   NOT NULL,
  listPrice        DECIMAL(10,2)  NOT NULL,
  PRIMARY KEY (productID)
);

-- insert data into the database
INSERT INTO products VALUES
(1, 'PRO01', 'Fender Stratocaster', '699.00'),
(2, 'PRO02', 'Gibson Les Paul', '1199.00'),
(3, 'PRO03', 'Gibson SG', '2517.00'),
(4, 'PRO04', 'Yamaha FG700S', '489.99'),
(5, 'PRO05', 'Washburn D10S', '299.00'),
(6, 'PRO06', 'Rodriguez Caballero 11', '415.00'),
(7, 'PRO07', 'Fender Precision', '799.99'),
(8, 'PRO08', 'Hofner Icon', '499.99'),
(9, 'PRO09', 'Ludwig 5-piece Drum Set with Cymbals', '699.99'),
(10,'PRO10', 'Tama 5-Piece Drum Set with Cymbals', '799.99');

-- =========================================================================== --

-- create the users
CREATE USER IF NOT EXISTS hangocmy@localhost 
IDENTIFIED BY '123456';

-- grant privleges to the users
GRANT SELECT, INSERT, DELETE, UPDATE
ON * 
TO hangocmy@localhost;