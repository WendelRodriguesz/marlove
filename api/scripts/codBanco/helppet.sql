-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Fev-2022 às 11:22
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `helppet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroadocao`
--

CREATE TABLE `cadastroadocao` (
  `COD_INC` int(9) NOT NULL,
  `NOME` varchar(100) DEFAULT NULL,
  `DT_NASCIMENTO` date DEFAULT NULL,
  `CEP` varchar(100) DEFAULT NULL,
  `ENDERECO` varchar(100) DEFAULT NULL,
  `BAIRRO` varchar(100) DEFAULT NULL,
  `CIDADE` varchar(100) DEFAULT NULL,
  `CELULAR` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `PROFISSAO` varchar(100) DEFAULT NULL,
  `EMPRESA` varchar(100) DEFAULT NULL,
  `FILHOS` varchar(100) DEFAULT NULL,
  `QTD_PESSOAS` int(9) DEFAULT NULL,
  `CTT1` varchar(100) DEFAULT NULL,
  `CTT2` varchar(100) DEFAULT NULL,
  `NOME_ANIMAL` varchar(100) DEFAULT NULL,
  `CIENTE` varchar(20) DEFAULT NULL,
  `FACEBOOK` varchar(100) DEFAULT NULL,
  `INSTAGRAM` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastroadocao`
--

INSERT INTO `cadastroadocao` (`COD_INC`, `NOME`, `DT_NASCIMENTO`, `CEP`, `ENDERECO`, `BAIRRO`, `CIDADE`, `CELULAR`, `EMAIL`, `PROFISSAO`, `EMPRESA`, `FILHOS`, `QTD_PESSOAS`, `CTT1`, `CTT2`, `NOME_ANIMAL`, `CIENTE`, `FACEBOOK`, `INSTAGRAM`) VALUES
(20, 'Joze luiz pires da mota', '1222-12-12', '62100000', 'rua alameda jr,  n°35', '121212', 'SOBRAL', '1212121212', 'teste@gmail.com', 'DFRDFRDRF', 'sobralnet', '2 filhos 4 anos 2anos', 12, 'oneid 989898', 'jose 99999999', 'tufao', 'Sim', 'jose raimundo', 'jose raimundo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `ID_USUARIO` int(9) NOT NULL,
  `USUARIO` varchar(100) DEFAULT NULL,
  `SENHA` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`ID_USUARIO`, `USUARIO`, `SENHA`) VALUES
(1, 'admin', 'admin123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastroadocao`
--
ALTER TABLE `cadastroadocao`
  ADD PRIMARY KEY (`COD_INC`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastroadocao`
--
ALTER TABLE `cadastroadocao`
  MODIFY `COD_INC` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `ID_USUARIO` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
