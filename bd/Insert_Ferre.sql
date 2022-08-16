INSERT INTO administradores (nombre, email, foto, password, perfil, estado, ultimo_login, sistema, fecha) VALUES
('Virbes', 'virbes@admin.com', 'vistas/img/perfiles/722.jpg', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'administrador', 1, '', '', '2021-11-21 09:19:16'), 
('Mario', 'mario@admin.com',	'vistas/img/perfiles/723.jpg', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'administrador', 1, '', '', '2021-11-21 09:18:49'),
('Migue', 'migue@admin.com',	'vistas/img/perfiles/734.jpg', '$2a$07$asxx54ahjppf45sd87a5aunxs9bkpyGmGE/.vekdjFg83yRec789S', 'administrador', 1, '', '', '2021-11-21 09:18:49');

INSERT INTO categorias (categoria, ruta, estado, oferta, precioOferta, descuentoOferta, imgOferta, finOferta, fecha) VALUES
('HERRAMIENTAS MANUALES', 'herramientas-manuales', 1, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 17:04:41'),
('MáQUINAS ELéCTRICAS', 'maquinas-electricas', 1, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 17:05:28'),
('COMPRESORES', 'compresores', 1, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 18:35:03'),
('MEDICIóN', 'medicion', 1, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 17:07:03'),
('COMBUSTIóN', 'combustion', 1, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 17:09:52'),
('PINTURA', 'pintura', 1, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-12-02 15:26:14');

INSERT INTO subcategorias (subcategoria, id_categoria, ruta, estado, ofertadoPorCategoria, oferta, precioOferta, descuentoOferta, imgOferta, finOferta, fecha) VALUES
('Construcción', 1, 'construccion', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 19:51:26'),
('Mecánica', 1, 'mecanica', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:03:01'),
('Corte', 1, 'corte', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:03:21'),
('Pinzas', 1, 'pinzas', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:04:00'),
('Carga', 1, 'carga', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:04:15'),
('Máquinas Portatiles', 2, 'maquinas-portatiles', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:05:16'),
('Máquinas inalambricas', 2, 'maquinas-inalambricas', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:05:55'),
('Máquinas Estacionarias', 2, 'maquinas-estacionarias', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:06:32'),
('Máquinas Para Soldar', 2, 'maquinas-para-soldar', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:06:51'),
('Compresores de aire', 3, 'compresores-de-aire', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:07:32'),
('Engrapadoras y Clavadoras', 3, 'engrapadoras-y-clavadoras', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:07:58'),
('Pistolas de Aire', 3, 'pistolas-de-aire', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:08:16'),
('Otros', 3, 'otros', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:08:46'),
('Flexómetros', 4, 'flexometros', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:10:04'),
('Niveles', 4, 'niveles', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:10:25'),
('Básculas', 4, 'basculas', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:10:41'),
('Cintas Largas', 4, 'cintas-largas', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:11:03'),
('Multímetros', 4, 'multimetros', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:11:38'),
('Probadores de Votaje', 4, 'probadores-de-votaje', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:12:57'),
('Tiralineas', 4, 'tiralineas', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:13:12'),
('Vernier', 4, 'vernier', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:13:42'),
('Odómetros', 4, 'odometros', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:13:58'),
('Escuadras y Reglas', 4, 'escuadras-y-reglas', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:14:15'),
('Medidores de Temperatura', 4, 'medidores-de-temperatura', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-23 20:14:49'),
('Desbrozadoras', 5, 'desbrozadoras', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-25 16:22:31'),
('Desmalezadoras', 5, 'desmalezadoras', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-25 16:22:57'),
('Podadoras', 5, 'podadoras', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-25 16:23:12'),
('Hidrolavadoras', 5, 'hidrolavadoras', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-25 16:23:32'),
('Generadores', 5, 'generadores', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-25 16:23:48'),
('Motobombas', 5, 'motobombas', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-25 16:24:03'),
('Sopladoras', 5, 'sopladoras', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-25 16:24:22'),
('Revolvedora de Cemento', 5, 'revolvedora-de-cemento', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-25 16:24:47'),
('Cortasetos', 5, 'cortasetos', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-11-25 16:25:18'),
('Aplicadores de pintura', 6, 'aplicadores-de-pintura', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-12-02 15:27:26'),
('Pinturas en aerosol', 6, 'pinturas-en-aerosol', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-12-02 15:27:50'),
('Pistolas para pintar', 6, 'pistolas-para-pintar', 1, 0, 0, 0, 0, '', '0000-00-00 00:00:00', '2021-12-02 15:30:24');

INSERT INTO productos (id_categoria, id_subcategoria, codigo, ruta, estado, titulo, titular, descripcion, multimedia, marcaProducto, precio, portada, vistas, ventas, vistasGratis, ventasGratis, ofertadoPorCategoria, ofertadoPorSubCategoria, oferta, precioOferta, descuentoOferta, imgOferta, finOferta, entrega, stock, fecha) VALUES
(1, 1, 10233, 'carretilla', 1, 'Carretilla', 'Carretilla resistente para cualquier obra...', 'Carretilla resistente para cualquier obra', '[{\"foto\":\"vistas/img/multimedia/carretilla/1.png\"},{\"foto\":\"vistas/img/multimedia/carretilla/3.png\"},{\"foto\":\"vistas/img/multimedia/carretilla/4.png\"},{\"foto\":\"vistas/img/multimedia/carretilla/5.png\"}]', 'Trupper', 999, 'vistas/img/productos/carretilla.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 500, '2021-12-08 15:42:00'),
(1, 1, 17161, 'palas', 1, 'Palas', 'Pala resistente para cualquier obra...', 'Pala resistente para cualquier obra', '[{\"foto\":\"vistas/img/multimedia/palas/1.png\"}]', 'Trupper', 244, 'vistas/img/productos/palas.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 500, '2021-12-08 15:43:33'),
(1, 1, 17964, 'engrapadoras-tipo-pistola', 1, 'Engrapadoras tipo pistola', 'Engrapadora resistente y de buena calidad...', 'Engrapadora resistente y de buena calidad', '[{\"foto\":\"vistas/img/multimedia/engrapadoras-tipo-pistola/1.png\"},{\"foto\":\"vistas/img/multimedia/engrapadoras-tipo-pistola/3.png\"},{\"foto\":\"vistas/img/multimedia/engrapadoras-tipo-pistola/2.png\"}]', 'Trupper', 950, 'vistas/img/productos/engrapadoras-tipo-pistola.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 500, '2021-12-08 15:45:48'),
(1, 1, 16536, 'marro', 1, 'Marro', 'Marro muy resistente y de muy buena calidad ideal para todo tipo de obra...', 'Marro muy resistente y de muy buena calidad ideal para todo tipo de obra', '[{\"foto\":\"vistas/img/multimedia/marro/1.png\"}]', 'Trupper', 215, 'vistas/img/productos/marro.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 500, '2021-12-08 15:48:25'),
(1, 5, 44477, 'diablos', 1, 'Diablos', 'Diablo resistente de metal...', 'Diablo resistente de metal', '[{\"foto\":\"vistas/img/multimedia/diablos/1.png\"},{\"foto\":\"vistas/img/multimedia/diablos/2.png\"}]', 'Trupper', 817, 'vistas/img/productos/diablos.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 500, '2021-12-08 15:50:18'),
(1, 5, 15083, 'patin-transpaleta', 1, 'Patin Transpaleta', 'Patin Transpaleta...', 'Patin Transpaleta', '[{\"foto\":\"vistas/img/multimedia/patin-transpaleta/2.png\"},{\"foto\":\"vistas/img/multimedia/patin-transpaleta/1.png\"},{\"foto\":\"vistas/img/multimedia/patin-transpaleta/3.png\"}]', 'Trupper', 8350, 'vistas/img/productos/patin-transpaleta.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 500, '2021-12-08 15:54:18'),
(1, 5, 16824, 'polipasto', 1, 'Polipasto', 'Polipasto...', 'Polipasto', '[{\"foto\":\"vistas/img/multimedia/polipasto/2.png\"},{\"foto\":\"vistas/img/multimedia/polipasto/1.png\"},{\"foto\":\"vistas/img/multimedia/polipasto/3.png\"}]', 'Trupper', 5665, 'vistas/img/productos/polipasto.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 500, '2021-12-08 15:58:11'),
(1, 3, 12830, 'corta-pernos', 1, 'Corta Pernos', 'Cortaperno...', 'Cortaperno', '[{\"foto\":\"vistas/img/multimedia/corta-pernos/1.png\"},{\"foto\":\"vistas/img/multimedia/corta-pernos/4.png\"},{\"foto\":\"vistas/img/multimedia/corta-pernos/3.png\"},{\"foto\":\"vistas/img/multimedia/corta-pernos/5.png\"},{\"foto\":\"vistas/img/multimedia/corta-pernos/2.png\"}]', 'Trupper', 485, 'vistas/img/productos/corta-pernos.png', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '0000-00-00 00:00:00', 0, 500, '2021-12-08 16:07:22');

INSERT INTO cabeceras (ruta, titulo, descripcion, palabrasClaves, portada, fecha) VALUES
('inicio', 'Ferretería AGNA', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam accusantium enim esse eos officiis sit officia', 'Lorem ipsum, dolor sit amet, consectetur, adipisicing, elit, Quisquam, accusantium, enim, esse', 'vistas/img/cabeceras/default.jpg', '2021-11-27 18:33:08'),
('herramientas-manuales', 'Herramientas Manuales', 'Herramientas Manuales', 'Manuela', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 23:04:41'),
('maquinas-electricas', 'Máquinas Eléctricas', 'Herramientas - Máquinas Eléctricas', 'Machine', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 23:05:28'),
('compresores', 'COMPRESORES', 'Compresores', 'Comp', 'vistas/img/cabeceras/compresores.jpg', '2021-11-24 01:27:00'),
('medicion', 'Medición', 'Herramientas de Medición', 'Length', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 23:07:03'),
('combustion', 'Combustión', 'Herramientas de Combustión', 'Combustion', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 23:09:52'),
('construccion', 'Construcción', 'Contruccion', 'Const', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 19:51:26'),
('mecanica', 'Mecánica', 'Mecanica', 'Mechanic', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:03:01'),
('corte', 'Corte', 'Corte', 'Cut', 'vistas/img/cabeceras/corte.jpg', '2021-11-23 20:03:21'),
('pinzas', 'Pinzas', 'Pizas', 'Pinzas', 'vistas/img/cabeceras/pinzas.jpg', '2021-11-23 20:04:00'),
('carga', 'Carga', 'Carga', 'Carga', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:04:15'),
('maquinas-portatiles', 'Máquinas Portatiles', 'Máquinas Portátiles', 'Machine', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:05:16'),
('maquinas-inalambricas', 'Máquinas inalambricas', 'Inalámbricas', 'inalambricas', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:05:55'),
('maquinas-estacionarias', 'Máquinas Estacionarias', 'Máquinas Estacionarias', 'MAchine', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:06:32'),
('maquinas-para-soldar', 'Máquinas Para Soldar', 'Maquinas para soldar', 'Soldadura', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:06:51'),
('compresores-de-aire', 'Compresores de aire', 'Compresores de Aire', 'Compress', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:07:32'),
('engrapadoras-y-clavadoras', 'Engrapadoras y Clavadoras', 'Engrapadoras y Clavadoras', 'Engrapadoras', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:07:58'),
('pistolas-de-aire', 'Pistolas de Aire', 'Pistolas de Aire', 'Pistolas', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:08:16'),
('otros', 'Otros', 'Otras herramientas Neumáticas', 'Other', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:08:46'),
('flexometros', 'Flexómetros', 'Flexómetro', 'Flex', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:10:04'),
('niveles', 'Niveles', 'Niveles', 'Levels', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:10:25'),
('basculas', 'Básculas', 'Básculas', 'Basculas', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:10:41'),
('cintas-largas', 'Cintas Largas', 'Cintas Largas', 'Cintas', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:11:03'),
('multimetros', 'Multímetros', 'Multímetros Digitales', 'Multimetro', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:11:38'),
('probadores-de-votaje', 'Probadores de Votaje', 'Probadores de Voltaje', 'Probadores', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:12:57'),
('tiralineas', 'Tiralineas', 'Tiralineas', 'Tiralineas', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:13:12'),
('vernier', 'Vernier', 'Vernier', 'Vernier', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:13:42'),
('odometros', 'Odómetros', 'Odómetros', 'Odometros', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:13:58'),
('escuadras-y-reglas', 'Escuadras y Reglas', 'Escuadras y Reglas', 'Escuadras', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:14:15'),
('medidores-de-temperatura', 'Medidores de Temperatura', 'Medidores de Temperatura', 'Medidores', 'vistas/img/cabeceras/default/default.jpg', '2021-11-23 20:14:49'),
('desbrozadoras', 'Desbrozadoras', 'Herramientas de combustión Desbrozadoras', 'Desbrozadoras', 'vistas/img/cabeceras/default/default.jpg', '2021-11-25 16:22:31'),
('desmalezadoras', 'Desmalezadoras', 'Desmalezadoras', 'Desmalezadoras', 'vistas/img/cabeceras/default/default.jpg', '2021-11-25 16:22:57'),
('podadoras', 'Podadoras', 'Podadoras', 'Podadoras', 'vistas/img/cabeceras/default/default.jpg', '2021-11-25 16:23:12'),
('hidrolavadoras', 'Hidrolavadoras', 'Hidrolavadoras', 'Hidrolavadoras', 'vistas/img/cabeceras/default/default.jpg', '2021-11-25 16:23:32'),
('generadores', 'Generadores', 'Generadores', 'Generadores', 'vistas/img/cabeceras/default/default.jpg', '2021-11-25 16:23:48'),
('motobombas', 'Motobombas', 'Motobombas', 'Motobombas', 'vistas/img/cabeceras/default/default.jpg', '2021-11-25 16:24:03'),
('sopladoras', 'Sopladoras', 'Sopladoras', 'Sopladoras', 'vistas/img/cabeceras/default/default.jpg', '2021-11-25 16:24:22'),
('revolvedora-de-cemento', 'Revolvedora de Cemento', 'Revolvedora de Cemento', 'Revolvedora de Cemento', 'vistas/img/cabeceras/default/default.jpg', '2021-11-25 16:24:47'),
('cortasetos', 'Cortasetos', 'Cortasetos', 'Cortasetos', 'vistas/img/cabeceras/default/default.jpg', '2021-11-25 16:25:18'),
('pintura', 'Pintura', 'Pintura en General', 'Ferre', 'vistas/img/cabeceras/default/default.jpg', '2021-12-02 15:26:14'),
('aplicadores-de-pintura', 'Aplicadores de pintura', 'Aplicacores de pintura', 'aplicadores', 'vistas/img/cabeceras/default/default.jpg', '2021-12-02 15:27:26'),
('pinturas-en-aerosol', 'Pinturas en aerosol', 'Pinturas en aerosol', 'Pinturas', 'vistas/img/cabeceras/default/default.jpg', '2021-12-02 15:27:50'),
('pistolas-para-pintar', 'Pistolas para pintar', 'Pistolas para pintar', 'Pintura', 'vistas/img/cabeceras/default/default.jpg', '2021-12-02 15:30:24'),

('carretilla', 'Carretilla', 'Carretilla resistente para cualquier tipo de obra', 'carretilla', 'vistas/img/cabeceras/default/default.jpg', '2021-12-08 15:39:41'),
('carretilla', 'Carretilla', 'Carretilla resistente para cualquier obra', 'carretilla', 'vistas/img/cabeceras/default/default.jpg', '2021-12-08 15:41:23'),
('palas', 'Palas', 'Pala resistente para cualquier obra', 'Pala', 'vistas/img/cabeceras/default/default.jpg', '2021-12-08 15:43:33'),
('engrapadoras-tipo-pistola', 'Engrapadoras tipo pistola', 'Engrapadora resistente y de buena calidad', 'grapas', 'vistas/img/cabeceras/default/default.jpg', '2021-12-08 15:45:48'),
('marro', 'Marro', 'Marro muy resistente y de muy buena calidad ideal para todo tipo de obra', 'marro', 'vistas/img/cabeceras/default/default.jpg', '2021-12-08 15:48:25'),
('diablos', 'Diablos', 'Diablo resistente de metal', 'diablo', 'vistas/img/cabeceras/default/default.jpg', '2021-12-08 15:50:18'),
('malacates', 'Malacates', 'Malacate plateado resistente', 'malacate', 'vistas/img/cabeceras/default/default.jpg', '2021-12-08 15:51:47'),
('patin-transpaleta', 'Patin Transpaleta', 'Patin Transpaleta', 'patin', 'vistas/img/cabeceras/default/default.jpg', '2021-12-08 15:54:18'),
('polipasto', 'Polipasto', 'Polipasto', 'pp', 'vistas/img/cabeceras/default/default.jpg', '2021-12-08 15:58:11'),
('cortador-de-tubo', 'Cortador de tubo', 'Cortador de tupo plastico', 'cut', 'vistas/img/cabeceras/default/default.jpg', '2021-12-08 16:05:57'),
('corta-pernos', 'Corta Pernos', 'Cortaperno', 'corta', 'vistas/img/cabeceras/default/default.jpg', '2021-12-08 16:07:22');



INSERT INTO notificaciones (nuevosUsuarios, nuevasVentas, nuevasVisitas) VALUES
(0, 0, 0);

INSERT INTO plantilla (barraSuperior, textoSuperior, colorFondo, colorTexto, logo, icono, redesSociales, apiFacebook, pixelFacebook, googleAnalytics, fecha) VALUES
-- ('#262626', '#ffffff', '#FF6600', '#ffffff', 'vistas/img/plantilla/logo.png', 'vistas/img/plantilla/icono.png', '[{\r\n		\"red\": \"fa-facebook\",\r\n		\"estilo\": \"facebookBlanco\",\r\n		\"url\": \"http://facebook.com/\"\r\n	}, {\r\n		\"red\": \"fa-whatsapp\",\r\n		\"estilo\": \"whatsappBlanco\",\r\n		\"url\": \"https://api.whatsapp.com/send?phone=529631611007\"\r\n	}\r\n\r\n]', '\r\n      		<script>   window.fbAsyncInit = function() {     FB.init({       appId      : \'131737410786111\',       cookie     : true,       xfbml      : true,       version    : \'v2.10\'     });            FB.AppEvents.logPageView();             };    (function(d, s, id){      var js, fjs = d.getElementsByTagName(s)[0];      if (d.getElementById(id)) {return;}      js = d.createElement(s); js.id = id;      js.src = \"https://connect.facebook.net/en_US/sdk.js\";      fjs.parentNode.insertBefore(js, fjs);    }(document, \'script\', \'facebook-jssdk\'));  </script>\r\n      		', '\r\n  			<!-- Facebook Pixel Code --> 	<script> 	  !function(f,b,e,v,n,t,s) 	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 	  n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\'; 	  n.queue=[];t=b.createElement(e);t.async=!0; 	  t.src=v;s=b.getElementsByTagName(e)[0]; 	  s.parentNode.insertBefore(t,s)}(window, document,\'script\', 	  \'https://connect.facebook.net/en_US/fbevents.js\'); 	  fbq(\'init\', \'131737410786111\'); 	  fbq(\'track\', \'PageView\'); 	</script> 	<noscript><img height=\"1\" width=\"1\" style=\"display:none\" 	  src=\"https://www.facebook.com/tr?id=149877372404434&ev=PageView&noscript=1\" 	/></noscript> <!-- End Facebook Pixel Code -->    \r\n  			', '  \r\n  				<!-- Global site tag (gtag.js) - Google Analytics --> 	<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-999999-1\"></script> 	<script> 	  window.dataLayer = window.dataLayer || []; 	  function gtag(){dataLayer.push(arguments);} 	  gtag(\'js\', new Date());  	  gtag(\'config\', \'UA-9999999-1\'); 	</script>      \r\n            \r\n            \r\n            \r\n      ', '2021-11-27 05:25:37');
-- ('#000000', '#ffffff', '#47bac1', '#ffffff', 'vistas/img/plantilla/logo.png', 'vistas/img/plantilla/icono.png', '[{\"red\":\"fa-facebook\",\"estilo\":\"facebookBlanco\",\"url\":\"http://facebook.com/\",\"activo\":1},{\"red\":\"fa-youtube\",\"estilo\":\"youtubeBlanco\",\"url\":\"http://youtube.com/\",\"activo\":1},{\"red\":\"fa-twitter\",\"estilo\":\"twitterBlanco\",\"url\":\"http://twitter.com/\",\"activo\":1},{\"red\":\"fa-google-plus\",\"estilo\":\"google-plusBlanco\",\"url\":\"http://google.com/\",\"activo\":1},{\"red\":\"fa-instagram\",\"estilo\":\"instagramBlanco\",\"url\":\"http://instagram.com/\",\"activo\":1}]', '\r\n      		<script>   window.fbAsyncInit = function() {     FB.init({       appId      : \'131737410786111\',       cookie     : true,       xfbml      : true,       version    : \'v2.10\'     });            FB.AppEvents.logPageView();             };    (function(d, s, id){      var js, fjs = d.getElementsByTagName(s)[0];      if (d.getElementById(id)) {return;}      js = d.createElement(s); js.id = id;      js.src = \"https://connect.facebook.net/en_US/sdk.js\";      fjs.parentNode.insertBefore(js, fjs);    }(document, \'script\', \'facebook-jssdk\'));  </script>\r\n      		', '\r\n  			<!-- Facebook Pixel Code --> 	<script> 	  !function(f,b,e,v,n,t,s) 	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 	  n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\'; 	  n.queue=[];t=b.createElement(e);t.async=!0; 	  t.src=v;s=b.getElementsByTagName(e)[0]; 	  s.parentNode.insertBefore(t,s)}(window, document,\'script\', 	  \'https://connect.facebook.net/en_US/fbevents.js\'); 	  fbq(\'init\', \'131737410786111\'); 	  fbq(\'track\', \'PageView\'); 	</script> 	<noscript><img height=\"1\" width=\"1\" style=\"display:none\" 	  src=\"https://www.facebook.com/tr?id=149877372404434&ev=PageView&noscript=1\" 	/></noscript> <!-- End Facebook Pixel Code -->    \r\n  			', '  \r\n  				<!-- Global site tag (gtag.js) - Google Analytics --> 	<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-999999-1\"></script> 	<script> 	  window.dataLayer = window.dataLayer || []; 	  function gtag(){dataLayer.push(arguments);} 	  gtag(\'js\', new Date());  	  gtag(\'config\', \'UA-9999999-1\'); 	</script>      \r\n            \r\n            \r\n            \r\n      ', '2018-02-02 15:38:21');
('#000000', '#ffffff', '#47bac1', '#ffffff', 'vistas/img/plantilla/logo.png', 'vistas/img/plantilla/icono.png', '[{\"red\":\"fa-facebook\",\"estilo\":\"facebookBlanco\",\"url\":\"http://facebook.com/\",\"activo\":1},{\"red\":\"fa-youtube\",\"estilo\":\"youtubeBlanco\",\"url\":\"http://youtube.com/\",\"activo\":1},{\"red\":\"fa-twitter\",\"estilo\":\"twitterBlanco\",\"url\":\"http://twitter.com/\",\"activo\":1},{\"red\":\"fa-google-plus\",\"estilo\":\"google-plusBlanco\",\"url\":\"http://google.com/\",\"activo\":1},{\"red\":\"fa-instagram\",\"estilo\":\"instagramBlanco\",\"url\":\"http://instagram.com/\",\"activo\":1},{\"red\":\"fa-whatsapp\",\"estilo\":\"whatsappBlanco\",\"url\":\"https://api.whatsapp.com/send?phone=529631611007\",\"activo\":1}]', '\r\n      		<script>   window.fbAsyncInit = function() {     FB.init({       appId      : \'131737410786111\',       cookie     : true,       xfbml      : true,       version    : \'v2.10\'     });            FB.AppEvents.logPageView();             };    (function(d, s, id){      var js, fjs = d.getElementsByTagName(s)[0];      if (d.getElementById(id)) {return;}      js = d.createElement(s); js.id = id;      js.src = \"https://connect.facebook.net/en_US/sdk.js\";      fjs.parentNode.insertBefore(js, fjs);    }(document, \'script\', \'facebook-jssdk\'));  </script>\r\n      		', '\r\n  			<!-- Facebook Pixel Code --> 	<script> 	  !function(f,b,e,v,n,t,s) 	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod? 	  n.callMethod.apply(n,arguments):n.queue.push(arguments)}; 	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version=\'2.0\'; 	  n.queue=[];t=b.createElement(e);t.async=!0; 	  t.src=v;s=b.getElementsByTagName(e)[0]; 	  s.parentNode.insertBefore(t,s)}(window, document,\'script\', 	  \'https://connect.facebook.net/en_US/fbevents.js\'); 	  fbq(\'init\', \'131737410786111\'); 	  fbq(\'track\', \'PageView\'); 	</script> 	<noscript><img height=\"1\" width=\"1\" style=\"display:none\" 	  src=\"https://www.facebook.com/tr?id=149877372404434&ev=PageView&noscript=1\" 	/></noscript> <!-- End Facebook Pixel Code -->    \r\n  			', '  \r\n  				<!-- Global site tag (gtag.js) - Google Analytics --> 	<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-999999-1\"></script> 	<script> 	  window.dataLayer = window.dataLayer || []; 	  function gtag(){dataLayer.push(arguments);} 	  gtag(\'js\', new Date());  	  gtag(\'config\', \'UA-9999999-1\'); 	</script>      \r\n            \r\n            \r\n            \r\n      ', '2018-02-02 15:38:21');

INSERT INTO comercio (impuesto, envioNacional, envioInternacional, tasaMinimaNal, tasaMinimaInt, pais, modoPaypal, clienteIdPaypal, llaveSecretaPaypal, modoPayu, merchantIdPayu, accountIdPayu, apiKeyPayu) VALUES
(19, 1, 2, 10, 15, 'MX', 'sandbox', 'AecffvSZfOgj6g1MkrVmz12ACMES2-InggmWCpU5CblR-z5WwkYBYjmLsh9yPRLuRape1ahjqpcJet4N', 'EAx1SVMHGV6MJKwl-pnOSzaJASlAINZdYRdS--wkgaPYLevcGw88V0PU_W_rg00xLkBknybCjsO_xzA0', 'sandbox', 508029, 512321, '4Vj8eK4rloUd272L48hsrarnUA');

/*
INSERT INTO `slide` (`id`, `nombre`, `imgFondo`, `tipoSlide`, `imgProducto`, `estiloImgProducto`, `estiloTextoSlide`, `titulo1`, `titulo2`, `titulo3`, `boton`, `url`, `orden`, `fecha`) VALUES
(1, '', 'vistas/img/slide/default/fondo1.png', 'slideOpcion1', 'vistas/img/slide/slide1/1.png', '{\"top\": \"20\" ,\"right\": \"15\" ,\"width\": \"35\", \"left\":\"\"}', '{\"top\": \"10\" ,\"right\": \"\" ,\"width\": \"40\", \"left\":\"10\"}', '', '{\"texto\": \"Carretilla 4.5 ft3, llanta imponchable\" ,\"color\": \"#333\"}', '', 'VER PRODUCTO', '#', 1, '2021-11-27 19:23:27'),
(2, '', 'vistas/img/slide/default/fondo1.png', 'slideOpcion2', 'vistas/img/slide/slide2/1.png', '{\r\n\"width\": \"25\",\r\n\"top\": \"5\",\r\n\"left\": \"8\", \"right\":\"\"\r\n}', '{\r\n	\"width\": \"40\",\r\n	\"top\": \"15\",\r\n	\"left\": \"\",\r\n	\"right\": \"15\"\r\n}', '', '{\"texto\": \"Bomba eléctrica para agua tipo jet 1-1/2 HP\", \"color\": \"#333\"}', '', 'VER PRODUCTO', '#', 2, '2021-11-27 19:23:57'),
(3, '', 'vistas/img/slide/default/fondo1.jpg', 'slideOpcion2', 'vistas/img/slide/slide3/1.png', '{\r\n\"width\": \"16\",\r\n\"top\": \"\",\r\n\"left\": \"10\",\r\n\"right\": \"\"\r\n}', '{\r\n\"width\": \"40\",\r\n\"top\": \"15\",\r\n\"left\": \"\",\r\n\"right\": \"18\"\r\n}', '', '{\"texto\": \"Engrapadora tipo pistola para grapas de 1/4 a 9/16\" ,\"color\": \"#333\"}', '', 'VER PRODUCTO', '#', 3, '2021-11-27 19:33:47');
*/

INSERT INTO `slide` (`id`, `imgFondo`, `tipoSlide`, `imgProducto`, `estiloImgProducto`, `estiloTextoSlide`, `titulo1`, `titulo2`, `titulo3`, `boton`, `url`, `fecha`) VALUES
(1, 'vistas/img/slide/default/back_default.jpg', 'slideOpcion1', 'vistas/img/slide/slide1/calzado.png', '{\"top\": \"15%\" ,\"right\": \"10%\" ,\"width\": \"45%\", \"left\":\"\"}', '{\"top\": \"20%\" ,\"right\": \"\" ,\"width\": \"40%\", \"left\":\"10%\"}', '{\"texto\": \"Lorem Ipsum\" ,\"color\": \"#333\"}', '{\"texto\": \"Lorem ipsum dolor sit\" ,\"color\": \"#777\"}', '{\"texto\": \"Lorem ipsum dolor sit\" ,\"color\": \"#888\"}', '<button class=\"btn btn-default backColor text-uppercase\">\r\n\r\n							VER PRODUCTO <span class=\"fa fa-chevron-right\"></span>\r\n\r\n							</button>', '#', '2017-10-05 22:13:07'),
(2, 'vistas/img/slide/default/back_default.jpg', 'slideOpcion2', 'vistas/img/slide/slide2/curso.png', '{\r\n	\"width\": \"30%\",\r\n	\"top\": \"5%\",\r\n	\"left\": \"15%\", \"right\":\"\"\r\n}', '{\r\n	\"width\": \"40%\",\r\n	\"top\": \"15%\",\r\n	\"left\": \"\",\r\n	\"right\": \"15%\"\r\n}', '{\"texto\": \"Lorem Ipsum\" ,\"color\": \"#333\"}', '{\"texto\": \"Lorem ipsum dolor sit\" ,\"color\": \"#777\"}', '{\"texto\": \"Lorem ipsum dolor sit\" ,\"color\": \"#888\"}', '<button class=\"btn btn-default backColor text-uppercase\">\r\n\r\n							VER PRODUCTO <span class=\"fa fa-chevron-right\"></span>\r\n\r\n							</button>', '#', '2019-05-18 14:05:04'),
(3, 'vistas/img/slide/slide3/fondo2.jpg', 'slideOpcion2', 'vistas/img/slide/slide3/iphone.png', '{\r\n	\"width\": \"35%\",\r\n	\"top\": \"5%\",\r\n	\"left\": \"15%\",\r\n	\"right\": \"\"\r\n}', '{\r\n	\"width\": \"40%\",\r\n	\"top\": \"15%\",\r\n	\"left\": \"\",\r\n	\"right\": \"15%\"\r\n}', '{\"texto\": \"Lorem Ipsum\" ,\"color\": \"#eee\"}', '{\"texto\": \"Lorem ipsum dolor sit\" ,\"color\": \"#ccc\"}', '{\"texto\": \"Lorem ipsum dolor sit\" ,\"color\": \"#aaa\"}', '<button class=\"btn btn-default backColor text-uppercase\">\r\n\r\n							VER PRODUCTO <span class=\"fa fa-chevron-right\"></span>\r\n\r\n							</button>', '#', '2019-05-18 14:05:08'),
(4, 'vistas/img/slide/slide4/fondo3.jpg', 'slideOpcion1', '', '', '{\r\n	\"width\": \"40%\",\r\n	\"top\": \"20%\",\r\n	\"left\": \"10%\",\r\n	\"right\": \"\"\r\n}', '{\"texto\": \"Lorem Ipsum\" ,\"color\": \"#333\"}', '{\"texto\": \"Lorem ipsum dolor sit\" ,\"color\": \"#777\"}', '{\"texto\": \"Lorem ipsum dolor sit\" ,\"color\": \"#888\"}', '', '', '2017-10-05 22:13:26');

INSERT INTO banner(ruta, tipo, img, estado, fecha) VALUES 
('sin-categoria', 'sin-categoria', 'vistas/img/banner/banner.jpg', 0, '2021-11-27 20:31:08');