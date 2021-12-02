-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2021 às 00:41
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
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `idinstituicao` int NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cnpj` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cep` varchar(8) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `numero` varchar(30) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`idinstituicao`, `nome`, `cnpj`, `cep`, `cidade`, `logradouro`, `numero`, `complemento`, `bairro`, `estado`) VALUES
(4, 'ACDC', '140005616020001', '18400230', 'Itapeva', 'Praça Vinte de Setembro', '164', 'perto da oficina servipex', 'Vila Ophelia', 'SP'),
(5, 'Lar do Amor', '619230900001', '18401200', 'Itapeva', 'Ipanema', '426', 'perto da igreja Nossa Senhora Aparecida', 'Vila Aparecida', 'SP'),
(6, 'Retiro dos artistas', '40448201000170', '22770102', 'Rio de Janeiro', 'Retiro Dos Artistas', '607', 'perto do antigo projac', 'Jacarepagua', 'RJ'),
(7, 'Ampara Animal', '286203160001', '4718000', 'São Paulo', 'Cap Otavio Machado', '345', 'Chacara Santo Antonio', 'Chacara Santo Antonio', 'SP'),
(8, 'Lar Vicentino', '711116290001', '18400', 'Itapeva', 'Praça Dom Sílvio Maria Dário', '127', 'perto da praça do asilo', 'Vila Ofelia', 'SP'),
(9, 'Instituto Luisa Mell de Assistencia aos animais', '218777960001', '9445690', 'Ribeirão Pires', 'Alzira', '227', '', 'Somma', 'SP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `rg` varchar(9) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `cep` varchar(8) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cidade` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `logradouro` varchar(200) DEFAULT NULL,
  `numero` varchar(30) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `estado` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nome`, `rg`, `cpf`, `email`, `senha`, `cep`, `cidade`, `logradouro`, `numero`, `complemento`, `bairro`, `estado`) VALUES
(15, 'hrcueçiovbi', '444444445', '44444444444', 'the5h1975@a.com', '123', NULL, NULL, 'Rua 9 de Julho', '12', 'de 284/285 ao fim', 'Vila São Miguel', 'SP');

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
-- Índices para tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`idinstituicao`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `doacao`
--
ALTER TABLE `doacao`
  MODIFY `iddoacao` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `idinstituicao` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `fk_doacao_instituição1` FOREIGN KEY (`instituição_idinstituição`) REFERENCES `instituicao` (`idinstituicao`),
  ADD CONSTRAINT `fk_doacao_usuario1` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
