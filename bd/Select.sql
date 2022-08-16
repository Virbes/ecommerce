SELECT * FROM Plantilla;
SELECT * FROM Slide;
SELECT * FROM Banner;
SELECT * FROM Administradores;
SELECT * FROM Usuarios;
SELECT * FROM Cabeceras ORDER BY id DESC;
SELECT * FROM Categorias;
SELECT * FROM SubCategorias;
SELECT * FROM Productos;
SELECT * FROM Compras;
SELECT * FROM Comercio;
SELECT * FROM Usuarios;
SELECT * FROM Notificaciones;
SELECT * FROM Comentarios;
SELECT * FROM Ventas;
SELECT * FROM Clientes;
SELECT * FROM Plantilla;
SELECT * FROM Pedidos;
SELECT * FROM Direcciones;
SELECT * FROM Contactanos;


show tables;


SELECT u.foto, u.nombre, p.productos, p.activo, p.entregado FROM usuarios u, pedidos p;
SELECT p.id, u.foto, u.nombre, p.productos, p.activo, p.entregado, p.total FROM usuarios u, pedidos p WHERE u.id = p.id_usuario AND entregado = 0;


delete from categorias where id = 7;


SELECT id FROM productos ORDER BY id DESC LIMIT 1;

SELECT * FROM pedidos WHERE id_usuario = 1;
