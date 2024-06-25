-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/06/2024 às 05:34
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca_php`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cards`
--

CREATE TABLE `cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `favorito` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

INSERT INTO `cards` (titulo, descricao, url, favoritado) 
values ('Mente de um milionário', 'Como conquistar grande patrimônio', 'https://m.media-amazon.com/images/I/41svU+dGPjL.jpg', 0),
('Diário de um banana', 'Diário de um Jovem Adolescente', 'https://m.media-amazon.com/images/I/919dh4AX2hL._AC_UF1000,1000_QL80_.jpg', 0),
('Percy Jakson e o Ladrão de raios', 'Uma aventura pela mitologia grega', 'https://m.media-amazon.com/images/I/A1UjcPz4gZL._AC_UF1000,1000_QL80_.jpg', 0),
('A pirâmide da sabedoria', 'Uma discussão filosófica', 'https://m.media-amazon.com/images/I/61TGuH72RmL._AC_UF1000,1000_QL80_.jpg', 0);

