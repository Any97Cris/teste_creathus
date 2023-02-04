-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Fev-2023 às 20:35
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `entretenimentos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

DROP TABLE IF EXISTS `filmes`;
CREATE TABLE IF NOT EXISTS `filmes` (
  `filme_id` int NOT NULL AUTO_INCREMENT,
  `filme_titulo` varchar(255) NOT NULL,
  `filme_autor` varchar(100) NOT NULL,
  `filme_descricao` text NOT NULL,
  `filme_ano` char(4) NOT NULL,
  `filme_path` varchar(40) NOT NULL,
  PRIMARY KEY (`filme_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`filme_id`, `filme_titulo`, `filme_autor`, `filme_descricao`, `filme_ano`, `filme_path`) VALUES
(8, 'Deu a louca na Chapeuzinho', 'Fulano', 'A tranquilidade da vida na floresta é alterada quando um livro de receitas é roubado. Os suspeitos do crime são Chapeuzinho Vermelho, o Lobo Mau, o Lenhador e a Vovó, mas cada um deles conta uma história diferente sobre o ocorrido. Cabe então ao inspetor Nick Pirueta investigar o caso e descobrir a verdade.', '2009', '220eb2e403116a0b583e5dd5b7cdcb20.jpg'),
(7, 'O Lorax', 'Fulano', 'O Lorax', '2015', '3f14e46a18a6fb91a327b8bad3c73e14.jpg'),
(9, 'Liga da Justiça', 'Fulano', 'Liga da Justiça', '2022', 'cf46d34c9e27d2c2c06e1296d420e3b6.jpg'),
(10, 'Monstro SA', 'Fulano', 'Monstros SA', '2005', '4aa4b529fa4506a0a32df7018c49f8bd.jpg'),
(11, 'Robôs', 'Fulano', 'Robôs', '2009', 'a4a0dd23b6475220cf1c8f0061e36930.jpg'),
(12, 'Doutor Estranho', 'Fulano', 'Doutor Estranho', '2020', '07b14518b56093c8efd7e7c2c8bb2ea0.jpg'),
(13, 'Avatar', 'Fulano', 'Avatar', '2022', '591d943de5ffeedf9777e773a027e002.jpg'),
(14, 'Monstros SA 2', 'Fulano', 'Monstros SA', '2010', '141ee94b39dcc688bdbe3813fddc9913.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
