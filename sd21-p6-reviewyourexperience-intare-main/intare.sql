-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 21 jan 2023 om 15:08
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intare`
--
CREATE DATABASE IF NOT EXISTS `intare` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `intare`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `auto`
--

CREATE TABLE `auto` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `prijs` decimal(9,2) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `top_snelheid` int(11) NOT NULL,
  `acceleratie` float NOT NULL,
  `vermogen` int(11) NOT NULL,
  `merk_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `auto`
--

INSERT INTO `auto` (`id`, `naam`, `prijs`, `foto`, `top_snelheid`, `acceleratie`, `vermogen`, `merk_fk`) VALUES
(1, 'EQA', '55902.00', 'eqa/auto', 160, 8.9, 215, 2),
(2, 'GLE SUV', '90334.00', 'gle-suv/auto', 225, 7.1, 320, 2),
(3, 'EQB', '59917.00', 'eqb/auto', 160, 9.2, 228, 2),
(4, 'GLA SUV', '51819.00', 'gla-suv/auto', 215, 8.1, 163, 2),
(5, 'GLE COUPE', '103328.00', 'gle-coupe/auto', 250, 5.3, 435, 2),
(6, 'GLC COUPE', '73305.00', 'glc-coupe/auto', 218, 7.9, 258, 2),
(7, '718 Cayman', '91990.00', '718-cayman/auto', 315, 4.9, 300, 3),
(8, '911 GT3 RS', '325200.00', '911-gt3-rs/auto', 296, 9, 500, 3),
(9, '911 targa 4s', '199200.00', '911-targa-4s/auto', 304, 10.4, 450, 3),
(10, 'Panamera', '123178.00', 'panamera/auto', 315, 5.6, 330, 3),
(11, 'Macan', '109000.00', 'macan/auto', 232, 6.4, 265, 3),
(12, 'Cayenne', '107273.00', 'cayenne/auto', 243, 6.8, 462, 3),
(13, 'Q3', '47330.00', 'q3/auto', 250, 9.5, 400, 4),
(14, 'e-tron', '84900.00', 'e-tron/auto', 200, 5.7, 408, 4),
(16, 'Q7', '86068.00', 'q7/auto', 250, 5.9, 507, 4),
(17, 'R8', '250074.00', 'r8//auto', 329, 3, 640, 4),
(18, 'TT coupé', '100453.00', 'tt-coupé/auto', 246, 6.6, 310, 4),
(19, 'Q2', '35625.00', 'q2/auto', 250, 4.9, 301, 4),
(26, 'X1', '48365.00', 'x1/auto', 225, 7.7, 313, 6),
(27, 'X3', '64926.00', 'x3/auto', 198, 3.8, 184, 6),
(28, 'X4', '72033.00', 'x4/auto', 213, 8.4, 480, 6),
(29, 'X5', '88427.00', 'x5/auto', 222, 5.6, 625, 6),
(30, 'X6', '108238.00', 'x6/auto', 235, 4.2, 625, 6),
(31, 'X7', '136236.00', 'x7/auto', 245, 6.1, 530, 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `auto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `foto`
--

INSERT INTO `foto` (`id`, `naam`, `foto`, `auto_id`) VALUES
(5, 'banner_1', 'q2/banner_1', 19),
(6, 'banner_2', 'q2/banner_2', 19),
(7, 'carousel_1', 'q2/carousel_1', 19),
(8, 'carousel_2', 'q2/carousel_2', 19),
(9, 'carousel_3', 'q2/carousel_3', 19),
(10, 'banner_1', 'e-tron/banner_1', 14),
(11, 'banner_2', 'e-tron/banner_2', 14),
(12, 'carousel_1', 'e-tron/carousel_1', 14),
(13, 'carousel_2', 'e-tron/carousel_2', 14),
(14, 'carousel_3', 'e-tron/carousel_3', 14),
(15, 'banner_1', 'q7/banner_1', 16),
(16, 'banner_2', 'q7/banner_2', 16),
(17, 'carousel_1', 'q7/carousel_1', 16),
(18, 'carousel_2', 'q7/carousel_2', 16),
(19, 'carousel_3', 'q7/carousel_3', 16),
(20, 'banner_1', 'r8/banner_1', 17),
(21, 'banner_2', 'r8/banner_2', 17),
(22, 'carousel_1', 'r8/carousel_1', 17),
(23, 'carousel_2', 'r8/carousel_2', 17),
(24, 'carousel_3', 'r8/carousel_3', 17),
(25, 'banner_1', 'q3/banner_1', 13),
(26, 'banner_2', 'q3/banner_2', 13),
(27, 'carousel_1', 'q3/carousel_1', 13),
(28, 'carousel_2', 'q3/carousel_2', 13),
(29, 'carousel_3', 'q3/carousel_3', 13),
(30, 'banner_1', 'tt-coupé/banner_1', 18),
(31, 'banner_2', 'tt-coupé/banner_2', 18),
(32, 'carousel_1', 'tt-coupé/carousel_1', 18),
(33, 'carousel_2', 'tt-coupé/carousel_2', 18),
(34, 'carousel_3', 'tt-coupé/carousel_3', 18),
(39, 'links_1', '718-cayman/links_1', 7),
(40, 'links_2', '718-cayman/links_2', 7),
(41, 'Links_beneden', '718-cayman/Links_beneden', 7),
(42, 'rechts_boven', '718-cayman/rechts_boven', 7),
(43, 'rechts_1', '718-cayman/rechts_1', 7),
(44, 'rechts_2', '718-cayman/rechts_2', 7),
(45, 'banner_1', '718-cayman/banner_1', 7),
(46, 'banner_2', '718-cayman/banner_2', 7),
(47, 'banner_1', '911-targa-4s/banner_1', 9),
(48, 'banner_2', '911-targa-4s/banner_2', 9),
(49, 'links_1', '911-targa-4s/links_1', 9),
(50, 'links_2', '911-targa-4s/links_2', 9),
(51, 'links_beneden', '911-targa-4s/Links_beneden', 9),
(52, 'rechts_boven', '911-targa-4s/rechts_boven', 9),
(53, 'rechts_1', '911-targa-4s/rechts_1', 9),
(54, 'rechts_2', '911-targa-4s/rechts_2', 9),
(55, 'banner_1', 'panamera/banner_1', 10),
(56, 'banner_2', 'panamera/banner_2', 10),
(57, 'links_1', 'panamera/links_1', 10),
(58, 'links_2', 'panamera/links_2', 10),
(59, 'links_beneden', 'panamera/Links_beneden', 10),
(60, 'rechts_boven', 'panamera/rechts_boven', 10),
(61, 'rechts_1', 'panamera/rechts_1', 10),
(62, 'rechts_2', 'panamera/rechts_2', 10),
(63, 'links_1', 'macan/links_1', 11),
(64, 'links_2', 'macan/links_2', 11),
(65, 'links_beneden', 'macan/Links_beneden', 11),
(66, 'rechts_boven', 'macan/rechts_boven', 11),
(67, 'rechts_1', 'macan/rechts_1', 11),
(68, 'rechts_2', 'macan/rechts_2', 11),
(69, 'banner_1', 'macan/banner_1', 11),
(70, 'banner_2', 'macan/banner_2', 11),
(71, 'banner_1', 'cayenne/banner_1', 12),
(72, 'banner_2', 'cayenne/banner_2', 12),
(73, 'links_1', 'cayenne/links_1', 12),
(75, 'links_2', 'cayenne/links_2', 12),
(76, 'links_beneden', 'cayenne/Links_beneden', 12),
(77, 'rechts_boven', 'cayenne/rechts_boven', 12),
(78, 'rechts_1', 'cayenne/rechts_1', 12),
(79, 'rechts_2', 'cayenne/rechts_2', 12),
(104, 'banner', 'eqa/banner', 1),
(105, 'links_1', 'eqa/links_1', 1),
(106, 'links_2', 'eqa/links_2', 1),
(107, 'rechts_1', 'eqa/rechts_1', 1),
(108, 'rechts_2', 'eqa/rechts_2', 1),
(109, 'banner', 'gle-suv/banner', 2),
(110, 'links_1', 'gle-suv/links_1', 2),
(111, 'links_2', 'gle-suv/links_2', 2),
(112, 'rechts_1', 'gle-suv/rechts_1', 2),
(113, 'rechts_2', 'gle-suv/rechts_2', 2),
(114, 'banner', 'eqb/banner', 3),
(115, 'links_1', 'eqb/links_1', 3),
(116, 'links_2', 'eqb/links_2', 3),
(117, 'rechts_1', 'eqb/rechts_1', 3),
(118, 'rechts_2', 'eqb/rechts_2', 3),
(119, 'banner', 'gla-suv/banner', 4),
(120, 'links_1', 'gla-suv/links_1', 4),
(121, 'links_2', 'gla-suv/links_2', 4),
(122, 'rechts_1', 'gla-suv/rechts_1', 4),
(123, 'rechts_2', 'gla-suv/rechts_2', 4),
(124, 'banner', 'gle-coupe/banner', 5),
(125, 'links_1', 'gle-coupe/links_1', 5),
(126, 'links_2', 'gle-coupe/links_2', 5),
(127, 'rechts_1', 'gle-coupe/rechts_1', 5),
(128, 'rechts_2', 'gle-coupe/rechts_2', 5),
(129, 'banner', 'glc-coupe/banner', 6),
(130, 'links_1', 'glc-coupe/links_1', 6),
(131, 'links_2', 'glc-coupe/links_2', 6),
(132, 'rechts_1', 'glc-coupe/rechts_1', 6),
(133, 'rechts_2', 'glc-coupe/rechts_2', 6),
(134, 'banner_1', 'x1/banner_1', 26),
(135, 'banner_2', 'x1/banner_2', 26),
(136, 'links', 'x1/links', 26),
(137, 'rechts', 'x1/rechts', 26),
(138, 'banner_1', 'x3/banner_1', 27),
(139, 'banner_2', 'x3/banner_2', 27),
(140, 'links', 'x3/links', 27),
(141, 'rechts', 'x3/rechts', 27),
(142, 'banner_1', 'x4/banner_1', 28),
(143, 'banner_2', 'x4/banner_2', 28),
(144, 'links', 'x4/links', 28),
(145, 'rechts', 'x4/rechts', 28),
(146, 'banner_1', 'x5/banner_1', 29),
(147, 'banner_2', 'x5/banner_2', 29),
(148, 'links', 'x5/links', 29),
(149, 'rechts', 'x5/rechts', 29),
(150, 'banner_1', 'x6/banner_1', 30),
(151, 'banner_2', 'x6/banner_2', 30),
(152, 'links', 'x6/links', 30),
(153, 'rechts', 'x6/rechts', 30),
(154, 'banner_1', 'x7/banner_1', 31),
(155, 'banner_2', 'x7/banner_2', 31),
(156, 'links', 'x7/links', 31),
(157, 'rechts', 'x7/rechts', 31),
(158, 'links_1', '911-gt3-rs/links_1', 8),
(159, 'links_2', '911-gt3-rs/links_2', 8),
(160, 'links_beneden', '911-gt3-rs/links_beneden', 8),
(161, 'rechts_1', '911-gt3-rs/rechts_1', 8),
(162, 'rechts_2', '911-gt3-rs/rechts_2', 8),
(163, 'rechts_boven', '911-gt3-rs/rechts_boven', 8),
(164, 'banner_1', '911-gt3-rs/banner_1', 8),
(165, 'banner_2', '911-gt3-rs/banner_2', 8);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `merken`
--

CREATE TABLE `merken` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `merken`
--

INSERT INTO `merken` (`id`, `naam`, `text`, `foto`) VALUES
(2, 'mercedes', 'Comfort voor alle zintuigen. Uitgekiende innovaties zoals de Mercedes-Benz ENERGIZING COMFORT-programma\'s dragen niet alleen bij aan uw gevoel van welzijn, maar bieden ook een rijervaring die alleen een Mercedes-Benz kan bieden.\r\n', 'mercedes/banner'),
(3, 'porsche', 'In de Porsche Exclusive Manufaktur bieden we tal van personalisatiemogelijkheden voor exterieur en interieur. Voor uw compleet gepersonaliseerde auto.', 'porsche/banner'),
(4, 'audi', 'Of het nu gaat om Audi urbansphere concept, Audi grandsphere concept of Audi skysphere concept, beleef de unieke modellen van de Sphere serie.', 'audi/banner'),
(6, 'bmw', 'Premium en duurzaamheid zijn onafscheidelijk. Het succes van de BMW is altijd gebaseerd geweest op langetermijndenken en verantwoord handelen. Het bedrijf zette de koers voor de toekomst in een vroeg stadium waarbij duurzaamheid consequent centraal staat.', 'bmw/banner');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review` varchar(255) NOT NULL,
  `stars` int(11) NOT NULL,
  `auto_id` int(11) NOT NULL,
  `datum` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `review`
--

INSERT INTO `review` (`id`, `user_id`, `review`, `stars`, `auto_id`, `datum`) VALUES
(1, 10, '3ireudci3fred', 5, 10, '2023-01-21 14:30:18');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tekst`
--

CREATE TABLE `tekst` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `tekst` text NOT NULL,
  `auto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `tekst`
--

INSERT INTO `tekst` (`id`, `naam`, `tekst`, `auto_id`) VALUES
(1, 'titel_1', 'Een dynamisch design en veel rijplezier', 19),
(2, 'tekst_1', 'Ontdek de Audi Q2. Deze urban SUV blinkt uit door zijn krachtige design, uitgebreide infotainmentopties en dynamische ondersteltechniek.', 19),
(3, 'titel_2', 'Audi exclusive', 19),
(4, 'tekst_2', 'De standaard progressieve besturing draagt bij aan de prettige rijeigenschappen dankzij een variabele, van de stuurhoek afhankelijke overbrenging en een snelheidsafhankelijke bekrachtiging. Het onderstel met elektronisch geregelde adaptieve dempers past zich aan veranderende wegcondities aan.', 19),
(5, 'titel_1', 'Denk toekomstgericht', 14),
(6, 'tekst_1', 'stap in de Audi e-tron en ontdek de voordelen van alektrish rijden. ', 14),
(7, 'titel_2', 'We verwelkomen de Audi Q8 e-tron.', 14),
(8, 'tekst_2', 'De Audi e-tron was de eerste volledig elektrische Audi. Nu is het tijd om de naam van dit model in lijn te brengen met de rest van het Audi-gamma. De Audi Q8 e-tron is herkenbaar aan zijn nieuwe uitstraling en een specifieke signatuur van de dagrijverlichting. Een uiterlijk dat perfect matcht met zijn moderne techniek.', 14),
(13, 'titel_1', 'Ruim en praktisch', 13),
(14, 'tekst_1', 'De Audi Q3 heeft een gemakkelijke instap en biedt een goed overzicht over het verkeer. Het interieur behoort tot de ruimste in zijn segment. De lange wielbasis levert veel beenruimte op en ook in de hoogte en breedte is de Q3 royaal met centimeters.', 13),
(15, 'titel_2', 'Een krachtige uitstraling', 13),
(16, 'tekst_2', 'De Audi Q3 heeft een stoere voorkant met een grote singleframe-grille met rechtopstaande spijlen. De verlichting in de koplampen en achterlichten is in één stijl ontworpen. Boven de wielen loopt een goed zichtbare welving over de flanken. Door de ruime keuze aan kleuren, wielen en uitrusting is er altijd een Audi Q3 die bij u past', 13),
(17, 'titel_1', 'Precies wat u nodig heeft', 16),
(18, 'tekst_1', 'De Audi Q7 TFSI e combineert de voordelen van stil en lokaal emissievrij elektrisch rijden met de kenmerkende Audi-dynamiek die u met een benzinemotor associeert.', 16),
(19, 'titel_2', 'Een innovatieve aandrijflijn', 16),
(20, 'tekst_2', 'met zijn luchtvering, elektromechanische stuurbekrachtiging, rijdynamische regeling Audi drive select inclusief offroadstand en quattro permanente vierwielaandrijving schrikt de Audi Q7 TFSI e niet terug voor sneeuw, zand, modder en gravel', 16),
(21, 'titel_1', 'Scherp, strak en stevig', 17),
(22, 'tekst_1', 'Adaptieve dempers zijn er in de vorm van het optionele Audi magnetic ride. Ideaal om in een fractie van een seconde de demperwerking aan de rijstijl en het wegkarakter aan te passen. Voor nog meer dynamiek en rijplezier.', 17),
(23, 'titel_2', 'Uitsluitend ideale lijnen', 17),
(24, 'tekst_2', 'Lage horizontale lijnen dragen bij aan het breedte-effect van de voorzijde. Daardoor oogt de Audi R8 Coupé V10 performance quattro nog lager en sportiever. Aan de zijkant domineren de karakteristieke blades. De achterkant maakt een statement met het luchtrooster over de volle breedte, de glanzend zwarte ovale uitlaatuiteinden en de grote, vaste carbon achtervleugel.', 17),
(25, 'titel_1', 'Tijdloze klassieker', 18),
(26, 'tekst_1', 'Ruim twee decennia na zijn debuut maakt de Audi TT Coupé nog steeds indruk met zijn kenmerkende design, zijn rijplezier en de uitgebreide standaarduitrusting.', 18),
(27, 'titel_2', 'Krachtig en dynamisch', 18),
(28, 'tekst_2', 'Wij leveren de Audi TT Coupé met een 145 kW/197 pk of 180 kW/245 pk sterke tweeliter TFSI-motor. In de krachtigere variant accelereert hij in 5,8 seconden van 0 naar 100 km/h. Tot de standaarduitrusting behoort Audi drive select, een systeem om de rijdynamiek te veranderen. De settings beïnvloeden onder meer de besturing, schakelmomenten en motorkarakteristiek.', 18),
(29, 'titel_1', 'Atleten weten dat voor topprestaties meer nodig is dan perfecteomstandigheden en geluk. Doorslaggevend is de onvoorwaardelijke wil om bij elke training sneller en sterker te worden. Om alle saan de orde te stellen – vooral zichzelf. En om van elke fout het \n maximale te leren. Want de grootste uitdaging is om onverslaanbaar \nte blijven. Met die instelling blijft Porsche de grenzen verleggen\n.Voor nog betere prestaties op het circuit – dankzij radicale downforce\nen de uitgebreide toepassing van lichtgewicht materialen. Ervaar de nieuwe \n911 GT3 RS in optima forma.', 8),
(30, 'titel_1', 'De 718 modellen zijn gebouwd met hun sporthart in het midden. Het zijn middenmotor-sportwagens die de sportiviteit van de legendarische Porsche 718 verenigen met de sportwagens van morgen – en overbrengen op de wegen van de wereld van vandaag. Met één doel: het dagelijkse leven minder alledaags maken.', 7),
(31, 'titel_1', 'De Targa is niet meer weg te denken in het aanbod van de 911. Het is dan ook een historisch verantwoord model, want de Targa maakte decennia terug ook al deel uit van het 911-gamma. Nieuwe Targa-modellen zijn allemaal geïnspireerd op de originele 911 Targa uit 1965. Kenmerken zijn de aluminiumkleurige rollbar, een elektrisch te openen targadak en een forse glazen achterruit. Het targadak is met een druk op de knop te openen in 19 seconden. Voor het sluiten van het dak geldt dezelfde tijd.', 9),
(32, 'titel_1', 'Kan een visie logisch zijn? Mag dat überhaupt wel? Allicht niet. Wij denken dat hoe visionairer een idee in het begin is, hoe spannender het is aan het eind. Dan is het de moeite waard om voor te strijden. Zo was het ook bij de Panamera. Een sportwagen voor 4 personen? Met een indrukwekkende performance en veel comfort?\r\nMet een voor Porsche typische dynamiek en tegelijkertijd een hoge efficiency? Velen hielden het voor onmogelijk, anderen vonden het getuigen van lef.', 10),
(34, 'titel_1', 'Zet accenten waar anderen in de massa opgaan – de nieuwe Macan T. Jong, dynamisch en urbaan, met een uitgebreide standaarduitrusting, modelspecifieke designelementen en natuurlijk de typische Porsche performance.\r\n\r\nNieuwe stuurwielgeneratie: het multifunctionele sportstuurwiel en het GT sportstuurwiel liggen sportief in de hand en hebben schakelpaddles voor handmatig schakelen.', 11),
(35, 'titel_1', 'De Cayenne en de Cayenne Coupé: beide inspireren door hun markante verschijning en overtuigende performance met maximaal 5 zitplaatsen – en of u nu liever samen met vrienden in de Cayenne aan uw volgende avontuur begint of dat u valt voor de iconische contouren van de Coupé, laten we over aan uw persoonlijke smaak. Maar één ding geldt uiteraard ook voor onze twee grootste modellen: elke Porsche is in de eerste plaats een sportwagen.', 12),
(36, 'titel_1', 'Ervaar meer over de interieurhighlights van de EQA. Individualiseer het interieur bijvoorbeeld met de sfeerverlichting en verschillende sierdelen die perfect op uw smaak zijn afgestemd. De comfortstoelen en het multifunctionele sportstuur maken elke rit uiterst comfortabel. Naast de afzonderlijke uitrustingen zijn ook als optie leverbare uitrustingslijnen zoals Electric Art en AMG Line beschikbaar.', 1),
(37, 'titel_1', 'De GLE, op dit moment de grootste SUV met plug-in hybrid-aandrijving van Mercedes-Benz,  is leverbaar met een diesel- of benzinemotor. De plug-in hybrid-modellen van de GLE kenmerken zich door een grote accu en een puur elektrische actieradius tot 100 km.', 2),
(38, 'titel_1', 'Altijd indrukwekkend, elke rit weer. Roségoudkleurige elementen en het backlit sierdeel zorgen voor een moderne hightech-ambiance in het interieur van de EQB. Gericht aangebrachte designaccenten als buiselementen in aluminiumlook versterken bovendien het solide, robuuste en hoogwaardige totaalbeeld.', 3),
(39, 'titel_1', 'GLA 250 e | WLTP: brandstofverbruik gecombineerd: 1,3-1,6 l/100 km | CO₂-emissie gecombineerd: 30-37 g/km.[1]\r\n\r\n* De oplaadtijden van 10 naar 80 % zijn van toepassing bij gebruik van een DC-sneloplaadpunt met een voedingsspanning van 400 V en een stroomsterkte van minimaal 500 A.', 4),
(40, 'titel_1', 'Ontdek de exterieurhighlights van de GLE Coupé: een vlakke voorruit, lage constructie en aflopende achterzijde. De aansprekende voorzijde met fraaie diamond grille getuigt van de uitgesproken sportiviteit die ononderbroken tot in de achterzijde doorloopt. Vergelijk ook uitrustingslijnen zoals de standaarduitvoering en AMG Line met elkaar.', 5),
(41, 'titel_1', 'Ontdek de GLC Coupé met Mercedes-Benz User Experience, digitale displays, ENERGIZING-pakketten en het Burmester® surround sound system.\r\nErvaar alles over het verbruik, de motor, het vermogen, bagageruimtevolume, de afmetingen en overige technische gegevens van de GLC Coupé.', 6),
(42, 'titel_2', 'A 2.0-liter BMW TwinPower Turbo inline 4-cylinder engine drives the new BMW X1, turning out 241 horsepower. Shift smoothly with the automatic 7-speed Dual Clutch Transmission.', 26),
(43, 'titel_1', 'De nieuwe BMW X1 overtuigt door zijn uitgebreide veelzijdigheid en functionaliteiten: \r\n\r\n\r\nEen exterieur met een heldere designtaal voor een sportieve, zelfverzekerde uitstraling\r\nLeverbaar met verbrandingsmotor, als Plug-in Hybride en volledig elektrisch\r\nHet moderne interieur is afgewerkt met hoogwaardige materialen en voorzien van innovaties zoals het BMW Curved Display\r\nOptioneel leverbaar met elektrisch wegklapbare trekhaak', 26),
(44, 'titel_3', 'Altijd op de goede weg met de proactieve routeadviezen van BMW Maps - Connected Navigation\r\nOnderweg met uw favoriete apps: de Smartphone Integratie in uw nieuwe BMW X1 ondersteunt Apple CarPlay en Android Auto\r\nNeerleggen en opladen: het Wireless Charging pad in de nieuwe BMW X1 laadt uw smartphone op via inductie', 26),
(45, 'titel_1', 'De BMW X3 is een statement van onbegrensde mogelijkheden en een expressie van pure aanwezigheid en vrijheid. Vanaf de eerste aanblik maakt de BMW X3 indruk met zijn atletische verschijning en fascineert met een opwindende rijervaring. Dankzij gedeeltelijk autonoom rijden en het intelligente vierwielaandrijvingsysteem BMW xDrive biedt de BMW X3 superieur rijcomfort op de weg en offroad. Hiermee zet de BMW X3 nieuwe benchmarks in zijn klasse en maakt één ding onmiskenbaar duidelijk: het maakt een groot verschil in hoe de berijder zijn bestemming bereikt.', 27),
(46, 'titel_2', 'Beide varianten, de benzine- en dieselmotor, van de BMW TwinPower Turbo 2,0 liter viercilinder motoren bieden maximaal rijplezier. Ze onderscheiden zich door een temperamentvolle krachtsontwikkeling alsmede door een spontane gasreactie bij lage toerentallen.', 27),
(47, 'titel_3', 'Het interieur maakt indruk met een middenconsole in nieuwe lay-out, inclusief sierlijsten in hoogglans zwart en nieuwe bedieningselementen voor de airconditioning. Voor meer comfort en intuïtieve bediening zorgen de standaard sportstoelen in geperforeerd Sensatec en het centrale informatiedisplay van 10,25 inch, dat optioneel kan worden uitgebreid naar maar liefst 12 inch.', 27),
(48, 'titel_1', 'Voor welke uitdagingen u ook komt te staan, de nieuwe BMW X4 kijkt er nu al naar uit. Zijn progressieve design en coupé-achtige belijning maken zijn dadendrang in één oogopslag duidelijk. En dankzij de uitmuntende rijdynamiek, de innovatieve lichtgewicht constructie met een lager zwaartepunt en een nog hoger prestatieniveau wacht u nog maar één ding: puur rijplezier.', 28),
(49, 'titel_2', 'De BMW X4 komt door een compleet nieuw geïnterpreteerde voorzijde nog progressiever voor de dag. De opmerkelijk hoekige nierengrille, een nieuw ontworpen bumper met verticale luchtinlaten en 10 mm vlakkere full-LED koplampen verlenen de BMW X4 maximale moderniteit en sportiviteit vanuit elke zichthoek.', 28),
(50, 'titel_3', 'De uitrusting BMW Live Cockpit Professional inclusief navigatiefunctie omvat een hoogwaardige weergavencombinatie, bestaande uit een via aanraking bedienbaar, hoge-resolutie Touch Control Display van 12,3 inch en een volledig digitaal multifunctioneel instrumentenpaneel van eveneens 12,3 inch. Het bij deze uitrustin', 28),
(51, 'titel_1', 'Absoluut uniek. Extreem uitzonderlijk. De BMW X2 maakt zijn sportieve ambities duidelijk op het eerste gezicht. Die visuele sportiviteit gaat samen met dynamische en wendbare prestaties die ongeëvenaard zijn in zijn klasse. In combinatie met een hoogwaardig interieur en vele innovatieve technologieën is het de extraverte hoofdrolspeler van een nieuw tijdperk. Bent u er klaar voor?', 29),
(52, 'titel_2', 'Ga voor goud: of het nu gaat om de bijzonder efficiënte BMW X2 xDrive25e met innovatieve hybride aandrijving, de BMW X2 M35i vol adrenaline of een van de andere motorvarianten – met exclusieve details zoals de decals in Galvanic Gold trekt de BMW X2 GoldPlay Edition overal de aandacht.', 29),
(53, 'titel_3', 'In de BMW X2 geniet u dankzij de innovatieve My BMW App van optimale connectiviteit tussen smartphone en BMW. Of u nu afspraken en routes plant en naar het navigatiesysteem stuurt, uw actuele positie in real time met anderen wilt delen of het laatste deel van de route wilt navigeren met uw smartphone om te voet op uw bestemming aan te komen. Ervaar een app die u het leven gemakkelijker maakt: BMW Connected maakt het mogelijk', 29),
(54, 'titel_1', 'Compromisloos en non-conformistisch – de nieuwe BMW X6 is uitdagend assertief. Kijk maar eens naar de zeer atletische carrosserie en de nieuwe, onderscheidende designtaal met fascinerende exclusiviteit en visionaire technologieën zoals de indrukwekkende BMW nierengrille ‘Iconic Glow’. Een ding is direct duidelijk: dit is absolute dominantie, die de nieuwe BMW X6 op elke weg zeer vastberaden uitdraagt dankzij een krachtige motor, een nauwkeurig afgesteld onderstel en kenmerken zoals het xOffroad pack. Ervaar hoe de BMW X6 op ongekende wijze verwachtingen weet te overtreffen.', 30),
(55, 'titel_2', 'Het M Sportuitlaatsysteem biedt een sound die via de Driving Experience Control in de rijprogramma\'s SPORT en SPORT+ nog krachtiger kan klinken, terwijl in het op comfort gerichte rijprogramma subtiel-sportieve klanken te horen zijn.', 30),
(56, 'titel_3', 'Met de BMW M Performance Parts verleent u uw BMW X6 een maximaal autosportkarakter. Maak uw keuze uit sportieve designuitrustingen voor exterieur en interieur zoals attractieve gesmede en lichtmetalen wielen. Met Originele BMW Accessoires past u de BMW aan uw persoonlijke wensen aan: de producten zijn qua kwaliteit, design en prestatie perfect op de BMW X6 afgestemd.', 30),
(57, 'titel_1', 'De nieuwe BMW X7 xDrive40i fascineert vanaf de eerste blik met zijn combinatie van compromisloze kracht, luxueus comfort en expressieve vormgeving.\r\n\r\n\r\nEen door iconische BMW kenmerken geïnspireerde voorzijde zorgt samen met de verlichte BMW Iconic Glow nierengrille voor een karaktervolle uitstraling.\r\nDe krachtige TwinPower Turbo 6-cilinder-in-lijn benzinemotor levert 289 kW (381 pk), terwijl de standaard luchtvering op voor- en achteras iedere rit bijzonder comfortabel maakt.\r\nIntegral Active Steering* zorgt voor extra wendbaarheid bij het manoeuvreren en voor meer rijcomfort bij hogere snelheden.', 31),
(58, 'titel_2', 'Het door iconische BMW kenmerken geïnspireerde design van de voorzijde van de nieuwe BMW X7 is zelfverzekerd en sportief. In samenspel met de verlichte BMW Iconic Glow nierengrille krijgt de voorzijde een bijzonder progressieve uitstraling. De dubbele spijlen van de nierengrille zorgen samen met exclusieve chromen highlights voor een bijzonder accent.', 31),
(59, 'titel_3', 'De TwinPower Turbo zescilinder-in-lijn benzinemotor zorgt voor een acceleratie van 0 naar 100 km/h in 5,8 seconden en combineert krachtige prestaties met grote krachtreserves.   \r\nDankzij de actieve stabilisatie van Executive Drive Pro* worden carrosseriebewegingen tegengegaan.\r\nIntegral Active Steering* zorgt voor extra wendbaarheid bij het manoeuvreren en voor meer rijcomfort bij hogere snelheden.', 31);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `woonplaats` varchar(255) DEFAULT NULL,
  `huisnummer` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `stad` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `voornaam`, `achternaam`, `foto`, `woonplaats`, `huisnummer`, `postcode`, `stad`, `email`, `wachtwoord`, `admin`) VALUES
