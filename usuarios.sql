-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/08/2026 às 00:23
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
-- Banco de dados: `elcio`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(40) DEFAULT NULL,
  `email_usuario` varchar(40) DEFAULT NULL,
  `senha_usuario` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`) VALUES
(1, 'Elcio Sava', 'elciosava@outlook.com', ''),
(17, 'Craudio Santos', 'craudio@santos.com', '123'),
(18, 'João Silva', 'joao.silva@email.com', '123456'),
(19, 'Maria Oliveira', 'maria.oliveira@email.com', '123456'),
(20, 'Pedro Santos', 'pedro.santos@email.com', '123456'),
(21, 'Ana Souza', 'ana.souza@email.com', '123456'),
(22, 'Carlos Ferreira', 'carlos.ferreira@email.com', '123456'),
(23, 'Juliana Lima', 'juliana.lima@email.com', '123456'),
(24, 'Lucas Almeida', 'lucas.almeida@email.com', '123456'),
(25, 'Fernanda Costa', 'fernanda.costa@email.com', '123456'),
(26, 'Rafael Gomes', 'rafael.gomes@email.com', '123456'),
(27, 'Patrícia Rocha', 'patricia.rocha@email.com', '123456'),
(28, 'Bruno Martins', 'bruno.martins@email.com', '123456'),
(29, 'Camila Ribeiro', 'camila.ribeiro@email.com', '123456'),
(30, 'Diego Carvalho', 'diego.carvalho@email.com', '123456'),
(31, 'Larissa Pereira', 'larissa.pereira@email.com', '123456'),
(32, 'Felipe Rodrigues', 'felipe.rodrigues@email.com', '123456'),
(33, 'Amanda Fernandes', 'amanda.fernandes@email.com', '123456'),
(34, 'Gustavo Barbosa', 'gustavo.barbosa@email.com', '123456'),
(35, 'Beatriz Lopes', 'beatriz.lopes@email.com', '123456'),
(36, 'Eduardo Mendes', 'eduardo.mendes@email.com', '123456'),
(37, 'Natália Moreira', 'natalia.moreira@email.com', '123456'),
(38, 'Thiago Castro', 'thiago.castro@email.com', '123456'),
(39, 'Aline Nunes', 'aline.nunes@email.com', '123456'),
(40, 'Ricardo Teixeira', 'ricardo.teixeira@email.com', '123456'),
(41, 'Vanessa Cardoso', 'vanessa.cardoso@email.com', '123456'),
(42, 'Leonardo Freitas', 'leonardo.freitas@email.com', '123456');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
