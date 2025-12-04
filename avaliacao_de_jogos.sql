-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2025 às 02:43
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
-- Banco de dados: `avaliacao_de_jogos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`id`, `usuario`, `senha`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacoes`
--

CREATE TABLE `avaliacoes` (
  `id` int(11) NOT NULL,
  `jogo_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `avaliacao` int(11) NOT NULL CHECK (`avaliacao` between 0 and 5),
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `avaliacao` decimal(2,1) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `jogos`
--

INSERT INTO `jogos` (`id`, `nome`, `genero`, `avaliacao`, `descricao`, `imagem`) VALUES
(20, 'Minecraft', 'Survival', 0.0, 'Minecraft é um jogo eletrônico sandbox de construção, exploração e sobrevivência, onde os jogadores coletam recursos para construir o que quiserem em um mundo virtual feito de blocos. A liberdade criativa é o foco principal, com modos que vão desde a sobrevivência contra criaturas hostis até a criação ilimitada no modo Criativo. Os jogadores podem jogar sozinhos ou com amigos em um mundo que pode ser moldado por sua imaginação. ', '1764810849_herobrine_minecraft.jpg'),
(25, 'Silent hill 1', 'Survival Horror', 0.0, 'Em Silent Hill, Harry Mason vai à cidade de névoa procurar sua filha adotiva, Cheryl, após um acidente de carro que a fez desaparecer. Ao explorar a cidade, ele descobre que Cheryl tem uma conexão com um culto local que planeja usar os poderes dela para trazer sua deusa à vida. O culto acredita que Cheryl é a reencarnação de Alessa, uma garota que sofreu um ritual doloroso décadas antes. ', '1764811597_sl1.jpg'),
(26, 'Silent hill f', 'Survival Horror', 0.0, 'Em Silent Hill f, a estudante do ensino médio Hinako Shimizu vive no Japão dos anos 1960, quando uma névoa misteriosa e aterrorizante envolve sua cidade, Ebisugaoka. Hinako precisa lutar para sobreviver contra monstros grotescos e desvendar enigmas complexos enquanto explora a cidade transformada, lidando com temas de dúvida, arrependimento e escolhas inevitáveis. A história foi criada pelo autor Ryukishi07, com trilha sonora de Akira Yamaoka e uma atmosfera que mistura o horror psicológico japonês com uma história que explora a beleza no horror. ', '1764811636_slf.jpg'),
(27, 'Hytale', 'Survival', 0.0, 'Hytale é um jogo de aventura e construção em mundo aberto, similar ao Minecraft, com um foco maior em elementos de RPG e exploração. Ele se passa em um mundo gerado proceduralmente com diversos biomas, criaturas, dungeons e encontros aleatórios. O jogo oferece tanto um modo aventura, que permite jogar com amigos, quanto um modo criativo para construção livre, além de um grande suporte para criação e compartilhamento de mods e conteúdo personalizado. ', '1764811731_hytale.jpg'),
(28, 'Dark Souls 3', 'Dark Fantasy', 0.0, 'Em Dark Souls 3, o mundo está morrendo e o ciclo do fogo está chegando ao fim, com os Lords das Cinzas se recusando a cumprir seu dever de acender a chama novamente. O jogador, um \"Inaceso\" (Unkindled), é levantado de sua tumba de cinzas e deve caçar e derrotar esses Lords para retornar suas brasas e permitir que a chama seja acesa e o ciclo recomece. ', '1764811824_Darksouls3.jpg'),
(29, 'Hello Kitty Island', 'Cozy ', 0.0, 'Hello Kitty Island Adventure é um jogo que tenho apreciado até agora, apesar de sua natureza lenta e às vezes frustrante. Sei que o jogo tem uma equipe de desenvolvimento muito receptiva que está recebendo feedback e trabalhando para melhorar as reclamações comuns, o que é algo ótimo (e raro) de se ver. Há muitos elementos de qualidade de vida que precisam ser melhorados, bem como conteúdo geral que oferece mais coisas para fazer entre as missões limitadas no tempo, mas o jogo ainda é muito jovem (em seu lançamento completo, a versão Apple Arcade existe há cerca de um ano, acredito, mas isso também é novo) e estou bastante confiante de que há muito o que esperar com atualizações futuras.', '1764811955_hkia.jpg'),
(30, 'Darkwood', 'Survival Horror', 0.0, 'Em Darkwood, o jogador deve sobreviver em uma floresta misteriosa e macabra, vasculhando e coletando recursos durante o dia para se preparar e se defender de horrores que emergem à noite. O jogo não tem guias e a exploração é feita por conta própria, com o mundo sendo gerado aleatoriamente a cada partida. As decisões tomadas afetam a história e seus habitantes, que são personagens estranhos e com segredos. ', 'Darkwood.jpg'),
(31, 'Fear and Hunger', 'RPG', 0.0, 'Fear & Hunger é um RPG de terror sombrio em que os jogadores exploram uma masmorra sinistra para resgatar um personagem ou buscar vingança, dependendo da classe escolhida. O jogo é conhecido por sua dificuldade, atmosfera hostil e escolhas cruéis, com consequências permanentes para os membros do corpo e a saúde mental do personagem. O mundo é repleto de deuses antigos e novos, facções em guerra e uma história complexa de caos e conflito. ', '1764812470_fh.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sugestoes`
--

CREATE TABLE `sugestoes` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha_hash` varchar(255) NOT NULL,
  `criado_em` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jogo_id` (`jogo_id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Índices de tabela `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sugestoes`
--
ALTER TABLE `sugestoes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `avaliacoes`
--
ALTER TABLE `avaliacoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `sugestoes`
--
ALTER TABLE `sugestoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `avaliacoes`
--
ALTER TABLE `avaliacoes`
  ADD CONSTRAINT `avaliacoes_ibfk_1` FOREIGN KEY (`jogo_id`) REFERENCES `jogos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `avaliacoes_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
