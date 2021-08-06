CREATE TABLE usuario(
	idUsuario INT NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	apellidoPaterno VARCHAR(50) NOT NULL,
	apellidoMaterno VARCHAR(50) NOT NULL,
	correo VARCHAR(50) NOT NULL,
	contrasena VARCHAR(50), 
    bandera CHAR(1), 
	PRIMARY KEY(idUsuario)
);

INSERT INTO usuario (idUsuario, nombre, apellidoPaterno, apellidoMaterno, correo, contrasena) 
values (DEFAULT, 'Daniel', 'Dan', 'Niel', 'Daniel@gmail.com', 'hola', 'U');


INSERT INTO usuario (idUsuario, nombre, apellidoPaterno, apellidoMaterno, correo, contrasena) 
values (DEFAULT, 'Jan', 'Jan', 'Neth', 'Jan@gmail.com', 'hola', 'U');