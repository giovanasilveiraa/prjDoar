-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Dez-2021 às 01:53
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
  `idusuario` int NOT NULL,
  `idinstituicao` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `doacao`
--

INSERT INTO `doacao` (`iddoacao`, `valor`, `idusuario`, `idinstituicao`) VALUES
(1, 15.5, 15, 1),
(2, 16.5, 15, 1),
(3, 13, 16, 1),
(4, 14, 16, 1);

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
  `estado` char(2) DEFAULT NULL,
  `descricao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`idinstituicao`, `nome`, `cnpj`, `cep`, `cidade`, `logradouro`, `numero`, `complemento`, `bairro`, `estado`, `descricao`) VALUES
(1, 'ACDC', '140005616020001', '18400230', 'Itapeva', 'Praça Vinte de Setembro', '164', '', 'Vila Ophelia', 'SP', 'Fundada em 1993 a ACDC (Associação dos Centros de Desenvolvimento da Criança é uma instituição filantrópica com princípios cristãos. Temos a disposição dos alunos uma biblioteca com muitos livros que recebemos de doações além de livros atuais que são adquiridos pela entidade, contamos com palestras para os Alunos e Pais buscando o fortalecimento de vinculo e aproximando nosso projeto das famílias atendidas.'),
(2, 'Lar do Amor', '619230900001', '18401200', 'Itapeva', 'Ipanema', '426', 'perto da igreja Nossa Senhora Aparecida', 'Vila Aparecida', 'SP', 'A instituição privada de educação básica LAR DO AMOR CRECHE fica no bairro de Vila Aparecida , em Itapeva-SP, e oferece aulas de Educação infantil.'),
(3, 'Doutores da Alegria', '00491904000167', '05410000', 'São Paulo', 'Rua Alves Guimarães', '73', '', 'Pinheiros', 'SP', 'Doutores da Alegria é uma organização da sociedade civil sem fins lucrativos que introduziu a arte do palhaço no universo da saúde, intervindo junto a crianças, adolescentes e outros públicos em situação de vulnerabilidade e risco social em hospitais públicos.'),
(4, 'Ampara Animal', '286203160001', '4718000', 'São Paulo', 'Rua Capitão Otávio Machado', '345', '', 'Chácara Santo Antônio (Zona Sul)', 'SP', 'Atualmente a ONG vive das contribuições das diretoras, de doações e contribuições dos padrinhos para cuidar dos aproximadamente 400 cães que vivem na chácara. O espaço hoje construído seria ideal para abrigar até 300 animais, mas os abandonos crescentes e os pedidos de ajuda contribuíram para a superlotação da ONG.'),
(5, 'Lar Vicentino', '49802762000109', '18400004', 'Itapeva', 'Praça Dom Sílvio Maria Dário', '127', '', 'CENTRO', 'SP', 'O Lar Vicentino de Itapeva, é uma entidade civil, de caráter filantrópico , sem fins lucrativos fundado em 1926, atualmente residem nessa entidade , 102 idosos e conta com 61 funcionários. \r\nPossui a seguinte Finalidade Estatutária:\r\n- Prestar serviços de acolhimento institucional aos idosos em situação de vulnerabilidade ou risco social e pessoal, na área da Assistência Social, proporcionando-lhes proteção social especial de alta complexidade.'),
(6, 'Instituto Luisa Mell de Assistencia aos animais', '218777960001', '9445690', 'Ribeirão Pires', 'Rua Alzira', '227', '', 'Somma', 'SP', 'Fundado em fevereiro de 2015, o Instituto Luisa Mell atua principalmente no resgate de animais feridos ou em situação de risco, recuperação e adoção. Mantemos um abrigo com cerca de 300 animais, entre cães e gatos, todos resgatados das ruas, onde eles são protegidos, alimentados e aguardam pela chance de serem adotados');

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
(15, 'hrcueçiovbi', '444444445', '44444444444', 'the5h1975@a.com', '123', NULL, NULL, 'Rua 9 de Julho', '12', 'de 284/285 ao fim', 'Vila São Miguel', 'SP'),
(16, 'tgfebggtre', '444444444', '6767676766', 'a@a.com', '123', '18404130', 'fv', 'fs', '12', NULL, 'vfrvf', 'sp');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `doacao`
--
ALTER TABLE `doacao`
  ADD PRIMARY KEY (`iddoacao`),
  ADD KEY `fk_doacao_usuario1_idx` (`idusuario`),
  ADD KEY `fk_doacao_instituição1_idx` (`idinstituicao`);

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
  MODIFY `iddoacao` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `idinstituicao` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `doacao`
--
ALTER TABLE `doacao`
  ADD CONSTRAINT `fk_doacao_instituição1` FOREIGN KEY (`idinstituicao`) REFERENCES `instituicao` (`idinstituicao`),
  ADD CONSTRAINT `fk_doacao_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
