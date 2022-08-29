-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Ago 29, 2022 alle 22:56
-- Versione del server: 5.6.33-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_vladmihal`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Carello`
--

CREATE TABLE IF NOT EXISTS `Carello` (
  `id_carello` int(11) NOT NULL AUTO_INCREMENT,
  `id_pro` int(11) NOT NULL,
  `id_ute` int(11) NOT NULL,
  `Quantita` int(11) NOT NULL,
  PRIMARY KEY (`id_carello`),
  KEY `id_pro` (`id_pro`),
  KEY `id_ute` (`id_ute`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `CodicePromozionale`
--

CREATE TABLE IF NOT EXISTS `CodicePromozionale` (
  `id_co_pr` int(11) NOT NULL AUTO_INCREMENT,
  `Codice` varchar(10) NOT NULL,
  `Utilizzi` int(11) NOT NULL,
  `Toogle` tinyint(1) NOT NULL,
  `DataScad` datetime NOT NULL,
  `id_ord` int(11) NOT NULL,
  PRIMARY KEY (`id_co_pr`),
  KEY `id_ord` (`id_ord`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Commento`
--

CREATE TABLE IF NOT EXISTS `Commento` (
  `id_commento` int(11) NOT NULL AUTO_INCREMENT,
  `id_ut` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `id_im` int(11) NOT NULL,
  `Text` varchar(300) NOT NULL,
  `Rating` int(1) NOT NULL,
  PRIMARY KEY (`id_commento`),
  KEY `id_im` (`id_im`),
  KEY `id_ut` (`id_ut`),
  KEY `id_prod` (`id_prod`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Immagini`
--

CREATE TABLE IF NOT EXISTS `Immagini` (
  `Nome` varchar(50) NOT NULL,
  `Size` varchar(25) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `id_immagine` int(11) NOT NULL AUTO_INCREMENT,
  `img` longblob NOT NULL,
  PRIMARY KEY (`id_immagine`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Ordine`
--

CREATE TABLE IF NOT EXISTS `Ordine` (
  `id_ordine` int(11) NOT NULL AUTO_INCREMENT,
  `id_us` int(11) NOT NULL,
  `id_co` int(11) NOT NULL,
  `Data` datetime NOT NULL,
  `IndSpedizione` varchar(50) NOT NULL,
  `PrezzoTotale` int(11) NOT NULL,
  PRIMARY KEY (`id_ordine`),
  KEY `id_us` (`id_us`),
  KEY `id_co` (`id_co`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Prodotto`
--

CREATE TABLE IF NOT EXISTS `Prodotto` (
  `id_prodotto` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(20) NOT NULL,
  `Quantita` int(10) NOT NULL,
  `Prezzo` float NOT NULL,
  `Descrizione` varchar(200) NOT NULL,
  `id_im` int(11) NOT NULL,
  `ProdottoAbbinato` varchar(20) NOT NULL,
  PRIMARY KEY (`id_prodotto`),
  KEY `id_im` (`id_im`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Ricondizionato`
--

CREATE TABLE IF NOT EXISTS `Ricondizionato` (
  `id_ricondizionato` int(11) NOT NULL AUTO_INCREMENT,
  `DataR` datetime DEFAULT NULL,
  `Condizioni` varchar(100) NOT NULL,
  `PrezzoR` float DEFAULT NULL,
  `id_prodott` int(11) NOT NULL,
  `DataA` date NOT NULL,
  `PrezzoUs` float NOT NULL,
  `Imei` int(11) NOT NULL,
  `CondizioniS` int(1) NOT NULL,
  `CondizioniB` int(1) NOT NULL,
  `CondizioniU` int(1) NOT NULL,
  `PrezzoA` float NOT NULL,
  PRIMARY KEY (`id_ricondizionato`),
  KEY `id_prodott` (`id_prodott`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Utente`
--

CREATE TABLE IF NOT EXISTS `Utente` (
  `Nome` varchar(20) NOT NULL,
  `Cognome` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `id_utente` int(11) NOT NULL AUTO_INCREMENT,
  `Admin` int(1) NOT NULL DEFAULT '0',
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`id_utente`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dump dei dati per la tabella `Utente`
--

INSERT INTO `Utente` (`Nome`, `Cognome`, `Password`, `id_utente`, `Admin`, `Email`) VALUES
('admin', 'admin', 'admin', 1, 0, 'admin@gmail.com'),
('Mario', 'Rossi', 'MarioRossi99', 2, 1, 'mariorossi@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
