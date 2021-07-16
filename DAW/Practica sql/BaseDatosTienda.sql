CREATE DATABASE BaseDatosTienda; 

use BaseDatosTienda; 

 CREATE TABLE Proveedores
 (
 IdProveedor int  primary key auto_increment not null,
 Nombre text (20) not null,
 Dirección varchar (40),
 Teléfono int (9)
 );

 CREATE TABLE Stock
 (
 IdProducto int primary key auto_increment not null,
 Id_Proveedor int not null,
 Descripción text (50),
 Precio float (9) not null,
 constraint fk_Proveedor foreign key (Id_Proveedor) references Proveedores (IdProveedor)
 );