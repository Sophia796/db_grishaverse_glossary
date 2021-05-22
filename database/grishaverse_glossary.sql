-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Mai 2021 um 12:28
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
-- Tabellenstruktur für Tabelle `grisha`
--

CREATE TABLE `grisha` (
  `ID` int(10) UNSIGNED NOT NULL,
  `grisha_typ` text NOT NULL,
  `orden` int(10) NOT NULL,
  `fähigkeit` text NOT NULL,
  `kefta_farbe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `grisha`
--

INSERT INTO `grisha` (`ID`, `grisha_typ`, `orden`, `fähigkeit`, `kefta_farbe`) VALUES
(1, 'Entherzer', 1, 'Beherrschen des Körpers, Ausbildung zum Kampf', 'rot'),
(2, 'Heiler', 1, 'Beherrschen des Körpers, Heilen von Wunden', 'rot'),
(3, 'Stürmer', 2, 'Beschwörung von Wind und Wetter', 'blau'),
(4, 'Fluter', 2, 'Beschwörung von Wasser', 'blau'),
(5, 'Inferni', 2, 'Beschwörung von Feuer', 'blau'),
(6, 'Durast', 3, 'Fabrikation und Manipulation von festen Stoffen (z.B. Glas, Stahl, Holz)', 'purpur'),
(7, 'Alkemi', 3, 'Fabrikation und Manipulation von Chemikalien (z.B. Gift, Sprengstoff)', 'purpur'),
(8, 'Dunkler', 2, 'Beschwörung von Dunkelheit', 'schwarz'),
(9, 'Sonnenkrieger', 2, 'Beschwörung von Licht', 'gold'),
(10, 'Bildner', 1, 'Manipulation des Körpers und des Aussehens', 'weiß, rot');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `grisha_orden`
--

CREATE TABLE `grisha_orden` (
  `ID` int(10) UNSIGNED NOT NULL,
  `orden` text NOT NULL,
  `beschreibung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `grisha_orden`
--

INSERT INTO `grisha_orden` (`ID`, `orden`, `beschreibung`) VALUES
(1, 'Korporalki', 'Orden der Lebenden und der Toten'),
(2, 'Ätheralki', 'Orden der Beschwörer'),
(3, 'Materialki', 'Orden der Fabrikatoren');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gruppen`
--

CREATE TABLE `gruppen` (
  `ID` int(10) NOT NULL,
  `gruppe` text NOT NULL,
  `ort` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `gruppen`
--

INSERT INTO `gruppen` (`ID`, `gruppe`, `ort`) VALUES
(1, 'Black Tips', 1),
(2, 'Dime-Lions', 1),
(3, 'Dregs', 1),
(4, 'Drüskelle', 7),
(5, 'Grisha', 3),
(6, 'Krähen', 1),
(7, 'Soldat Sol', 3),
(8, 'Krämer', 1);

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
(7, 'Fjerda');

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
  `sonstiges` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `personen`
--

INSERT INTO `personen` (`ID`, `vorname`, `nachname`, `weitere_namen`, `geschlecht`, `nation`, `gruppe`, `grisha_typ`, `sonstiges`) VALUES
(1, 'Adrik', 'Zhabin', NULL, 'm', 3, 5, 3, 'Grisha in der Ausbildung, Nadias jüngerer Bruder'),
(2, 'Alexander', 'Lantsov', 'Alexander III. ', 'm', 3, 0, 0, 'Zar von Ravka'),
(3, 'Alina', 'Starkov', 'Sankta Alina, Sonnenkriegerin', 'w', 3, 5, 9, 'Kartografin in der Ersten Armee von Ravka, einzigartige Grisha mit verborgenen Fähigkeiten'),
(4, 'Alys', 'Van Eck', NULL, 'w', 1, 0, 0, 'Jan Van Ecks zweite Frau'),
(5, 'Ana', 'Kuya', NULL, 'w', 3, 0, 0, 'Haushälterin im Waisenhaus von Keramzin'),
(6, 'Anika', NULL, NULL, 'w', 1, 3, 0, NULL),
(7, NULL, NULL, 'Asket', 'm', 3, 7, 0, 'erst Berater im Dienst des Zaren, dann des Dunklen, später Anführer der Soldat Sol'),
(8, 'Baghra', NULL, NULL, 'w', 3, 5, 8, 'mächtige Grisha mit einzigartigen Fähigkeiten, Alinas Lehrerin, Mutter des Dunklen, Tochter von Ilya Morozova'),
(9, 'Bastian', NULL, NULL, 'm', 1, 3, 0, NULL),
(10, '', 'Bolliger', 'Big Bolliger', 'm', 1, 3, 0, NULL),
(11, 'Botkin', 'Yul-Erdene', NULL, 'm', 5, 0, 0, 'ehemaliger Shu-Han-Söldner, Kampftrainer der Grisha'),
(12, 'Bo', 'Yul-Bayur', NULL, 'm', 5, 5, 7, 'Erfinder des Jurda-Parems, Kuwei Yul-Bos Vater'),
(13, 'Colm', 'Fahey', NULL, 'm', 6, 0, 0, 'Jesper Faheys Vater'),
(14, 'Cornelis', 'Smeet', NULL, 'm', 1, 0, 0, 'Jan Van Ecks Anwalt und Verwalter seines Eigentums'),
(15, 'Danil', 'Markov', NULL, 'm', 3, 5, 5, 'Identur in Ketterdam'),
(16, 'David', 'Kostyk', NULL, 'm', 3, 5, 6, 'Genyas Freund, später Mitglied der Triarchie von Ravka (Vertreter der Fabrikatoren)'),
(17, NULL, NULL, 'Der Dunkle, Der Dunkle Ketzer', 'm', 3, 5, 8, 'mächtiger Grisha mit einzigartigen Fähigkeiten, Anführer der Grisha, Baghras Sohn'),
(18, NULL, 'Doughty', NULL, 'm', 1, 2, 0, NULL),
(19, 'Dunyasha', 'Lazareva', 'Weiße Klinge', 'w', 3, 0, 0, 'Söldnerin und Auftragsmörderin'),
(20, 'Eamon', NULL, NULL, 'm', 1, 2, 0, 'Leutnant der Dime-Lions'),
(21, NULL, 'Elzinger', NULL, 'm', 1, 1, 0, NULL),
(22, 'Emil ', 'Retwenko', NULL, 'm', 3, 5, 3, 'Indentur in Ketterdam'),
(23, 'Eroll', 'Aerts', NULL, 'm', 1, 2, 0, NULL),
(24, 'Fedyor', 'Kaminski', NULL, 'm', 3, 5, 1, NULL),
(25, 'Filip', NULL, NULL, 'm', 1, 2, 0, NULL),
(26, NULL, 'Geels', NULL, 'm', 1, 1, 0, 'Leutnant der Black Tips'),
(27, 'Genya', 'Safin', NULL, 'w', 3, 5, 10, 'mächtige Grisha mit einzigartigen Fähigkeiten, zuerst im Dienst der Zarin, dann des Dunklen, schließlich Mitglied der Triarchie von Ravka (Vertreterin der Korporalki)'),
(28, NULL, 'Gerrigan', NULL, 'm', 1, 2, 0, NULL),
(29, NULL, 'Gorka', NULL, 'm', 1, 3, 0, NULL),
(30, 'Harshaw', NULL, NULL, 'm', 6, 5, 5, NULL),
(31, 'Heleen', 'Van Houden', 'Pfau, Tante Heleen', 'w', 1, 0, 0, 'Leiterin der Menagerie \'Haus der Exoten\' in Ketterdam'),
(32, NULL, 'Hoede', NULL, 'm', 1, 0, 0, NULL),
(33, 'Ilya', 'Morozova', 'Sankt Ilya', 'm', 3, 5, 6, 'mächtiger Grisha, Erschaffer der Kräftemehrer, Vater von Baghra'),
(34, 'Inej', 'Ghafa', 'Phantom', 'w', 4, 6, 0, 'Akrobatin, Spionin und Messerkämpferin, ehemals Identur in der Menagerie'),
(35, 'Jan', 'Van Eck', NULL, 'm', 1, 0, 0, 'Auftraggeber und Widersacher der Krähen, Wylan Van Ecks Vater'),
(36, 'Jarl', 'Brum', NULL, 'm', 7, 4, 0, 'Kommandant der Drüskelle'),
(37, 'Jesper', 'Fahey', NULL, 'm', 2, 6, 6, 'Scharfschütze, Wylan Van Ecks Freund'),
(38, 'Kaz', 'Brekker', 'Dirtyhands, Bastard of the Barrel, Demjin (Dämon) ', 'm', 1, 6, 0, 'Meisterdieb und Schlösserknacker, Leutnant der Dregs, Anführer der Krähen, Haphephobiker'),
(39, NULL, 'Keeg', NULL, 'm', 1, 3, 0, NULL),
(40, 'Kuwei', 'Yul-Bo', NULL, 'm', 5, 5, 5, 'Shu-Abtrünniger und Gejagter, Sohn von Bo Yul-Bayur'),
(41, 'Malyen', 'Oretsev', NULL, 'm', 3, 0, 0, 'Fährtenleser in der Ersten Armee von Ravka, Alinas Freund'),
(42, 'Marie', NULL, NULL, 'w', 3, 5, 5, ''),
(43, 'Marya', 'Hendriks', NULL, 'w', 1, 0, 0, 'Wylan Van Ecks Mutter, Jan Van Ecks erste Frau'),
(44, 'Matthias', 'Helvar', NULL, 'm', 7, 6, 0, 'in Ungnade gefallener Drüskelle, Nina Zeniks Freund'),
(45, 'Misha', NULL, NULL, 'm', 3, 0, 0, 'Baghras Diener, Waise'),
(46, NULL, 'Muzzen', NULL, 'm', 1, 3, 0, NULL),
(47, 'Nadia', 'Zhabin', NULL, 'w', 3, 5, 3, 'Adriks Schwester, Tamars Freundin'),
(48, 'Nikolai', 'Lantsov', 'Sturmhond, Fuchs', 'm', 3, 0, 0, 'zweiter Sohn Alexanders III., Freibeuter, später Zar von Ravka'),
(49, 'Nina', 'Zenik', 'Corpsewitch, Drüsje (Hexe)', 'w', 3, 6, 1, 'mächtige Grisha, Überlebende des Jurda-Parems, ehemals Identur in der Weißen Rose, Matthias Helvars Freundin'),
(50, 'Paja', NULL, NULL, 'w', 4, 5, 7, NULL),
(51, 'Pekka', 'Rollins', NULL, 'm', 1, 2, 0, 'General der Dime-Lions, Kaz Brekkers Erzfeind'),
(52, 'Per', 'Haskell', NULL, 'm', 1, 3, 0, 'General der Dregs'),
(53, 'Pim', NULL, NULL, 'm', 1, 3, 0, NULL),
(54, NULL, 'Raske', NULL, 'm', 1, 3, 0, 'freier Demo-Experte '),
(55, NULL, 'Roeder', NULL, 'm', 1, 3, 0, NULL),
(56, 'Rotty', NULL, NULL, 'm', 1, 3, 0, NULL),
(57, 'Ruby', NULL, NULL, 'w', 3, 7, 0, NULL),
(58, NULL, 'Seeger', NULL, 'm', 1, 3, 0, NULL),
(59, 'Sergei', 'Beznikov', NULL, 'm', 3, 5, 1, NULL),
(60, 'Shay', NULL, NULL, 'w', 1, 2, 0, NULL),
(61, NULL, 'Specht', NULL, 'm', 1, 3, 0, 'ehemaliger Marineoffizier, Dokumentenfälscher '),
(62, 'Stigg', NULL, NULL, 'm', 7, 5, 5, NULL),
(63, NULL, 'Swann', NULL, 'm', 1, 3, 0, NULL),
(64, 'Tamar', 'Kir-Baatar', NULL, 'w', 5, 5, 1, 'Zwillingsschwester von Tolya, Freundin von Nadia, später Hauptfrau von Zar Nikolais persönlicher Wache'),
(65, 'Tolya', 'Yul-Baatar', NULL, 'm', 5, 5, 1, 'Zwillingsbruder von Tamar'),
(66, 'Varian', NULL, NULL, 'm', 1, 3, 0, NULL),
(67, 'Vasily', 'Lantsov', NULL, 'm', 3, 0, 0, 'erster Sohn Alexander III., Thronfolger'),
(68, 'Vladim', NULL, NULL, 'm', 3, 7, 0, NULL),
(69, 'Wylan', 'Van Eck', NULL, 'm', 1, 6, 0, 'Demo-Experte, Flötist, Legastheniker, Jan Van Ecks verstoßener Sohn, Jesper Faheys Freund'),
(70, 'Zoya', 'Nazyalenski', 'Sturmhexe', 'w', 3, 5, 3, 'mächtige Grisha, später Mitglied der Triarchie von Ravka (Vertreterin der Ätheralki) ');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `schauplaetze`
--

CREATE TABLE `schauplaetze` (
  `ID` int(10) NOT NULL,
  `schauplatz` text NOT NULL,
  `nation` int(10) NOT NULL,
  `beschreibung` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `schauplaetze`
--

INSERT INTO `schauplaetze` (`ID`, `schauplatz`, `nation`, `beschreibung`) VALUES
(1, 'Balakirev', 3, 'kleine Stadt in der Nähe von Os Alta'),
(2, 'Cera Huo', 5, 'Feuerfälle im östlichen Teil der Sikurzoi-Gebirges'),
(4, 'Chernast', 3, 'Außenposten im Norden von Tsibeya'),
(5, 'Cofton', 2, 'Hauptstadt des Jurda-Handels'),
(6, 'Dva Stolba', 3, 'Alinas Geburtsort'),
(7, 'Djerholm', 7, 'Hauptstadt von Fjerda'),
(8, 'Elling', 7, NULL),
(9, 'Eistribunal', 7, 'Hauptsitz der Drüskelle, Gefängnis in Djerholm'),
(10, 'Großer Palast', 3, 'Winterresidenz der Zarenfamilie in Os Alta'),
(11, 'Keramzin', 3, 'Sitz des Herzogs Keramsov'),
(12, 'Ketterdam', 1, 'Hauptstadt von Kerch'),
(13, 'Kleiner Palast', 3, 'Residenz der Grisha in Os Alta'),
(14, 'Knochenrinne', 0, 'gefährliches Gebiet im Norden der Wahren See'),
(15, 'Kribirsk', 3, 'Barackenstadt, Stützpunkt vor der Schattenflur'),
(16, 'Novokribirsk', 3, 'Dorf westlich der Schattenflur'),
(17, 'Os Alta', 3, 'Hauptstadt von Ravka'),
(18, 'Os Kervo', 3, 'Küstenstadt im Westen von Ravka'),
(19, 'Petrazoi', 3, 'Gebirge im Norden Ravkas'),
(20, 'Poliznaya', 3, 'Militärfestung, Ausbildungsort der Ersten Armee von Ravka'),
(21, 'Ryevost', 3, NULL),
(22, 'Sikurzoi', 3, 'Gebirge, das die südliche Grenze Ravkas und die nördliche Grenze Shu-Hans markiert'),
(23, 'Schattenflur', 3, 'Ödsee, die Ravka teilt'),
(24, 'Tsibeya', 3, 'kaltes Gebiet im Norden Ravkas, das die Grenze zu Fjerdan markiert'),
(25, 'Weiße Kathedrale', 3, 'unterirdische Grotte aus Alabasterquarz');

--
-- Indizes der exportierten Tabellen
--

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
-- AUTO_INCREMENT für Tabelle `grisha`
--
ALTER TABLE `grisha`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `grisha_orden`
--
ALTER TABLE `grisha_orden`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `gruppen`
--
ALTER TABLE `gruppen`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `nationen`
--
ALTER TABLE `nationen`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `personen`
--
ALTER TABLE `personen`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT für Tabelle `schauplaetze`
--
ALTER TABLE `schauplaetze`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
