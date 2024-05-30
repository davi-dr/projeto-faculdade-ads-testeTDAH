-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/05/2024 às 18:04
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
-- Banco de dados: `testetdah`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pergunta`
--

CREATE TABLE `pergunta` (
  `id` int(11) NOT NULL,
  `descricao` varchar(256) NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pergunta_quiz`
--

CREATE TABLE `pergunta_quiz` (
  `pergunta_id` int(11) NOT NULL,
  `posicao_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pergunta_resposta`
--

CREATE TABLE `pergunta_resposta` (
  `pergunta_id` int(11) NOT NULL,
  `resposta_posicao_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `posicao`
--

CREATE TABLE `posicao` (
  `id` int(11) NOT NULL,
  `sequencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(256) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `resposta`
--

CREATE TABLE `resposta` (
  `id` int(11) NOT NULL,
  `descricao` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `resposta_posicao`
--

CREATE TABLE `resposta_posicao` (
  `id` int(11) NOT NULL,
  `resposta_id` int(11) NOT NULL,
  `posicao_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `resposta_usuario`
--

CREATE TABLE `resposta_usuario` (
  `id` int(11) NOT NULL,
  `pergunta_quiz_pergunta_id` int(11) NOT NULL,
  `pergunta_quiz_posicao_id` int(11) NOT NULL,
  `pergunta_quiz_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `resposta_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `email` varchar(64) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pergunta_quiz`
--
ALTER TABLE `pergunta_quiz`
  ADD PRIMARY KEY (`pergunta_id`,`posicao_id`,`quiz_id`),
  ADD KEY `fk_pergunta_has_posicao_posicao1_idx` (`posicao_id`),
  ADD KEY `fk_pergunta_has_posicao_pergunta1_idx` (`pergunta_id`),
  ADD KEY `fk_pergunta_has_posicao_quiz1_idx` (`quiz_id`);

--
-- Índices de tabela `pergunta_resposta`
--
ALTER TABLE `pergunta_resposta`
  ADD PRIMARY KEY (`pergunta_id`,`resposta_posicao_id`),
  ADD KEY `fk_pergunta_has_resposta_posicao_resposta_posicao1_idx` (`resposta_posicao_id`),
  ADD KEY `fk_pergunta_has_resposta_posicao_pergunta1_idx` (`pergunta_id`);

--
-- Índices de tabela `posicao`
--
ALTER TABLE `posicao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `resposta_posicao`
--
ALTER TABLE `resposta_posicao`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_resposta_has_posicao_posicao1_idx` (`posicao_id`),
  ADD KEY `fk_resposta_has_posicao_resposta1_idx` (`resposta_id`);

--
-- Índices de tabela `resposta_usuario`
--
ALTER TABLE `resposta_usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pergunta_quiz_has_usuario_usuario1_idx` (`usuario_id`),
  ADD KEY `fk_pergunta_quiz_has_usuario_pergunta_quiz1_idx` (`pergunta_quiz_pergunta_id`,`pergunta_quiz_posicao_id`,`pergunta_quiz_id`),
  ADD KEY `fk_resposta_usuario_resposta1_idx` (`resposta_id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pergunta`
--
ALTER TABLE `pergunta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `posicao`
--
ALTER TABLE `posicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resposta`
--
ALTER TABLE `resposta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resposta_posicao`
--
ALTER TABLE `resposta_posicao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resposta_usuario`
--
ALTER TABLE `resposta_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pergunta_quiz`
--
ALTER TABLE `pergunta_quiz`
  ADD CONSTRAINT `fk_pergunta_has_posicao_pergunta1` FOREIGN KEY (`pergunta_id`) REFERENCES `pergunta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pergunta_has_posicao_posicao1` FOREIGN KEY (`posicao_id`) REFERENCES `posicao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pergunta_has_posicao_quiz1` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `pergunta_resposta`
--
ALTER TABLE `pergunta_resposta`
  ADD CONSTRAINT `fk_pergunta_has_resposta_posicao_pergunta1` FOREIGN KEY (`pergunta_id`) REFERENCES `pergunta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pergunta_has_resposta_posicao_resposta_posicao1` FOREIGN KEY (`resposta_posicao_id`) REFERENCES `resposta_posicao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `resposta_posicao`
--
ALTER TABLE `resposta_posicao`
  ADD CONSTRAINT `fk_resposta_has_posicao_posicao1` FOREIGN KEY (`posicao_id`) REFERENCES `posicao` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_resposta_has_posicao_resposta1` FOREIGN KEY (`resposta_id`) REFERENCES `resposta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `resposta_usuario`
--
ALTER TABLE `resposta_usuario`
  ADD CONSTRAINT `fk_pergunta_quiz_has_usuario_pergunta_quiz1` FOREIGN KEY (`pergunta_quiz_pergunta_id`,`pergunta_quiz_posicao_id`,`pergunta_quiz_id`) REFERENCES `pergunta_quiz` (`pergunta_id`, `posicao_id`, `quiz_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pergunta_quiz_has_usuario_usuario1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_resposta_usuario_resposta1` FOREIGN KEY (`resposta_id`) REFERENCES `resposta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
