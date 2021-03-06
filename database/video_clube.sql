-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Jan-2021 às 18:21
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
(1, 'Johnny Depp', 'norte-americano', NULL, '1610637665_Ator1.jpg', '2021-01-14 15:21:05', NULL),
(2, 'Leonardo DiCaprio', 'norte-americano', NULL, '1610723815_Ator2.jpg', '2021-01-15 15:16:55', NULL),
(3, 'Will Smith', 'norte-americano', NULL, '1610723860_Ator3.jpg', '2021-01-15 15:17:40', NULL),
(4, 'Tom Cruise', 'norte-americano', NULL, '1610724016_Ator4.jpg', '2021-01-15 15:20:16', NULL),
(5, 'Brad Pitt', 'norte-americano', NULL, '1610724031_Ator5.jpg', '2021-01-15 15:20:31', NULL);

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
(1, 'Piratas das Caraíbas', 1, 'O pirata Jack Sparrow tem um navio que foi roubado pelo capitão Barbossa e pela sua tripulação. Com o navio de Sparrow, Barbossa vai invadir a cidade de Port Royal, levando consigo Elizabeth Swann, filha do governador. Para recuperar a sua embarcação, Sparrow recebe a ajuda de Will Turner, um grande amigo de Elizabeth. Eles desbravam os mares em direção à misteriosa Ilha da Morte, tentando impedir que os piratas-esqueleto derramem o sangue de Elizabeth para desfazer a maldição que os assola.', 1, 'Português/Inglês', 1, NULL, NULL),
(2, 'The Devil All The Time', 2, 'A história passa-se no sul de Ohio e da Virginia Ocidental, na parte rural das cidades. The Devil All the Time fala de histórias de personagens loucos surgidos no final da Segunda Guerra Mundial, nos anos 60. Willard Russell é um veterano atormentado por não conseguir salvar a sua bonita esposa, Charlotte, de uma morte agonizante por um cancro. Não importa quanto sangue ele tenha depositado em no seu “altar” para salvá-la, ele não consegue.\r\n\r\nCarl e Sandy Henderson são marido e mulher, mas também uma dupla de serial killers. Eles percorrem as estradas norte-americanas em busca de modelos para fotografar e exterminar. Roy é um pastor especialista em aranhas, que foge da lei ao lado de seu guitarrista aleijado, Theodore. E finalmente, preso no meio disso tudo, está Arvin Eugene Russell, o filho órfão de Willard e Charlotte. Ele cresceu e busca se tornar um homem bom, mas também violento na sua própria maneira.', 1, 'Português/Inglês', NULL, NULL, NULL),
(3, 'The Karate Kid', 3, 'Um rapaz de 12 anos chamado Dre Parker muda-se para a China com a mãe e vê-se numa  terra estranha. Ele sabe um pouco de caratê, mas as suas habilidades não são o bastante para enfrentar o valentão da escola, Cheng. Dre faz amizade com o Sr. Han, um mestre das artes marciais, que lhe ensina os segredos do kung fu na esperança de que o rapaz possa derrotar Cheng e, quem sabe, conquistar o coração da linda Mei Ying.', 1, 'Português/Inglês', NULL, NULL, NULL),
(4, 'Vaiana', 4, 'Uma jovem parte para uma missão de salvar o seu povo. Durante a jornada, Vaiana conhece o outrora poderoso semideus Maui, que a guia na sua busca para se tornar uma mestre em encontrar caminhos. Juntos, eles navegam pelo oceano em uma viagem incrível.', 1, 'Português/Inglês', NULL, NULL, NULL),
(5, 'O Homem Invisível', 5, 'Depois de finjir o próprio suicídio, um cientista enlouquecido usa seu poder para se tornar invisível e aterrorizar a sua ex-namorada. Quando a polícia se recusa a acreditar na sua história, ela decide resolver o assunto por conta própria.', 1, 'Português/Inglês', NULL, NULL, NULL);

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
(1, 'Aventura', NULL, NULL, NULL),
(2, 'Suspense', NULL, NULL, NULL),
(3, 'Drama', NULL, NULL, NULL),
(4, 'Fantasia', NULL, NULL, NULL),
(5, 'Terror', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `tipo_user` varchar(20) NOT NULL DEFAULT 'normal' COMMENT 'normal ou admin',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `tipo_user`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rui', 'a14111@aedah.pt', NULL, '$2y$10$x4qbkaCpw6Bi6GzTqu99we42PhCp29dn/UOgpr0pR6Rvc3oItU.dK', 'admin', NULL, '2021-01-14 14:01:21', '2021-01-14 14:01:21');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atores`
--
ALTER TABLE `atores`
  MODIFY `id_ator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
