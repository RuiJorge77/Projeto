-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2020 às 11:20
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `video_clube`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atores`
--

CREATE TABLE `atores` (
  `id_ator` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nacionalidade` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_nascimento` datetime DEFAULT NULL,
  `fotografia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `atores`
--

INSERT INTO `atores` (`id_ator`, `nome`, `nacionalidade`, `data_nascimento`, `fotografia`, `updated_at`, `created_at`) VALUES
(1, 'Johnny Depp', 'norte-americano', '1963-06-09 00:00:00', 'Ator1.jpg', NULL, NULL),
(2, 'Leonardo DiCaprio', 'norte-americano', '1974-11-11 00:00:00', 'Ator2.jpg', NULL, NULL),
(3, 'Will Smith', 'norte-americano', '1968-09-25 00:00:00', 'Ator3.jpg', NULL, NULL),
(4, 'Tom Cruise', 'norte-americano', '1962-07-03 00:00:00', 'Ator4.jpg', NULL, NULL),
(5, 'Brad Pitt', 'norte-americano', '1963-12-18 00:00:00', 'Ator5.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id_filme` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `id_genero` int(11) DEFAULT NULL,
  `sinopse` text,
  `quantidade` smallint(6) NOT NULL,
  `idioma` varchar(30) DEFAULT NULL,
  `id_ator` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id_filme`, `titulo`, `id_genero`, `sinopse`, `quantidade`, `idioma`, `id_ator`, `updated_at`, `created_at`) VALUES
(1, 'Piratas das Caraíbas', 3, 'O pirata Jack Sparrow tem um navio que foi roubado pelo capitão Barbossa e pela sua tripulação. Com o navio de Sparrow, Barbossa vai invadir a cidade de Port Royal, levando consigo Elizabeth Swann, filha do governador. Para recuperar a sua embarcação, Sparrow recebe a ajuda de Will Turner, um grande amigo de Elizabeth. Eles desbravam os mares em direção à misteriosa Ilha da Morte, tentando impedir que os piratas-esqueleto derramem o sangue de Elizabeth para desfazer a maldição que os assola.', 1, 'Português/Inglês', 1, NULL, NULL),
(2, 'The Devil All The Time', 4, 'A história passa-se no sul de Ohio e da Virginia Ocidental, na parte rural das cidades. The Devil All the Time fala de histórias de personagens loucos surgidos no final da Segunda Guerra Mundial, nos anos 60. Willard Russell é um veterano atormentado por não conseguir salvar a sua bonita esposa, Charlotte, de uma morte agonizante por um cancro. Não importa quanto sangue ele tenha depositado em no seu “altar” para salvá-la, ele não consegue.\r\n\r\nCarl e Sandy Henderson são marido e mulher, mas também uma dupla de serial killers. Eles percorrem as estradas norte-americanas em busca de modelos para fotografar e exterminar. Roy é um pastor especialista em aranhas, que foge da lei ao lado de seu guitarrista aleijado, Theodore. E finalmente, preso no meio disso tudo, está Arvin Eugene Russell, o filho órfão de Willard e Charlotte. Ele cresceu e busca se tornar um homem bom, mas também violento na sua própria maneira.', 1, 'Português/Inglês', NULL, NULL, NULL),
(3, 'The Karate Kid', 5, 'Um rapaz de 12 anos chamado Dre Parker muda-se para a China com a mãe e vê-se numa  terra estranha. Ele sabe um pouco de caratê, mas as suas habilidades não são o bastante para enfrentar o valentão da escola, Cheng. Dre faz amizade com o Sr. Han, um mestre das artes marciais, que lhe ensina os segredos do kung fu na esperança de que o rapaz possa derrotar Cheng e, quem sabe, conquistar o coração da linda Mei Ying.', 1, 'Português/Inglês', NULL, NULL, NULL),
(4, 'Vaiana', 2, 'Uma jovem parte para uma missão de salvar o seu povo. Durante a jornada, Vaiana conhece o outrora poderoso semideus Maui, que a guia na sua busca para se tornar uma mestre em encontrar caminhos. Juntos, eles navegam pelo oceano em uma viagem incrível.', 1, 'Português/Inglês', NULL, NULL, NULL),
(5, 'O Homem Invisível', 1, 'Depois de finjir o próprio suicídio, um cientista enlouquecido usa seu poder para se tornar invisível e aterrorizar a sua ex-namorada. Quando a polícia se recusa a acreditar na sua história, ela decide resolver o assunto por conta própria.', 1, 'Português/Inglês', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `generos`
--

CREATE TABLE `generos` (
  `id_genero` int(11) NOT NULL,
  `designacao` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacoes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `generos`
--

INSERT INTO `generos` (`id_genero`, `designacao`, `observacoes`, `created_at`, `updated_at`) VALUES
(1, 'Terror', NULL, NULL, NULL),
(2, 'Fantasia', NULL, NULL, NULL),
(3, 'Aventura', NULL, NULL, NULL),
(4, 'Suspense', NULL, NULL, NULL),
(5, 'drama', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atores`
--
ALTER TABLE `atores`
  ADD PRIMARY KEY (`id_ator`);

--
-- Indexes for table `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id_filme`);

--
-- Indexes for table `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id_genero`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atores`
--
ALTER TABLE `atores`
  MODIFY `id_ator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `generos`
--
ALTER TABLE `generos`
  MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
