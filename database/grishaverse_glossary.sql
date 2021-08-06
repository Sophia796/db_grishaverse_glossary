-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 06. Aug 2021 um 10:20
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `grishaverse_glossary`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `begriffe`
--

CREATE TABLE `begriffe` (
  `ID` int(10) NOT NULL,
  `name` text NOT NULL,
  `beschreibung` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `begriffe`
--

INSERT INTO `begriffe` (`ID`, `name`, `beschreibung`) VALUES
(1, 'Banya', 'thermenähnliches Gemeinschaftsbad mit heißen und kalten Becken'),
(2, 'Barrel ', 'Vergnügungsviertel in Ketterdam'),
(3, 'Demjin', 'Fjerdan für \'Dämon\''),
(4, 'Drüskelle', 'Hexenjäger aus Fjerda'),
(5, 'Drüsje', 'Fjerdan für \'Hexe\''),
(6, 'Erste Armee', 'nichtmagische Armee des Zaren von Ravka'),
(7, 'Feuervogel', 'eines der drei magischen Geschöpfe, die mit Ilya Morozova in Verbindung gebracht werden'),
(8, 'Jurda', 'Aufputschmittel der Zemeni'),
(9, 'Jurda Parem', 'Droge aus chemisch verändertem Jurda, die die Fähigkeiten der Grisha verstärkt, macht nach einer Dosis stark abhängig, endet meist tödlich'),
(10, 'Kefta', 'Robe der Grisha, kann Gewehrfeuer standhalten, die Farbe variiert ja nach Ordenszugehörigkeit'),
(11, 'Kokochnik', 'traditioneller Kopfschmuck verheirateter Frauen aus Ravka'),
(12, 'Kvas', 'beliebtes Getränk in Ravka'),
(13, 'Lumiya', 'flüssiges Feuer, eine Erfindung Morozovas'),
(14, 'Merzost', 'schwarze Magie'),
(15, 'Nichevo\'ya', '\'Nicht-Wesen\', vom Dunklen erschaffene magische Schattenwesen, auch Schattenkrieger genannt'),
(16, 'Ödsee', 'andere Bezeichnung für die Schattenflur, eine Sandwüste, die in tiefer Finsternis liegt und die von den Volkra bewohnt wird'),
(17, 'Opritschki', 'Elitesoldaten in der Leibgarde des Dunklen'),
(18, 'Otkazat\'sya', 'Ravkan für \'Verlassener\', Bezeichnung für die einfachen Menschen ohne Grishafähigkeiten, außerdem Bezeichnung für ein Waisenkind'),
(19, 'Razrusha\'ya', 'Ravkan für \'die Verheerte\', so wird Genya von abergläubigen Menschen genannt'),
(20, 'Rusalye', 'die Meeresgeißel, ein mythischer Eisdrache, der in der Knochenrinne lebt'),
(21, 'Samowar', 'Wasserkocher, aus dem Tee serviert wird'),
(22, 'Sandskiff', 'flacher Schlitten mit großen Segeln, der Reisende lautlos über die Schattenflur befördert'),
(23, 'Sobachka', 'Ravkan für \'Welpe\', Nikolai Lantsovs Spitzname, da er der jüngere Sohn ist'),
(24, 'Soldat Sol', 'Armee des Asketen, die aus Anhängern der Sonnenkriegerin besteht, ihr Erkennungszeichen ist die Tätowierung der Strahlensonne'),
(25, 'Sol Koroleva', 'Ravkan für \'Sonnenkönigin\', ehrfürchtige Bezeichnung der Sonnenkriegerin'),
(26, 'Tsarevich ', 'ältester Sohn des Zaren und Thronfolger'),
(27, 'Volkra', 'blindes, geflügeltes Wesen, das Reisende in der Schattenflur heimsucht'),
(28, 'Wahre See', 'Meer'),
(29, 'Weiße Rose', 'Menagerie im Barrel von Ketterdam'),
(30, 'Haus der Exoten', 'Menagerie im Barrel von Ketterdam'),
(31, 'Krämer', 'Bezeichnung eines Kaufmanns in Kerch'),
(32, 'Dregs', 'Gang in Ketterdam, der auch die Krähen angehören'),
(33, 'Dime-Lions', 'Gang in Ketterdam'),
(34, 'Black Tips', 'Gang in Ketterdam'),
(35, 'Gezeitenrat', 'Zusammenschluss von Flutern, die Ebbe und Flut im Hafen von Ketterdam kontrollieren'),
(36, 'Zweite Armee', 'magische Grisha-Armee des Zaren von Ravka, angeführt vom Dunklen, später von der Triarchie'),
(37, 'Krähen', 'die Gruppe bestehend aus Kaz Brekker, Inej Ghafa, Jesper Fahey, Nina Zenik, Matthias Helvar und Wylan Van Eck; der Name ist abgeleitet vom Krähentattoo der Dregs'),
(38, 'Entherzer', 'Grisha im Orden der Korporalki, Fähigkeit: Beherrschen des Körpers, Kefta-Farbe: rot'),
(39, 'Heiler', 'Grisha im Orden der Korporalki, Fähigkeit: Beherrschen des Körpers, insbesondere Heilen von Wunden, Kefta-Farbe: rot'),
(40, 'Stürmer', 'Grisha im Orden der Ätheralki, Fähigkeit: Beschwörung von Wind und Wetter, Keftafarbe: blau'),
(41, 'Fluter', 'Grisha im Orden der Ätheralki, Fähigkeit: Beschwörung von Wasser, Keftafarbe: blau'),
(42, 'Inferni', 'Grisha im Orden der Ätheralki, Fähigkeit: Beschwörung von Feuer, Keftafarbe: blau'),
(43, 'Durast', 'Grisha im Orden der Materialki, Fähigkeit: Farbrikation und Manipulation von festen Stoffen, Keftafarbe: purpur'),
(44, 'Alkemi', 'Grisha im Orden der Materialki, Fähigkeit: Farbrikation und Manipulation von Chemikalien, Keftafarbe: purpur'),
(45, 'Bildner', 'Grisha mit der einzigartigen Fähigkeit, das Aussehen zu manipulieren; kann keinem Orden zugeordnet werden, da die Fähigkeiten eine Mischung aus Korporalki und Materialki darstellen'),
(46, 'Korporalki', 'Grisha-Orden der Lebenden und der Toten'),
(47, 'Ätheralki', 'Grisha-Orden der Beschwörer'),
(48, 'Materialki', 'Grisha-Orden der Fabrikatoren'),
(49, 'Dunkler', 'Grisha mit der einzigartigen Fähigkeit, die Dunkelheit zu Beschwören; Anführer der Zweiten Armee; Keftafarbe: schwarz'),
(50, 'Sonnenkriegerin', 'Grisha mit der einzigartigen Fähigkeit, Licht zu Beschwören; von Gläubigen als Heilige verehrt; Keftafarbe: gold');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `grisha`
--

CREATE TABLE `grisha` (
  `ID` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `orden` int(10) NOT NULL,
  `beschreibung` text NOT NULL,
  `kefta_farbe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `grisha`
--

INSERT INTO `grisha` (`ID`, `name`, `orden`, `beschreibung`, `kefta_farbe`) VALUES
(1, 'Entherzer', 1, 'Fähigkeit: Beherrschen des Körpers, Ausbildung zum Kampf', 'rot'),
(2, 'Heiler', 1, 'Fähigkeit: Beherrschen des Körpers, Heilen von Wunden', 'rot'),
(3, 'Stürmer', 2, 'Fähigkeit: Beschwörung von Wind und Wetter', 'blau'),
(4, 'Fluter', 2, 'Fähigkeit: Beschwörung von Wasser', 'blau'),
(5, 'Inferni', 2, 'Fähigkeit: Beschwörung von Feuer', 'blau'),
(6, 'Durast', 3, 'Fähigkeit: Fabrikation und Manipulation von festen Stoffen (z.B. Glas, Stahl, Holz)', 'purpur'),
(7, 'Alkemi', 3, 'Fähigkeit: Fabrikation und Manipulation von Chemikalien (z.B. Gift, Sprengstoff)', 'purpur'),
(8, 'Dunkler', 2, 'Fähigkeit: Beschwörung von Dunkelheit', 'schwarz'),
(9, 'Sonnenkrieger', 2, 'Fähigkeit: Beschwörung von Licht', 'gold'),
(10, 'Bildner', 1, 'Fähigkeit: Manipulation des Körpers und des Aussehens', 'weiß, rot'),
(11, 'kein Grisha', 4, '', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `grisha_orden`
--

CREATE TABLE `grisha_orden` (
  `ID` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `beschreibung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `grisha_orden`
--

INSERT INTO `grisha_orden` (`ID`, `name`, `beschreibung`) VALUES
(1, 'Korporalki', 'Orden der Lebenden und der Toten'),
(2, 'Ätheralki', 'Orden der Beschwörer'),
(3, 'Materialki', 'Orden der Fabrikatoren'),
(4, 'kein Orden', '');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gruppen`
--

CREATE TABLE `gruppen` (
  `ID` int(10) NOT NULL,
  `name` text NOT NULL,
  `nation` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `gruppen`
--

INSERT INTO `gruppen` (`ID`, `name`, `nation`) VALUES
(1, 'Black Tips', 1),
(2, 'Dime-Lions', 1),
(3, 'Dregs', 1),
(4, 'Drüskelle', 7),
(5, 'Grisha', 3),
(6, 'Krähen', 1),
(7, 'Soldat Sol', 3),
(8, 'Krämer', 1),
(9, 'Keine Gruppe/unbekannt', 8),
(10, 'Zarenfamilie', 3),
(11, 'Erste Armee', 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `nationen`
--

CREATE TABLE `nationen` (
  `ID` int(10) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `nationen`
--

INSERT INTO `nationen` (`ID`, `name`) VALUES
(1, 'Kerch'),
(2, 'Novyi Zem'),
(3, 'Ravka'),
(4, 'Suli'),
(5, 'Shu-Han'),
(6, 'Wandernde Insel'),
(7, 'Fjerda'),
(8, 'keine Nation/unbekannt');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen`
--

CREATE TABLE `personen` (
  `ID` int(10) NOT NULL,
  `vorname` text DEFAULT NULL,
  `nachname` text DEFAULT NULL,
  `weitere_namen` text DEFAULT NULL,
  `geschlecht` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `nation` int(10) NOT NULL,
  `gruppe` int(10) DEFAULT NULL,
  `grisha_typ` int(10) DEFAULT NULL,
  `beschreibung` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `personen`
--

INSERT INTO `personen` (`ID`, `vorname`, `nachname`, `weitere_namen`, `geschlecht`, `nation`, `gruppe`, `grisha_typ`, `beschreibung`) VALUES
(1, 'Adrik', 'Zhabin', NULL, 'm', 3, 5, 3, 'Grisha in der Ausbildung, Nadias jüngerer Bruder'),
(2, 'Alexander', 'Lantsov', 'Alexander III. ', 'm', 3, 10, 11, 'Zar von Ravka'),
(3, 'Alina', 'Starkov', 'Sankta Alina, Sol Koroleva (Sonnenkönigin)', 'w', 3, 5, 9, 'Kartografin in der Ersten Armee von Ravka, einzigartige Grisha mit verborgenen Fähigkeiten'),
(4, 'Alys', 'Van Eck', NULL, 'w', 1, 8, 11, 'Jan Van Ecks zweite Frau'),
(5, 'Ana', 'Kuya', NULL, 'w', 3, 9, 11, 'Haushälterin im Waisenhaus von Keramzin'),
(6, 'Anika', NULL, NULL, 'w', 1, 3, 11, NULL),
(7, NULL, 'Asket', NULL, 'm', 3, 7, 11, 'Priester, erst Berater im Dienst des Zaren, dann des Dunklen, später Anführer der Soldat Sol'),
(8, 'Baghra', 'Morozova', NULL, 'w', 3, 5, 8, 'mächtige Grisha mit einzigartigen Fähigkeiten, Alinas Lehrerin, Mutter des Dunklen, Tochter von Ilya Morozova'),
(9, 'Bastian', NULL, NULL, 'm', 1, 3, 11, NULL),
(10, NULL, 'Bolliger', 'Big Bolliger', 'm', 1, 3, 11, NULL),
(11, 'Botkin', 'Yul-Erdene', NULL, 'm', 5, 9, 11, 'ehemaliger Shu-Han-Söldner, Kampftrainer der Grisha'),
(12, 'Bo', 'Yul-Bayur', NULL, 'm', 5, 5, 7, 'Erfinder des Jurda-Parems, Kuwei Yul-Bos Vater'),
(13, 'Colm', 'Fahey', NULL, 'm', 6, 9, 11, 'Jesper Faheys Vater'),
(14, 'Cornelis', 'Smeet', NULL, 'm', 1, 8, 11, 'Jan Van Ecks Anwalt und Verwalter seines Eigentums'),
(15, 'Danil', 'Markov', NULL, 'm', 3, 5, 5, 'Identur in Ketterdam'),
(16, 'David', 'Kostyk', NULL, 'm', 3, 5, 6, 'Genyas Freund, später Mitglied der Triarchie von Ravka (Vertreter der Fabrikatoren)'),
(17, 'Alexander', 'Morozova', 'Der Dunkle, Der Dunkle Ketzer', 'm', 3, 5, 8, 'mächtiger Grisha mit einzigartigen Fähigkeiten, Anführer der Grisha, Baghras Sohn'),
(18, NULL, 'Doughty', NULL, 'm', 1, 2, 11, NULL),
(19, 'Dunyasha', 'Lazareva', 'Weiße Klinge', 'w', 3, 9, 11, 'Söldnerin und Auftragsmörderin'),
(20, 'Eamon', NULL, NULL, 'm', 1, 2, 11, 'Leutnant der Dime-Lions'),
(21, NULL, 'Elzinger', NULL, 'm', 1, 1, 11, NULL),
(22, 'Emil ', 'Retwenko', NULL, 'm', 3, 5, 3, 'Indentur in Ketterdam'),
(23, 'Eroll', 'Aerts', NULL, 'm', 1, 2, 11, NULL),
(24, 'Fedyor', 'Kaminski', NULL, 'm', 3, 5, 1, NULL),
(25, 'Filip', NULL, NULL, 'm', 1, 2, 11, NULL),
(26, NULL, 'Geels', NULL, 'm', 1, 1, 11, 'Leutnant der Black Tips'),
(27, 'Genya', 'Safin', 'Razrusha\'ya (die Verheerte)', 'w', 3, 5, 10, 'mächtige Grisha mit einzigartigen Fähigkeiten, zuerst im Dienst der Zarin, dann des Dunklen, schließlich Mitglied der Triarchie von Ravka (Vertreterin der Korporalki)'),
(28, NULL, 'Gerrigan', NULL, 'm', 1, 2, 11, NULL),
(29, NULL, 'Gorka', NULL, 'm', 1, 3, 11, NULL),
(30, 'Harshaw', NULL, NULL, 'm', 6, 5, 5, NULL),
(31, 'Heleen', 'Van Houden', 'Pfau, Tante Heleen', 'w', 1, 9, 11, 'Leiterin der Menagerie \'Haus der Exoten\' in Ketterdam'),
(32, NULL, 'Hoede', NULL, 'm', 1, 8, 11, NULL),
(33, 'Ilya', 'Morozova', 'Sankt Ilya', 'm', 3, 5, 6, 'mächtiger Grisha, Erschaffer der Kräftemehrer, Vater von Baghra'),
(34, 'Inej', 'Ghafa', 'Phantom', 'w', 4, 6, 11, 'Akrobatin, Spionin und Messerkämpferin, ehemals Identur in der Menagerie'),
(35, 'Jan', 'Van Eck', NULL, 'm', 1, 8, 11, 'Auftraggeber und Widersacher der Krähen, Wylan Van Ecks Vater'),
(36, 'Jarl', 'Brum', NULL, 'm', 7, 4, 11, 'Kommandant der Drüskelle'),
(37, 'Jesper', 'Fahey', NULL, 'm', 2, 6, 6, 'Scharfschütze, Wylan Van Ecks Freund'),
(38, 'Kaz', 'Brekker', 'Dirtyhands, Bastard of the Barrel, Demjin (Dämon) ', 'm', 1, 6, 11, 'Meisterdieb und Schlösserknacker, Leutnant der Dregs, Anführer der Krähen, Haphephobiker'),
(39, NULL, 'Keeg', NULL, 'm', 1, 3, 11, NULL),
(40, 'Kuwei', 'Yul-Bo', NULL, 'm', 5, 5, 5, 'Shu-Abtrünniger und Gejagter, Sohn von Bo Yul-Bayur'),
(41, 'Malyen', 'Oretsev', 'Otkazat\'sya (Verlassener)', 'm', 3, 11, 11, 'Fährtenleser in der Ersten Armee von Ravka, Alinas Freund'),
(42, 'Marie', NULL, NULL, 'w', 3, 5, 5, ''),
(43, 'Marya', 'Hendriks', NULL, 'w', 1, 9, 11, 'Wylan Van Ecks Mutter, Jan Van Ecks erste Frau'),
(44, 'Matthias', 'Helvar', NULL, 'm', 7, 6, 11, 'in Ungnade gefallener Drüskelle, Nina Zeniks Freund'),
(45, 'Misha', NULL, NULL, 'm', 3, 9, 11, 'Baghras Diener, Waise'),
(46, NULL, 'Muzzen', NULL, 'm', 1, 3, 11, NULL),
(47, 'Nadia', 'Zhabin', NULL, 'w', 3, 5, 3, 'Adriks Schwester, Tamars Freundin'),
(48, 'Nikolai', 'Lantsov', 'Sturmhond, Sobachka (Welpe), Fuchs', 'm', 3, 10, 11, 'zweiter Sohn Alexanders III., Freibeuter, später Zar von Ravka'),
(49, 'Nina', 'Zenik', 'Corpsewitch, Drüsje (Hexe)', 'w', 3, 6, 1, 'mächtige Grisha, Überlebende des Jurda-Parems, ehemals Identur in der Weißen Rose, Matthias Helvars Freundin'),
(50, 'Paja', NULL, NULL, 'w', 4, 5, 7, NULL),
(51, 'Pekka', 'Rollins', NULL, 'm', 1, 2, 11, 'General der Dime-Lions, Kaz Brekkers Erzfeind'),
(52, 'Per', 'Haskell', NULL, 'm', 1, 3, 11, 'General der Dregs'),
(53, 'Pim', NULL, NULL, 'm', 1, 3, 11, NULL),
(54, NULL, 'Raske', NULL, 'm', 1, 3, 11, 'freier Demo-Experte '),
(55, NULL, 'Roeder', NULL, 'm', 1, 3, 11, NULL),
(56, 'Rotty', NULL, NULL, 'm', 1, 3, 11, NULL),
(57, 'Ruby', NULL, NULL, 'w', 3, 7, 11, NULL),
(58, NULL, 'Seeger', NULL, 'm', 1, 3, 11, NULL),
(59, 'Sergei', 'Beznikov', NULL, 'm', 3, 5, 1, NULL),
(60, 'Shay', NULL, NULL, 'w', 1, 2, 11, NULL),
(61, NULL, 'Specht', NULL, 'm', 1, 3, 11, 'ehemaliger Marineoffizier, Dokumentenfälscher '),
(62, 'Stigg', NULL, NULL, 'm', 7, 5, 5, NULL),
(63, NULL, 'Swann', NULL, 'm', 1, 3, 11, NULL),
(64, 'Tamar', 'Kir-Baatar', NULL, 'w', 5, 5, 1, 'Zwillingsschwester von Tolya, Freundin von Nadia, später Hauptfrau von Zar Nikolais persönlicher Wache'),
(65, 'Tolya', 'Yul-Baatar', NULL, 'm', 5, 5, 1, 'Zwillingsbruder von Tamar'),
(66, 'Varian', NULL, NULL, 'm', 1, 3, 11, NULL),
(67, 'Vasily', 'Lantsov', 'Tsarevich', 'm', 3, 10, 11, 'erster Sohn Alexander III., Thronfolger'),
(68, 'Vladim', NULL, NULL, 'm', 3, 7, 11, NULL),
(69, 'Wylan', 'Van Eck', NULL, 'm', 1, 6, 11, 'Demo-Experte, Flötist, Legastheniker, Jan Van Ecks verstoßener Sohn, Jesper Faheys Freund'),
(70, 'Zoya', 'Nazyalenski', 'Sturmhexe', 'w', 3, 5, 3, 'mächtige Grisha, später Mitglied der Triarchie von Ravka (Vertreterin der Ätheralki) ');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `schauplaetze`
--

CREATE TABLE `schauplaetze` (
  `ID` int(10) NOT NULL,
  `name` text NOT NULL,
  `nation` int(10) NOT NULL,
  `beschreibung` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `schauplaetze`
--

INSERT INTO `schauplaetze` (`ID`, `name`, `nation`, `beschreibung`) VALUES
(1, 'Balakirev', 3, 'kleine Stadt in der Nähe von Os Alta'),
(2, 'Cera Huo', 5, 'Feuerfälle im östlichen Teil der Sikurzoi-Gebirges'),
(4, 'Chernast', 3, 'Außenposten im Norden von Tsibeya'),
(5, 'Cofton', 2, 'Hauptstadt des Jurda-Handels'),
(6, 'Dva Stolba', 3, 'Alinas Geburtsort'),
(7, 'Djerholm', 7, 'Hauptstadt von Fjerda'),
(8, 'Elling', 7, 'Fischerdorf im Norden von Fjerda'),
(9, 'Eistribunal', 7, 'Hauptsitz der Drüskelle, Gefängnis in Djerholm'),
(10, 'Großer Palast', 3, 'Winterresidenz der Zarenfamilie in Os Alta'),
(11, 'Keramzin', 3, 'Sitz des Herzogs Keramsov'),
(12, 'Ketterdam', 1, 'Hauptstadt von Kerch'),
(13, 'Kleiner Palast', 3, 'Residenz der Grisha in Os Alta'),
(14, 'Knochenrinne', 8, 'gefährliches Gebiet im Norden der Wahren See'),
(15, 'Kribirsk', 3, 'Barackenstadt, Stützpunkt vor der Schattenflur'),
(16, 'Novokribirsk', 3, 'Dorf westlich der Schattenflur'),
(17, 'Os Alta', 3, 'Hauptstadt von Ravka'),
(18, 'Os Kervo', 3, 'Küstenstadt im Westen von Ravka'),
(19, 'Petrazoi', 3, 'Gebirge im Norden Ravkas'),
(20, 'Poliznaya', 3, 'Militärfestung, Ausbildungsort der Ersten Armee von Ravka'),
(22, 'Sikurzoi', 3, 'Gebirge, das die südliche Grenze Ravkas und die nördliche Grenze Shu-Hans markiert'),
(23, 'Schattenflur', 3, 'Ödsee, die Ravka teilt'),
(24, 'Tsibeya', 3, 'kaltes Gebiet im Norden Ravkas, das die Grenze zu Fjerdan markiert'),
(25, 'Weiße Kathedrale', 3, 'unterirdische Grotte aus Alabasterquarz'),
(26, 'Ahmrat Jen', 5, 'Hauptstadt von Shu Han'),
(27, 'Koba', 5, 'Stadt in Shu Han'),
(28, 'Leflin', 6, 'Stadt auf der Wandernden Insel');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `begriffe`
--
ALTER TABLE `begriffe`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `grisha`
--
ALTER TABLE `grisha`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indizes für die Tabelle `grisha_orden`
--
ALTER TABLE `grisha_orden`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `gruppen`
--
ALTER TABLE `gruppen`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `nationen`
--
ALTER TABLE `nationen`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `personen`
--
ALTER TABLE `personen`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indizes für die Tabelle `schauplaetze`
--
ALTER TABLE `schauplaetze`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `begriffe`
--
ALTER TABLE `begriffe`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT für Tabelle `grisha`
--
ALTER TABLE `grisha`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `grisha_orden`
--
ALTER TABLE `grisha_orden`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `gruppen`
--
ALTER TABLE `gruppen`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT für Tabelle `nationen`
--
ALTER TABLE `nationen`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `personen`
--
ALTER TABLE `personen`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT für Tabelle `schauplaetze`
--
ALTER TABLE `schauplaetze`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
