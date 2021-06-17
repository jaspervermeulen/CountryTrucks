-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Aug 20, 2019 at 05:11 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `countryTrucks`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `payment` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `imgtitle` varchar(255) NOT NULL,
  `mapclass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL,
  `bioshort` varchar(255) NOT NULL,
  `biolong` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id`, `img`, `imgtitle`, `mapclass`, `name`, `flag`, `bioshort`, `biolong`, `map`) VALUES
(1, './assets/img/country/boliviaBig.svg', '<img class=\"rightside__list--img rightside__list--img1\" src=\"./assets/img/pins/yellowPin.svg\"\r\n                            alt=\"Bolivia\">', 'rightside__list--wrapper1', 'Bolivia', './assets/img/flag/bolivia.svg', 'Bolivia is een republiek in Zuid-Amerika dat grens aan <br>\r\nzowel Peru als Brazilië. Er is een bevolking van ruim <br>\r\n10 miljoen dat voornamelijk Spaans spreekt.', 'Bolivia is een republiek in Zuid-Amerika dat grens aan zowel Peru als Brazilië. Er is een bevolking van ruim 10 miljoen dat voornamelijk Spaans spreekt.', './assets/img/maps/boliviaMap.svg'),
(2, './assets/img/country/swazilandBig.svg', '<img class=\"rightside__list--img rightside__list--img2\" src=\"./assets/img/pins/greenPin.svg\"\r\n                            alt=\"Swaziland\">', 'rightside__list--wrapper2', 'Swaziland', './assets/img/flag/swaziland.svg', 'Swaziland is een land in het zuiden van Afrika. <br>\r\nHet wordt ingesloten door Zuid-Afrika en Mozambique. <br>\r\nHet is een land waarin de koning absolute macht heeft.', 'Swaziland is een land in het zuiden van Afrika. Het wordt ingesloten door Zuid-Afrika en Mozambique. Het is een land waarin de koning absolute macht heeft.', './assets/img/maps/swazilandMap.svg'),
(3, './assets/img/country/comorenBig.svg', '                        <img class=\"rightside__list--img rightside__list--img3\" src=\"./assets/img/pins/bluePin.svg\"\r\n                            alt=\"Comoren\">', 'rightside__list--wrapper3', 'Comoren', './assets/img/flag/comoren.svg', 'Comoren is een staat bestaande uit 3 eilanden: <br>\r\nGrande Comore, Mohéli en Anjouan. <br>\r\nDe Comoren eilanden zijn van vulkanische <br>\r\noorsprong en bevinden zich in \r\nde indische oceaan. <br>', 'Comoren is een staat bestaande uit 3 eilanden: Grande Comore, Mohéli en Anjouan. De Comoren eilanden zijn van vulkanische oorsprong en bevinden zich in de indische oceaan.', './assets/img/maps/comorenMap.svg'),
(4, './assets/img/country/djiboutiBig.svg', ' <img class=\"rightside__list--img rightside__list--img4\" src=\"./assets/img/pins/orangePin.svg\"\r\n                            alt=\"Djibouti\">', 'rightside__list--wrapper4', 'Djibouti', './assets/img/flag/djibouti.svg', 'Djibouti is een land gelegen in de hoorn van Afrika. <br>\r\nHet land is strategisch gelegen aan een van de <br>\r\ndrukste scheeproutes ter wereld.', 'Djibouti is een land gelegen in de hoorn van Afrika. Het land is strategisch gelegen aan een van de drukste scheeproutes ter wereld.', './assets/img/maps/djiboutiMap.svg'),
(5, './assets/img/country/omanBig.svg', '<img class=\"rightside__list--img rightside__list--img5\" src=\"./assets/img/pins/pinkPin.svg\"\r\n                           alt=\"Oman\">', 'rightside__list--wrapper5', 'Oman', './assets/img/flag/oman.svg', 'Oman is een sultanaat in West-Azië. Het grenst <br>\r\naan de Verenigde Arabische Emiraten in het noorden <br>\r\nen Jemen in het westen.', 'Oman is een sultanaat in West-Azië. Het grenst \r\naan de Verenigde Arabische Emiraten in het noorden \r\nen Jemen in het westen.', './assets/img/maps/omanMap.svg');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

