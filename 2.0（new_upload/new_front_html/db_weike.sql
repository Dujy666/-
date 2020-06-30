# Host: localhost  (Version: 5.5.47)
# Date: 2020-06-30 13:14:12
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES gb2312 */;

#
# Structure for table "index_6weike"
#

DROP TABLE IF EXISTS `index_6weike`;
CREATE TABLE `index_6weike` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=gbk;

#
# Data for table "index_6weike"
#

/*!40000 ALTER TABLE `index_6weike` DISABLE KEYS */;
INSERT INTO `index_6weike` VALUES (1,'”ÔŒƒ','Chinese','images/400X200.gif'),(2,' ˝—ß','Math','images/400X200.gif'),(3,'”¢”Ô','English','images/400X200.gif'),(4,'C”Ô—‘','C','images/400X200.gif'),(5,'Java','java','images/400X200.gif'),(6,'C#','C#','images/400X200.gif');
/*!40000 ALTER TABLE `index_6weike` ENABLE KEYS */;

#
# Structure for table "index_slider"
#

DROP TABLE IF EXISTS `index_slider`;
CREATE TABLE `index_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

#
# Data for table "index_slider"
#

/*!40000 ALTER TABLE `index_slider` DISABLE KEYS */;
INSERT INTO `index_slider` VALUES (1,'TITLE1','MESSAGE1','images/1920x500.gif'),(2,'TITLE2','MESSAGE2','images/1920x500.gif'),(3,'TITLE3','MESSAGE3','images/1920x500.gif');
/*!40000 ALTER TABLE `index_slider` ENABLE KEYS */;

#
# Structure for table "tb_lessons1"
#

DROP TABLE IF EXISTS `tb_lessons1`;
CREATE TABLE `tb_lessons1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

#
# Data for table "tb_lessons1"
#

/*!40000 ALTER TABLE `tb_lessons1` DISABLE KEYS */;
INSERT INTO `tb_lessons1` VALUES (1,'',NULL,NULL);
/*!40000 ALTER TABLE `tb_lessons1` ENABLE KEYS */;

#
# Structure for table "tb_user"
#

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` mediumint(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(16) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `QQ` varchar(11) DEFAULT NULL,
  `PIN` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=gbk;

#
# Data for table "tb_user"
#

/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` VALUES (1,'1231321312','123123123','12312312@qq','1213123333','3214'),(2,'dujy','dujy123456','1231qq2@qq','132144412','qwer'),(3,'dujy123','123123123','12312312@qq','1213123333','3214'),(4,'5551','12345678','12312312@qq','1213123333','3214');
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
