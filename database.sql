-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-02-2021 a las 22:51:22
-- Versión del servidor: 5.7.26-log
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `teamshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` smallint(6) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(12,2) DEFAULT NULL,
  `is_novelty` tinyint(1) NOT NULL DEFAULT '0',
  `is_offer` tinyint(1) NOT NULL DEFAULT '0',
  `is_principal` tinyint(1) NOT NULL DEFAULT '0',
  `available` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `short_description`, `long_description`, `price`, `is_novelty`, `is_offer`, `is_principal`, `available`, `created_at`, `updated_at`) VALUES
(1, 1, 'Producto', 'Descrip', 'Descripcion', NULL, 1, 1, 1, 1, '2021-01-30 19:04:34', '2021-01-30 19:04:34'),
(2, 2, 'Producto', 'Descripcion', 'Desceafsad', NULL, 1, 1, 1, 1, '2021-01-30 19:25:29', '2021-01-30 19:25:29'),
(3, 2, 'Producto', 'Descripcion', 'Desceafsad', '33.00', 1, 1, 1, 1, '2021-01-30 19:29:38', '2021-01-30 19:29:38'),
(4, 2, 'Producto', 'Descripcion', 'Desceafsad', '33.00', 1, 1, 1, 1, '2021-01-30 19:32:33', '2021-01-30 19:32:33'),
(5, 2, 'Producto', 'Descripcion', 'Desceafsad', '33.44', 1, 1, 1, 1, '2021-01-30 19:35:49', '2021-01-30 19:35:49'),
(6, 2, 'Producto', 'Descripcion', 'Desceafsad', '33.44', 1, 1, 1, 1, '2021-01-30 19:37:41', '2021-01-30 19:37:41'),
(7, 1, 'Nombre', 'aksjgd askjdghjgas dkjasgdg', 'Djhasdyg asdvasgduysagcvjahsbdaklsc alksbn', '10000.00', 1, 0, 1, 1, '2021-01-31 08:23:51', '2021-01-31 08:23:51'),
(8, 1, 'Nombre', 'aksjgd askjdghjgas dkjasgdg', 'Djhasdyg asdvasgduysagcvjahsbdaklsc alksbn', '10000.00', 1, 0, 1, 1, '2021-01-31 08:24:28', '2021-01-31 08:24:28'),
(9, 1, 'Nombre', 'aksjgd askjdghjgas dkjasgdg', 'Djhasdyg asdvasgduysagcvjahsbdaklsc alksbn', '10000.00', 1, 0, 1, 1, '2021-01-31 08:29:45', '2021-01-31 08:29:45'),
(10, 1, 'Nombre', 'aksjgd askjdghjgas dkjasgdg', 'Djhasdyg asdvasgduysagcvjahsbdaklsc alksbn', '10000.00', 1, 0, 1, 1, '2021-01-31 08:30:20', '2021-01-31 08:30:20'),
(11, 1, 'Nombre', 'aksjgd askjdghjgas dkjasgdg', 'Djhasdyg asdvasgduysagcvjahsbdaklsc alksbn', '10000.00', 1, 0, 1, 1, '2021-01-31 08:30:41', '2021-01-31 08:30:41'),
(12, 1, 'Nombre', 'aksjgd askjdghjgas dkjasgdg', 'Djhasdyg asdvasgduysagcvjahsbdaklsc alksbn', '10000.00', 1, 0, 1, 1, '2021-01-31 08:31:11', '2021-01-31 08:31:11'),
(13, 1, 'Nombre', 'aksjgd askjdghjgas dkjasgdg', 'Djhasdyg asdvasgduysagcvjahsbdaklsc alksbn', '10000.00', 1, 0, 1, 1, '2021-01-31 08:31:14', '2021-01-31 08:31:14'),
(14, 1, 'Nombre', 'aksjgd askjdghjgas dkjasgdg', 'Djhasdyg asdvasgduysagcvjahsbdaklsc alksbn', '10000.00', 1, 0, 1, 1, '2021-01-31 08:40:35', '2021-01-31 08:40:35'),
(15, 1, 'Nombre', 'aksjgd askjdghjgas dkjasgdg', 'Djhasdyg asdvasgduysagcvjahsbdaklsc alksbn', '10000.00', 1, 0, 1, 1, '2021-01-31 08:40:53', '2021-01-31 08:40:53'),
(16, 1, 'Nombre', 'aksjgd askjdghjgas dkjasgdg', 'Djhasdyg asdvasgduysagcvjahsbdaklsc alksbn', '10000.00', 1, 0, 1, 1, '2021-01-31 08:44:26', '2021-01-31 08:44:26'),
(17, 1, 'Producto de Pruebas', 'Caksdigyuqwehbd', 'akjsd iusadbckjas dasjkbdcuasbcba s cjb', '20.00', 0, 1, 0, 1, '2021-01-31 09:01:18', '2021-01-31 09:01:18'),
(18, 2, 'Producto', 'jasdbsadk ajksbndb', 'aksdb  aksbdiuhasiucbb', '123213.00', 1, 1, 1, 1, '2021-02-01 14:36:25', '2021-02-01 14:36:25'),
(19, 2, 'Producto 21', 'aksjdb', 'kjasbdkjsabd', '19.00', 1, 1, 1, 1, '2021-02-01 14:40:06', '2021-02-01 14:40:06'),
(20, 1, 'aksjbd', 'sañkdb', 'kasbd', '123.00', 1, 1, 1, 1, '2021-02-01 14:40:43', '2021-02-01 14:40:43'),
(21, 1, 'askjd', 'alsdhsabcbicgiygascb ascgiygb', 'aksdb casbcygasb xcaskciasc', '123.00', 1, 1, 1, 1, '2021-02-01 14:42:04', '2021-02-01 14:42:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_categories`
--

CREATE TABLE `product_categories` (
  `id` smallint(6) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_categories`
--

INSERT INTO `product_categories` (`id`, `name`, `description`) VALUES
(1, 'Categoria 1', NULL),
(2, 'Categoria 2', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `principal` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `path`, `principal`, `created_at`) VALUES
(1, 14, 'views/img/products/8ac9a446df0977a7901cc07d1e20cfe4.jpeg', 1, '2021-01-31 08:40:35'),
(2, 14, 'views/img/products/10de81b0817ddf5463eefb7d14ebe06a.png', 0, '2021-01-31 08:40:35'),
(3, 14, 'views/img/products/805170da88b63701603e8adab9bc825e.jpg', 0, '2021-01-31 08:40:35'),
(4, 15, 'views/img/products/399bfaab6f0735d8a2d65f2ba5995181.jpeg', 1, '2021-01-31 08:40:53'),
(5, 15, 'views/img/products/264d03763b3ba6043226dedaebc8f591.png', 0, '2021-01-31 08:40:53'),
(6, 15, 'views/img/products/c8c146145e8671c197ef350ff9bb7043.jpg', 0, '2021-01-31 08:40:53'),
(7, 16, 'views/img/products/f1624e43be5f732533a4ca91a3334a9e.jpeg', 1, '2021-01-31 08:44:26'),
(8, 16, 'views/img/products/5cafd00bf82dde20c54f365bfbd13135.png', 0, '2021-01-31 08:44:26'),
(9, 16, 'views/img/products/c6db8c82649abd7f3f03089fb59b25e3.jpg', 0, '2021-01-31 08:44:26'),
(10, 17, 'views/img/products/d4a686ce7c7bdf6489de0753e92f9a7f.jpeg', 1, '2021-01-31 09:01:18'),
(11, 17, 'views/img/products/41f22933015a36380cc5f84d7a59a1d0.png', 0, '2021-01-31 09:01:18'),
(12, 17, 'views/img/products/e567b9703c6c8fc8f8b482bc4d69faca.jpg', 0, '2021-01-31 09:01:18'),
(13, 18, 'views/img/products/b83df31252fce9056486fa3e0e73681e.jpeg', 1, '2021-02-01 14:36:25'),
(14, 18, 'views/img/products/8f3fea29a05719fa479d24e2e8168aaf.jpg', 0, '2021-02-01 14:36:25'),
(15, 19, 'views/img/products/1110c719a8d47818d1df1323db1468fa.jpg', 1, '2021-02-01 14:40:06'),
(16, 19, 'views/img/products/c078224762032a010cc754f7fd4335cf.jpeg', 0, '2021-02-01 14:40:06'),
(17, 20, 'views/img/products/cd0f8a8631ba36adf0c38bf977efe920.jpeg', 1, '2021-02-01 14:40:43'),
(18, 20, 'views/img/products/40c9410ae2b922b5299c891683807887.jpg', 0, '2021-02-01 14:40:43'),
(19, 21, 'views/img/products/843d656eeb3d7d22a8a3c231dbe6cdf8.jpg', 1, '2021-02-01 14:42:04'),
(20, 21, 'views/img/products/b8a971db18f1aabf9e82a00dbcea625f.png', 0, '2021-02-01 14:42:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Administrador', 'admin@admin.com', '$P$BLvdY/3C6kOctrvBqoeq70e4kth9wb/');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id_fk` (`product_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category_id_fk` FOREIGN KEY (`category_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
