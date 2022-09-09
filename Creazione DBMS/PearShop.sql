-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Set 04, 2022 alle 21:19
-- Versione del server: 5.6.33-log
-- Versione PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PearShop`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Carrello`
--

CREATE TABLE `Carrello` (
  `id_carrello` int(11) NOT NULL,
  `id_ute` int(11) NOT NULL,
  `Quantita` int(11) NOT NULL,
  `id_prodN` int(11) NOT NULL,
  `id_prodU` int(11) NOT NULL,
  `id_ricond` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `CodicePromozionale`
--

CREATE TABLE `CodicePromozionale` (
  `id_co_pr` int(11) NOT NULL,
  `Codice` varchar(10) NOT NULL,
  `Utilizzi` int(11) NOT NULL,
  `Toogle` tinyint(1) NOT NULL,
  `DataScad` datetime NOT NULL,
  `id_ord` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Commento`
--

CREATE TABLE `Commento` (
  `id_commento` int(11) NOT NULL,
  `id_ut` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_im` int(11) NOT NULL,
  `Text` varchar(300) NOT NULL,
  `Rating` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Immagini`
--

CREATE TABLE `Immagini` (
  `Nome` varchar(50) NOT NULL,
  `Size` varchar(25) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `id_immagine` int(11) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Ordine`
--

CREATE TABLE `Ordine` (
  `id_ordine` int(11) NOT NULL,
  `id_us` int(11) NOT NULL,
  `id_co` int(11) NOT NULL,
  `Data` datetime NOT NULL,
  `IndSpedizione` varchar(50) NOT NULL,
  `PrezzoTotale` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_car` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Ricondizionato`
--

CREATE TABLE `Ricondizionato` (
  `id_ricondizionato` int(11) NOT NULL,
  `DataR` datetime DEFAULT NULL,
  `PrezzoR` float DEFAULT NULL,
  `CondizioniR` varchar(100) NOT NULL,
  `id_imgR` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Tnuovo`
--

CREATE TABLE `Tnuovo` (
  `id_telN` int(11) NOT NULL,
  `id_imgN` int(11) NOT NULL,
  `Quantita` int(11) NOT NULL,
  `Prezzo` float NOT NULL,
  `Descrizione` varchar(100) NOT NULL,
  `Marca` varchar(10) NOT NULL,
  `ProdottoAbbinato` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Tusato`
--

CREATE TABLE `Tusato` (
  `id_telU` int(11) NOT NULL,
  `id_imgU` int(11) NOT NULL,
  `Condizioni` varchar(100) NOT NULL,
  `DataA` date NOT NULL,
  `PrezzoUs` float NOT NULL,
  `Imei` int(11) NOT NULL,
  `CondizioniS` int(1) NOT NULL,
  `CondizioniU` int(1) NOT NULL,
  `CondizioniB` int(1) NOT NULL,
  `PrezzoA` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `Utente`
--

CREATE TABLE `Utente` (
  `Nome` varchar(20) NOT NULL,
  `Cognome` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `id_utente` int(11) NOT NULL,
  `Admin` int(1) NOT NULL DEFAULT '0',
  `Email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `Utente`
--

INSERT INTO `Utente` (`Nome`, `Cognome`, `Password`, `id_utente`, `Admin`, `Email`) VALUES
('admin', 'admin', 'admin', 1, 0, 'admin@gmail.com'),
('Mario', 'Rossi', 'MarioRossi99', 2, 1, 'mariorossi@gmail.com');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `Carrello`
--
ALTER TABLE `Carrello`
  ADD PRIMARY KEY (`id_carrello`),
  ADD KEY `id_ute` (`id_ute`),
  ADD KEY `id_prodN` (`id_prodN`),
  ADD KEY `id_ricond` (`id_ricond`),
  ADD KEY `id_prodU` (`id_prodU`);

--
-- Indici per le tabelle `CodicePromozionale`
--
ALTER TABLE `CodicePromozionale`
  ADD PRIMARY KEY (`id_co_pr`),
  ADD KEY `id_ord` (`id_ord`);

--
-- Indici per le tabelle `Commento`
--
ALTER TABLE `Commento`
  ADD PRIMARY KEY (`id_commento`),
  ADD KEY `id_im` (`id_im`),
  ADD KEY `id_ut` (`id_ut`),
  ADD KEY `id_prod` (`id_prod`);

--
-- Indici per le tabelle `Immagini`
--
ALTER TABLE `Immagini`
  ADD PRIMARY KEY (`id_immagine`);

--
-- Indici per le tabelle `Ordine`
--
ALTER TABLE `Ordine`
  ADD PRIMARY KEY (`id_ordine`),
  ADD KEY `id_us` (`id_us`),
  ADD KEY `id_co` (`id_co`),
  ADD KEY `id_car` (`id_car`);

--
-- Indici per le tabelle `Ricondizionato`
--
ALTER TABLE `Ricondizionato`
  ADD PRIMARY KEY (`id_ricondizionato`),
  ADD KEY `id_imgR` (`id_imgR`);

--
-- Indici per le tabelle `Tnuovo`
--
ALTER TABLE `Tnuovo`
  ADD PRIMARY KEY (`id_telN`),
  ADD KEY `id_imgN` (`id_imgN`);

--
-- Indici per le tabelle `Tusato`
--
ALTER TABLE `Tusato`
  ADD PRIMARY KEY (`id_telU`),
  ADD KEY `id_imgU` (`id_imgU`);

--
-- Indici per le tabelle `Utente`
--
ALTER TABLE `Utente`
  ADD PRIMARY KEY (`id_utente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `Carrello`
--
ALTER TABLE `Carrello`
  MODIFY `id_carrello` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `CodicePromozionale`
--
ALTER TABLE `CodicePromozionale`
  MODIFY `id_co_pr` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `Commento`
--
ALTER TABLE `Commento`
  MODIFY `id_commento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `Immagini`
--
ALTER TABLE `Immagini`
  MODIFY `id_immagine` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `Ordine`
--
ALTER TABLE `Ordine`
  MODIFY `id_ordine` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `Ricondizionato`
--
ALTER TABLE `Ricondizionato`
  MODIFY `id_ricondizionato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `Tnuovo`
--
ALTER TABLE `Tnuovo`
  MODIFY `id_telN` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `Tusato`
--
ALTER TABLE `Tusato`
  MODIFY `id_telU` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `Utente`
--
ALTER TABLE `Utente`
  MODIFY `id_utente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
