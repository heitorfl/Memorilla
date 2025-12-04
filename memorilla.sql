-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2025 às 20:58
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `memorilla`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `descricao` varchar(2000) NOT NULL,
  `imagem` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `descricao`, `imagem`) VALUES
(1, 'Five', 59.99, 'Five é o coração (e o cérebro) por trás de muitas das missões de salvar o mundo da família Hargreeves. Esta figura é um item obrigatório para qualquer fã de The Umbrella Academy e um ótimo complemento para coleções de Funko Pop! de super-heróis, ficção científica ou séries de TV aclamadas.', '/Memorilla/src/assets/img/produto1.png'),
(2, 'Klaus', 99.99, 'Klaus é o alívio cômico e a alma inesperadamente profunda da Umbrella Academy. Esta figura representa sua complexidade, seu estilo rock and roll e seu papel vital como o médium da família.\r\nSe você ama personagens cativantes, engraçados e espirituais, este Funko Pop! de Klaus é essencial.', '/Memorilla/src/assets/img/produto2.png'),
(3, 'Ben', 129.99, 'Ben é uma figura central e trágica na história da Umbrella Academy, oferecendo tanto apoio moral quanto um grande potencial de batalha (graças aos seus poderes interdimensionais). Esta peça é um tributo ao \"irmão fantasma\" e um lembrete de que ele nunca está realmente ausente.', '/Memorilla/src/assets/img/produto3.png'),
(4, 'Colar Victor', 25.99, 'Este colar é ideal para fãs que admiram a evolução e a força silenciosa de Viktor. É uma peça sutil, mas profundamente significativa, que carrega a história de um personagem que encontrou sua voz e seu verdadeiro eu.', '/Memorilla/src/assets/img/produto4.png'),
(5, 'Faca Diego', 200.99, 'Esta faca não é apenas um item de exibição; é um pedaço da atitude destemida de Diego. É o acessório perfeito para colecionadores de adereços de filmes e TV que valorizam peças com um toque tático e sombrio.', '/Memorilla/src/assets/img/produto5.png'),
(6, 'Camiseta Luther', 90.99, 'Esta camiseta é perfeita para os fãs que admiram a lealdade, o senso de dever e a força interior de Luther. É uma peça discreta, mas que instantaneamente comunica sua paixão pela série e pelo personagem que sacrificou tanto pelo bem maior.', '/Memorilla/src/assets/img/produto6.png'),
(7, 'Perfume Allison', 259.99, 'Este perfume é para a mulher que possui confiança inata, charme irresistível e uma presença poderosa. É perfeito para ocasiões onde você deseja que sua entrada e sua partida deixem uma impressão duradoura e inquestionável.', '/Memorilla/src/assets/img/produto7.png'),
(8, 'Creme Pitts', 59.99, 'Para quem é imprevisível, atrevido e abraça o caos. É o toque final perfeito para uma noite de aventura ou para simplesmente se sentir inegavelmente poderosa.', '/Memorilla/src/assets/img/produto8.png'),
(9, 'Finalizador Allisson', 69.99, 'Aplique nos cabelos limpos e úmidos, espalhando uniformemente. Amasse os cachos com as mãos (técnica de scrunching) e deixe secar naturalmente ou use um difusor.', '/Memorilla/src/assets/img/produto9.png'),
(10, 'Ingresso Físico', 70.99, 'Ingresso físico para acesso ao museu!', '/Memorilla/src/assets/img/produto10.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `token` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`, `token`) VALUES
(1, 'teste@gmail.com', '1234', 1),
(2, 'aaa@gmail.com', '1234', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
