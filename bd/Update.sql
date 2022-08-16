SET SQL_SAFE_UPDATES = 0;

UPDATE Cabeceras set palabrasClaves = 'Ag' WHERE id = 3;



UPDATE usuarios set email = 'tmario291@gmail.com' WHERE id = 1;
UPDATE usuarios set foto = '' WHERE id = 1;
UPDATE usuarios set verificacion = 1 WHERE id = 1;
DELETE FROM usuarios where id = 2;


UPDATE productos SET stock = 1 WHERE id = 9;
UPDATE productos set precio = 999 WHERE id = 1;




SELECT p.id, u.foto, u.nombre, p.productos, p.activo, p.entregado FROM usuarios u, pedidos p WHERE u.id = p.id_usuario;
SELECT * FROM pedidos;

UPDATE pedidos SET activo = 0, entregado = 0 WHERE id = 1;




UPDATE plantilla SET icono = 'vistas/img/plantilla/icono.ico' WHERE id = 1;
select * from plantilla;