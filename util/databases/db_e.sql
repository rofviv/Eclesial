CREATE DATABASE db_eclesial;

USE db_eclesial;

CREATE TABLE miembro
(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY
  nombre VARCHAR(30) NOT NULL,
  apellido VARCHAR(40) NOT NULL,
  fecha_nac DATE,
  telefono VARCHAR(20),
  sexo ENUM('Hombre', 'Mujer') NOT NULL,
  direccion VARCHAR(100),
  gps VARCHAR(70) DEFAULT '0,0'
);

CREATE TABLE cargo
(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cargo VARCHAR(15) NOT NULL DEFAULT 'Miembro'
);

CREATE TABLE miembro_cargo
(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_miembro INT NOT NULL,
  id_cargo INT NOT NULL,
  estado ('Activo', 'Inactivo') DEFAULT 'Activo',
  fecha DATE NOT NULL,
  FOREIGN KEY(id_miembro) REFERENCES miembro(id),
  FOREIGN KEY(id_cargo) REFERENCES cargo(id)
);

CREATE TABLE tipo_celula
(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  tipo VARCHAR(30)
);

CREATE TABLE celula
(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(30) NOT NULL,
  fecha DATE NOT NULL,
  estado ('Activo', 'Inactivo') DEFAULT 'Activo',
  id_lider INT NOT NULL,
  id_tipo INT NOT NULL,
  FOREIGN KEY(id_lider) REFERENCES cargo(id),
  FOREIGN KEY(id_tipo) REFERENCES tipo_celula(id)
);

CREATE TABLE miembro_celula
(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_miembro INT NOT NULL,
  id_celula INT NOT NULL,
  FOREIGN KEY(id_miembro) REFERENCES miembro(id),
  FOREIGN KEY(id_celula) REFERENCES celula(id)
);

CREATE TABLE historia
(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  historia VARCHAR(200),
  fecha DATE NOT NULL,
  id_miembro INT,
  id_lider INT,
  FOREIGN KEY(id_miembro) REFERENCES miembro(id),
  FOREIGN KEY(id_lider) REFERENCES cargo(id)
);

CREATE TABLE usuario
(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  usuario VARCHAR(15) NOT NULL UNIQUE,
  contrasena VARCHAR(30) NOT NULL,
  id_miembro INT NOT NULL,
  estado_cuenta ENUM('Activo', 'Inactivo') DEFAULT 'Activo',
  estado_conexion ENUM('Conectado', 'Desconectado') DEFAULT 'Desconectado',
  FOREIGN KEY(id_miembro) REFERENCES miembro(id)
);

CREATE TABLE privilegios_usuario
(
  id INT NOT NULL AUTO_INCREMENT PRIMARY KEY
);

INSERT INTO miembo (nombre, apellido, fecha_nac, telefono, sexo, direccion) VALUES
('Juan', 'Sierra', '1980-12-10', '77124512', 'Hombre', 'Barrio las palmas #454'),
('Luis', 'Guillerme', '1990-02-14', '77845624', 'Hombre', 'Barrio Guaracachi #20'),
('Carlos', 'Gutierrez', '1994-10-30', '74423564', 'Hombre', 'Barrio Urbari #282'),
('Leticia', 'Salek', '1981-04-02', '76598457', 'Mujer', 'Calle Venezuela #7'),
('Paula', 'Saucedo', '1990-04-02', '74103214', 'Mujer', 'Calle peru #7'),
('Alex', 'Molano', '1986-03-18', '73125648', 'Hombre', 'Barrio Cupesi #40'),
('Brayan', 'Santos', '1990-05-12', '71042056', 'Hombre', 'Barrio Internacional #8825'),
('Julio', 'Sebastian', '1990-12-01', '74586245', 'Hombre', 'Barrio santa rosita #10'),
('Julian', 'Perez', '1990-10-07', '7794612', 'Hombre', 'calle 4 #17'),
('Adrian', 'Sanders', '1990-08-03', '74185296', 'Hombre', 'calle dechia #92'),
('Darcell', 'Cuellar', '1994-07-18', '75416587', 'Mujer', 'Los batos #731'),
('Paola', 'Cabrera', '1995-10-22', '75741963', 'Mujer', 'Los guayabos #114'),
('Alvaro', 'Justiniano', '1990-07-15', '79865432', 'Hombre', 'calle los reyes #47'),
('Adolfo', 'Rodriguez', '1990-05-14', '78910245', 'Hombre', 'calle guapomo #30'),
('Joaquin', 'Vallejo', '1990-04-22', '70012347', 'Hombre', 'calle los lirios #77'),
('Pedro', 'Siles', '1990-05-23', '70012456', 'Hombre', 'Barrio sirari #1'),
('Jorge', 'Lopez', '1990-10-25', '76498325', 'Hombre', 'Calle ingavi #43'),
('Fabian', 'Gonzalo', '1990-11-13', '74102315', 'Hombre', 'Av Barrientos #330'),
('Jorge', 'Perez', '1992-11-01', '75127865', 'Hombre', 'Av Viva #30'),
('Paul', 'Suarez', '1995-11-05', '71248735', 'Hombre', 'Av Rigo #850'),
('Joquin', 'Gomez', '1997-12-13', '70120325', 'Hombre', 'Av Via #90'),
('Lisa', 'Santos', '1997-01-13', '73625956', 'Mujer', 'Av America #80'),
('Rocio', 'Gutierrez', '1997-02-23', '70412589', 'Mujer', 'Av Paurito #100'),
('Angela', 'Ramirez', '1995-10-03', '74185290', 'Mujer', 'Av Melchor #960'),
('Johana', 'Nieves', '1993-02-13', '73603120', 'Mujer', 'Calle Arenales #740'),
('Michael', 'Vaca', '1995-01-13', '71041085', 'Hombre', 'Av Barrientos #3520'),
('Felipe', 'Suarez', '1990-03-16', '71452369', 'Hombre', 'Barrio los pino #447');

INSERT INTO cargo (cargo) VALUES
('Pastor'),
('Líder'),
('Secretaria'),
('Tesorera');

INSERT INTO miembro_cargo (id_miembro, id_cargo, fecha) VALUES
(1, 1, '2000-01-05'),
(2, 2, '2005-02-04'),
(6, 2, '2005-02-04'),
(3, 2, '2007-05-08'),
(4, 3, '2000-01-05'),
(5, 4, '2005-09-07');

INSERT INTO tipo_celula (tipo) VALUES
('Discipulado'),
('Seminario');

INSERT INTO celula (nombre, fecha, id_lider, id_tipo) VALUES
('Celula I-001', '2012-10-01', 2, 1),
('Celula I-002', '2015-05-05', 6, 1),
('Celula I-003', '2015-10-08', 1, 2);

INSERT INTO miembro_celula (id_miembro, id_celula) VALUES
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 2),
(13, 2),
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(23, 3),
(24, 3),
(25, 3);

INSERT INTO historia (historia, fecha, id_miembro, id_lider) VALUES
('Nuevo miembro, Nuevo Creyente', '2017-10-10', 26, 1);

INSERT INTO usuario (usuario, contrasena, id_miembro) VALUES
('juan', '123456', 1),
('luis', '123456', 2);