CREATE TABLE `facts` (
  `id` int(11) NOT NULL,
  `id_destination` varchar(255) NOT NULL,
  `fact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `id_destination`, `fact`) VALUES
(1, '1', 'De op één na grootste zoutvlakte van de wereld bevindt zich in Bolivia\r\n'),
(2, '1', 'Wanneer je Valle de la Luna bezichtigd denk je dat je op de maan zit'),
(3, '1', 'Boven La Paz, een grote stad in Bolivia, zoeven er verschillende kabelbanen waar je op kunt'),
(4, '1', 'Overal waar je kijkt, zie je indrukwekkende koloniale kerken en paleizen '),
(5, '1', 'El camino de la muerte in belovia was jarenlang de meest gevaarlijke weg ter wereld'),
(6, '2', 'De vorst van Swaziland mag elk jaar een nieuwe maagd uitkiezen'),
(7, '2', 'SiSwati (Swazi) en Engels zijn beide een officiële taal in Swaziland'),
(8, '2', 'In Swaziland wordt betaald met de Swazilandse lilangeni (SZL)'),
(9, '2', 'Swaziland kent geen verschil in wintertijd en zomertijd'),
(10, '3', 'Comoren heeft een vulkanische oorsprong'),
(11, '3', 'In Comoren worden er zeven verschillende levende talen gesproken'),
(12, '3', 'De naam Comoren is afkomstig van het Arabische \"Djazair al Kamar\" wat \"Maan-eiland\" betekent'),
(13, '4', 'Eerdere namen van het land waren: Frans Somaliland en Afar- en Issaland'),
(14, '4', 'Djibouti staat bekend als een van de heetste landen ter wereld'),
(15, '4', 'Het land is nog niet echt ontdekt door toeristen en men leeft dan ook nog traditioneel in het land'),
(16, '5', 'Oman staat op nummer 9 van de meest veilige reis bestemmingen'),
(17, '5', 'In Oman is het verboden een gebouw te bouwen die meer dan 8 verdiepen heeft'),
(18, '5', 'Oman heeft nog nooit iets gewonnen op de olympische spelen'),
(19, '2', 'Zuid-Afrika koning van Swaziland heeft maar liefst 15 vrouwen'),
(20, '3', 'Omdat er in de Comoren geen rivieren of meren zijn wordt drinkwater uit regenwater gewonnen'),
(21, '3', 'Het gemiddeld jaarinkomen in Comoren bedraagt 1.400 euro'),
(22, '4', 'Homoseksualiteit is nog steeds strafbaar in Djibouti'),
(23, '4', 'Er word gezegd dat Djibouti het \'Dubai\' van Afrika zal worden later'),
(24, '5', 'Oman is het enigste land met een \'women-only\' markt'),
(25, '5', 'Oman is de enige plek in Arabië met weelderig groen');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `anwser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `anwser`) VALUES
(1, 'Is het festival makkelijk bereikbaar?', 'Zeker, het festival is makkelijk bereikbaar voor iedereen. Ook voor\r\n                    mensen die invalide zijn.'),
(2, 'Is het festival gratis?', 'De toegang tot het evenement is voor iedereen 100% gratis. Wanneer je\r\n                    wilt meedoen aan een leuke workshop zul je wel tickets moeten kopen.'),
(3, 'Kan ik in de buurt mijn auto parkeren?', 'Op onze <a class=\"faq__item--text--a\" href=\"index.php?page=trucks\">truck pagina &#10138;</a> kun je een gedetailleerde kaart zien.\r\n                    Hierop staan parkeerplaatsen aangeduid met een grote P.'),
(4, 'Kan ik ter plaatse nog tickets verkrijgen?', 'Ja, bij elke truck kun je nog tickets kopen bestemt voor diezelfde truck.');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `id_destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_destination`, `name`, `type`, `price`, `description`) VALUES
(1, '1', 'Typisch Boliviaanse Segundo (gerecht)', 'food', '12.99', 'Ontdek de keuken van Bolivia. Leer aan wat <br> je zult moeten wennen wanneer je hierheen <br> zou reizen.'),
(2, '1', 'Bolivia Workshop: Hoe in hitte teelen PROMO', 'workshop', '8.99', 'Ervaar een activiteit typisch uit Bolivia. <br> Met ons team bereiden we de gekste <br> workshops speciaal voor jou!  '),
(3, '2', 'Swazilandse sishwala', 'food', '12.99', 'Ontdek de keuken van Swaziland. Leer aan wat <br> je zult moeten wennen wanneer je hierheen <br> zou reizen.'),
(4, '2', 'Swaziland Workshop: Hoe omgaan met nijlpaard PROMO', 'workshop', '8.99', 'Ervaar een activiteit typisch uit Swaziland. <br> Met ons team bereiden we de gekste <br> workshops speciaal voor jou!  '),
(5, '3', 'Typisch eten uit de eilanden van Comoren', 'food', '12.99', 'Ontdek de keuken van Comoren. Leer aan wat <br> je zult moeten wennen wanneer je hierheen <br> zou reizen.'),
(6, '3', 'Comoren Workshop: Hoe water zuiveren PROMO', 'workshop', '8.99', 'Ervaar een activiteit typisch uit Comoren. <br> Met ons team bereiden we de gekste <br> workshops speciaal voor jou!  '),
(7, '4', 'Djiboutische Kobeb', 'food', '12.99', 'Ontdek de keuken van Djibouti. Leer aan wat <br> je zult moeten wennen wanneer je hierheen <br> zou reizen.'),
(8, '4', 'Djibouti Workshop: Manden vlechten PROMO', 'workshop', '8.99', 'Ervaar een activiteit typisch uit Djibouti. <br> Met ons team bereiden we de gekste <br> workshops speciaal voor jou!  '),
(9, '5', 'Omantische hamour, shuwavlees met kabuli rijst', 'food', '12.99', 'Ontdek de keuken van Oman. Leer aan wat <br> je zult moeten wennen wanneer je hierheen <br> zou reizen.'),
(10, '5', 'Oman Workshop: Omaanse etiquette PROMO', 'workshop', '8.99', 'Ervaar een activiteit typisch uit Oman. <br> Met ons team bereiden we de gekste <br> workshops speciaal voor jou!  ');

