-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 07:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

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
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(11) NOT NULL,
  `aboutus` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `aboutus`) VALUES
(1, '<p>&lt;p&gt;Il passaggio standard del Lorem Ipsum, utilizzato sin dal sedicesimo secolo&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;&quot;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&quot;&lt;/p&gt;</p>\r\n\r\n<p>&lt;br&gt;&lt;p&gt;La sezione 1.10.32 del &quot;de Finibus Bonorum et Malorum&quot;, scritto da Cicerone nel 45 AC</p>\r\n\r\n<p>&quot;Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?&quot;</p>\r\n\r\n<p>Traduzione del 1914 di H. Rackham&lt;br&gt;</p>\r\n\r\n<p>&quot;But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?&quot;</p>\r\n\r\n<p>La sezione 1.10.33 del &quot;de Finibus Bonorum et Malorum&quot;, scritto da Cicerone nel 45 AC</p>\r\n\r\n<p>&quot;At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.&quot;&lt;/p&gt;</p>\r\n\r\n<p>&lt;p&gt;Traduzione del 1914 di H. Rackham&lt;/p&gt;&lt;br&gt;</p>\r\n\r\n<p>&quot;On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.&quot;<br />\r\n&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`, `nome`) VALUES
('galta', 'gatto', 'Marco Galtarossa'),
('malick', '6e11873b9d9d94a44058bef5747735ce', 'Malick Bodian'),
('topo', 'gigio', 'Topo Gigio');

-- --------------------------------------------------------

--
-- Table structure for table `capitoli`
--

CREATE TABLE `capitoli` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `nomecap` varchar(100) DEFAULT NULL,
  `dataagg` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manga`
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
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`nome`, `autore`, `inizio`, `fine`, `descrizione`, `capitoli`, `ultimo`, `commenti`, `mipiace`, `immagine`, `codice`) VALUES
('Bleach', 'Kubo,Tite', '2001-08-07', '2016-08-22', '<p>Ichigo Kurosaki has always been able to see ghosts, but this ability does not change his life nearly as much as his close encounter with Rukia Kuchiki, a Soul Reaper and member of the mysterious Soul Society. While fighting a Hollow, an evil spirit that preys on humans who display psychic energy, Rukia attempts to lend Ichigo some of her powers so that he can save his family; but much to her surprise, Ichigo absorbs every last drop of her energy. Now a full-fledged Soul Reaper himself, Ichigo quickly learns that the world he inhabits is one full of dangerous spirits and, along with Rukia--who is slowly regaining her powers--it is Ichigos job to protect the innocent from Hollows and help the spirits themselves find peace.</p>\r\n', 686, '2016-08-18', 100, 121, 'img/bleach.jpg', 1012),
('Boku no Hero Academia', ' Horikoshi, Kouhei', '2014-07-07', '0000-00-00', '<p>The story is set in the modern day, except people with special powers have become commonplace throughout the world. A boy named Izuku Midoriya has no powers, but he still dreams.</p>\r\n', 163, '2017-12-10', 400, 309, 'img/boku.jpg', 987),
('Naruto', 'Kishimoto, Masashi', '1999-10-04', '2016-11-10', 'Before Naruto''s birth, a great demon fox had attacked the Hidden Leaf Village. A man known as the 4th Hokage sealed the demon inside the newly born Naruto, causing him to unknowingly grow up detested by his fellow villagers. Despite his lack of talent in many areas of ninjutsu, Naruto strives for only one goal: to gain the title of Hokage, the strongest ninja in his village. Desiring the respect he never received, Naruto works towards his dream with fellow friends Sasuke and Sakura and mentor Kakashi as they go through many trials and battles that come with being a ninja.\r\n\r\n', 700, '2016-11-13', 200, 800, 'img/art1.jpg', 6543),
('One Piece', 'Oda, Eiichiro', '1997-07-19', '0000-00-00', 'Seeking to be the greatest pirate in the world, young Monkey D. Luffy, endowed with stretching powers from the legendary &quot;Gomu Gomu&quot; Devil''s fruit, travels towards the Grand Line in search of One Piece, the greatest treasure in the world.', 891, '2018-01-12', 3000, 2000, 'img/1P.jpg', 654),
('One-Punch Man', 'One', '2012-06-14', '0000-00-00', 'Follows the life of an average hero who manages to win all battles with only one punch. This ability seems to frustrate him as he no longer feels the thrill and adrenaline of fighting a tough battle, which leads to him questioning his past desire of being strong.', 133, '2018-01-23', 600, 433, 'img/One.jpg', 3456),
('Sword Art Online', 'Kawahara Reki', '2009-04-10', '0000-00-00', 'The only way to escape is to ''clear'' the game. Game over means actual ''death'' ---- The ten thousand who have logged onto the as of yet mysterious game ''Sword Art Online'' have been forced into this perilous death game. Protagonist Kirito, one of the many gamers, has greeted this......', 160, '2018-02-02', 213, 1001, 'img/sao.jpg', 99986);

-- --------------------------------------------------------

--
-- Table structure for table `pagine`
--

CREATE TABLE `pagine` (
  `id` int(11) NOT NULL,
  `pagina` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pagine`
--

INSERT INTO `pagine` (`id`, `pagina`) VALUES
(1, 'Home'),
(2, 'AboutUs'),
(3, 'Popular'),
(4, 'Lastest');

-- --------------------------------------------------------

--
-- Table structure for table `preferiti`
--

CREATE TABLE `preferiti` (
  `nome` varchar(100) NOT NULL,
  `utente` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `preferiti`
--

INSERT INTO `preferiti` (`nome`, `utente`) VALUES
('Bleach', 'galta'),
('Boku no Hero Academia', 'malick'),
('Naruto', 'galta'),
('One Piece', 'galta'),
('One Piece', 'topo'),
('One-Punch Man', 'galta'),
('One-Punch Man', 'malick'),
('Sword Art Online', 'galta');

-- --------------------------------------------------------

--
-- Table structure for table `utenti`
--

CREATE TABLE `utenti` (
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utenti`
--

INSERT INTO `utenti` (`user`, `pass`) VALUES
('admin', 'admin'),
('galta', 'gatto'),
('malick', 'gatto\r\n'),
('topo', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `capitoli`
--
ALTER TABLE `capitoli`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nome` (`nome`);

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`nome`);

--
-- Indexes for table `pagine`
--
ALTER TABLE `pagine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `preferiti`
--
ALTER TABLE `preferiti`
  ADD PRIMARY KEY (`nome`,`utente`),
  ADD KEY `utente` (`utente`);

--
-- Indexes for table `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `capitoli`
--
ALTER TABLE `capitoli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pagine`
--
ALTER TABLE `pagine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `capitoli`
--
ALTER TABLE `capitoli`
  ADD CONSTRAINT `capitoli_ibfk_1` FOREIGN KEY (`nome`) REFERENCES `manga` (`nome`);

--
-- Constraints for table `preferiti`
--
ALTER TABLE `preferiti`
  ADD CONSTRAINT `preferiti_ibfk_1` FOREIGN KEY (`nome`) REFERENCES `manga` (`nome`),
  ADD CONSTRAINT `preferiti_ibfk_2` FOREIGN KEY (`utente`) REFERENCES `utenti` (`user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
