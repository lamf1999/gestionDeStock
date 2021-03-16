-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema papel
--

CREATE DATABASE IF NOT EXISTS papel;
USE papel;

--
-- Definition of table `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `codigo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(45) DEFAULT NULL,
  `stock` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productos`
--

/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` (`codigo`,`descripcion`,`stock`) VALUES 
 (1,'PAPEL HIGIENICO NEUTRO 16X4',10),
 (2,'PAPELHIGIENICO 8X8',10),
 (3,'PAPEL HIGIENICO DOBLE HOJA',5);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;


--
-- Definition of table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`usuario`,`clave`) VALUES 
 ('admin','admin'),
 ('alejandro','admin'),
 ('Alejandro Gonzalez','admin');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