(1, 'hussein', 'uwimana', 'user1', NULL, NULL, NULL, NULL, 'hussein@intare.nl', '$2y$10$1v8/XVpnsqYBSw1M/He.c.dKpyADiEPFt1Jw3xVJABf.Ycgzk61oy', 1),
(2, 'amine', 'El Kadaoui', 'user2', NULL, NULL, NULL, NULL, 'amine@intare.nl', '$2y$10$LVYQTAuNXQ4OgH2rRdW4IuQmzilzQoAsvYgiGxiNDFBSmgqfGs/u6', 1),
(4, 'husseein', 'wednks', NULL, NULL, NULL, NULL, NULL, 'ewcdklns@ewndks.nl', '$2y$10$L/OBfzsUpab.gVeDDHuuD.KCqQlEU6A5Gl6Qvau8f5Ql0oHu0QVIG', 0),
(5, 'oiekcfd', 'ecfkld', NULL, NULL, NULL, NULL, NULL, 'necfkd@ienkdcs.nl', '$2y$10$x25DX.eLPZKEf2db9Vh8DuzOU5J9F/sSF8wNusSOZd1/slIDjVERa', 0),
(6, 'test', 'test', NULL, NULL, NULL, NULL, NULL, 'test33@test.com', '$2y$10$aUIYSHfeWekgLpt6c3Mbl.gICh/a7sneefEzItyZ3aK0T4ChPqjGi', 0),
(7, 'har', 'aaa', NULL, NULL, NULL, NULL, NULL, 'email@com.com', '$2y$10$q6mEXJdKcJ7/jKjAZ8IDxekJbn/5rcAMNjfscet04xmeuaVgFHSLy', 0),
(8, 'haris', 'mahmood', NULL, NULL, NULL, NULL, NULL, 'harism@dev.com', '$2y$10$gcOBDvBZQ0UfzAJk7vp4pO1TmYtb5zUQcHBJ0nIUrYOg4//k7YNie', 0),
(9, 'gianni', 'ramdjiawan', NULL, NULL, NULL, NULL, NULL, 'a@a.a', '$2y$10$lxiNv.ArI68powK6nz.Cfu6gnOYyisv9gMsHaAww70P7gjcP.o7AK', 0),
(10, 'testeb', 'jkwbdsc', 'user10', 't4grvfv', 'gereed', 'efvdvc', 'egvfd', 'abc@abc.nl', '$2y$10$VPRKl3ECD2XSxQLJ0xCAp.YEGCd6aUQcgnqkQHwjMm94uOrlbZm5q', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merk_fk` (`merk_fk`);

--
-- Indexen voor tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auto_fk` (`auto_id`);

--
-- Indexen voor tabel `merken`
--
ALTER TABLE `merken`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_fk` (`user_id`),
  ADD KEY `auto_review_fk` (`auto_id`) USING BTREE;

--
-- Indexen voor tabel `tekst`
--
ALTER TABLE `tekst`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auto` (`auto_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `auto`
--
ALTER TABLE `auto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT voor een tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT voor een tabel `merken`
--
ALTER TABLE `merken`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `tekst`
--
ALTER TABLE `tekst`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `merk_fk` FOREIGN KEY (`merk_fk`) REFERENCES `merken` (`id`);

--
-- Beperkingen voor tabel `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `auto_fk` FOREIGN KEY (`auto_id`) REFERENCES `auto` (`id`);

--
-- Beperkingen voor tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `abc` FOREIGN KEY (`auto_id`) REFERENCES `auto` (`id`),
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Beperkingen voor tabel `tekst`
--
ALTER TABLE `tekst`
  ADD CONSTRAINT `auto` FOREIGN KEY (`auto_id`) REFERENCES `auto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
