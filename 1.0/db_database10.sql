# Host: localhost  (Version: 5.5.47)
# Date: 2020-05-01 11:46:05
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "tb_answer"
#

DROP TABLE IF EXISTS `tb_answer`;
CREATE TABLE `tb_answer` (
  `lesson` varchar(255) DEFAULT NULL,
  `1` int(1) DEFAULT NULL,
  `2` int(1) DEFAULT NULL,
  `3` int(1) DEFAULT NULL,
  `4` int(1) DEFAULT NULL,
  `5` int(1) DEFAULT NULL,
  `6` int(1) DEFAULT NULL,
  `7` int(1) DEFAULT NULL,
  `8` int(1) DEFAULT NULL,
  `9` int(1) DEFAULT NULL,
  `10` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "tb_answer"
#

/*!40000 ALTER TABLE `tb_answer` DISABLE KEYS */;
INSERT INTO `tb_answer` VALUES ('C',3,2,4,1,2,1,3,2,3,1),('politics',4,4,3,4,1,0,0,1,1,1),('math',3,1,3,4,3,1,1,3,2,1);
/*!40000 ALTER TABLE `tb_answer` ENABLE KEYS */;

#
# Structure for table "tb_c_question"
#

DROP TABLE IF EXISTS `tb_c_question`;
CREATE TABLE `tb_c_question` (
  `num` int(1) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "tb_c_question"
#

/*!40000 ALTER TABLE `tb_c_question` DISABLE KEYS */;
INSERT INTO `tb_c_question` VALUES (1,'1.下列数据结构中，属于非线性结构的是( )','A.循环队列','B.带链队列','C.二叉树','D.带链栈'),(2,'2.下列数据结构中，能够按照“先进后出”原则存取数据的是( )','A.循环队列','B.栈','C.队列','D.二叉树'),(3,'3.对于循环队列，下列叙述中正确的是( )','A.队头指针是固定不变的','B.队头指针一定大于队尾指针','C.队头指针一定小于队尾指针','D.队头指针可以大于或小于队尾指针'),(4,'4.算法的空间复杂度是指( )','A.算法在执行过程中所需要的计算机存储空间','B.算法所处理的数据量','C.算法程序中的语句或指令条数','D.算法在执行过程中所需要的临时工作单元数'),(5,'5.软件设计中划分模块的一个准则是( )','A.低内聚低耦合','B.高内聚低耦合','C.低内聚高耦合','D.高内聚高耦台'),(6,'6.下列选项中不属于结构化程序设计原则的是( )','A.可封装','B.自顶向下','C.模块化','D.逐步求精'),(7,'7.设有以下语句：\r\n\r\n                        int a=1，b=2，c;c=a^(b<<2);执行后，c的值为( )','A.7','B.9','C.8','D.6'),(8,'8.设有定义：\r\n\r\n                        int a=1，b=2，C=3;\r\n\r\n                        以下语句中执行效果与其他三个不同的是( )','A.if(a>B.C=a，a=b，b=C;','B.if(a>B.{C=a，a=b，b=C;}','C.if(a>B.C=a;a=b;b=c;','D.if(a>B.{C=a;a=b;b=c;}'),(9,'9.在E—R图中，用来表示实体联系的图形是( )','A.椭圆形','B.矩形','C.菱形','D.三角形'),(10,'10.以下关于宏的叙述中正确的是( )','A.宏替换没有数据类型限制','B.宏定义必须位于源程序中所有语句之前','C.宏名必须用大写字母表示','D.宏调用比函数调用耗费时间');
/*!40000 ALTER TABLE `tb_c_question` ENABLE KEYS */;

#
# Structure for table "tb_math_question"
#

DROP TABLE IF EXISTS `tb_math_question`;
CREATE TABLE `tb_math_question` (
  `num` int(1) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "tb_math_question"
#

/*!40000 ALTER TABLE `tb_math_question` DISABLE KEYS */;
INSERT INTO `tb_math_question` VALUES (1,'1.甲数是乙数的1.25倍,乙数比甲数少（）%.','A.25','B.75','C.20','D.60'),(2,'2、甲数是乙数的2倍,甲比乙多（）.','A.100%','B.50%','C.200%','D.150%'),(3,'3、圆的半径扩大为原来的3倍,它的面积是原来的（）倍.','A.3','B.6','C.9','D.12'),(4,'4、在含盐10%的90克盐水中,再分别加入5克盐和5克水.现在盐与水的比是（ ） ','A.1;10','B.1;9','C.7;43','D.7;50'),(5,'5、已知被减数与减数的比是4：3,被减数是28,差是（ ） ','A.3','B.4','C.7','D.21'),(6,'6、8×278×125＝278×（8×125）=278000,在计算中运用了（ ) ','A.乘法交换结合律','B.乘法分配律','C.乘法结合律','D.除法交换律'),(7,'7、807×99+807＝807×(99+1)=8700,在计算中运用了( ) ','A.乘法分配律','B.乘法结合律','C.除法交换律','D.乘法交换结合律'),(8,'8、0.6+3.1+5.4+6.9=（0.6+5.4）+（3.1+6.9）=16,在计算中运用了（ ） ','A.加法交换律','B.加法结合律','C.加法交换和结合律','D.加法互换率'),(9,'9.  1+1=( )','A.1','B.2','C.3','D.4'),(10,'10.  2*4=( )','A.8','B.16','C.32','D.64');
/*!40000 ALTER TABLE `tb_math_question` ENABLE KEYS */;

#
# Structure for table "tb_politics_question"
#

DROP TABLE IF EXISTS `tb_politics_question`;
CREATE TABLE `tb_politics_question` (
  `num` int(1) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `1` varchar(255) DEFAULT NULL,
  `2` varchar(255) DEFAULT NULL,
  `3` varchar(255) DEFAULT NULL,
  `4` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "tb_politics_question"
#

/*!40000 ALTER TABLE `tb_politics_question` DISABLE KEYS */;
INSERT INTO `tb_politics_question` VALUES (1,'1.毛泽东思想的主要理论渊源是（ ）','A.斯大林主义','B.儒家思想','C.空想社会主义','D.马列主义'),(2,'2.马克思主义中国化的实质就是（ ）','A.将马克思主义基本原理同中国具体实际相结合','B.将马克思主义基本原理同中国革命相结合','C.将马克思主义基本原理同中国经济相结合','D.将马克思主义基本原理同中国文化相结合'),(3,'3.马克思主义中国化有（ ）大理论成果','A.四','B.三','C.二','D.一'),(4,'4.毛泽东思想形成的实践基础是（ ）','A.近代中国无产阶级革命的实践','B.近代中国资产阶级革命的实践','C.近代中国知识分子活动的实践','D.中国共产党领导的革命和建设的实践'),(5,'5.毛泽东思想写进党章是在（ ）','A.党的七大','B.党的六届七中全会','C.党的七届二中全会','D.党的五大'),(6,'6.毛泽东思想形成和发展的历史条件，与我们今天面临的形势和任务有很大的不同，所以我们不必坚持毛泽东思想。（判断题）','对','错',NULL,NULL),(7,'7.毛泽东思想是以毛泽东名字命名的，包括毛泽东个人的所有思想。（判断题）','对','错',NULL,NULL),(8,'8.毛泽东思想是一个博大精深的科学思想体系，其主题是中国革命与建设。（判断题）','对','错',NULL,NULL),(9,'9.思想政治工作是经济工作和其他一切工作的生命线。（判断题）','对','错',NULL,NULL),(10,'10.坚持实事求是，就必须坚持一切从实际出发。（判断题）','对','错',NULL,NULL);
/*!40000 ALTER TABLE `tb_politics_question` ENABLE KEYS */;

#
# Structure for table "tb_score"
#

DROP TABLE IF EXISTS `tb_score`;
CREATE TABLE `tb_score` (
  `name` varchar(255) NOT NULL DEFAULT '0',
  `C` int(10) DEFAULT NULL,
  `Java` int(10) DEFAULT NULL,
  `Python` int(10) DEFAULT NULL,
  `PHP` int(10) DEFAULT NULL,
  `C#` int(10) DEFAULT NULL,
  `chinese` int(10) DEFAULT NULL,
  `english` int(10) DEFAULT NULL,
  `history` int(10) DEFAULT NULL,
  `geography` int(10) DEFAULT NULL,
  `politics` int(10) DEFAULT NULL,
  `math` int(10) DEFAULT NULL,
  `chemistry` int(10) DEFAULT NULL,
  `physical` int(10) DEFAULT NULL,
  `biology` int(10) DEFAULT NULL,
  `computer` int(10) DEFAULT NULL,
  `C_mark` int(1) DEFAULT NULL,
  `Java_mark` int(1) DEFAULT NULL,
  `Python_mark` int(1) DEFAULT NULL,
  `PHP_mark` int(1) DEFAULT NULL,
  `C#_mark` int(1) DEFAULT NULL,
  `chinese_mark` int(1) DEFAULT NULL,
  `english_mark` int(1) DEFAULT NULL,
  `history_mark` int(1) DEFAULT NULL,
  `geography_mark` int(1) DEFAULT NULL,
  `politics_mark` int(1) DEFAULT NULL,
  `math_mark` int(1) DEFAULT NULL,
  `chemistry_mark` int(1) DEFAULT NULL,
  `physical_mark` int(1) DEFAULT NULL,
  `biology_mark` int(1) DEFAULT NULL,
  `computer_mark` int(1) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

#
# Data for table "tb_score"
#

/*!40000 ALTER TABLE `tb_score` DISABLE KEYS */;
INSERT INTO `tb_score` VALUES ('aaaa12',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('alex123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('alex3322',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('dujy123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('dujyhh',90,80,80,90,70,90,90,80,70,80,90,80,90,70,60,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1),('qwerty',30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,40,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL),('test111',30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,100,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,NULL,NULL,NULL),('test333',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),('test456',30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,40,20,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `tb_score` ENABLE KEYS */;

#
# Structure for table "tb_user"
#

DROP TABLE IF EXISTS `tb_user`;
CREATE TABLE `tb_user` (
  `id` mediumint(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL DEFAULT '',
  `pwd` varchar(255) DEFAULT NULL,
  `qq` int(11) DEFAULT NULL,
  `pin` int(4) DEFAULT NULL,
  `money` int(11) NOT NULL DEFAULT '0',
  `point` int(10) NOT NULL DEFAULT '0',
  `sp_lesson` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

#
# Data for table "tb_user"
#

/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT INTO `tb_user` VALUES (1,'dujyhh','123',123123,3214,30,121,0),(2,'qwerty','123456',2966111,9999,49,9,1),(3,'alex123','12345678',2131,3333,0,0,0),(4,'alex33','12345678',21321313,3333,50,0,1),(5,'test456','12341234',21321,3214,16,9,1),(6,'test111','12312321',501325,4321,50,16,0),(7,'test333','12345678',2131,4321,0,0,0),(8,'dujy123','12345678',123123,3214,0,0,0);
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;
