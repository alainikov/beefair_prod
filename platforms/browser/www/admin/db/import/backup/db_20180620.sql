-- phpMyAdmin SQL Dump
-- version 2.11.11.1
-- http://www.phpmyadmin.net
--
-- Host: 134.119.225.244:3304
-- Erstellungszeit: 20. Juni 2018 um 10:40
-- Server Version: 5.6.19
-- PHP-Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Datenbank: `db307555_627`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_address`
--

DROP TABLE IF EXISTS `bf_address`;
CREATE TABLE IF NOT EXISTS `bf_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `shopId` int(10) NOT NULL DEFAULT '0',
  `shopTypeId` int(10) NOT NULL DEFAULT '0',
  `categoryId` int(10) NOT NULL DEFAULT '0',
  `name` varchar(180) CHARACTER SET latin1 NOT NULL,
  `street` varchar(255) CHARACTER SET latin1 NOT NULL,
  `zipCode` varchar(10) CHARACTER SET latin1 NOT NULL,
  `city` varchar(180) CHARACTER SET latin1 NOT NULL,
  `countryId` int(10) NOT NULL DEFAULT '0',
  `phone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `website` varchar(255) NOT NULL,
  `remarks` text NOT NULL,
  `latitude` decimal(10,8) NOT NULL,
  `longitude` decimal(10,8) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=119 ;

--
-- Daten für Tabelle `bf_address`
--

INSERT INTO `bf_address` (`id`, `shopId`, `shopTypeId`, `categoryId`, `name`, `street`, `zipCode`, `city`, `countryId`, `phone`, `mobile`, `fax`, `website`, `remarks`, `latitude`, `longitude`, `deleted`) VALUES
(1, 1, 1, 1, 'Aestethical', 'Mitteldorfstrasse 2', '5612', 'Villmergen', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(2, 2, 1, 1, 'Auras', 'Dorfstrasse 35', '8805', 'Richterswil', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(3, 3, 1, 1, 'Lola Fred', 'Europaallee 5', '8004', 'Zürich', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(4, 4, 1, 1, 'Helvetas Fairshop', 'Weinbergstrasse 24', '8001', 'Zürich', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(5, 5, 1, 2, 'Transa Zürich', 'Josefstrasse 59', '8005', 'Zürich', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(6, 6, 1, 2, 'Nudie Jeans co.', 'Viaduktstrasse 27', '8005', 'Zürich', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(7, 7, 1, 2, 'Zämä', 'Lagerstrasse 34', '8004', 'Zürich', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(8, 8, 1, 1, 'rrrevolve Concept Store', 'Stüssihofstatt 7', '8001', 'Zürich', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(9, 9, 1, 1, 'Circle', 'Brunngasse 3', '8001', 'Zürich', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(10, 10, 1, 1, 'Changemaker', 'Marktgasse 10', '8001', 'Zürich', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(11, 11, 1, 2, 'Melvins', 'Josefstrasse 26', '8005', 'Zürich', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(12, 12, 1, 1, 'Sanikai', 'Geroldstrasse 23', '8005', 'Zürich', 1, '', '', '', '', '', 47.00000000, 8.00000000, 0),
(13, 13, 2, 0, 'favorite fair', '', '', '', 0, '', '', '', 'http://www.favorite-fair.ch/', '', 0.00000000, 0.00000000, 0),
(14, 14, 2, 0, 'ARMEDANGELS', '', '', '', 0, '', '', '', 'http://www.armedangels.de/', '', 0.00000000, 0.00000000, 0),
(15, 15, 2, 0, 'Monsoon', '', '', '', 0, '', '', '', 'http://uk.monsoon.co.uk/', '', 0.00000000, 0.00000000, 0),
(16, 16, 2, 0, 'visible Clothing', '', '', '', 0, '', '', '', 'http://visible.clothing/', 'vor allem Männer Hemden', 0.00000000, 0.00000000, 0),
(17, 17, 2, 0, 'Kuyichi', '', '', '', 0, '', '', '', 'https://www.kuyichi.com/', 'achtung! Lieferkosten', 0.00000000, 0.00000000, 0),
(18, 18, 2, 0, 'K.I.O', '', '', '', 0, '', '', '', 'https://www.kingsofindigo.com/', 'vor allem Jeans', 0.00000000, 0.00000000, 0),
(19, 19, 2, 0, 'faircustomer', '', '', '', 0, '', '', '', 'http://faircustomer.ch/', 'alles mögliche', 0.00000000, 0.00000000, 0),
(20, 20, 1, 0, 'Coop City Au Centre Lausanne', 'Rue Saint Laurent 24-30', '1003', 'Lausanne', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2204/coop-city-city-lausanne-au-centre.html', '', 46.00000000, 6.00000000, 0),
(21, 21, 1, 0, 'Coop City Fusterie Genève', 'Rue du Commerce 5', '1204', 'Genève', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2201/coop-city-city-geneve-fusterie.html', '', 46.00000000, 6.00000000, 0),
(22, 22, 1, 0, 'Boutique Ayni', 'Rue John Grasset 3', '1205', 'Genève', 1, '', '', '', 'http://www.boutiqueayni.org/', '', 46.00000000, 6.00000000, 0),
(23, 23, 1, 0, 'Coop City Plainpalais Genève', 'Rue de Caroge 3', '1211', 'Genève', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2639/coop-city-city-geneve-plainpalais.html', '', 46.00000000, 6.00000000, 0),
(24, 24, 1, 0, 'Coop City Meyrin', 'Avenue de Feuillasse 24', '1217', 'Meyrin', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2636/coop-city-city-meyrin.html', '', 46.00000000, 6.00000000, 0),
(25, 25, 1, 0, 'Coop City Fribourg', 'Avenue de la Gare 10', '1701', 'Fribourg', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2586/coop-city-city-fribourg.html', '', 46.00000000, 7.00000000, 0),
(26, 26, 1, 0, 'Coop City Sion', 'Place du Midi 44', '1950', 'Sion', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2199/coop-city-city-sion.html', '', 46.00000000, 7.00000000, 0),
(27, 27, 1, 0, 'Coop City Neuchâtel', 'Rue des Epancheurs 3', '2000', 'Neuchâtel', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2633/coop-city-city-neuchatel.html', '', 46.00000000, 6.00000000, 0),
(28, 28, 1, 0, 'Coop City Rifflyhof Bern', 'Aabergergasse 53', '3001', 'Bern', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2192/coop-city-city-ryfflihof.html', '', 46.00000000, 7.00000000, 0),
(29, 29, 1, 0, '9months', 'Hopfenweg 40', '3007', 'Bern', 1, '', '', '', 'http://www.9months.ch/', '', 46.00000000, 7.00000000, 0),
(30, 30, 1, 0, '9punkt9 GmbH', 'Effingerstrasse 4', '3011', 'Bern', 1, '', '', '', 'http://www.9punkt9.ch/', '', 46.00000000, 7.00000000, 0),
(31, 31, 1, 0, 'Changemaker', 'Spitalgasse 38', '3011', 'Bern', 1, '', '', '', 'https://www.changemaker.ch/', '', 46.00000000, 7.00000000, 0),
(32, 32, 1, 0, 'Coop City Marktgasse Bern', 'Marktgasse 24', '3011', 'Bern', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2503/coop-city-city-marktgasse.html', '', 46.00000000, 7.00000000, 0),
(33, 33, 1, 0, 'erfolg shop Bern', 'Gerechtigkeitsgasse 53', '3011', 'Bern', 1, '', '', '', 'http://www.erfolg-label.ch/', '', 46.00000000, 7.00000000, 0),
(34, 34, 1, 0, 'ideale', 'Kramgasse 9 (Keller)', '3011', 'Bern', 1, '', '', '', 'http://www.ideale.biz/', '', 46.00000000, 7.00000000, 0),
(35, 35, 1, 0, 'Roots Fashion', 'Marktgasse 37', '3011', 'Bern', 1, '', '', '', 'https://www.roots-fashion.ch/', '', 46.00000000, 7.00000000, 0),
(36, 36, 1, 0, 'UNICA Bern', 'Spitalgasse 4', '3011', 'Bern', 1, '', '', '', 'https://www.claro.ch/de/corporate/ueber-claro/unica-die-modemarke', '', 46.00000000, 7.00000000, 0),
(37, 37, 1, 0, 'Nordring Fair Fashion', 'Lorrainestrasse 4', '3013', 'Bern', 1, '', '', '', 'https://shop.fairbrands.ch/de/catalogues.php', '', 46.00000000, 7.00000000, 0),
(38, 38, 1, 0, 'im Réduit', 'Bernstrasse 14', '3086', 'Zimmerwald', 1, '', '', '', 'https://www.imreduit.ch/', '', 46.00000000, 7.00000000, 0),
(39, 39, 1, 0, 'Changemaker', 'Obere Hauptgasse', '3600', 'Thun', 1, '', '', '', 'https://www.changemaker.ch/', '', 46.00000000, 7.00000000, 0),
(40, 40, 1, 0, 'Coop City Kyburg Thun', 'Schwäbisgasse 1', '3600', 'Thun', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/1090/coop-supermarkt-city-thun-kyburg-food.html', '', 46.00000000, 7.00000000, 0),
(41, 41, 1, 0, 'Ladybird Fashion', 'Mariengasse 4', '3900', 'Brig', 1, '', '', '', 'http://ladybirdfashion.ch/', '', 46.00000000, 7.00000000, 0),
(42, 42, 1, 0, 'Rosa und Kasimir', 'Sennereigasse', '3900', 'Brig', 1, '', '', '', 'https://www.rosaundkasimir.ch/', '', 46.00000000, 7.00000000, 0),
(43, 43, 1, 0, 'ANNA K. First and Secondhand Shop', 'Rümelinsplatz 15', '4001', 'Basel', 1, '', '', '', 'http://www.anna-k.ch/de', '', 47.00000000, 7.00000000, 0),
(44, 44, 1, 0, 'Coop City Am Marktplatz Basel', 'Gerberstrasse 4', '4001', 'Basel', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2498/coop-city-city-am-marktplatz.html', '', 47.00000000, 7.00000000, 0),
(45, 45, 1, 0, 'sahara Fairtrade', 'Gerbegässli 30', '4001', 'Basel', 1, '', '', '', 'http://www.sahara-basel.ch/', '', 47.00000000, 7.00000000, 0),
(46, 46, 1, 0, 'Cangemaker', 'Marktgasse 16', '4051', 'Basel', 1, '', '', '', 'https://www.changemaker.ch/', '', 47.00000000, 7.00000000, 0),
(47, 47, 1, 0, 'Coop City Pfauen Basel', 'Freie Strasse 75', '4051', 'Basel', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2190/coop-city-city-basel-pfauen.html', '', 47.00000000, 7.00000000, 0),
(48, 48, 1, 0, 'erfolg shop Basel', 'Spalenberg 36', '4051', 'Basel', 1, '', '', '', 'http://www.erfolg-label.ch/', '', 47.00000000, 7.00000000, 0),
(49, 49, 1, 0, 'OEKOLADEN Theaterpassage', 'Theaterstrasse 7', '4051', 'Basel', 1, '', '', '', 'http://www.oekoladen.ch/', '', 47.00000000, 7.00000000, 0),
(50, 50, 1, 0, 'UNICA Basel', 'Marktgasse 3 ', '4051', 'Basel', 1, '', '', '', 'https://www.claro.ch/de/corporate/ueber-claro/unica-die-modemarke', '', 47.00000000, 7.00000000, 0),
(51, 51, 1, 0, 'CHEMISERIE+', 'Klybeckstrasse 50', '4057', 'Basel', 1, '', '', '', 'http://www.chemiserieplus.ch/tablet/index.html', '', 47.00000000, 7.00000000, 0),
(52, 52, 1, 0, 'Ahoi Ahoi', 'Riehentorstrasse 14', '4058', 'Basel', 1, '', '', '', 'https://ahoiahoi.allyou.net/', '', 47.00000000, 7.00000000, 0),
(53, 53, 1, 0, 'ANNA K. First and Secondhand Fashion', 'Hauptstrasse 56', '4102', 'Binningen', 1, '', '', '', 'http://www.anna-k.ch/de', '', 47.00000000, 7.00000000, 0),
(54, 54, 1, 0, 'ANNA K. First and Secondhand Fashion', 'Rössligasse 18', '4125', 'Riehen', 1, '', '', '', 'http://www.anna-k.ch/de', '', 47.00000000, 7.00000000, 0),
(55, 55, 1, 0, 'ANNA K. First and Secondhand Fashion', 'Bruggweg 10', '4143', 'Dornach', 1, '', '', '', 'http://www.anna-k.ch/de', '', 47.00000000, 7.00000000, 0),
(56, 56, 1, 0, 'Schöni Sache Atelier, Shop, BnB', 'Hauptstrasse 43', '4422', 'Arisdorf', 1, '', '', '', 'http://www.schoeni-sache.ch/', '', 47.00000000, 7.00000000, 0),
(57, 57, 1, 0, 'Coop City Olten', 'Baslerstrasse 10', '4600', 'Olten', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2198/coop-city-city-olten.html', '', 47.00000000, 7.00000000, 0),
(58, 58, 1, 0, 'Spycher Handwerk AG', 'Bäch 4', '4953', 'Huttwil', 1, '', '', '', 'https://www.spycher-handwerk.ch/', '', 47.00000000, 7.00000000, 0),
(59, 59, 1, 0, 'Coop City Aarau', 'Igelweid 17', '5000', 'Aarau', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2189/coop-city-city-aarau.html', '', 47.00000000, 8.00000000, 0),
(60, 60, 1, 0, 'Neisna', 'Hauptstrasse 116', '5064', 'Wittnau', 1, '', '', '', 'https://neisna.swiss/', '', 47.00000000, 7.00000000, 0),
(61, 61, 1, 0, 'SCHUHHALT', 'Untere Halde 13', '5400', 'Baden', 1, '', '', '', 'http://www.schuhhalt.ch/', '', 47.00000000, 8.00000000, 0),
(62, 62, 1, 0, 'Villa Paul', 'Theaterplatz 8a', '5400', 'Baden', 1, '', '', '', 'http://www.villapaul.ch/', '', 47.00000000, 8.00000000, 0),
(63, 63, 1, 0, 'Walk-in Closet Kleidertauschbörse', 'Schmiedestrasse 12', '5400', 'Baden', 1, '', '', '', 'http://www.walkincloset.ch/', '', 47.00000000, 8.00000000, 0),
(64, 64, 1, 0, 'Coop City Baden', 'Bahnhofstrasse 28', '5401', 'Baden', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2523/coop-city-city-baden.html', '', 47.00000000, 8.00000000, 0),
(65, 65, 1, 0, 'Coop City Luzern', 'Rössligasse 18-20', '6000', 'Luzern', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2528/coop-city-city-luzern.html', '', 47.00000000, 8.00000000, 0),
(66, 66, 1, 0, '9months', 'Franziskanerplatz 10', '6003', 'Luzern', 1, '', '', '', 'http://www.9months.ch/', '', 47.00000000, 8.00000000, 0),
(67, 67, 1, 0, 'Colora', 'Pilatusstrasse 34', '6003', 'Luzern', 1, '', '', '', 'https://colora.ch/home/', '', 47.00000000, 8.00000000, 0),
(68, 68, 1, 0, 'Changemaker', 'Kramgasse 9 ', '6004', 'Luzern', 1, '', '', '', 'https://www.changemaker.ch/', '', 47.00000000, 8.00000000, 0),
(69, 69, 1, 0, 'erfolg shop Luzern', 'Hofstrasse 1', '6004', 'Luzern', 1, '', '', '', 'http://www.erfolg-label.ch/', '', 47.00000000, 8.00000000, 0),
(70, 70, 1, 0, 'glore Luzern', 'Löwengraben 12', '6004', 'Luzern', 1, '', '', '', 'http://www.glore.ch/', '', 47.00000000, 8.00000000, 0),
(71, 71, 1, 0, 'Coop City Kriens', 'Ringstrasse 19', '6010', 'Kriens', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2853/coop-city-city-kriens-pilatusmarkt.html', '', 47.00000000, 8.00000000, 0),
(72, 72, 1, 0, 'Coop City Zug', 'Bundesplatz 11', '6304', 'Zug', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2531/coop-city-city-zug.html', '', 47.00000000, 8.00000000, 0),
(73, 73, 1, 0, '3SIXTY', 'Dorfplatz 6', '6370', 'Stans', 1, '', '', '', 'http://www.3sixty.ch/', '', 46.00000000, 8.00000000, 0),
(74, 74, 1, 0, '3SIXTY', 'Reichsstrasse 4', '6430', 'Schwyz', 1, '', '', '', 'http://www.3sixty.ch/', '', 47.00000000, 8.00000000, 0),
(75, 75, 1, 0, 'NTS New Trend Shop', 'Via alla Cervia', '6500', 'Bellinzona', 1, '', '', '', 'http://www.ntssportshop.ch/', '', 46.00000000, 9.00000000, 0),
(76, 76, 1, 0, 'Coop City Lugano', 'Via Nassa 22', '6900', 'Lugano', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2648/coop-city-city-lugano.html', '', 46.00000000, 8.00000000, 0),
(77, 77, 1, 0, 'Blenda 2 - Vintage Shop', 'Stüssihofstatt 7', '8001', 'Zürich', 1, '', '', '', 'http://www.blenda.ch/', '', 47.00000000, 8.00000000, 0),
(78, 78, 1, 0, 'Changemaker', 'Marktgasse 10 ', '8001', 'Zürich', 1, '', '', '', 'https://www.changemaker.ch/', '', 47.00000000, 8.00000000, 0),
(79, 79, 1, 0, 'CIRCLE - The Sustainable Shop', 'Brunngasse 3', '8001', 'Zürich', 1, '', '', '', 'http://www.circleshop.net/', '', 47.00000000, 8.00000000, 0),
(80, 80, 1, 0, 'Coop City St. Annahof', 'Bahnhofstrasse 57', '8001', 'Zürich', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2194/coop-city-city-zuerich-st--annahof.html', '', 47.00000000, 8.00000000, 0),
(81, 81, 1, 0, 'Helvetas Boutique', 'Weinbergstrasse 24', '8001', 'Zürich', 1, '', '', '', 'https://www.helvetas.ch/de/', '', 47.00000000, 8.00000000, 0),
(82, 82, 1, 0, 'Marktlücke', 'Schipfe 24', '8001', 'Zürich', 1, '', '', '', 'http://www.markt-luecke.ch/', '', 47.00000000, 8.00000000, 0),
(83, 83, 1, 0, 'NUBUC', 'Mühlegasse 12', '8001', 'Zürich', 1, '', '', '', 'https://www.nubuc.ch/', '', 47.00000000, 8.00000000, 0),
(84, 84, 1, 0, 'rrrevolve eco concept store', 'Stüssihofstatt 7', '8001', 'Zürich', 1, '', '', '', 'https://rrrevolve.ch/', '', 47.00000000, 8.00000000, 0),
(85, 85, 1, 0, 'rrrevolve fair fashion', 'Niederdorfstrasse 17', '8001', 'Zürich', 1, '', '', '', 'https://rrrevolve.ch/', '', 47.00000000, 8.00000000, 0),
(86, 86, 1, 0, 'SNE', 'Spiegelgasse 27', '8001', 'Zürich', 1, '', '', '', 'http://sne.ch/', '', 47.00000000, 8.00000000, 0),
(87, 87, 1, 0, 'Kleihd Mode-Leih-Boutique', 'Idastrasse 28', '8003', 'Zürich', 1, '', '', '', 'https://www.kleihd.ch/', '', 47.00000000, 8.00000000, 0),
(88, 88, 1, 0, 'FREITAG Store Grüngasse', 'Grüngasse 21', '8004', 'Zürich', 1, '', '', '', 'https://www.freitag.ch/de/store/freitag-store-gruengasse', '', 47.00000000, 8.00000000, 0),
(89, 89, 1, 0, 'saus&braus', 'Ankerstrasse 14', '8004', 'Zürich', 1, '', '', '', 'https://www.sausbraus.ch/', '', 47.00000000, 8.00000000, 0),
(90, 90, 1, 0, 'erfolg shop Zürich', 'Viaduktstrasse 45', '8005', 'Zürich', 1, '', '', '', 'http://www.erfolg-label.ch/', '', 47.00000000, 8.00000000, 0),
(91, 91, 1, 0, 'FREITAG Flagship Store Zürich', 'Geroldstrasse 23', '8005', 'Zürich', 1, '', '', '', 'https://www.freitag.ch/de/store/freitag-flagship-store-zuerich', '', 47.00000000, 8.00000000, 0),
(92, 92, 1, 0, 'Melvins', 'Josefstrasse 26', '8005', 'Zürich', 1, '', '', '', 'http://www.melvins.ch/', '', 47.00000000, 8.00000000, 0),
(93, 93, 1, 0, 'Nudie Jeans Co.', 'Im Viadukt 27', '8005', 'Zürich', 1, '', '', '', 'https://www.nudiejeans.com/de/stores/nudie-jeans-repair-shop-zurich', '', 47.00000000, 8.00000000, 0),
(94, 94, 1, 0, 'SANIKAI - Ethical Vegan Clothing', 'Geroldstrasse 23', '8005', 'Zürich', 1, '', '', '', 'http://sanikai.com/', '', 47.00000000, 8.00000000, 0),
(95, 95, 1, 0, 'Atelier Santer', 'Hotzestrasse 11', '8006', 'Zürich', 1, '', '', '', 'http://www.nicolesanter.ch/', '', 47.00000000, 8.00000000, 0),
(96, 96, 1, 0, '9months', 'Seefeldstrasse 175', '8008', 'Zürich', 1, '', '', '', 'http://www.9months.ch/', '', 47.00000000, 8.00000000, 0),
(97, 97, 1, 0, 'UNICA Zürich', 'Seefeldstrasse 7', '8008', 'Zürich', 1, '', '', '', 'https://www.claro.ch/de/corporate/ueber-claro/unica-die-modemarke', '', 47.00000000, 8.00000000, 0),
(98, 98, 1, 0, 'Coop City Bellevue Zürich', 'Theaterstrasse 18', '8024', 'Zürich', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2624/coop-city-city-zuerich-bellevue.html', '', 47.00000000, 8.00000000, 0),
(99, 99, 1, 0, 'Newcomers', 'Asylstrasse 79', '8032', 'Zürich', 1, '', '', '', 'https://www.newcomers.ch/', '', 47.00000000, 8.00000000, 0),
(100, 100, 1, 0, 'Coop City Sihlcity', 'Kalanderplatz 1', '8045', 'Zürich', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2492/coop-city-city-zuerich-sihlcity.html', '', 47.00000000, 8.00000000, 0),
(101, 101, 1, 0, 'Canto Verde', 'Limmattalstrasse 178', '8049', 'Zürich', 1, '', '', '', 'https://cantoverde8049.wordpress.com/', '', 47.00000000, 8.00000000, 0),
(102, 102, 1, 0, 'Coop City Oerlikon Zürich', 'Wallisellenstrasse 1', '8050', 'Zürich', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2618/coop-city-city-oerlikon.html', '', 47.00000000, 8.00000000, 0),
(103, 103, 1, 0, 'Changemaker', 'Vordergasse 55', '8200', 'Schaffhausen', 1, '', '', '', 'https://www.changemaker.ch/', '', 47.00000000, 8.00000000, 0),
(104, 104, 1, 0, 'claro Weltladen Schaffhausen', 'Webergasse 45', '8200', 'Schaffhausen', 1, '', '', '', 'http://claro-schaffhausen.ch/', '', 47.00000000, 8.00000000, 0),
(105, 105, 1, 0, 'Eselfell', 'Webergasse 11', '8200', 'Schaffhausen', 1, '', '', '', 'https://shop.eselfell.com/', '', 47.00000000, 8.00000000, 0),
(106, 106, 1, 0, 'Coop City Schaffhausen', 'Vordergasse 69', '8201', 'Schaffhausen', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2598/coop-city-city-schaffhausen.html', '', 47.00000000, 8.00000000, 0),
(107, 107, 1, 0, 'APU KUNTUR Store', 'Steinberggasse 9', '8400', 'Winterthur', 1, '', '', '', 'http://www.apukuntur.com/', '', 47.00000000, 8.00000000, 0),
(108, 108, 1, 0, 'Changemaker', 'Obertor 33', '8400', 'Winterthur', 1, '', '', '', 'https://www.changemaker.ch/', '', 47.00000000, 8.00000000, 0),
(109, 109, 1, 0, 'Coop City Winterthur', 'Bahnhofplatz 1-4', '8400', 'Winterthur', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2609/coop-city-city-winterthur.html', '', 47.00000000, 8.00000000, 0),
(110, 110, 1, 0, 'Jeanslife ', 'Holderplatz 1', '8400', 'Winterthur', 1, '', '', '', 'http://jeanslife.ch/', '', 47.00000000, 8.00000000, 0),
(111, 111, 1, 0, 'Monika Schneiter Store', 'Tösstalstrasse 16', '8400', 'Winterthur', 1, '', '', '', 'https://www.monika-schneiter.ch/', '', 47.00000000, 8.00000000, 0),
(112, 112, 1, 0, 'UNICA Winterthur', 'Metzggasse 12', '8400', 'Winterthur', 1, '', '', '', 'https://www.claro.ch/de/corporate/ueber-claro/unica-die-modemarke', '', 47.00000000, 8.00000000, 0),
(113, 113, 1, 0, 'biosfair', 'Bahnhofstrasse 4', '8570', 'Weinfelden', 1, '', '', '', 'http://biosfair.ch/', '', 47.00000000, 9.00000000, 0),
(114, 114, 1, 0, 'Coop City Volkiland Volketswil', 'Industriestrasse 1', '8604', 'Volketswil', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2197/coop-city-city-volkiland.html', '', 47.00000000, 8.00000000, 0),
(115, 115, 1, 0, 'auras fair & style est.2009', 'Dorfstrasse 35', '8805', 'Richterswil', 1, '', '', '', 'http://www.auras.tv/', '', 47.00000000, 8.00000000, 0),
(116, 116, 1, 0, 'VIARTBD-BOUTIQUE', 'Buebenaustrasse 14', '8954', 'Geroldswil', 1, '', '', '', 'http://www.viartbd-boutique.com/de/', '', 47.00000000, 8.00000000, 0),
(117, 117, 1, 0, 'Coop City St. Gallen', 'Am Bohl 6', '9004', 'St. Gallen', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2589/coop-city-city-st--gallen.html', '', 47.00000000, 9.00000000, 0),
(118, 118, 1, 0, 'Coop City Will', 'Obere Bahnhofstrasse 32/4', '9500', 'Will', 1, '', '', '', 'http://www.coop.ch/de/services/standorte-und-oeffnungszeiten/detail.html/2592/coop-city-city-wil.html', '', 47.00000000, 9.00000000, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_blog_categories`
--

