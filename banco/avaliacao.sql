-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Maio-2020 às 17:19
-- Versão do servidor: 8.0.19
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `avaliacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int NOT NULL,
  `dataAgendamento` date DEFAULT NULL,
  `turno` int DEFAULT NULL COMMENT '0 - manhã, 1 - tarde, 2 - noite',
  `nomeCliente` varchar(255) DEFAULT NULL,
  `protocoloSolicitacao` int DEFAULT NULL,
  `idTecnico` int DEFAULT NULL,
  `idDesconto` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `dataAgendamento`, `turno`, `nomeCliente`, `protocoloSolicitacao`, `idTecnico`, `idDesconto`) VALUES
(1, '2020-05-23', 1, 'JOSé HILTON', 1234, 4, 1),
(2, '2020-05-24', 0, 'HELIO PONTES', 1235, 3, 2),
(3, '2020-05-24', 1, 'RENATO PAIVA', 1236, 3, 4),
(5, '2020-05-30', 0, 'JOSé MILTON', 12345, 2, 1),
(6, '2020-05-28', 0, 'CAROLINE ORSINA', 123467, 2, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `descontos`
--

CREATE TABLE `descontos` (
  `id` int NOT NULL,
  `motivoDesconto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `descontos`
--

INSERT INTO `descontos` (`id`, `motivoDesconto`) VALUES
(1, '50% de desconto por motivo tal'),
(2, 'um motivo'),
(3, 'outro motivo'),
(4, 'motival tal'),
(5, '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `id` int NOT NULL,
  `nomeEmpresa` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `empresas`
--

INSERT INTO `empresas` (`id`, `nomeEmpresa`) VALUES
(1, 'OSIRNET'),
(3, 'CHECKPLANT'),
(4, 'DOIS IRMAOS'),
(5, 'RENNER'),
(6, 'SUL LEITE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnicos`
--

CREATE TABLE `tecnicos` (
  `id` int NOT NULL,
  `nomeTecnico` varchar(255) DEFAULT NULL,
  `idEmpresa` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tecnicos`
--

INSERT INTO `tecnicos` (`id`, `nomeTecnico`, `idEmpresa`) VALUES
(1, 'FULANO', NULL),
(2, 'GUSTAVO SAN MARTINS', 1),
(3, 'RAFAEL SOUTO', 5),
(4, 'CAIO ZAMBONATO', 5),
(5, 'MATHEUS SOUSA', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idDesconto` (`idDesconto`),
  ADD KEY `idTecnico` (`idTecnico`);

--
-- Índices para tabela `descontos`
--
ALTER TABLE `descontos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEmpresa` (`idEmpresa`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `descontos`
--
ALTER TABLE `descontos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tecnicos`
--
ALTER TABLE `tecnicos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`idDesconto`) REFERENCES `descontos` (`id`),
  ADD CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`idTecnico`) REFERENCES `tecnicos` (`id`);

--
-- Limitadores para a tabela `tecnicos`
--
ALTER TABLE `tecnicos`
  ADD CONSTRAINT `tecnicos_ibfk_1` FOREIGN KEY (`idEmpresa`) REFERENCES `empresas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
