-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 04-02-2021 a las 18:25:47
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
(14, 2, 'Corea', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '1000.00', 1, 0, 1, 1, '2021-01-31 08:40:35', '2021-01-31 08:40:35'),
(15, 1, 'Dinamarca', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '100.00', 1, 1, 1, 1, '2021-01-31 08:40:53', '2021-01-31 08:40:53'),
(16, 1, 'Finlandia', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '15.00', 0, 0, 1, 1, '2021-01-31 08:44:26', '2021-01-31 08:44:26'),
(18, 1, 'España', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '20.00', 1, 1, 1, 1, '2021-02-01 14:36:25', '2021-02-01 14:36:25'),
(20, 1, 'Alemania Oscuro', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '23.00', 1, 1, 1, 1, '2021-02-01 14:40:43', '2021-02-01 14:40:43'),
(21, 1, 'Rusia', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '50.00', 1, 1, 1, 1, '2021-02-01 14:42:04', '2021-02-01 14:42:04'),
(22, 1, 'Argentina', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '86.00', 1, 1, 1, 1, '2021-02-04 12:57:53', '2021-02-04 12:57:53'),
(23, 1, 'Brasil', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '40.00', 0, 1, 0, 1, '2021-02-04 13:02:15', '2021-02-04 13:02:15'),
(24, 1, 'Portugal', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '55.00', 1, 0, 0, 1, '2021-02-04 13:07:01', '2021-02-04 13:07:01'),
(25, 2, 'Olanda', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '33.00', 1, 1, 1, 1, '2021-02-04 13:10:54', '2021-02-04 13:10:54'),
(26, 2, 'Mexico', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '43.00', 1, 1, 1, 1, '2021-02-04 13:13:33', '2021-02-04 13:13:33'),
(27, 2, 'Mexico', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '43.00', 1, 1, 1, 1, '2021-02-04 13:14:22', '2021-02-04 13:14:22'),
(28, 2, 'Mexico', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '43.00', 1, 1, 1, 1, '2021-02-04 13:15:26', '2021-02-04 13:15:26'),
(29, 2, 'Africa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '10.00', 1, 0, 0, 1, '2021-02-04 13:18:31', '2021-02-04 13:18:31');

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
(21, 20, 'views/img/products/bf09b69a3800f049b875edea56d9b176.jpg', 0, '2021-02-04 12:46:26'),
(22, 20, 'views/img/products/f339b028294025ac3f4f7a2593744b5e.jpg', 1, '2021-02-04 12:46:43'),
(23, 20, 'views/img/products/205704606c7a8759a6c5c9d92bc07de1.jpg', 0, '2021-02-04 12:46:55'),
(24, 21, 'views/img/products/c86bb4ebd7fb4af0abe07bc8a01237f1.jpg', 1, '2021-02-04 12:48:37'),
(25, 21, 'views/img/products/dd8f29eb664b67ebadc3d686c50ba94a.jpg', 0, '2021-02-04 12:48:51'),
(26, 21, 'views/img/products/17482707355adc3c8285f71c87ac16cc.jpg', 0, '2021-02-04 12:48:59'),
(27, 14, 'views/img/products/474001364ef08fed92e8fb57f610c337.jpg', 1, '2021-02-04 12:50:13'),
(28, 14, 'views/img/products/b509d7549871c447fe00b074b024cbc1.jpg', 0, '2021-02-04 12:50:25'),
(29, 14, 'views/img/products/33c0eae56d6b4aa2d3396967498f105f.jpg', 0, '2021-02-04 12:50:35'),
(30, 15, 'views/img/products/831807b8a69c9a1ff6b786a986067ad8.jpg', 1, '2021-02-04 12:51:23'),
(31, 15, 'views/img/products/56e56e2882a2cfabf07f9df4b5e47a07.jpg', 0, '2021-02-04 12:51:35'),
(32, 15, 'views/img/products/a97187e347d05737c573e653f20e115e.jpg', 0, '2021-02-04 12:51:42'),
(33, 16, 'views/img/products/bc69fee3c0e7817e450ce440750195f4.jpg', 1, '2021-02-04 12:52:53'),
(34, 16, 'views/img/products/97689dc7b60cc56ead640729f24b5261.jpg', 0, '2021-02-04 12:53:04'),
(35, 16, 'views/img/products/26274309be1eb4704cb1476bb190b932.jpg', 0, '2021-02-04 12:53:12'),
(36, 18, 'views/img/products/40ee4a262dd5448b504bf23b2bec01f3.jpg', 1, '2021-02-04 12:53:57'),
(37, 18, 'views/img/products/0595c083983a376d2eac61e4d23b5c6b.jpg', 0, '2021-02-04 12:54:05'),
(38, 18, 'views/img/products/e977f864aac9f0ecf83f8604f09552c5.jpg', 0, '2021-02-04 12:54:14'),
(39, 22, 'views/img/products/1cfc2e79a60e1c9c5eca0dde24280bd3.jpg', 1, '2021-02-04 12:57:53'),
(40, 22, 'views/img/products/60b44aea5ec1f18ba615e8b5c3444675.jpg', 0, '2021-02-04 12:57:53'),
(41, 22, 'views/img/products/e69446e2a5c3cadc5bab8ba8d4e91802.jpg', 0, '2021-02-04 12:57:53'),
(42, 23, 'views/img/products/15c70036d196f89f801731234bf98be7.jpg', 1, '2021-02-04 13:02:15'),
(43, 23, 'views/img/products/3bd5eb4e8185654db319fbdc491ff91b.jpg', 0, '2021-02-04 13:02:15'),
(44, 23, 'views/img/products/cbf6bdee1a0dae8f6b474632dedb9817.jpg', 0, '2021-02-04 13:02:15'),
(45, 24, 'views/img/products/d3a5c6db28fcdc9db94e1a2459d44ecb.jpg', 1, '2021-02-04 13:07:01'),
(46, 24, 'views/img/products/44d0498968bb7939285944358e20be8b.jpg', 0, '2021-02-04 13:07:01'),
(47, 24, 'views/img/products/97f5c4c88ef70ea495df768b694cbbd4.jpg', 0, '2021-02-04 13:07:01'),
(48, 25, 'views/img/products/338c0e3ad89c7d53955d5c949fc9b842.jpg', 1, '2021-02-04 13:10:54'),
(49, 25, 'views/img/products/c295afc99e0a7a40d67bc69b2c014e38.jpg', 0, '2021-02-04 13:10:54'),
(50, 25, 'views/img/products/7a68918c7179c44eaf85a221f73400bd.jpg', 0, '2021-02-04 13:10:54'),
(51, 26, 'views/img/products/5912ea5b1bd2c6d455e6dc74b52af246.jpg', 1, '2021-02-04 13:13:33'),
(52, 26, 'views/img/products/8f77ab58b70bafef4aee66cdfc17d1cf.jpg', 0, '2021-02-04 13:13:33'),
(53, 26, 'views/img/products/44a72f8d20c10f442cfd4f302150bf3e.jpg', 0, '2021-02-04 13:13:33'),
(54, 27, 'views/img/products/03d3afed4c7e9a450f9c17eddbccb255.jpg', 0, '2021-02-04 13:14:22'),
(55, 27, 'views/img/products/b2ce300be1f74996b81bd9e7759e3619.jpg', 1, '2021-02-04 13:14:22'),
(56, 27, 'views/img/products/6012433bd2ea01f6ba596bc8ffb98325.jpg', 0, '2021-02-04 13:14:22'),
(57, 28, 'views/img/products/e86ebd983de3475f5c387512364b881c.jpg', 1, '2021-02-04 13:15:26'),
(58, 28, 'views/img/products/8aec391f5ddcc95d3ff232dacea8c78d.jpg', 0, '2021-02-04 13:15:26'),
(59, 28, 'views/img/products/c3c8b0eb899912f5c1dc1414be0aff58.jpg', 0, '2021-02-04 13:15:26'),
(60, 29, 'views/img/products/8f65456c07dbcd79a030664a2cef6d97.jpg', 1, '2021-02-04 13:18:31'),
(61, 29, 'views/img/products/e8a30d051a303b3fe048689166fa54d5.jpg', 0, '2021-02-04 13:18:31'),
(62, 29, 'views/img/products/682068a4b57e6b045fcb6e171cda0928.jpg', 0, '2021-02-04 13:18:31');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
