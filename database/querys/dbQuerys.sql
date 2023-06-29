use material_free_livewire;


select * from users;

CREATE TABLE IF NOT EXISTS sucursales (
    idSucursal INT AUTO_INCREMENT PRIMARY KEY,
    idUsuario int,
    nombre VARCHAR(255) NOT NULL,
    direccion varchar(100),
    estado varchar(100),
    pais varchar(100),
    estatus TINYINT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)  ENGINE=INNODB;

select * from sucursales;

insert into sucursales (idUsuario, nombre, direccion, estado, pais, estatus)
values(2, 'Islander Barber Shot', 'Calle 11 #103 x 20 y 22', 'Yucatan', 'México', 1); 

drop table colaboradores;

CREATE TABLE IF NOT EXISTS colaboradores (
    idColaborador INT AUTO_INCREMENT PRIMARY KEY,
	idUsuario int,
    nombre VARCHAR(255) NOT NULL,
    ocupacion varchar(100),
    telefono varchar(100),
    correo varchar(255),
	imagen varchar(255),
    estatus TINYINT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)  ENGINE=INNODB;

select * from colaboradores;

insert into colaboradores (idUsuario, nombre, ocupacion, telefono, correo, estatus)
values(2, 'Jairo Antonio Suchite', 'Barbero', '9997378025', 'jairojapisu@hotmail.com', 1); 

insert into colaboradores (idUsuario, nombre, ocupacion, telefono, correo, estatus)
values(2, 'Jesus Alejandro Lopez', 'Barbero', '9997378025', 'jesusputo@hotmail.com', 1); 

insert into colaboradores (idUsuario, nombre, ocupacion, telefono, correo, estatus)
values(2, 'Gabriel Ramirez', 'Barbero', '9997378025', 'gabrielputo@hotmail.com', 1); 


CREATE TABLE IF NOT EXISTS servicios (
    idServicio INT AUTO_INCREMENT PRIMARY KEY,
	idUsuario int,
    nombre VARCHAR(255) NOT NULL,
	descripcion varchar(255),
    tiempo varchar(100),
    costo decimal(10,2),
	categoria varchar(100),
    imagen varchar(255),
    estatus TINYINT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)  ENGINE=INNODB;

select * from servicios;

insert into servicios (idUsuario, nombre, descripcion, tiempo, costo, categoria, estatus)
values(2, 'CORTE DESVANECIDO CON DISEÑO', 'Dependiendo del diseño el costo puede aumentar', '1 HR', 100, 'CORTES', 1); 

insert into servicios (idUsuario, nombre, descripcion, tiempo, costo, categoria, estatus)
values(2, '*CORTE CLÁSICO', 'Dependiendo del diseño el costo puede aumentar', '1 HR', 70, 'CORTES', 1); 

insert into servicios (idUsuario, nombre, descripcion, tiempo, costo, categoria, estatus)
values(2, '*CORTE DESVANECIDO', 'Dependiendo del diseño el costo puede aumentar', '1 HR', 80, 'CORTES', 1); 

insert into servicios (idUsuario, nombre, descripcion, tiempo, costo, categoria, estatus)
values(2, 'ALINEACIÓN DE BARBA EXPRESS SIN VAPORIZADOR', 'Dependiendo del diseño el costo puede aumentar', '30 MIN', 50, 'BARBAS', 1); 

insert into servicios (idUsuario, nombre, descripcion, tiempo, costo, categoria, estatus)
values(2, 'LIMPIEZA FACIAL BÁSICA', 'Dependiendo del diseño el costo puede aumentar', '30 MIN', 80, 'FACIAL', 1); 