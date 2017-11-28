--
-- Database: `movidosporchile`
--


--
-- Procedures
--
 

--
-- Tablas
--

CREATE TABLE usuario (
	id serial,
	rol_id int NOT NULL,
	username varchar(50) NOT NULL,
	password char(60) NOT NULL,
	rut		int NOT NULL UNIQUE,
	dv		char(1) NOT NULL,
	nombre	varchar(50) NOT NULL,
	telefono int,
	email	varchar(120) NOT NULL,
	created_at timestamp DEFAULT NULL,
	updated_at timestamp DEFAULT NULL,
	deleted_at timestamp DEFAULT NULL
);

CREATE TABLE rol (
	id serial,
	nombre varchar(50) NOT NULL
);

CREATE TABLE permiso (
	id serial,
	nombre varchar(120) NOT NULL
);

CREATE TABLE permiso_rol (
	permiso_id int NOT NULL,
	rol_id int NOT NULL
);

CREATE TABLE catastrofe (
	id serial,
	usuario_id int NOT NULL,
	tipo_catastrofe_id int NOT NULL,
	locacion_id int NOT NULL,
	descripcion text NOT NULL,
	fecha_catastrofe datetime NOT NULL
);

CREATE TABLE tipo_catastrofe (
	id serial,
	nombre varchar(30) NOT NULL
);

CREATE TABLE comuna (
	id serial,
	provincia_id int NOT NULL,
	nombre VARCHAR(50) NOT NULL
);

CREATE TABLE provincia (
	id serial,
	region_id int NOT NULL,
	nombre VARCHAR(50) NOT NULL
);

CREATE TABLE region (
	id serial,
	nombre VARCHAR(50) NOT NULL
);

CREATE TABLE locacion (
	id serial,
	comuna_id int NOT NULL,
	latitude float(10) NOT NULL,
	longitude float(10) NOT NULL
);

CREATE TABLE medida (
	id serial,
	usuario_id int NOT NULL,
	aprobada boolean NOT NULL DEFAULT FALSE,
	objetivos text NOT NULL,
	descripcion text
);

CREATE TABLE evento_a_beneficio (
	id serial,
	medida_id int NOT NULL,
	locacion_id int NOT NULL,
	fecha date NOT NULL,
	horario_inicio time NOT NULL,
	horario_termino time NOT NULL,
	actividades text NOT NULL,
	created_at timestamp DEFAULT NULL,
	updated_at timestamp DEFAULT NULL
);

CREATE TABLE registro_actividad (
	id serial,
	usuario_id int NOT NULL,
	tipo_actividad_id int NOT NULL,
	created_at timestamp NOT NULL,
	updated_at timestamp NOT NULL
);

CREATE TABLE tipo_actividad (
	id serial,
	nombre varchar(120) NOT NULL
);

CREATE TABLE voluntariado (
	id serial,
	medida_id int NOT NULL,
	locacion_id int NOT NULL,
	actividad_voluntariado_id int NOT NULL,
	fecha_inicio date NOT NULL,
	fecha_termino date NOT NULL,
	cantidad_voluntarios int NOT NULL,
	created_at timestamp DEFAULT NULL,
	updated_at timestamp DEFAULT NULL
);

CREATE TABLE actividad_voluntariado (
	id serial,
	nombre varchar(30) NOT NULL
);

CREATE TABLE voluntario (
	id serial,
	usuario_id int NOT NULL,
	voluntariado_id int NOT NULL,
	finalizado boolean NOT NULL DEFAULT FALSE,
	created_at timestamp NOT NULL,
	updated_at timestamp NOT NULL
);

CREATE TABLE rnv (
	id serial,
	rut		int NOT NULL UNIQUE,
	dv		char(1) NOT NULL,
	nombre	varchar(50) NOT NULL,
	email	varchar(120) NOT NULL,
	disponible boolean NOT NULL,
	created_at timestamp NOT NULL,
	updated_at timestamp NOT NULL
);

CREATE TABLE centro_acopio (
	id serial,
	medida_id int NOT NULL,
	locacion_id int NOT NULL,
	estado_id int NOT NULL,
	fecha_inicio date NOT NULL,
	fecha_termino date NOT NULL,
	created_at timestamp DEFAULT NULL,
	updated_at timestamp DEFAULT NULL
);

CREATE TABLE estado (
	id serial,
	nombre varchar(30) NOT NULL
);

CREATE TABLE bien (
	id serial,
	usuario_id	int DEFAULT NULL,
	centro_acopio_id int NOT NULL,
	medicion_id int NOT NULL,
	tipo varchar(30) NOT NULL,
	cantidad integer NOT NULL
);

CREATE TABLE medicion (
	id serial,
	nombre varchar(10) NOT NULL
);

CREATE TABLE donacion (
	id serial,
	medida_id int NOT NULL,
	titular varchar(60) NOT NULL,
	rut_destinatario varchar(12) NOT NULL,
	nombre_banco varchar(40) NOT NULL,
	tipo_cuenta varchar(20) NOT NULL,
	cuenta varchar(30) NOT NULL,
	fecha_inicio date NOT NULL,
	fecha_termino date NOT NULL,
	created_at timestamp DEFAULT NULL,
	updated_at timestamp DEFAULT NULL
);

CREATE TABLE deposito (
	id serial,
	usuario_id int NOT NULL,
	donacion_id int NOT NULL,
	fecha timestamp NOT NULL,
	monto int NOT NULL
);

