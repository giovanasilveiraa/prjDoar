-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2021 às 00:47
-- Versão do servidor: 8.0.27
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_doar`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacao`
--

CREATE TABLE `doacao` (
  `iddoacao` int NOT NULL,
  `valor` double DEFAULT NULL,
  `usuario_idusuario` int NOT NULL,
  `instituição_idinstituição` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_instituicao`
--

CREATE TABLE `endereco_instituicao` (
  `idendereco_instituicao` int NOT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `numero` varchar(30) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_usuario`
--

CREATE TABLE `endereco_usuario` (
  `idendereco` int NOT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `numero` varchar(30) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituição`
--

CREATE TABLE `instituição` (
  `idinstituição` int NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `idendereco_instituicao` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `rg` varchar(9) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `idendereco` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`iddoacao`),
  ADD KEY `fk_doacao_usuario1_idx` (`usuario_idusuario`),
  ADD KEY `fk_doacao_instituição1_idx` (`instituição_idinstituição`);

--
-- Índices para tabela `endereco_instituicao`
--
ALTER TABLE `endereco_instituicao`
  ADD PRIMARY KEY (`idendereco_instituicao`);

--
-- Índices para tabela `endereco_usuario`
--
ALTER TABLE `endereco_usuario`
  ADD PRIMARY KEY (`idendereco`);

--
-- Índices para tabela `instituição`
--
ALTER TABLE `instituição`
  ADD PRIMARY KEY (`idinstituição`,`idendereco_instituicao`),
  ADD UNIQUE KEY `cnpj_UNIQUE` (`cnpj`),
  ADD KEY `fk_instituição_endereco_instituicao1_idx` (`idendereco_instituicao`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`,`idendereco`),
  ADD UNIQUE KEY `rg_UNIQUE` (`rg`),
  ADD UNIQUE KEY `cpf_UNIQUE` (`cpf`),
  ADD KEY `fk_usuario_endereco_idx` (`idendereco`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `iddoacao` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `endereco_instituicao`
--
ALTER TABLE `endereco_instituicao`
  MODIFY `idendereco_instituicao` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `endereco_usuario`
--
ALTER TABLE `endereco_usuario`
  MODIFY `idendereco` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `instituição`
--
ALTER TABLE `instituição`
  MODIFY `idinstituição` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `fk_doacao_instituição1` FOREIGN KEY (`instituição_idinstituição`) REFERENCES `instituição` (`idinstituição`),
  ADD CONSTRAINT `fk_doacao_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);

--
-- Limitadores para a tabela `instituição`
--
ALTER TABLE `instituição`
  ADD CONSTRAINT `fk_instituição_endereco_instituicao1` FOREIGN KEY (`idendereco_instituicao`) REFERENCES `endereco_instituicao` (`idendereco_instituicao`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_endereco` FOREIGN KEY (`idendereco`) REFERENCES `endereco_usuario` (`idendereco`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
