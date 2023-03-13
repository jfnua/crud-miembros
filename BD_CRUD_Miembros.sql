CREATE DATABASE  IF NOT EXISTS `crud_miembros` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `crud_miembros`;
-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: crud_miembros
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `datos_contacto_emergencia`
--

DROP TABLE IF EXISTS `datos_contacto_emergencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datos_contacto_emergencia` (
  `idcontactoemergencia` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `relacion` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `correo` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idcontactoemergencia`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `datos_domicilio`
--

DROP TABLE IF EXISTS `datos_domicilio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datos_domicilio` (
  `iddomicilio` int NOT NULL AUTO_INCREMENT,
  `direccion` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ciudad` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `estado` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pais` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `codigopostal` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`iddomicilio`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `datos_estudios`
--

DROP TABLE IF EXISTS `datos_estudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datos_estudios` (
  `idestudios` int NOT NULL AUTO_INCREMENT,
  `universidad` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `licenciatura` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ultimogradoestudio` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fechaultimogradoestudio` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `directivo` tinyint DEFAULT NULL,
  PRIMARY KEY (`idestudios`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `datos_pareja`
--

DROP TABLE IF EXISTS `datos_pareja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datos_pareja` (
  `idpareja` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nombrecredencial` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fechaNacimiento` date DEFAULT NULL,
  `relacion` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `hijos` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `activo` tinyint DEFAULT NULL,
  PRIMARY KEY (`idpareja`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `datos_salud`
--

DROP TABLE IF EXISTS `datos_salud`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datos_salud` (
  `idinfomedica` int NOT NULL AUTO_INCREMENT,
  `enfermedades` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `alergias` varchar(75) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tipoSangre` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`idinfomedica`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `datos_sesion`
--

DROP TABLE IF EXISTS `datos_sesion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `datos_sesion` (
  `idSesion` int NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `contrasena` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idSesion`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;


INSERT INTO datos_sesion(nombre_usuario, email, contrasena) VALUES("admin123", "admin@gmail.com", "admin123");
--
-- Table structure for table `miembros`
--

DROP TABLE IF EXISTS `miembros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `miembros` (
  `idMiembro` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `curp` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `datosSesion` int NOT NULL,
  `datosDomicilio` int NOT NULL,
  `datosEstudios` int NOT NULL,
  `datosSalud` int NOT NULL,
  `datosEmergencia` int NOT NULL,
  `datosPareja` int DEFAULT NULL,
  PRIMARY KEY (`idMiembro`),
  KEY `idSesion_idx` (`datosSesion`),
  KEY `fk_datosDomicilio_idx` (`datosDomicilio`),
  KEY `fk_datosEstudios_idx` (`datosEstudios`),
  KEY `fk_datossalud_idx` (`datosSalud`),
  KEY `fk:datosemergencia_idx` (`datosEmergencia`),
  KEY `fk_datospareja_idx` (`datosPareja`),
  CONSTRAINT `fk_datosDomicilio` FOREIGN KEY (`datosDomicilio`) REFERENCES `datos_domicilio` (`iddomicilio`) ON DELETE CASCADE,
  CONSTRAINT `fk_datosemergencia` FOREIGN KEY (`datosEmergencia`) REFERENCES `datos_contacto_emergencia` (`idcontactoemergencia`) ON DELETE CASCADE,
  CONSTRAINT `fk_datosEstudios` FOREIGN KEY (`datosEstudios`) REFERENCES `datos_estudios` (`idestudios`) ON DELETE CASCADE,
  CONSTRAINT `fk_datospareja` FOREIGN KEY (`datosPareja`) REFERENCES `datos_pareja` (`idpareja`) ON DELETE CASCADE,
  CONSTRAINT `fk_datossalud` FOREIGN KEY (`datosSalud`) REFERENCES `datos_salud` (`idinfomedica`) ON DELETE CASCADE,
  CONSTRAINT `fk_datosSesion` FOREIGN KEY (`datosSesion`) REFERENCES `datos_sesion` (`idSesion`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_delete_miembro_datosSesion` AFTER DELETE ON `miembros` FOR EACH ROW delete from datos_sesion ds where old.datosSesion = ds.idSesion */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_delete_miembro_datosEmergencia` AFTER DELETE ON `miembros` FOR EACH ROW delete from datos_contacto_emergencia de where old.datosEmergencia = de.idcontactoemergencia */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_delete_miembro_datosDomicilio` AFTER DELETE ON `miembros` FOR EACH ROW delete from datos_domicilio dd where old.datosDomicilio = dd.iddomicilio */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_delete_miembro_datosEstudios` AFTER DELETE ON `miembros` FOR EACH ROW delete from datos_estudios ds where old.datosEstudios = ds.idestudios */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_delete_miembro_datosPareja` AFTER DELETE ON `miembros` FOR EACH ROW delete from datos_pareja dp where old.datosPareja = dp.idpareja */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER `after_delete_miembro_datosSalud` AFTER DELETE ON `miembros` FOR EACH ROW delete from datos_salud ds where old.datosSalud = ds.idinfomedica */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Dumping events for database 'crud_miembros'
--

--
-- Dumping routines for database 'crud_miembros'
--
/*!50003 DROP PROCEDURE IF EXISTS `actualizarMiembro` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarMiembro`(
	IN _usuario VARCHAR(45), IN _contrasena VARCHAR(45), IN _email VARCHAR(50), 
	IN _direccion VARCHAR(75), IN _ciudad VARCHAR(45), IN _estado VARCHAR(45), IN _pais VARCHAR(45), IN _codigopostal VARCHAR(8),
    IN _universidad VARCHAR(50), IN _licenciatura VARCHAR(75), IN _ultimogradoestudio VARCHAR(30), IN _fechaultimogradoestudio VARCHAR(5), IN _directivo TINYINT,
    IN _nEmergencia VARCHAR(100), IN _rEmergencia VARCHAR(25), IN _tEmergencia VARCHAR(10), IN _cEmergencia VARCHAR(45),
	IN _enfermedades VARCHAR(100), IN _alergias VARCHAR(75), IN _tipoSangre VARCHAR(5),
    IN _nPareja VARCHAR(75), IN _nCredencialPareja VARCHAR(45), IN _fnPareja DATE, IN _rPareja VARCHAR(45), IN _hijos VARCHAR(100), IN _activo TINYINT,
    IN _nombre VARCHAR(75), IN _apellido VARCHAR(45), IN _fechaNacimiento DATE, IN _telefono VARCHAR(10), IN _curp VARCHAR(18),
    IN _ID_SESION INT, IN _ID_DOMICILIO INT, IN _ID_ESTUDIOS INT, IN _ID_SALUD INT, IN _ID_EMERGENCIA INT, IN _ID_PAREJA INT, IN _ID_MIEMBRO INT
    )
BEGIN
    update datos_sesion set nombre_usuario = _usuario, email = _email, contrasena = _contrasena where idSesion = _ID_SESION; 
    update datos_domicilio set direccion = _direccion, ciudad = _ciudad, estado = _estado, pais = _pais, codigopostal = _codigopostal where iddomicilio = _ID_DOMICILIO;
    update datos_estudios set universidad = _universidad, licenciatura = _licenciatura, ultimogradoestudio = _ultimogradoestudio, fechaultimogradoestudio = _fechaultimogradoestudio, directivo = _directivo where idestudios = _ID_ESTUDIOS;
    update datos_contacto_emergencia set nombre = _nEmergencia, relacion = _rEmergencia, telefono = _tEmergencia, correo = _cEmergencia where idcontactoemergencia = _ID_EMERGENCIA;
    update datos_salud set enfermedades = _enfermedades, alergias = _alergias, tipoSangre = _tipoSangre where idinfomedica = _ID_SALUD;
    update datos_pareja set nombre = _nPareja, nombrecredencial = _nCredencialPareja, fechaNacimiento = _fnPareja, relacion = _rPareja, hijos = _hijos, activo = _activo where idpareja = _ID_PAREJA;
    update miembros set nombre = _nombre, apellido = _apellido, fechaNacimiento = _fechaNacimiento, telefono = _telefono, curp = _curp where idMiembro = _ID_MIEMBRO;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `eliminarMiembro` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `eliminarMiembro`(IN id_miembro int)
BEGIN
    delete from miembros where idMiembro = id_miembro;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `insertarMiembro` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_0900_ai_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'STRICT_TRANS_TABLES,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `insertarMiembro`(
	IN _usuario VARCHAR(45), IN _contrasena VARCHAR(45), IN _email VARCHAR(50), 
	IN _direccion VARCHAR(75), IN _ciudad VARCHAR(45), IN _estado VARCHAR(45), IN _pais VARCHAR(45), IN _codigopostal VARCHAR(8),
    IN _universidad VARCHAR(50), IN _licenciatura VARCHAR(75), IN _ultimogradoestudio VARCHAR(30), IN _fechaultimogradoestudio VARCHAR(5), IN _directivo TINYINT,
    IN _nEmergencia VARCHAR(100), IN _rEmergencia VARCHAR(25), IN _tEmergencia VARCHAR(10), IN _cEmergencia VARCHAR(45),
	IN _enfermedades VARCHAR(100), IN _alergias VARCHAR(75), IN _tipoSangre VARCHAR(5),
    IN _nPareja VARCHAR(75), IN _nCredencialPareja VARCHAR(45), IN _fnPareja DATE, IN _rPareja VARCHAR(45), IN _hijos VARCHAR(100), IN _activo TINYINT,
    IN _nombre VARCHAR(75), IN _apellido VARCHAR(45), IN _fechaNacimiento DATE, IN _telefono VARCHAR(10), IN _curp VARCHAR(18)
    )
BEGIN
	DECLARE _ID_SESION		    INT;
    DECLARE _ID_DOMICILIO		INT;
    DECLARE _ID_EMERGENCIA		INT;
    DECLARE _ID_PAREJA		    INT;
    DECLARE _ID_ESTUDIOS		INT;
    DECLARE _ID_SALUD		    INT;
    insert into datos_sesion(nombre_usuario, email, contrasena) values(_usuario, _email, _contrasena); 
    SET _ID_SESION = (select last_insert_id());
    insert into datos_domicilio(direccion, ciudad, estado, pais, codigopostal) values(_direccion, _ciudad, _estado, _pais, _codigopostal);
    SET _ID_DOMICILIO = (select last_insert_id());
    insert into datos_estudios(universidad, licenciatura, ultimogradoestudio, fechaultimogradoestudio, directivo) values(_universidad, _licenciatura, _ultimogradoestudio, _fechaultimogradoestudio, _directivo);
    SET _ID_ESTUDIOS = (select last_insert_id());
    insert into datos_contacto_emergencia(nombre, relacion, telefono, correo) values(_nEmergencia, _rEmergencia, _tEmergencia, _cEmergencia);
    SET _ID_EMERGENCIA = (select last_insert_id());
    insert into datos_salud(enfermedades, alergias, tipoSangre) values(_enfermedades, _alergias, _tipoSangre);
    SET _ID_SALUD = (select last_insert_id());
    insert into datos_pareja(nombre, nombrecredencial, fechaNacimiento, relacion, hijos, activo) values(_nPareja, _nCredencialPareja, _fnPareja, _rPareja, _hijos, _activo);
    SET _ID_PAREJA = (select last_insert_id());
    insert into miembros(nombre, apellido, fechaNacimiento, telefono, curp, datosSesion, datosDomicilio, datosEstudios, datosSalud, datosEmergencia, datosPareja) values(_nombre, _apellido, _fechaNacimiento, _telefono, _curp, _ID_SESION, _ID_DOMICILIO, _ID_ESTUDIOS, _ID_SALUD, _ID_EMERGENCIA, _ID_PAREJA);
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-12 20:59:34