CREATE TABLE gasto (
	id serial,
	usuario_id int NOT NULL,
	fecha timestamp NOT NULL,
	monto int NOT NULL,
	proposito text NOT NULL
);

CREATE TABLE comentario (
	id serial,
	medida_id int NOT NULL,
	usuario_id int NOT NULL,
	descripcion text NOT NULL,
	created_at timestamp DEFAULT NULL,
	updated_at timestamp DEFAULT NULL
);

--
-- Definicion de llaves primarias
--
ALTER TABLE usuario
	ADD PRIMARY KEY (id);

ALTER TABLE rol
	ADD PRIMARY KEY (id);

ALTER TABLE permiso
	ADD PRIMARY KEY (id);

ALTER TABLE catastrofe
	ADD PRIMARY KEY (id);

ALTER TABLE tipo_catastrofe
	ADD PRIMARY KEY (id);

ALTER TABLE comuna
	ADD PRIMARY KEY (id);

ALTER TABLE provincia
	ADD PRIMARY KEY (id);

ALTER TABLE region
	ADD PRIMARY KEY (id);

ALTER TABLE locacion
	ADD PRIMARY KEY (id);

ALTER TABLE evento_a_beneficio
	ADD PRIMARY KEY (id);

ALTER TABLE registro_actividad
	ADD PRIMARY KEY (id);

ALTER TABLE tipo_actividad
	ADD PRIMARY KEY (id);

ALTER TABLE voluntariado
	ADD PRIMARY KEY (id);

ALTER TABLE actividad_voluntariado
	ADD PRIMARY KEY (id);

ALTER TABLE voluntario
	ADD PRIMARY KEY (id);

ALTER TABLE rnv
	ADD PRIMARY KEY (id);

ALTER TABLE centro_acopio
	ADD PRIMARY KEY (id);

ALTER TABLE estado
	ADD PRIMARY KEY (id);

ALTER TABLE bien
	ADD PRIMARY KEY (id);

ALTER TABLE tipo_medida
	ADD PRIMARY KEY (id);

ALTER TABLE donacion
	ADD PRIMARY KEY (id);

ALTER TABLE deposito
	ADD PRIMARY KEY (id);

ALTER TABLE gasto
	ADD PRIMARY KEY (id);

ALTER TABLE comentario
	ADD PRIMARY KEY (id);

ALTER TABLE permiso_rol ADD
	CONSTRAINT permiso_rol_pkey PRIMARY KEY (permiso_id, rol_id);

--
-- Definicion de llaves foraneas
--


ALTER TABLE usuario
	ADD FOREIGN KEY (rol_id) REFERENCES rol(id);

ALTER TABLE permiso_rol
	ADD FOREIGN KEY (permiso_id) REFERENCES permiso(id),
	ADD FOREIGN KEY (rol_id) REFERENCES rol(id);

ALTER TABLE catastrofe
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id),
	ADD FOREIGN KEY (tipo_catastrofe_id) REFERENCES tipo_catastrofe(id),
	ADD FOREIGN KEY (locacion_id) REFERENCES locacion(id);

ALTER TABLE comuna
	ADD FOREIGN KEY (provincia_id) REFERENCES provincia(id);

ALTER TABLE provincia
	ADD FOREIGN KEY (region_id) REFERENCES region(id);

ALTER TABLE locacion
	ADD FOREIGN KEY (comuna_id) REFERENCES comuna(id);

ALTER TABLE evento_a_beneficio
	ADD FOREIGN KEY (locacion_id) REFERENCES locacion(id),
	ADD FOREIGN KEY (medida_id) REFERENCES medida(id),
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id);

ALTER TABLE registro_actividad
	ADD FOREIGN KEY (tipo_actividad_id) REFERENCES tipo_actividad(id),
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id);

ALTER TABLE voluntariado
	ADD FOREIGN KEY (locacion_id) REFERENCES locacion(id),
	ADD FOREIGN KEY (actividad_voluntariado_id) REFERENCES actividad_voluntariado(id),
	ADD FOREIGN KEY (medida_id) REFERENCES medida(id),
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id);

ALTER TABLE voluntario
	ADD FOREIGN KEY (voluntariado_id) REFERENCES voluntariado(id);

ALTER TABLE centro_acopio
	ADD FOREIGN KEY (locacion_id) REFERENCES locacion(id),
	ADD FOREIGN KEY (estado_id) REFERENCES estado(id),
	ADD FOREIGN KEY (medida_id) REFERENCES medida(id),
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id);

ALTER TABLE bien
	ADD FOREIGN KEY (centro_acopio_id) REFERENCES centro_acopio(id),
	ADD FOREIGN KEY (tipo_medida_id) REFERENCES tipo_medida(id);

ALTER TABLE donacion
	ADD FOREIGN KEY (medida_id) REFERENCES medida(id),
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id);

ALTER TABLE deposito
	ADD FOREIGN KEY (donacion_id) REFERENCES donacion(id);

ALTER TABLE gasto
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id);

ALTER TABLE comentario
	ADD FOREIGN KEY (medida_id) REFERENCES medida(id),
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id);

ALTER TABLE voluntario
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id);

ALTER TABLE rnv
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id);

ALTER TABLE bien
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id);

ALTER TABLE deposito
	ADD FOREIGN KEY (usuario_id) REFERENCES usuario(id);

-- Para borrar las tablas
-- DROP SCHEMA public CASCADE;
-- CREATE SCHEMA public;