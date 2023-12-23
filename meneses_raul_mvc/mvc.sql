
--Estructura de la base de datos para el sistema de clientes
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `deuda` decimal(10,2) COLLATE utf8_spanish_ci NOT NULL,
  `dias_mora` int(11) COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text NOT NULL,
  `a_quien_debe` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

