USE
demo_labotario_11;
create table producto
(
    id_producto   int primary key auto_increment,
    codigo        varchar(20) not null,
    descripcion   tinytext,
    inventariable tinyint(4),
    stock         int,
    activo        tinyint(4)
);

desc producto;

INSERT INTO producto (codigo, descripcion, inventariable, stock, activo)
VALUES ('P0001', 'Cemento 25kg', 1, 120, 1),
       ('P0002', 'Clavo 3mm 1kg', 1, 5000, 1),
       ('P0003', 'Pintura blanca 1L', 1, 200, 1),
       ('P0004', 'Brocha 2 pulg', 1, 300, 1),
       ('P0005', 'Taladro electrico', 1, 25, 1),
       ('P0006', 'Tornillo M6x20', 1, 8000, 1),
       ('P0007', 'Ladrillo rojo', 1, 10000, 1),
       ('P0008', 'Masa epoxi 200g', 1, 150, 1),
       ('P0009', 'Guantes nitrilo par', 1, 400, 1),
       ('P0010', 'Alcohol 70% 1L', 1, 250, 1),
       ('P0011', 'Servicio corte', 0, 0, 1);

select *
from producto;

CREATE TABLE transacciones (
    id_transaccion INT AUTO_INCREMENT PRIMARY KEY,
    id_producto INT NOT NULL,
    nombre_producto VARCHAR(255) NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10, 2) NOT NULL,
    subtotal DECIMAL(10, 2) NOT NULL,
    igv DECIMAL(10, 2) NOT NULL,
    total DECIMAL(10, 2) NOT NULL,
    fecha_transaccion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_producto) REFERENCES producto(id_producto)
);