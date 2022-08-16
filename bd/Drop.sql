DROP TABLE IF EXISTS 
notificaciones, plantilla, slide, visitaspaises, visitaspersonas, comercio,
usuarios, comentarios, deseos, administradores, banner, productos, cabeceras, subcategorias, categorias, compras;

DROP TABLE IF EXISTS contactanos;

show tables;

select * from productos;

select * from usuarios;

DELETE FROM usuarios WHERE id = 3;
DELETE FROM Pedidos WHERE id = 2;


DELETE FROM SubCategorias;
DELETE FROM Categorias;
DELETE FROM Productos;
DELETE FROM Productos WHERE id = 3;