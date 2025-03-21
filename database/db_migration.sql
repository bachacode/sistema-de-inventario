CREATE DATABASE sistema_de_inventario;
USE sistema_de_inventario;
    
    CREATE TABLE rol (
        id_rol int NOT NULL AUTO_INCREMENT,
        nom_rol VARCHAR (255) NOT NULL,
        PRIMARY KEY (id_rol)
    );
    CREATE TABLE categoria (
        id_categoria int NOT NULL AUTO_INCREMENT,
        nom_categoria VARCHAR (255) NOT NULL,
        PRIMARY KEY (id_categoria)
    );
    CREATE TABLE marca (
        id_marca int NOT NULL AUTO_INCREMENT,
        nom_marca VARCHAR (255) NOT NULL,
        PRIMARY KEY (id_marca)
    );
    CREATE TABLE divisa(
        id_divisa int NOT NULL AUTO_INCREMENT,
        cantidad INT NOT NULL,
        PRIMARY KEY (id_divisa)
    );

    CREATE TABLE usuario(
        id_usuario int NOT NULL AUTO_INCREMENT,
        id_rol int NOT NULL,
        nom_usuario VARCHAR (255) NOT NULL,
        clave VARCHAR (255) NOT NULL,
        estado INT NOT NULL DEFAULT 1,
        PRIMARY KEY(id_usuario),
        FOREIGN KEY (id_rol) REFERENCES rol (id_rol),
        UNIQUE(nom_usuario)
    );
    CREATE TABLE historial(
        id_historial int NOT NULL AUTO_INCREMENT,
        id_usuario int NOT NULL,
        accion VARCHAR (255) NOT NULL,
        creado_en DATETIME NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (id_historial),
        FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
    );
    CREATE TABLE datos (
        id_datos int NOT NULL AUTO_INCREMENT,
        id_usuario int NOT NULL,
        nom_per VARCHAR (255) NOT NULL,
        apellido_per VARCHAR (255) NOT NULL,
        cedula INT NOT NULL,
        telefono INT NOT NULL,
        dirreccion VARCHAR (255) NOT NULL,
        genero VARCHAR (255) NOT NULL,
        correo VARCHAR (255) NOT NULL,
        PRIMARY KEY (id_datos),
        FOREIGN KEY (id_usuario) REFERENCES usuario (id_usuario)
    );
    CREATE TABLE producto(
        id_producto int NOT NULL AUTO_INCREMENT,
        id_categoria int NOT NULL,
        id_marca int NOT NULL,
        nom_producto VARCHAR (255) NOT NULL,
        precio_producto INT NOT NULL,
        stock INT NOT NULL,
        stock_minimo INT NOT NULL,
        creado_en TIMESTAMP NOT NULL DEFAULT current_timestamp(),
        PRIMARY KEY (id_producto),
        FOREIGN KEY (id_categoria) REFERENCES categoria(id_categoria),
        FOREIGN KEY (id_marca) REFERENCES marca (id_marca)
    );
    CREATE TABLE entrada (
        id_entrada int NOT NULL AUTO_INCREMENT,
        fecha TIMESTAMP NOT NULL DEFAULT current_timestamp(),
        monto INT NOT NULL,
        PRIMARY KEY (id_entrada)
        
    );
    CREATE TABLE salida (
        id_salida int NOT NULL AUTO_INCREMENT,
        fecha TIMESTAMP NOT NULL DEFAULT current_timestamp(),
        monto INT NOT NULL,
        PRIMARY KEY (id_salida)
    );
    CREATE TABLE detalle_entrada(
        id_detalle_entrada int NOT NULL AUTO_INCREMENT,
        id_producto int NOT NULL,
        id_entrada int NOT NULL,
        fecha_entrada DATE NOT NULL,
        fecha_vencimiento DATE NOT NULL, 
        cantidad INT NOT NULL,
        precio INT NOT NULL,
        PRIMARY KEY (id_detalle_entrada),
        FOREIGN KEY (id_producto) REFERENCES producto (id_producto),
        FOREIGN KEY (id_entrada) REFERENCES entrada (id_entrada)
    );
    CREATE TABLE detalle_salida(
        id_detalle_salida int NOT NULL AUTO_INCREMENT,
        id_producto int NOT NULL,
        id_salida int NOT NULL,
        fecha_salida DATE NOT NULL,
        cantidad_salida INT NOT NULL,
        precio_salida INT NOT NULL,
        motivo VARCHAR (255),
        PRIMARY KEY (id_detalle_salida),
        FOREIGN KEY (id_producto) REFERENCES producto (id_producto),
        FOREIGN KEY (id_salida) REFERENCES salida (id_salida)

    );
    