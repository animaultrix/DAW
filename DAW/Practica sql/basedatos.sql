CREATE DATABASE BaseDatosTienda; 

use BaseDatosTienda; 

CREATE TABLE Stock
 (
 IdProducto int primary key auto_increment not null,
 Descripción text (50),
 Precio float (9) not null
 );
 CREATE TABLE Suministra
 (
 IdProducto int not null,
 IdProveedor int not null,
 Stock_actual int not null
 );
 CREATE TABLE Proveedores
 (
 IdProveedor int  primary key not null,
 Nombre text (20) not null,
 Dirección varchar (40),
 Teléfono int (9)
 );