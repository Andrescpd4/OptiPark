CREATE DATABASE optipark;
USE optipark;

-- Tabla Usuario
CREATE TABLE Usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    email VARCHAR(100),
    telefono VARCHAR(20),
    contraseña VARCHAR(255),
    fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabla Vehiculo
CREATE TABLE Vehiculo (
    id_vehiculo INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    placa VARCHAR(10) UNIQUE NOT NULL,
    tipo VARCHAR(20)
);

-- Tabla Ubicacion
CREATE TABLE Ubicacion (
    id_ubicacion INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    direccion TEXT,
    capacidad INT
);

-- Tabla Servicio
CREATE TABLE Servicio (
    id_servicio INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    descripcion TEXT
);

-- Tabla Dominio
CREATE TABLE Dominio (
    id_dominio INT AUTO_INCREMENT PRIMARY KEY,
    numero_parqueadero VARCHAR(10),
    id_ubicacion INT,
    estado ENUM('libre', 'ocupado') DEFAULT 'libre'
);

-- Tabla Reserva/factura
CREATE TABLE Reserva (
    id_reserva INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    id_vehiculo INT,
    id_ubicacion INT,
    id_servicio INT,
    id_dominio INT,
    fecha_inicio DATETIME,
    fecha_fin DATETIME,
    fecha_emision DATETIME DEFAULT CURRENT_TIMESTAMP,
    total DECIMAL(10,2),
    estado ENUM('activa', 'completada', 'cancelada') DEFAULT 'activa'
);

-- Tabla Precios
CREATE TABLE Precios (
    id_precio INT AUTO_INCREMENT PRIMARY KEY,
    id_servicio INT,
    tipo_vehiculo VARCHAR(20),
    tipo_espacio VARCHAR(20),
    duracion INT,
    precio DECIMAL(10,2)
);

-- Tabla Pago
CREATE TABLE Pago (
    id_pago INT AUTO_INCREMENT PRIMARY KEY,
    id_reserva INT,
    metodo_pago VARCHAR(50),
    monto DECIMAL(10,2),
    fecha_pago DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabla Perfil
CREATE TABLE Perfil (
    id_perfil INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    rol ENUM('admin', 'usuario', 'empleado') DEFAULT 'usuario',
    descripcion TEXT
);

-- Tabla Pagina
CREATE TABLE Pagina (
    id_pagina INT AUTO_INCREMENT PRIMARY KEY,
    nombre_pagina VARCHAR(100),
    descripcion_pagina TEXT
);

-- Tabla PXP
CREATE TABLE PXP (
    id_perfil INT NOT NULL,
    id_pagina INT NOT NULL,
    PRIMARY KEY (id_perfil, id_pagina)
);

-- Tabla Auditoria
CREATE TABLE Auditoria (
    id_auditoria INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT,
    tipo_evento VARCHAR(50),
    descripcion TEXT,
    fecha DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Claves foráneas separadas (corregidas)
ALTER TABLE Vehiculo ADD FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario) ON DELETE CASCADE;
ALTER TABLE Reserva ADD FOREIGN KEY (id_usuario) REFERENCES Usuario(id_usuario) ON DELETE CASCADE;
ALTER TABLE Reserva ADD FOREIGN KEY (id_vehiculo) REFERENCES Vehiculo(id_vehiculo) ON DELETE CASCADE;
ALTER TABLE Reserva ADD FOREIGN KEY (id_ubicacion) REFERENCES Ubicacion(id_ubicacion) ON DELETE CASCADE;
ALTER TABLE Reserva ADD FOREIGN KEY (id_servicio) REFERENCES Servicio(id_servicio) ON DELETE CASCADE;
ALTER TABLE Reserva ADD FOREIGN KEY (id_dominio) REFERENCES Dominio(id_dominio) ON DELETE CASCADE;
ALTER TABLE Precios ADD FOREIGN KEY (id_servicio) REFERENCES Servicio(id_servicio) ON DELETE CASCADE;
ALTER TABLE Dominio ADD FOREIGN KEY (id_ubicacion) REFERENCES Ubicacion(id_ubicacion) ON DELETE CASCADE;
ALTER TABLE Pago ADD FOREIGN KEY (id_reserva) REFERENCES Reserva(id_reserva) ON DELETE CASCADE;
ALTER TABLE PXP ADD FOREIGN KEY (id_perfil) REFERENCES Perfil(id_perfil) ON DELETE CASCADE;
ALTER TABLE PXP ADD FOREIGN KEY (id_pagina) REFERENCES Pagina(id_pagina) ON DELETE CASCADE;

-- Insertar un ejemplo de ubicación
INSERT INTO Ubicacion (nombre, direccion, capacidad)
VALUES ('Parqueadero Ejemplo', 'Chía - Cundinamarca', 100);