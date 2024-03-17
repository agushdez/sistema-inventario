CREATE
DATABASE productos;

CREATE TABLE productos
(
    id             INT AUTO_INCREMENT PRIMARY KEY,
    nombre         VARCHAR(255)   NOT NULL,
    codigo         VARCHAR(10)    NOT NULL,
    descripcion    TEXT           NOT NULL,
    precio         DECIMAL(10, 2) NOT NULL,
    cantidad_stock INT            NOT NULL,
    id_ubicacion   INT
);

CREATE TABLE ubicaciones
(
    id      INT AUTO_INCREMENT PRIMARY KEY,
    sector  VARCHAR(45) NULL,
    seccion VARCHAR(45) NULL
);

CREATE TABLE movimientos
(
    id              INT AUTO_INCREMENT PRIMARY KEY,
    fecha           DATE NULL,
    tipo_movimiento VARCHAR(45) NULL,
    id_producto     INT,
    id_ubicacion    INT
);


USE
sistemainventario;

INSERT INTO productos (nombre, codigo, descripcion, precio, cantidad_stock, id_ubicacion)
VALUES ('Producto 1', 'ABC123', 'Descripcion del Producto 1', 10.99, 15, 1),
       ('Producto 2', 'DEF456', 'Descripcion del Producto 2', 20.50, 8, 2),
       ('Producto 3', 'GHI789', 'Descripcion del Producto 3', 5.75, 20, 3),
       ('Producto 4', 'JKL012', 'Descripcion del Producto 4', 15.25, 12, 4),
       ('Producto 5', 'MNO345', 'Descripcion del Producto 5', 8.99, 5, 5),
       ('Producto 6', 'PQR678', 'Descripcion del Producto 6', 12.75, 25, 6),
       ('Producto 7', 'STU901', 'Descripcion del Producto 7', 18.50, 3, 7),
       ('Producto 8', 'VWX234', 'Descripcion del Producto 8', 6.99, 18, 8),
       ('Producto 9', 'YZA567', 'Descripcion del Producto 9', 14.50, 10, 9),
       ('Producto 10', 'BCD890', 'Descripcion del Producto 10', 9.75, 7, 10),
       ('Producto 11', 'EFG123', 'Descripcion del Producto 11', 17.99, 14, 1),
       ('Producto 12', 'HIJ456', 'Descripcion del Producto 12', 22.50, 2, 2),
       ('Producto 13', 'KLM789', 'Descripcion del Producto 13', 5.25, 30, 3),
       ('Producto 14', 'NOP012', 'Descripcion del Producto 14', 13.75, 9, 4),
       ('Producto 15', 'PQR345', 'Descripcion del Producto 15', 9.99, 22, 5),
       ('Producto 16', 'STU678', 'Descripcion del Producto 16', 11.50, 11, 6),
       ('Producto 17', 'VWX901', 'Descripcion del Producto 17', 7.99, 17, 7),
       ('Producto 18', 'YZA234', 'Descripcion del Producto 18', 16.50, 6, 8),
       ('Producto 19', 'BCD567', 'Descripcion del Producto 19', 8.75, 28, 9),
       ('Producto 20', 'EFG890', 'Descripcion del Producto 20', 10.99, 4, 10),
       ('Producto 21', 'HIJ123', 'Descripcion del Producto 21', 19.50, 13, 1),
       ('Producto 22', 'KLM456', 'Descripcion del Producto 22', 4.75, 19, 2),
       ('Producto 23', 'NOP789', 'Descripcion del Producto 23', 14.25, 16, 3),
       ('Producto 24', 'PQR012', 'Descripcion del Producto 24', 7.99, 1, 4),
       ('Producto 25', 'STU345', 'Descripcion del Producto 25', 12.50, 23, 5),
       ('Producto 26', 'VWX678', 'Descripcion del Producto 26', 6.99, 5, 6),
       ('Producto 27', 'YZA901', 'Descripcion del Producto 27', 15.50, 9, 7),
       ('Producto 28', 'BCD234', 'Descripcion del Producto 28', 9.75, 11, 8),
       ('Producto 29', 'EFG567', 'Descripcion del Producto 29', 11.99, 14, 9),
       ('Producto 30', 'HIJ890', 'Descripcion del Producto 30', 20.50, 7, 10),
       ('Producto 31', 'KLM123', 'Descripcion del Producto 31', 5.25, 18, 1),
       ('Producto 32', 'NOP456', 'Descripcion del Producto 32', 14.75, 3, 2),
       ('Producto 33', 'PQR789', 'Descripcion del Producto 33', 8.99, 12, 3),
       ('Producto 34', 'STU012', 'Descripcion del Producto 34', 13.50, 6, 4),
       ('Producto 35', 'VWX345', 'Descripcion del Producto 35', 7.99, 25, 5),
       ('Producto 36', 'YZA678', 'Descripcion del Producto 36', 16.50, 10, 6),
       ('Producto 37', 'BCD901', 'Descripcion del Producto 37', 9.75, 5, 7),
       ('Producto 38', 'EFG234', 'Descripcion del Producto 38', 11.99, 17, 8),
       ('Producto 39', 'HIJ567', 'Descripcion del Producto 39', 20.50, 8, 9),
       ('Producto 40', 'KLM890', 'Descripcion del Producto 40', 5.25, 14, 10),
       ('Producto 41', 'NOP123', 'Descripcion del Producto 41', 14.75, 2, 1),
       ('Producto 42', 'PQR456', 'Descripcion del Producto 42', 8.99, 20, 2),
       ('Producto 43', 'STU789', 'Descripcion del Producto 43', 13.50, 11, 3),
       ('Producto 44', 'VWX012', 'Descripcion del Producto 44', 7.99, 9, 4),
       ('Producto 45', 'YZA345', 'Descripcion del Producto 45', 16.50, 15, 5),
       ('Producto 46', 'BCD678', 'Descripcion del Producto 46', 9.75, 4, 6),
       ('Producto 47', 'EFG901', 'Descripcion del Producto 47', 11.99, 7, 7),
       ('Producto 48', 'HIJ234', 'Descripcion del Producto 48', 20.50, 19, 8),
       ('Producto 49', 'KLM567', 'Descripcion del Producto 49', 5.25, 6, 9),
       ('Producto 50', 'NOP890', 'Descripcion del Producto 50', 14.75, 12, 10);

INSERT INTO ubicaciones (sector, seccion)
VALUES ('Almacen A', 'Seccion 1'),
       ('Almacen A', 'Seccion 2'),
       ('Almacen B', 'Seccion 1'),
       ('Almacen B', 'Seccion 2'),
       ('Almacen C', 'Seccion 1'),
       ('Almacen C', 'Seccion 2'),
       ('Almacen D', 'Seccion 1'),
       ('Almacen D', 'Seccion 2'),
       ('Almacen E', 'Seccion 1'),
       ('Almacen E', 'Seccion 2');