-- --------------------------------------------------------

--
-- Table structure for table `toDo`
--

CREATE TABLE `toDo` (
  `id` int(11) NOT NULL,
  `id_destination` varchar(255) NOT NULL,
  `toDo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `toDo`
--

INSERT INTO `toDo` (`id`, `id_destination`, `toDo`) VALUES
(1, '1', 'Salar De Uyuni'),
(2, '1', 'Isla del Sol'),
(3, '1', 'Valle de la Luna'),
(4, '1', 'Nationaal park Amboró'),
(5, '1', 'La Paz'),
(8, '3', 'Grand Mosque du Vendredi'),
(9, '3', 'Chomoni Beach'),
(10, '3', 'Mount Karthala'),
(11, '3', 'National Museum of the Comoros'),
(12, '3', 'Bouni Beach'),
(13, '4', 'Lake Assal'),
(14, '4', 'Khor Ambado Beach'),
(15, '4', 'Day Forest National Park'),
(16, '4', 'Lac Abbe'),
(17, '4', 'Place Menelik'),
(18, '5', 'Wadi Shab'),
(19, '5', 'Masqat / Muscat'),
(20, '5', 'Muscat Gate Museum'),
(21, '5', 'Fort Bahla'),
(22, '5', 'Aflaj-irrigatiesystemen'),
(23, '2', 'Swazi Cultural Village'),
(24, '2', 'Ngwenya Mine'),
(25, '2', 'Lion Cavern'),
(26, '2', 'Nsangwini Bushman Paintings'),
(27, '2', 'All Saints Cathedral');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facts`
--
ALTER TABLE `facts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toDo`
--
ALTER TABLE `toDo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facts`
--
ALTER TABLE `facts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `toDo`
--
ALTER TABLE `toDo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
