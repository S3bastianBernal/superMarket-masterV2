CREATE DATABASE supermarket;

USE supermarket;

CREATE TABLE
    categorias (
        categoriaId INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(50) NOT NULL,
        descripcion VARCHAR(100),
        imagen MEDIUMBLOB
    );

CREATE TABLE
    clientes(
        clienteId INT PRIMARY KEY AUTO_INCREMENT,
        celular VARCHAR(20),
        compañia VARCHAR(50)
    );

CREATE TABLE
    empleados(
        empleadoId INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(50),
        celular VARCHAR(20),
        direccion VARCHAR(50),
        imagen MEDIUMBLOB
    );

CREATE TABLE
    facturas(
        facturaId INT PRIMARY KEY AUTO_INCREMENT,
        empleadoId INT,
        clienteId INT,
        fecha DATE,
        Foreign Key (empleadoId) REFERENCES empleados(empleadoId),
        Foreign Key (clienteId) REFERENCES clientes(clienteId)
    );

CREATE TABLE
    proveedores(
        proveedorId INT PRIMARY KEY AUTO_INCREMENT,
        nombre VARCHAR(50),
        telefono VARCHAR(20),
        ciudad VARCHAR(50)
    );

CREATE TABLE
    productos(
        productoId INT PRIMARY KEY AUTO_INCREMENT,
        categoriaId INT,
        precioUnitario INT,
        stock INT,
        unidadesPedidas INT,
        proveedorId INT,
        descontinuado VARCHAR(50),
        Foreign Key (categoriaId) REFERENCES categorias(categoriaId),
        Foreign Key (proveedorId) REFERENCES proveedores(proveedorId)
    );

CREATE TABLE
    facturaDetalle(
        facturaId INT,
        productoId INT,
        cantidad INT,
        precioVenta INT,
        Foreign Key (facturaId) REFERENCES facturas(facturaId),
        Foreign Key (productoId) REFERENCES productos(productoId)
    );

ALTER TABLE productos ADD nombre VARCHAR(50);

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    empleadoId INT ,
    email VARCHAR(80) NOT NULL,
    username VARCHAR(64) NOT NULL,
    password VARCHAR(72) NOT NULL,
    Foreign Key (empleadoId) REFERENCES empleados(empleadoId)
);