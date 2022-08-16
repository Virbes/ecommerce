DROP DATABASE IF EXISTS Ecommerce;
CREATE DATABASE IF NOT EXISTS Ecommerce;
USE Ecommerce;

CREATE TABLE IF NOT EXISTS administradores (
  id       INT  NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre   TEXT NOT NULL,
  email    TEXT NOT NULL,
  foto     TEXT NOT NULL,
  password TEXT NOT NULL,
  perfil   TEXT NOT NULL,
  estado   INT  NOT NULL,
  ultimo_login DATETIME NOT NULL,
  sistema TEXT NOT NULL,
  fecha    TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS usuarios (
  id              INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre          TEXT NOT NULL,
  password        TEXT NOT NULL,
  email           TEXT NOT NULL,
  foto            TEXT NOT NULL,
  verificacion    INT NOT NULL,
  emailEncriptado TEXT NOT NULL,
  fecha           TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS categorias (
  id              INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  categoria       TEXT NOT NULL,
  ruta            TEXT NOT NULL,
  estado          INT NOT NULL,
  oferta          INT NOT NULL,
  precioOferta    FLOAT NOT NULL,
  descuentoOferta INT NOT NULL,
  imgOferta       TEXT NOT NULL,
  finOferta       DATETIME NOT NULL,
  fecha           TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS subcategorias (
  id                   INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  subcategoria         TEXT NOT NULL,
  id_categoria         INT NOT NULL,
  ruta                 TEXT NOT NULL,
  estado               INT NOT NULL,
  ofertadoPorCategoria INT NOT NULL,
  oferta               INT NOT NULL,
  precioOferta         FLOAT NOT NULL,
  descuentoOferta      INT NOT NULL,
  imgOferta            TEXT NOT NULL,
  finOferta            DATETIME NOT NULL,
  fecha                TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

  FOREIGN KEY (id_categoria) REFERENCES categorias(id)
);

CREATE TABLE IF NOT EXISTS productos (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_categoria INT NOT NULL,
  id_subcategoria INT NOT NULL,
  codigo INT(11) NOT NULL,
  ruta TEXT NOT NULL,
  estado INT NOT NULL,
  titulo TEXT NOT NULL,
  titular TEXT NOT NULL,
  descripcion TEXT NOT NULL,
  multimedia TEXT NOT NULL,
  detalles TEXT NOT NULL,
  precio FLOAT NOT NULL,
  portada TEXT NOT NULL,
  vistas INT NOT NULL,
  ventas INT NOT NULL,
  vistasGratis INT NOT NULL,
  ventasGratis INT NOT NULL,
  ofertadoPorCategoria INT NOT NULL,
  ofertadoPorSubCategoria INT NOT NULL,
  oferta INT NOT NULL,
  precioOferta FLOAT NOT NULL,
  descuentoOferta INT NOT NULL,
  imgOferta TEXT NOT NULL,
  finOferta datetime NOT NULL,
  peso FLOAT NOT NULL,
  entrega FLOAT NOT NULL,
  stock FLOAT NOT NULL,
  fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,

  FOREIGN KEY (id_categoria) REFERENCES categorias(id),
  FOREIGN KEY (id_subcategoria) REFERENCES subcategorias(id)
);

CREATE TABLE IF NOT EXISTS comentarios (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  id_producto INT NOT NULL,
  calificacion FLOAT NOT NULL,
  comentario TEXT NOT NULL,
  fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 

  FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
  FOREIGN KEY (id_producto) REFERENCES productos(id)
);

CREATE TABLE IF NOT EXISTS compras (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  id_producto INT NOT NULL,
  envio INT NOT NULL,
  metodo TEXT NOT NULL,
  email TEXT NOT NULL,
  direccion TEXT NOT NULL,
  pais TEXT NOT NULL,
  cantidad INT NOT NULL,
  detalle TEXT,
  pago TEXT NOT NULL,
  fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 

  FOREIGN KEY (id_usuario) REFERENCES usuarios(id), 
  FOREIGN KEY (id_producto) REFERENCES productos(id)
);

CREATE TABLE IF NOT EXISTS deseos (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  id_usuario INT NOT NULL,
  id_producto INT NOT NULL,
  fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 

  FOREIGN KEY (id_usuario) REFERENCES usuarios(id), 
  FOREIGN KEY (id_producto) REFERENCES productos(id)
);

/* ********************************************************************************************************* */

CREATE TABLE IF NOT EXISTS banner (
  id     INT  NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ruta   TEXT NOT NULL,
  tipo   TEXT NOT NULL,
  img    TEXT NOT NULL,
  estado INT  NOT NULL,
  fecha  TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS cabeceras (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ruta TEXT NOT NULL,
  titulo TEXT NOT NULL,
  descripcion TEXT NOT NULL,
  palabrasClaves TEXT NOT NULL,
  portada TEXT NOT NULL,
  fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS comercio (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  impuesto FLOAT NOT NULL,
  envioNacional FLOAT NOT NULL,
  envioInternacional FLOAT NOT NULL,
  tasaMinimaNal FLOAT NOT NULL,
  tasaMinimaInt FLOAT NOT NULL,
  pais TEXT NOT NULL,
  modoPaypal TEXT NOT NULL,
  clienteIdPaypal TEXT NOT NULL,
  llaveSecretaPaypal TEXT NOT NULL,
  modoPayu TEXT NOT NULL,
  merchantIdPayu INT NOT NULL,
  accountIdPayu INT NOT NULL,
  apiKeyPayu TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS notificaciones (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nuevosUsuarios INT NOT NULL,
  nuevasVentas INT NOT NULL,
  nuevasVisitas INT NOT NULL,
  nuevosPedidos INT NOT NULL
);

CREATE TABLE IF NOT EXISTS plantilla (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  barraSuperior TEXT NOT NULL,
  textoSuperior TEXT NOT NULL,
  colorFondo TEXT NOT NULL,
  colorTexto TEXT NOT NULL,
  logo TEXT NOT NULL,
  icono TEXT NOT NULL,
  redesSociales TEXT NOT NULL,
  apiFacebook TEXT NOT NULL,
  pixelFacebook TEXT NOT NULL,
  googleAnalytics TEXT NOT NULL,
  fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS slide (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  nombre TEXT NOT NULL,
  imgFondo TEXT NOT NULL,
  tipoSlide TEXT NOT NULL,
  imgProducto TEXT NOT NULL,
  estiloImgProducto TEXT NOT NULL,
  estiloTextoSlide TEXT NOT NULL,
  titulo1 TEXT NOT NULL,
  titulo2 TEXT NOT NULL,
  titulo3 TEXT NOT NULL,
  boton TEXT NOT NULL,
  url TEXT NOT NULL,
  orden INT NOT NULL,
  fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS visitaspaises (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  pais TEXT NOT NULL,
  codigo TEXT NOT NULL,
  cantidad INT NOT NULL,
  fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS visitaspersonas (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  ip TEXT NOT NULL,
  pais TEXT NOT NULL,
  visitas INT NOT NULL,
  fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS pedidos (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    productos TEXT NOT NULL,
    activo INT NOT NULL,
    entregado INT NOT NULL,
    total FLOAT NOT NULL,
    fecha TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);


CREATE TABLE IF NOT EXISTS direcciones(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    id_pedido INT NOT NULL,
    nombre_recibidor TEXT NOT NULL,
    direccion TEXT NOT NULL,
    telefono TEXT NOT NULL,
    referencia TEXT NOT NULL,
    
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id),
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id)
);


## ################################################## ##
## ################ Tables by AdminT ################ ##
## ################################################## ##

CREATE TABLE IF NOT EXISTS clientes(
	id int(11) not null primary key auto_increment,
	nombre text(25) not null,
    email text(25) not null,
    telefono text(10) not null,
    direccion text(50) not null,
    fecha_nacimiento date not null,
    compras int(10) not null,
    ultima_compra DATETIME,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
)engine=innoDB;


CREATE TABLE IF NOT EXISTS ventas(
	id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	codigo INT(11) NOT NULL,
	id_cliente INT(11) NOT NULL,
	id_vendedor INT(11) NOT NULL,
	productos TEXT NOT NULL,
	impuesto FLOAT(11) NOT NULL,
	neto FLOAT(11) NOT NULL,
	total FLOAT(11) NOT NULL,
	metodo_pago TEXT(50) NOT NULL,
	fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, 
    
    FOREIGN KEY(id_cliente) REFERENCES clientes(id),
    FOREIGN KEY(id_vendedor) REFERENCES administradores(id)
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS contactanos (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombre TEXT NOT NULL,
    email TEXT NOT NULL,
    telefono TEXT NOT NULL,
    mensaje TEXT NOT NULL,
    fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
