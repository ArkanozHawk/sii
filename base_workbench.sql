create database infocel;
use infocel;

CREATE TABLE equipos
(
	idEquipo int(11) NOT NULL auto_increment,
    nombre varchar(20) NOT NULL,
    marca varchar(20) NOT NULL,
    tamaño varchar(20),
    resolucion varchar(20),
    cam_primaria varchar(20),
    cam_secundaria varchar(20),
    tam_bat varchar(20),
    procesador varchar(20),
    memoria varchar(20),
    almacenamiento varchar(20),
    imagen varchar(50),
    PRIMARY KEY (idEquipo)
)ENGINE = INNODB;

CREATE TABLE usuarios
(
	idUsuario int(11) NOT NULL auto_increment,
    nickname varchar(20) not null,
    nombre varchar(50),
    apellidoP varchar(20),
    apellidoM varchar(20),
    pass varchar(20) NOT NULL,
    permisos varchar(20),
    email varchar(20),
    about text,
    PRIMARY KEY (idUsuario)
)ENGINE = INNODB;

CREATE TABLE review
(
	idReview int(11) NOT NULL auto_increment,
    idUsuario int(11) NOT NULL,
    idEquipo int(11) NOT NULL,
    fecha datetime,
    review longtext,
    PRIMARY KEY(idReview),
    INDEX(idUsuario),
    INDEX(idEquipo),
    FOREIGN KEY(idUsuario) REFERENCES usuarios(idUsuario),
    FOREIGN KEY(idEquipo) REFERENCES equipos(idEquipo)
)ENGINE = INNODB;