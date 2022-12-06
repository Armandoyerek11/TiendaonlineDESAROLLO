-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 03:08 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tienda2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `email`) VALUES
(14, 'armando', '$2y$10$KWWTwP4kshwrETTrMiXi.eIJ3Qu7VSnGCtB.P4Jszs.9R0grGD2S6', 'armando@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` varchar(300) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detalle_pedidos`
--

CREATE TABLE `detalle_pedidos` (
  `id` int(10) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `accesorio_id` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `detalle_pedidos2`
--

CREATE TABLE `detalle_pedidos2` (
  `id` int(10) NOT NULL,
  `pedido_id` int(11) NOT NULL,
  `otro_id` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `telefono` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) NOT NULL,
  `nombre_eventos` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `categoria_id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instrumentos`
--

CREATE TABLE `instrumentos` (
  `id` int(10) NOT NULL,
  `nombre_instrumento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `categoria_id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(10) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pedidos2`
--

CREATE TABLE `pedidos2` (
  `id` int(10) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detalle_pedidos2`
--
ALTER TABLE `detalle_pedidos2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instrumentos`
--
ALTER TABLE `instrumentos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos2`
--
ALTER TABLE `pedidos2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `detalle_pedidos`
--
ALTER TABLE `detalle_pedidos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detalle_pedidos2`
--
ALTER TABLE `detalle_pedidos2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instrumentos`
--
ALTER TABLE `instrumentos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pedidos2`
--
ALTER TABLE `pedidos2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
