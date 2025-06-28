-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: stokis_hni-hpai
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) NOT NULL,
  `kode` varchar(15) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `dimensi_kualitas` varchar(20) NOT NULL,
  `berat_bersih` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_proses` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES (5,'extrafood.jpg','003152023','Extra Food HPAI',2,'Baik','250 (ml)',30,68000,'-','2023-03-23'),(9,'Hibis.png','2023032023','Hibis',3,'Baik','10 packs x 4 pads',38,235000,'-','2023-03-23'),(10,'Andrographis.png','2023032344','Andrographis Centella',1,'Baik','250 (mg)',0,850000,'Aturan Pakai : 3 x 2 Kapsul sebelum makan.','2023-03-23'),(11,'CDM2.jpg','2023032011','CD Album 2 Maidany',4,'Baik','1 Keping CD',98,35000,'-','2023-03-23');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `joinbarang`
--

DROP TABLE IF EXISTS `joinbarang`;
/*!50001 DROP VIEW IF EXISTS `joinbarang`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `joinbarang` (
  `id` tinyint NOT NULL,
  `foto` tinyint NOT NULL,
  `kode` tinyint NOT NULL,
  `produk` tinyint NOT NULL,
  `id_kategori` tinyint NOT NULL,
  `kategori` tinyint NOT NULL,
  `dimensi_kualitas` tinyint NOT NULL,
  `berat_bersih` tinyint NOT NULL,
  `stok` tinyint NOT NULL,
  `harga` tinyint NOT NULL,
  `keterangan` tinyint NOT NULL,
  `tanggal_proses` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `jointransaksi`
--

DROP TABLE IF EXISTS `jointransaksi`;
/*!50001 DROP VIEW IF EXISTS `jointransaksi`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `jointransaksi` (
  `id` tinyint NOT NULL,
  `foto` tinyint NOT NULL,
  `id_member` tinyint NOT NULL,
  `email` tinyint NOT NULL,
  `no_hp` tinyint NOT NULL,
  `nama` tinyint NOT NULL,
  `alamat` tinyint NOT NULL,
  `id_kategori` tinyint NOT NULL,
  `kategori` tinyint NOT NULL,
  `produk` tinyint NOT NULL,
  `kuantitas` tinyint NOT NULL,
  `status` tinyint NOT NULL,
  `harga` tinyint NOT NULL,
  `total` tinyint NOT NULL,
  `keterangan` tinyint NOT NULL,
  `tanggal_transaksi` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Herbs Product'),(2,'Health Food & Beverage'),(3,'Cosmetic & Home Care'),(4,'Tools Marketing');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) NOT NULL,
  `id_member` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `produk` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES (50,'CDM2.jpg','04553321','rifkyputraramadhan@gmail.com','089683249052','Rifky Putra Ramadhan','-','CD Album 2 Maidany',4,2,'2',35000,70000,'-','2023-03-23');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'default2.jpg','admin@gmail.com','admin','admin',1),(2,'default.jpg','yuda@gmail.com','yuda','yuda',2),(3,'default.jpg','rifkyputraramadhan@gmail.com','rifky','rifky',2);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `joinbarang`
--

/*!50001 DROP TABLE IF EXISTS `joinbarang`*/;
/*!50001 DROP VIEW IF EXISTS `joinbarang`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `joinbarang` AS select `a`.`id` AS `id`,`a`.`foto` AS `foto`,`a`.`kode` AS `kode`,`a`.`produk` AS `produk`,`a`.`id_kategori` AS `id_kategori`,`b`.`kategori` AS `kategori`,`a`.`dimensi_kualitas` AS `dimensi_kualitas`,`a`.`berat_bersih` AS `berat_bersih`,`a`.`stok` AS `stok`,`a`.`harga` AS `harga`,`a`.`keterangan` AS `keterangan`,`a`.`tanggal_proses` AS `tanggal_proses` from (`barang` `a` join `kategori` `b` on(`a`.`id_kategori` = `b`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `jointransaksi`
--

/*!50001 DROP TABLE IF EXISTS `jointransaksi`*/;
/*!50001 DROP VIEW IF EXISTS `jointransaksi`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `jointransaksi` AS select `a`.`id` AS `id`,`a`.`foto` AS `foto`,`a`.`id_member` AS `id_member`,`a`.`email` AS `email`,`a`.`no_hp` AS `no_hp`,`a`.`nama` AS `nama`,`a`.`alamat` AS `alamat`,`a`.`id_kategori` AS `id_kategori`,`b`.`kategori` AS `kategori`,`a`.`produk` AS `produk`,`a`.`kuantitas` AS `kuantitas`,`a`.`status` AS `status`,`a`.`harga` AS `harga`,`a`.`total` AS `total`,`a`.`keterangan` AS `keterangan`,`a`.`tanggal_transaksi` AS `tanggal_transaksi` from (`transaksi` `a` join `kategori` `b` on(`a`.`id_kategori` = `b`.`id`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-23 15:23:21