DROP TABLE IF EXISTS `bf_blog_categories`;
CREATE TABLE IF NOT EXISTS `bf_blog_categories` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `contenttype` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `category` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `target_uid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `target_uid` (`target_uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `bf_blog_categories`
--

INSERT INTO `bf_blog_categories` (`uid`, `contenttype`, `category`, `target_uid`) VALUES
(3, 'entry', 'default', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_blog_chapters`
--

DROP TABLE IF EXISTS `bf_blog_chapters`;
CREATE TABLE IF NOT EXISTS `bf_blog_chapters` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `chaptername` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `description` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `sortorder` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `bf_blog_chapters`
--

INSERT INTO `bf_blog_chapters` (`uid`, `chaptername`, `description`, `sortorder`) VALUES
(1, 'Startup', 'BeeFair''s Honey Blog startup edition', 10);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_blog_comments`
--

DROP TABLE IF EXISTS `bf_blog_comments`;
CREATE TABLE IF NOT EXISTS `bf_blog_comments` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `contenttype` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `entry_uid` int(11) NOT NULL DEFAULT '0',
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `email` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `url` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `ip` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `useragent` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `registered` tinyint(4) NOT NULL DEFAULT '0',
  `notify` tinyint(4) NOT NULL DEFAULT '0',
  `discreet` tinyint(4) NOT NULL DEFAULT '0',
  `moderate` tinyint(4) NOT NULL DEFAULT '0',
  `spamscore` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `entry_uid` (`entry_uid`),
  KEY `date` (`date`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `bf_blog_comments`
--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_blog_entries`
--

DROP TABLE IF EXISTS `bf_blog_entries`;
CREATE TABLE IF NOT EXISTS `bf_blog_entries` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `uri` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `introduction` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `convert_lb` int(11) NOT NULL DEFAULT '0',
  `status` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edit_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `allow_comments` int(11) NOT NULL DEFAULT '0',
  `keywords` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `via_link` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `via_title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `comment_count` int(11) NOT NULL,
  `comment_names` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `trackback_count` int(11) NOT NULL,
  `trackback_names` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `extrafields` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`),
  FULLTEXT KEY `title` (`title`,`subtitle`,`introduction`,`body`,`keywords`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `bf_blog_entries`
--

INSERT INTO `bf_blog_entries` (`uid`, `title`, `uri`, `subtitle`, `introduction`, `body`, `convert_lb`, `status`, `date`, `publish_date`, `edit_date`, `user`, `allow_comments`, `keywords`, `via_link`, `via_title`, `comment_count`, `comment_names`, `trackback_count`, `trackback_names`, `extrafields`) VALUES
(2, 'Test', 'test', 'TestUT', '<p>TestE</p>', '<p>TestHT</p>', 5, 'publish', '2016-06-02 14:39:00', '2016-06-02 14:39:00', '2016-06-02 14:39:38', 'admin', 1, 'test', '', '', 0, '', 0, '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_blog_extrafields`
--

DROP TABLE IF EXISTS `bf_blog_extrafields`;
CREATE TABLE IF NOT EXISTS `bf_blog_extrafields` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `contenttype` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `target_uid` int(11) NOT NULL DEFAULT '0',
  `fieldkey` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `target_uid` (`target_uid`),
  KEY `fieldkey` (`fieldkey`(16)),
  FULLTEXT KEY `value` (`value`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Daten für Tabelle `bf_blog_extrafields`
--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_blog_pages`
--

DROP TABLE IF EXISTS `bf_blog_pages`;
CREATE TABLE IF NOT EXISTS `bf_blog_pages` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `uri` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `introduction` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `convert_lb` int(11) NOT NULL DEFAULT '0',
  `template` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `status` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `publish_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `edit_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `chapter` int(11) NOT NULL DEFAULT '0',
  `sortorder` int(11) NOT NULL DEFAULT '0',
  `user` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `allow_comments` int(11) NOT NULL DEFAULT '0',
  `keywords` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `extrafields` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`),
  FULLTEXT KEY `title` (`title`,`subtitle`,`introduction`,`body`,`keywords`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `bf_blog_pages`
--

INSERT INTO `bf_blog_pages` (`uid`, `title`, `uri`, `subtitle`, `introduction`, `body`, `convert_lb`, `template`, `status`, `date`, `publish_date`, `edit_date`, `chapter`, `sortorder`, `user`, `allow_comments`, `keywords`, `extrafields`) VALUES
(3, 'BeeFair Startup', 'beefair-startup', 'Wir sind gestartet...', '<h1><strong>BeeFair Startup</strong></h1>\r\n<p>Wir sind gestartet!</p>', '<p>Nach langen schlaflosen Nächten sind wir endlich soweit.</p>', 5, '-', 'publish', '2016-06-02 12:53:00', '2016-06-02 12:53:00', '2016-06-02 12:56:16', 1, 10, 'admin', 0, 'beefair startup', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_blog_tags`
--

DROP TABLE IF EXISTS `bf_blog_tags`;
CREATE TABLE IF NOT EXISTS `bf_blog_tags` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `tag` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `contenttype` tinytext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `target_uid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`),
  KEY `target_uid` (`target_uid`),
  KEY `tag` (`tag`(32))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `bf_blog_tags`
--

INSERT INTO `bf_blog_tags` (`uid`, `tag`, `contenttype`, `target_uid`) VALUES
(1, 'beefair', 'page', 3),
(2, 'startup', 'page', 3),
(3, 'test', 'entry', 2);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_blog_trackbacks`
--

DROP TABLE IF EXISTS `bf_blog_trackbacks`;
CREATE TABLE IF NOT EXISTS `bf_blog_trackbacks` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `entry_uid` int(11) NOT NULL DEFAULT '0',
  `name` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `title` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `url` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `ip` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `excerpt` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `moderate` tinyint(4) NOT NULL DEFAULT '0',
  `spamscore` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Daten für Tabelle `bf_blog_trackbacks`
--


-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_category`
--

DROP TABLE IF EXISTS `bf_category`;
CREATE TABLE IF NOT EXISTS `bf_category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `description` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `bf_category`
--

INSERT INTO `bf_category` (`id`, `name`, `description`, `deleted`) VALUES
(1, 'Fair-Trade', 'ausschliesslich Fair-Trade', 0),
(2, 'teils Fair-Trade', 'Fair-Trade im Angebot', 0),
(0, 'keine Kategory', 'keine Kategory', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_company`
--

DROP TABLE IF EXISTS `bf_company`;
CREATE TABLE IF NOT EXISTS `bf_company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) CHARACTER SET latin1 NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=119 ;

--
-- Daten für Tabelle `bf_company`
--

INSERT INTO `bf_company` (`id`, `name`, `description`, `deleted`) VALUES
(1, 'Aestethical', 'Aestethical', 0),
(2, 'Auras', 'Auras', 0),
(3, 'Lola Fred', 'Lola Fred', 0),
(4, 'Helvetas Fairshop', 'Helvetas Fairshop', 0),
(5, 'Transa Zürich', 'Transa Zürich', 0),
(6, 'Nudie Jeans co.', 'Nudie Jeans co.', 0),
(7, 'Zämä', 'Zämä', 0),
(8, 'rrrevolve Concept Store', 'rrrevolve Concept Store', 0),
(9, 'Circle', 'Circle', 0),
(10, 'Changemaker', 'Changemaker', 0),
(11, 'Melvins', 'Melvins', 0),
(12, 'Sanikai', 'Sanikai', 0),
(13, 'favorite fair', 'favorite fair', 0),
(14, 'ARMEDANGELS', 'ARMEDANGELS', 0),
(15, 'Monsoon', 'Monsoon', 0),
(16, 'visible Clothing', 'visible Clothing', 0),
(17, 'Kuyichi', 'Kuyichi', 0),
(18, 'K.I.O', 'K.I.O', 0),
(19, 'faircustomer', 'faircustomer', 0),
(20, 'Coop City Au Centre Lausanne', 'Coop City Au Centre Lausanne', 0),
(21, 'Coop City Fusterie Genève', 'Coop City Fusterie Genève', 0),
(22, 'Boutique Ayni', 'Boutique Ayni', 0),
(23, 'Coop City Plainpalais Genève', 'Coop City Plainpalais Genève', 0),
(24, 'Coop City Meyrin', 'Coop City Meyrin', 0),
(25, 'Coop City Fribourg', 'Coop City Fribourg', 0),
(26, 'Coop City Sion', 'Coop City Sion', 0),
(27, 'Coop City Neuchâtel', 'Coop City Neuchâtel', 0),
(28, 'Coop City Rifflyhof Bern', 'Coop City Rifflyhof Bern', 0),
(29, '9months', '9months', 0),
(30, '9punkt9 GmbH', '9punkt9 GmbH', 0),
(31, 'Changemaker', 'Changemaker', 0),
(32, 'Coop City Marktgasse Bern', 'Coop City Marktgasse Bern', 0),
(33, 'erfolg shop Bern', 'erfolg shop Bern', 0),
(34, 'ideale', 'ideale', 0),
(35, 'Roots Fashion', 'Roots Fashion', 0),
(36, 'UNICA Bern', 'UNICA Bern', 0),
(37, 'Nordring Fair Fashion', 'Nordring Fair Fashion', 0),
(38, 'im Réduit', 'im Réduit', 0),
(39, 'Changemaker', 'Changemaker', 0),
(40, 'Coop City Kyburg Thun', 'Coop City Kyburg Thun', 0),
(41, 'Ladybird Fashion', 'Ladybird Fashion', 0),
(42, 'Rosa und Kasimir', 'Rosa und Kasimir', 0),
(43, 'ANNA K. First and Secondhand Shop', 'ANNA K. First and Secondhand Shop', 0),
(44, 'Coop City Am Marktplatz Basel', 'Coop City Am Marktplatz Basel', 0),
(45, 'sahara Fairtrade', 'sahara Fairtrade', 0),
(46, 'Cangemaker', 'Cangemaker', 0),
(47, 'Coop City Pfauen Basel', 'Coop City Pfauen Basel', 0),
(48, 'erfolg shop Basel', 'erfolg shop Basel', 0),
(49, 'OEKOLADEN Theaterpassage', 'OEKOLADEN Theaterpassage', 0),
(50, 'UNICA Basel', 'UNICA Basel', 0),
(51, 'CHEMISERIE+', 'CHEMISERIE+', 0),
(52, 'Ahoi Ahoi', 'Ahoi Ahoi', 0),
(53, 'ANNA K. First and Secondhand Fashion', 'ANNA K. First and Secondhand Fashion', 0),
(54, 'ANNA K. First and Secondhand Fashion', 'ANNA K. First and Secondhand Fashion', 0),
(55, 'ANNA K. First and Secondhand Fashion', 'ANNA K. First and Secondhand Fashion', 0),
(56, 'Schöni Sache Atelier, Shop, BnB', 'Schöni Sache Atelier, Shop, BnB', 0),
(57, 'Coop City Olten', 'Coop City Olten', 0),
(58, 'Spycher Handwerk AG', 'Spycher Handwerk AG', 0),
(59, 'Coop City Aarau', 'Coop City Aarau', 0),
(60, 'Neisna', 'Neisna', 0),
(61, 'SCHUHHALT', 'SCHUHHALT', 0),
(62, 'Villa Paul', 'Villa Paul', 0),
(63, 'Walk-in Closet Kleidertauschbörse', 'Walk-in Closet Kleidertauschbörse', 0),
(64, 'Coop City Baden', 'Coop City Baden', 0),
(65, 'Coop City Luzern', 'Coop City Luzern', 0),
(66, '9months', '9months', 0),
(67, 'Colora', 'Colora', 0),
(68, 'Changemaker', 'Changemaker', 0),
(69, 'erfolg shop Luzern', 'erfolg shop Luzern', 0),
(70, 'glore Luzern', 'glore Luzern', 0),
(71, 'Coop City Kriens', 'Coop City Kriens', 0),
(72, 'Coop City Zug', 'Coop City Zug', 0),
(73, '3SIXTY', '3SIXTY', 0),
(74, '3SIXTY', '3SIXTY', 0),
(75, 'NTS New Trend Shop', 'NTS New Trend Shop', 0),
(76, 'Coop City Lugano', 'Coop City Lugano', 0),
(77, 'Blenda 2 - Vintage Shop', 'Blenda 2 - Vintage Shop', 0),
(78, 'Changemaker', 'Changemaker', 0),
(79, 'CIRCLE - The Sustainable Shop', 'CIRCLE - The Sustainable Shop', 0),
(80, 'Coop City St. Annahof', 'Coop City St. Annahof', 0),
(81, 'Helvetas Boutique', 'Helvetas Boutique', 0),
(82, 'Marktlücke', 'Marktlücke', 0),
(83, 'NUBUC', 'NUBUC', 0),
(84, 'rrrevolve eco concept store', 'rrrevolve eco concept store', 0),
(85, 'rrrevolve fair fashion', 'rrrevolve fair fashion', 0),
(86, 'SNE', 'SNE', 0),
(87, 'Kleihd Mode-Leih-Boutique', 'Kleihd Mode-Leih-Boutique', 0),
(88, 'FREITAG Store Grüngasse', 'FREITAG Store Grüngasse', 0),
(89, 'saus&braus', 'saus&braus', 0),
(90, 'erfolg shop Zürich', 'erfolg shop Zürich', 0),
(91, 'FREITAG Flagship Store Zürich', 'FREITAG Flagship Store Zürich', 0),
(92, 'Melvins', 'Melvins', 0),
(93, 'Nudie Jeans Co.', 'Nudie Jeans Co.', 0),
(94, 'SANIKAI - Ethical Vegan Clothing', 'SANIKAI - Ethical Vegan Clothing', 0),
(95, 'Atelier Santer', 'Atelier Santer', 0),
(96, '9months', '9months', 0),
(97, 'UNICA Zürich', 'UNICA Zürich', 0),
(98, 'Coop City Bellevue Zürich', 'Coop City Bellevue Zürich', 0),
(99, 'Newcomers', 'Newcomers', 0),
(100, 'Coop City Sihlcity', 'Coop City Sihlcity', 0),
(101, 'Canto Verde', 'Canto Verde', 0),
(102, 'Coop City Oerlikon Zürich', 'Coop City Oerlikon Zürich', 0),
(103, 'Changemaker', 'Changemaker', 0),
(104, 'claro Weltladen Schaffhausen', 'claro Weltladen Schaffhausen', 0),
(105, 'Eselfell', 'Eselfell', 0),
(106, 'Coop City Schaffhausen', 'Coop City Schaffhausen', 0),
(107, 'APU KUNTUR Store', 'APU KUNTUR Store', 0),
(108, 'Changemaker', 'Changemaker', 0),
(109, 'Coop City Winterthur', 'Coop City Winterthur', 0),
(110, 'Jeanslife ', 'Jeanslife ', 0),
(111, 'Monika Schneiter Store', 'Monika Schneiter Store', 0),
(112, 'UNICA Winterthur', 'UNICA Winterthur', 0),
(113, 'biosfair', 'biosfair', 0),
(114, 'Coop City Volkiland Volketswil', 'Coop City Volkiland Volketswil', 0),
(115, 'auras fair & style est.2009', 'auras fair & style est.2010', 0),
(116, 'VIARTBD-BOUTIQUE', 'VIARTBD-BOUTIQUE', 0),
(117, 'Coop City St. Gallen', 'Coop City St. Gallen', 0),
(118, 'Coop City Will', 'Coop City Will', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_country`
--

DROP TABLE IF EXISTS `bf_country`;
CREATE TABLE IF NOT EXISTS `bf_country` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `iso` varchar(10) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Daten für Tabelle `bf_country`
--

INSERT INTO `bf_country` (`id`, `name`, `iso`, `deleted`) VALUES
(0, 'kein Land', '', 0),
(1, 'Schweiz', 'CHF', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `bf_shoptype`
--

DROP TABLE IF EXISTS `bf_shoptype`;
CREATE TABLE IF NOT EXISTS `bf_shoptype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `description` varchar(255) NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `bf_shoptype`
--

INSERT INTO `bf_shoptype` (`id`, `name`, `description`, `deleted`) VALUES
(0, 'keine Angabe', 'keine Angabe', 0),
(1, 'lokaler Laden', 'lokaler Laden', 0),
(2, 'online Shop', 'online Shop', 0),
(3, 'lokaler Laden & online Shop', 'lokaler Laden & online Shop', 0);
