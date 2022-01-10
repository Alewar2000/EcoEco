-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2022 a las 04:38:24
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecoeco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `module` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `module`, `name`, `slug`, `icono`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'Informática', 'informatica', '&lt;i class=&quot;fas fa-laptop&quot;&gt;&lt;/i&gt;', NULL, '2022-01-06 10:44:56', '2022-01-06 10:44:56'),
(2, 1, 'Noticias', 'noticias', '&lt;i class=&quot;fas fa-sticky-note&quot;&gt;&lt;/i&gt;', NULL, '2022-01-06 11:24:21', '2022-01-06 15:25:32'),
(3, 0, 'Alimentos', 'alimentos', '&lt;i class=&quot;fas fa-apple-alt&quot;&gt;&lt;/i&gt;', NULL, '2022-01-06 15:38:36', '2022-01-06 15:38:36');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_01_06_110816_create_categories_table', 2),
(5, '2022_01_06_164305_create_products_table', 3),
(6, '2022_01_06_180337_add_field_file_path_to_productrs_table', 4),
(7, '2022_01_07_142430_create_product_gallery_table', 5),
(8, '2022_01_07_174430_add_field_avatar_status_to_usres_table', 6),
(9, '2022_01_09_153210_add_password_code_to_users_table', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `in_discount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `status`, `name`, `slug`, `category_id`, `file_path`, `image`, `price`, `in_discount`, `discount`, `content`, `deleted_at`, `created_at`, `updated_at`) VALUES
(4, 1, 'Usb ecológico', 'producto-3', 3, '2022-01-07', '17-usb.jpg', '1123.00', 1, 20, '&lt;p&gt;123456734&lt;/p&gt;', NULL, '2022-01-06 17:21:15', '2022-01-09 16:50:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_gallery`
--

CREATE TABLE `product_gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_gallery`
--

INSERT INTO `product_gallery` (`id`, `product_id`, `file_path`, `file_name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 4, '2022-01-07', '104-usba.jfif', '2022-01-07 15:51:58', '2022-01-07 15:30:22', '2022-01-07 15:51:58'),
(2, 4, '2022-01-07', '976-usbaa.jpg', '2022-01-10 01:39:13', '2022-01-07 15:30:26', '2022-01-10 01:39:13'),
(3, 4, '2022-01-07', '564-h902-madera-usb-memorias-2.jpg', '2022-01-10 01:39:15', '2022-01-07 15:30:29', '2022-01-10 01:39:15'),
(4, 4, '2022-01-07', '762-usbb.jpg', '2022-01-10 01:39:16', '2022-01-07 15:31:01', '2022-01-10 01:39:16'),
(5, 4, '2022-01-07', '583-usba.jfif', '2022-01-10 01:39:17', '2022-01-07 15:53:58', '2022-01-10 01:39:17'),
(6, 4, '2022-01-10', '271-h902-madera-usb-memorias-2.jpg', '2022-01-10 01:43:27', '2022-01-10 01:39:23', '2022-01-10 01:43:27'),
(7, 4, '2022-01-10', '337-usbaa.jpg', '2022-01-10 01:43:29', '2022-01-10 01:39:32', '2022-01-10 01:43:29'),
(8, 4, '2022-01-10', '519-usbb.jpg', '2022-01-10 01:43:23', '2022-01-10 01:39:35', '2022-01-10 01:43:23'),
(9, 4, '2022-01-10', '484-usba.jfif', '2022-01-10 01:43:19', '2022-01-10 01:39:42', '2022-01-10 01:43:19'),
(10, 4, '2022-01-10', '941-usba.jfif', '2022-01-10 01:43:21', '2022-01-10 01:42:40', '2022-01-10 01:43:21'),
(11, 4, '2022-01-10', '147-usbb.jpg', '2022-01-10 01:43:25', '2022-01-10 01:42:42', '2022-01-10 01:43:25'),
(12, 4, '2022-01-10', '479-usbaa.jpg', '2022-01-10 01:43:30', '2022-01-10 01:42:43', '2022-01-10 01:43:30'),
(13, 4, '2022-01-10', '69-h902-madera-usb-memorias-2.jpg', '2022-01-10 01:43:31', '2022-01-10 01:42:45', '2022-01-10 01:43:31'),
(14, 4, '2022-01-10', '538-h902-madera-usb-memorias-2.jpg', NULL, '2022-01-10 01:43:34', '2022-01-10 01:43:34'),
(15, 4, '2022-01-10', '633-usbaa.jpg', NULL, '2022-01-10 01:43:40', '2022-01-10 01:43:40'),
(16, 4, '2022-01-10', '364-usbb.jpg', NULL, '2022-01-10 01:43:43', '2022-01-10 01:43:43');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `role` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `status`, `role`, `name`, `lastname`, `email`, `avatar`, `email_verified_at`, `password`, `password_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Alvaro', 'Corcoles', 'correo@correo.com', NULL, NULL, '$2y$10$tfalo9yxbpYlnvAMdFgOSOP2uW5TXsWqQGq6Olt0nSVNbCTz8DZvW', NULL, 'GJ2l09P5rAkNqxMBbd3PBUsjiH0nYDDDMoOrrls7qNUvHN0PZlgwpRBOZ5Ud', '2021-12-19 13:19:42', '2022-01-04 13:19:42'),
(2, 0, 0, 'Jose', 'Antonio', 'antonio@gmail.com', NULL, NULL, '$2y$10$l9pBFQ6mFIhF0Fzo8XBRDu3v9BermiF4G2Wffhfv9HrA5gc53zKdy', NULL, NULL, '2022-01-04 14:29:40', '2022-01-04 14:29:40'),
(4, 0, 0, 'dfsdfs', 'dsad', 'alvarocorco@gmail.com', NULL, NULL, '$2y$10$ds7qNZ4MRWCHHRB1iSMbdueVsA5tadNLMdc7l4pfJ3He1EkPPofjy', NULL, NULL, '2022-01-09 14:57:25', '2022-01-09 14:57:25'),
(6, 0, 0, 'asd', 'asda', 'ecoecoalewar@gmail.com', NULL, NULL, '$2y$10$rYeZzQgpuwFfAOcsnry1ZuMhitAh6c.iSS7.lYtN5vnpLGHp83AZG', NULL, 'Z8NeHAjsN9EBFjrtrUsjoRmXPbXPiu3UiDhXIy8QJmLlcnYvpU0RbzGfLZPU', '2022-01-09 15:02:28', '2022-01-09 16:23:24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product_gallery`
--
ALTER TABLE `product_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `product_gallery`
--
ALTER TABLE `product_gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
