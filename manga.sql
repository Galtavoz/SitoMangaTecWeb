-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Creato il: Feb 03, 2018 alle 18:28
-- Versione del server: 10.1.13-MariaDB
-- Versione PHP: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manga`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'malick', 'gatto'),
(2, 'galta', 'gatto');

-- --------------------------------------------------------

--
-- Struttura della tabella `capitoli`
--

CREATE TABLE `capitoli` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `nomecap` varchar(100) DEFAULT NULL,
  `dataagg` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `capitoli`
--

INSERT INTO `capitoli` (`id`, `nome`, `numero`, `nomecap`, `dataagg`) VALUES
(1, 'Bleach', 865, 'A Perfet End', '2016-08-15'),
(2, 'Bleach', 686, 'Death and Strawberries', '2016-08-22');

-- --------------------------------------------------------

--
-- Struttura della tabella `manga`
--

CREATE TABLE `manga` (
  `nome` varchar(100) NOT NULL,
  `autore` varchar(100) NOT NULL,
  `inizio` date NOT NULL,
  `fine` date NOT NULL,
  `descrizione` text NOT NULL,
  `capitoli` int(11) NOT NULL,
  `ultimo` date NOT NULL,
  `commenti` int(11) NOT NULL,
  `mipiace` int(11) NOT NULL,
  `immagine` varchar(100) NOT NULL,
  `codice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `manga`
--

INSERT INTO `manga` (`nome`, `autore`, `inizio`, `fine`, `descrizione`, `capitoli`, `ultimo`, `commenti`, `mipiace`, `immagine`, `codice`) VALUES
('Bleach', 'Kubo,Tite', '2001-08-07', '2016-08-22', 'Ichigo Kurosaki has always been able to see ghosts, but this ability does not change his life nearly as much as his close encounter with Rukia Kuchiki, a Soul Reaper and member of the mysterious Soul Society. While fighting a Hollow, an evil spirit that preys on humans who display psychic energy, Rukia attempts to lend Ichigo some of her powers so that he can save his family; but much to her surprise, Ichigo absorbs every last drop of her energy. Now a full-fledged Soul Reaper himself, Ichigo quickly learns that the world he inhabits is one full of dangerous spirits and, along with Rukia--who is slowly regaining her powers--it is Ichigos job to protect the innocent from Hollows and help the spirits themselves find peace.', 686, '2016-08-18', 100, 500, 'img/bleach.jpg', 1012),
('Boku no Hero Academia', ' Horikoshi, Kouhei', '2014-07-07', '0000-00-00', 'The story is set in the modern day, except people with special powers have become commonplace throughout the world. A boy named Izuku Midoriya has no powers, but he still dreams.', 163, '2017-12-10', 400, 3789, 'img/boku.jpg', 987),
('Naruto', 'Kishimoto, Masashi', '1999-10-04', '2016-11-10', 'Before Naruto''s birth, a great demon fox had attacked the Hidden Leaf Village. A man known as the 4th Hokage sealed the demon inside the newly born Naruto, causing him to unknowingly grow up detested by his fellow villagers. Despite his lack of talent in many areas of ninjutsu, Naruto strives for only one goal: to gain the title of Hokage, the strongest ninja in his village. Desiring the respect he never received, Naruto works towards his dream with fellow friends Sasuke and Sakura and mentor Kakashi as they go through many trials and battles that come with being a ninja.\r\n\r\n', 700, '2016-11-13', 200, 300, 'img/art1.jpg', 6543),
('One Piece', 'Oda, Eiichiro', '1997-07-19', '0000-00-00', 'Seeking to be the greatest pirate in the world, young Monkey D. Luffy, endowed with stretching powers from the legendary &quot;Gomu Gomu&quot; Devil''s fruit, travels towards the Grand Line in search of One Piece, the greatest treasure in the world.', 891, '2018-01-12', 3000, 50000, 'img/1P.jpg', 654),
('One-Punch Man', 'One', '2012-06-14', '0000-00-00', 'Follows the life of an average hero who manages to win all battles with only one punch. This ability seems to frustrate him as he no longer feels the thrill and adrenaline of fighting a tough battle, which leads to him questioning his past desire of being strong.', 133, '2018-01-23', 600, 1000, 'img/One.jpg', 3456),
('Sword Art Online', 'Kawahara Reki', '2009-04-10', '0000-00-00', 'The only way to escape is to ''clear'' the game. Game over means actual ''death'' ---- The ten thousand who have logged onto the as of yet mysterious game ''Sword Art Online'' have been forced into this perilous death game. Protagonist Kirito, one of the many gamers, has greeted this......', 160, '2018-02-02', 213, 212, 'img/sao.jpg', 99986);

-- --------------------------------------------------------

--
-- Struttura della tabella `pagine`
--

CREATE TABLE `pagine` (
  `id` int(11) NOT NULL,
  `pagina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `pagine`
--

INSERT INTO `pagine` (`id`, `pagina`) VALUES
(1, 'Home'),
(2, 'AboutUs'),
(3, 'Popular'),
(4, 'Lastest');

-- --------------------------------------------------------

--
-- Struttura della tabella `preferiti`
--

CREATE TABLE `preferiti` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `utente` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `preferiti`
--

INSERT INTO `preferiti` (`id`, `nome`, `utente`) VALUES
(1, 'Bleach', 'galta'),
(2, 'Boku no Hero Academia', 'galta'),
(3, 'Naruto', 'malick'),
(4, 'One Piece', 'topo'),
(5, 'One-Punch Man', 'malick');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`user`, `pass`) VALUES
('admin', 'admin'),
('galta', 'gatto'),
('malick', 'gatto\r\n'),
('topo', 'password');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `capitoli`
--
ALTER TABLE `capitoli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome` (`nome`);

--
-- Indici per le tabelle `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`nome`);

--
-- Indici per le tabelle `pagine`
--
ALTER TABLE `pagine`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `preferiti`
--
ALTER TABLE `preferiti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome` (`nome`),
  ADD KEY `utente` (`utente`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT per la tabella `capitoli`
--
ALTER TABLE `capitoli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT per la tabella `pagine`
--
ALTER TABLE `pagine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `capitoli`
--
ALTER TABLE `capitoli`
  ADD CONSTRAINT `capitoli_ibfk_1` FOREIGN KEY (`nome`) REFERENCES `manga` (`nome`);

--
-- Limiti per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  ADD CONSTRAINT `preferiti_ibfk_1` FOREIGN KEY (`nome`) REFERENCES `manga` (`nome`),
  ADD CONSTRAINT `preferiti_ibfk_2` FOREIGN KEY (`utente`) REFERENCES `utenti` (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
