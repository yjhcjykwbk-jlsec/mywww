-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: my_db
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.13.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `curl`
--

DROP TABLE IF EXISTS `curl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curl` (
  `category` char(50) NOT NULL DEFAULT '',
  `url` char(100) NOT NULL DEFAULT '',
  `description` char(100) DEFAULT NULL,
  PRIMARY KEY (`category`,`url`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curl`
--

LOCK TABLES `curl` WRITE;
/*!40000 ALTER TABLE `curl` DISABLE KEYS */;
/*!40000 ALTER TABLE `curl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `del_urls`
--

DROP TABLE IF EXISTS `del_urls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `del_urls` (
  `linkid` int(11) NOT NULL AUTO_INCREMENT,
  `linkname` char(50) DEFAULT NULL,
  `linkvalue` char(100) DEFAULT NULL,
  `tags` char(100) DEFAULT NULL,
  PRIMARY KEY (`linkid`)
) ENGINE=MyISAM AUTO_INCREMENT=218 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `del_urls`
--

LOCK TABLES `del_urls` WRITE;
/*!40000 ALTER TABLE `del_urls` DISABLE KEYS */;
INSERT INTO `del_urls` VALUES (63,'link name','a',NULL),(70,'arm_xilinx','file:///home/administrator/.CodeSourcery/Sourcery_CodeBench_Lite_for_Xilinx_GNU_Linux/share/doc/xili',NULL),(94,'localhost','http://localhost',NULL),(140,'github','http://github.com',NULL),(145,'ubuntu','ubuntu.com',NULL),(135,'acmer','http://blog.163.com/liang_w_yan/',NULL),(174,'s','s',NULL),(173,'ï½“ï½“','dd',NULL),(68,'åœ¨çº¿ps','http://www.uupoop.com/ps/','abc'),(69,'mapdb','http://www.oschina.net/p/mapdb','abc'),(217,'link name','xx','yy'),(186,'å¬é›¨ç‚«','http://www.tyxuan.net/forum.php',''),(138,'ä¸­å›½è±¡æ£‹','http://localhost/wjbzbmr/blog/item/17e2e30c1f55c0c67acbe111.html','');
/*!40000 ALTER TABLE `del_urls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `title` char(50) DEFAULT NULL,
  `content` text,
  `link` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` VALUES ('dd','dd',NULL),('music','http://music.qq.com/qqmusic.html?id=184315',NULL),('åˆ›å»ºä¸€ä¸ªæœ€ç®€å•çš„å¯ä»¥æŽ¥æ”¶Urban AirShipé','æœ¬æ–‡é“¾æŽ¥ï¼šhttp://blog.csdn.net/kongxx/article/details/8176986   ä»Šå¤©è¯´è¯´æ€Žæ ·æ¥åˆ›å»ºä¸€ä¸ªæœ€ç®€å•çš„å¯ä»¥æŽ¥æ”¶Urban AirShipé€šçŸ¥çš„Androidåº”ç”¨ç¨‹åºã€‚  1. é¦–å…ˆåˆ›å»ºä¸€ä¸ªAndroidåº”ç”¨ï¼Œè¿™é‡Œéœ€è¦æ³¨æ„çš„æ˜¯Androidåº”ç”¨çš„packageåå¿…é¡»å’ŒUrban AirShipä¸Šapplicationçš„packageåä¸€è‡´ã€‚  2. æ·»åŠ urbanairship-lib-2.0.1.jaråˆ°libsç›®å½•ä¸‹ï¼Œå¹¶å°†å…¶åŠ å…¥å·¥ç¨‹çš„classpathä¸­ã€‚  3. ä¿®æ”¹AndroidManifest.xmlæ–‡ä»¶ï¼Œå†…å®¹ç±»ä¼¼å¦‚ä¸‹',NULL),('åˆ›å»ºä¸€ä¸ªæœ€ç®€å•çš„å¯ä»¥æŽ¥æ”¶Urban AirShipé','http://blog.csdn.net/kongxx/article/details/8176986',NULL);
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `replies` (
  `username` char(20) DEFAULT NULL,
  `info` char(50) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `replies`
--

LOCK TABLES `replies` WRITE;
/*!40000 ALTER TABLE `replies` DISABLE KEYS */;
INSERT INTO `replies` VALUES ('xx','ss','2012-10-10 00:00:00'),('xx','ss','2012-10-10 00:00:00'),('xx','ss','2012-10-10 00:00:00');
/*!40000 ALTER TABLE `replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `urls`
--

DROP TABLE IF EXISTS `urls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `urls` (
  `linkid` int(11) NOT NULL AUTO_INCREMENT,
  `linkname` char(50) DEFAULT NULL,
  `linkvalue` char(100) DEFAULT NULL,
  `tags` char(100) DEFAULT NULL,
  PRIMARY KEY (`linkid`)
) ENGINE=InnoDB AUTO_INCREMENT=220 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `urls`
--

LOCK TABLES `urls` WRITE;
/*!40000 ALTER TABLE `urls` DISABLE KEYS */;
INSERT INTO `urls` VALUES (65,'googleå¤§æ•°æ®','http://www.csdn.net/article/2013-02-28/2814298-google-bigdata-papers','google'),(66,'RachielZhang','http://blog.csdn.net/abcjennifer/article/category/673296/4','datamin'),(67,'google_machine_learning','http://research.google.com/pubs/MachineLearning.html',''),(70,'initphp','http://initphp.com/',''),(71,'tokyo-cabinet','http://www.oschina.net/news/11560/tokyo-cabinet-1-4-46',''),(72,'OceanBase','https://github.com/alibaba/oceanbase',''),(73,'node.js','http://www.infoq.com/cn/nodejs/?utm_source=infoq',''),(74,'alibaba_canal','https://github.com/alibaba/canal',''),(75,'jquery_api','http://julying.com/jQuery-1.6-api/',''),(76,'jquery æ•™ç¨‹','http://www.17jquery.com/div_css/31188/',''),(77,'ç™¾åº¦ç›¸å†Œ','http://xiangce.baidu.com/picture/page/upload','baidu'),(78,'ç½‘æ˜“ç®€åŽ†','http://my.hr.163.com/myrecruit.do',''),(91,'baobao','http://baobaoyangzhou.blog.163.com',''),(92,'ä¸Šä¼ ç™¾åº¦ç›¸å†Œ','http://xiangce.baidu.com/picture/page/upload','baidu'),(93,'AM37X_SDK','http://software-dl.ti.com/dsps/dsps_public_sw/am_bu/sdk/AM37xSDK/latest/index_FDS.html',''),(95,'opencv','http://huhuixuefei.blog.163.com/blog/static/6521130820125793733200/',''),(96,'css','http://www.css3menu.com/','web'),(97,'openhw','http://www.openhw.org/bbs/forum_1156.html',''),(98,'äº¤å‰ç¼–è¯‘','http://www.openhw.org/bbs/article_1237_523288.html',''),(99,'arm_gnu_tools','http://wiki.xilinx.com/zynq-tools',''),(100,'arm_xilinx','	file:///home/administrator/.CodeSourcery/Sourcery_CodeBench_Lite_for_Xilinx_GNU_Linux/share/doc/',''),(131,'flowå¸ƒå±€','http://www.ittang.com/2011/0702/12115.html',''),(132,'ç²¾ç¾Žé¦–é¡µ','http://www.ittang.com/2011/0702/12123.html',''),(133,'åˆ—è¡¨é¦–é¡µ','http://envato.com/',''),(134,'jsbeautify','http://jsbeautifier.org/',''),(136,'hduer','http://blog.csdn.net/qinmusiyan/article/details/7981463',''),(137,'acm_tianjin','http://acmicpc.info/archives/1110',''),(139,'github','http://github.com',''),(141,'æžé…·æ¡Œé¢','http://wangzhan.xooob.com/wlzx/20097/383511.htm',''),(142,'è´Ÿè½½å‡è¡¡','http://os.51cto.com/art/201202/319979.htm',''),(143,'hdfså®žçŽ°','http://www.open-open.com/doc/view/c7cb84f4f9944e2ba2c0de136e89a8e2',''),(144,'hdfsè§†é¢‘','http://cdmd.cnki.com.cn/Article/CDMD-10183-1012367307.htm',''),(145,'æ²¡å¤´è‹è‡','http://www.cnblogs.com/magic-chen/',''),(146,'ipvs','http://www.wenlingnet.com/index.php/225/',''),(147,'haproxy','rtmp://219.223.195.21/oflaDemo','è¿ç»´'),(148,'å¸¦å®½æµ‹è¯•','http://blog.s135.com/post/409/',''),(149,'nagios','http://kms.lenovots.com/kb/article.php?id=11915',''),(150,'red5chat','http://avchathq.com/blog/tag/red5/',''),(151,'å¤©æ¶¯lvs','http://www.linuxde.net/2011/12/4652.html',''),(152,'red5ä¸­å¿ƒ','http://rtmpworld.com/: http:/rtmpworld.com/index.php?option=com_content',''),(153,'lvs_rrd','http://tech.ddvip.com/2013-03/1364212631192557.html',''),(154,'func_master','http://blog.liuts.com/post/186/',''),(155,'funcâ€”install','http://weipengfei.blog.51cto.com/1511707/1081916',''),(156,'poj_java','http://www.java3z.com/cwbwebhome/article/article17/POJ3.html',''),(157,'python note','http://pythonnote.diandian.com/',''),(158,'ç«™é•¿å·¥å…·','http://www.gongju.com/',''),(159,'mouseover','http://zhidao.baidu.com/question/112723039.html',''),(160,'rtmfp','http://www.flashrealtime.com/',''),(161,'rtmfp','http://www.google.com.hk/search?newwindow=1',''),(162,'open_meetings','https://code.google.com/p/openmeetings/downloads/list',''),(163,'ç”µè§†ç›´æ’­','http://www.6688.cc/',''),(164,'machinel','ed2k://|file|æ•™è‚²ç½‘çš„é©´å‹è¯·ä¸‹è½½ï¼Œä»¥æ–¹ä¾¿åˆ†äº«.rar|11632894|bd67236968c287502e385dccb6e3',''),(165,'å¤©å¤§è½¯ä»¶ä¸‹è½½','http://www.twt.edu.cn/software/type.php?t_id=12',''),(166,'modelearning','http://adsp.pkusz.edu.cn/wp-content/uploads/downloads/2013/04/2013-Lesson-7-Discussion-Project-0410.',''),(167,'ftp','ftp://ftp.utsz.edu.cn/è½¯ä»¶èµ„æº/8å·¥ç¨‹è½¯ä»¶/',''),(168,'ç›´æ’­','http://www.lupaworld.com/article-213100-1.html',''),(169,'ç›´æ’­','http://play.jb51.net/wangluobofangqi/3209.html',''),(170,'éªŒè¯ç ','http://www.cnblogs.com/yuanbao/archive/2007/09/25/905322.html',''),(171,'androidui','http://www.iteye.com/news/22984/',''),(172,'android-ui-oschina','http://www.oschina.net/search?user=270164','android'),(175,'imb','http://www.ibmcampus.com/bp_jd.htm',''),(176,'android','http://www.th7.cn/Program/Android/201210/108412.shtml',''),(177,'ued-taobao','http://ued.taobao.com/blog/category/bowen/teams/',''),(178,'android-json-php','http://stackoverflow.com/questions/4685534/android-json-to-php-server-and-back',''),(179,'oschinaä»£ç æ”¶è—å¤¹','http://my.oschina.net/u/574515/favorites?type=5',''),(180,'android stydy','http://www.android-study.com/',''),(181,'æ¨¡å¼è¯†åˆ«ç®—æ³•','http://www.pudn.com/downloads181/sourcecode/graph/text_recognize/detail844135.html',''),(182,'mysql','http://ourmysql.com/archives/category/advanced',''),(183,'java_mvc','http://wenku.baidu.com/view/3b8535bbfd0a79563c1e7242.html',''),(184,'java_ssh','http://wenku.baidu.com/view/539c2ec49ec3d5bbfd0a7499.html',''),(185,'android_books','http://www.xue5.com/Mobile/Android/Index.html',''),(187,'åº”å±Šç”Ÿ','http://my.yingjiesheng.com/index.php/personal/resume/sendout/2443094.htm',''),(188,'åº”å±Šç”ŸèŒä½','http://s.yingjiesheng.com/result.jsp?keyword=ç™¾åº¦',''),(189,'qt api','http://doc.qt.digia.com/4.7/classes.html',''),(190,'å¤§æ•°æ®bbs','http://www.bigdatabbs.com/forum.php',''),(191,'php_httprequest','http://www.jb51.net/article/26671.htm',''),(192,'xiaobingo','http://xiaobingo.tumblr.com/',''),(193,'å‰ç¨‹æ— å¿§','http://my.51job.com/my/history/My_AppHistory.php?type=school',''),(194,'ç«è½¦ç¥¨','https://dynamic.12306.cn/otsweb/',''),(195,'android_recog','http://sourceforge.net/projects/andocrrecog/files/',''),(196,'NLP','http://lingpipe-blog.com/',''),(197,'drawol','https://www.draw.io/',''),(198,'drawol','https://www.gliffy.com/go/html5/launch?app=1b5094b0-6042-11e2-bcfd-0800200c9a66',''),(199,'mysql_dev','http://ourmysql.com/archives/1088?f=wb',''),(200,'å®£è®²ä¼š','http://xjh.haitou.cc/gz/',''),(201,'SAPUI5','http://www.spyvee.com/SAPHTML5_DemoKit/',''),(202,'opengl','http://www.opengl.org/sdk/docs/man2/',''),(203,'cygwin_packages','http://cygwin.com/packages/',''),(204,'sjtu-acm','http://acm.sjtu.edu.cn/wiki/Special:RecentChanges',''),(205,'acm-sjtu-courses','http://acm.sjtu.edu.cn/wiki/Special:AllPages',''),(206,'jasmine','http://blog.fens.me/nodejs-jasmine-bdd/',''),(207,'pyquery','http://www.cnblogs.com/QLeelulu/archive/2010/03/05/pyQuery.html',''),(208,'pyquery','http://pythonhosted.org/pyquery/api.html',''),(209,'princeton-alg','http://aofa.cs.princeton.edu/home/',''),(210,'no-cow-alg','http://www.nocow.cn/index.php/é¦–é¡µ',''),(211,'purety-alg','http://purety.jp/akisame/oi/TJU/',''),(212,'richard-alg','http://rchardx.is-programmer.com/tag/å›¾è®º',''),(213,'windowsprogrammer','http://geekswithblogs.net/shaunxu/archive/2012/09/14/node.js-adventure---node.js-on-windows.aspx',''),(214,'nodejs-express','http://www.informedgeek.com/2011/12/getting-started-with-express-node-js-and-nodeunit-on-windows-usi',''),(215,'nodejs-model','http://www.aaronstannard.com/post/2011/12/14/Intro-to-NodeJS-for-NET-Developers.aspx',''),(216,'ruby','http://ruby-china.org/topics',''),(218,'tesseract-ocr-runtime-error','https://code.google.com/p/tesseract-ocr/issues/detail?id=762','ocr'),(219,'scikt-learning','http://scikit-learn.org/stable/','');
/*!40000 ALTER TABLE `urls` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-01-11 12:47:35
update my_db.urls set tags='' where linkid='147';
update my_db.urls set linkname='scikt-learning',linkvalue='http://scikit-learn.org/stable/',tags='Machine-Learning' where linkid='219';
insert into my_db.urls
		(linkname,linkvalue,tags) values('machinelearnprojects','http://machinelearningmastery.com/self-study-machine-learning-projects/','Machine-Learning');
insert into my_db.urls
		(linkname,linkvalue,tags) values('python-packages','https://pypi.python.org/simple/','python');
insert into my_db.urls
		(linkname,linkvalue,tags) values('java-thread-model','http://tobeno1.iteye.com/blog/941275','java,os');
insert into my_db.urls
		(linkname,linkvalue,tags) values('machinel-ppts','http://ztl2004.github.io/MachineLearningWeekly/index.html',',Machine-Learning');
update my_db.urls set linkname='ML-weekly',linkvalue='http://ztl2004.github.io/MachineLearningWeekly/index.html',tags=',Machine-Learning' where linkid='223'
insert into my_db.urls
		(linkname,linkvalue,tags) values('css-font-style','http://www.html5china.com/CSS3/20101226_743.html',',web');
insert into my_db.urls
		(linkname,linkvalue,tags) values('css-background','http://hi.baidu.com/zyyhyzazwm/item/72dc6c9a40513acf1a49df56',',web');
insert into my_db.urls
		(linkname,linkvalue,tags) values('search-engine-watch:ocr','http://searchenginewatch.com/topic/ocr','web,ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('google-ocr','http://www.labnol.org/software/google-ocr-software-review/7208/','web,ocr,google');
insert into my_db.urls
		(linkname,linkvalue,tags) values('ocr-search','http://www.google.com.hk/','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('ocr-search','http://www.google.com.hk/','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('ocr-search','http://www.google.com.hk/','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('ocr-search','http://www.google.com.hk/','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('ocr-search','http://www.google.com.hk/','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('ocr-search',''http://www.google.com.hk/','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('ocr-search',''http://www.google.com.hk/','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('ocr-search',''encodeURIComponent'',',ocr,google');
insert into my_db.urls
		(linkname,linkvalue,tags) values('link name',''&&&###//'','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('link name',''&&&###//''''''','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('link name',''&&&###//''''''','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('link name',''&&&###//''''''','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('link name',''aaa'','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('link name','xx','');
insert into my_db.del_urls select * from my_db.urls where linkid=233;
delete from my_db.urls where linkid=233;
insert into my_db.del_urls select * from my_db.urls where linkid=232;
delete from my_db.urls where linkid=232;
insert into my_db.del_urls select * from my_db.urls where linkid=231;
delete from my_db.urls where linkid=231;
insert into my_db.del_urls select * from my_db.urls where linkid=230;
delete from my_db.urls where linkid=230;
insert into my_db.del_urls select * from my_db.urls where linkid=229;
delete from my_db.urls where linkid=229;
insert into my_db.del_urls select * from my_db.urls where linkid=228;
delete from my_db.urls where linkid=228;
insert into my_db.urls
		(linkname,linkvalue,tags) values('link name','##&&','');
insert into my_db.del_urls select * from my_db.urls where linkid=234;
delete from my_db.urls where linkid=234;
insert into my_db.urls
		(linkname,linkvalue,tags) values('dailiang','http://www.cnblogs.com/daniel-D/archive/2013/06/02/3113445.html',',Machine-Learning');
insert into my_db.urls
		(linkname,linkvalue,tags) values('插画1','http://tianlang71.blog.163.com/blog/static/21382612120131203323295/','插画');
insert into my_db.urls
		(linkname,linkvalue,tags) values('插画2','http://zhpan.com.cn/w/search/?r=mf&query=%ca%d6%bb%e6%b9%c5%d7%b0%c3%c0%c5%ae','插画');
insert into my_db.urls
		(linkname,linkvalue,tags) values('一眼万年','http://music4.tianya.cn/upmusicfile/2008/4/10/156203_16138600.mp3?','音乐');
insert into my_db.del_urls select * from my_db.urls where linkid=231;
insert into my_db.del_urls select * from my_db.urls where linkid=230;
insert into my_db.del_urls select * from my_db.urls where linkid=231;
delete from my_db.urls where linkid=231;
insert into my_db.urls
		(linkname,linkvalue,tags) values('基于稀疏编码的图像特征提取和去噪','http://www.zjb.org.cn/art/2008/5/15/art_98_224.html',',Machine-Learning');
insert into my_db.urls
		(linkname,linkvalue,tags) values('基于稀疏编码的入侵检测','http://wenku.baidu.com/link?url=bR8A7malhw2MxE8dSx49sE-ZhO9pcWafMUAwy1QcWVOTvl8b9X4dPHses5wxJLNyPabmqShB_R7Uv-jLSE3VZA7k7JQGdXRLx6pQxdtUTY3',',Machine-Learning');
insert into my_db.del_urls select * from my_db.urls where linkid=232;
delete from my_db.urls where linkid=232;
insert into my_db.urls
		(linkname,linkvalue,tags) values('中山大学就业指导中心','http://career.sysu.edu.cn/(S(ikvjd1frm3xggq55lqtpzrnh))/Management_Field/Public/ViewLecture.aspx?id=2196','就业');
insert into my_db.urls
		(linkname,linkvalue,tags) values('排序算法','http://www.cppblog.com/mzty/archive/2005/12/15/1770.html','算法');
insert into my_db.urls
		(linkname,linkvalue,tags) values('Multilingual OCR Research and Applications: An Overview','http://delivery.acm.org/10.1145/2510000/2509977/a1-peng.pdf','ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('clucene','http://mylovejsj.blog.163.com/blog/static/38673975200910831856334/','search');
update my_db.urls set tags='' where linkid='235';

update my_db.urls set tags='' where linkid='236';

update my_db.urls set tags='' where linkid='237';

insert into my_db.urls
		(linkname,linkvalue,tags) values('winsty-autocoder','http://winsty.net/dlt.html',',Machine-Learning');
update my_db.urls set linkname='基于稀疏编码的图像特征提取和去噪(1',linkvalue='http://www.zjb.org.cn/art/2008/5/15/art_98_224.html',tags=',Machine-Learning' where linkid='238'
insert into my_db.del_urls select * from my_db.urls where linkid=239;
delete from my_db.urls where linkid=239;
update my_db.urls set linkname='基于稀疏编码的图像特征提取',linkvalue='http://www.zjb.org.cn/art/2008/5/15/art_98_224.html',tags=',Machine-Learning' where linkid='238'
insert into my_db.del_urls select * from my_db.urls where linkid=235;
delete from my_db.urls where linkid=235;
insert into my_db.del_urls select * from my_db.urls where linkid=237;
delete from my_db.urls where linkid=237;
insert into my_db.del_urls select * from my_db.urls where linkid=236;
delete from my_db.urls where linkid=236;
insert into my_db.urls
		(linkname,linkvalue,tags) values('pattern google','http://scholar.google.com/scholar?q=image process pattern recognition&btnG=&hl=en&as_sdt=0%2C5&as_ylo=2013',',ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('边缘检测','http://www.cqvip.com/main/none.aspx?lngid=4618333',',ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('sphinx','http://hot66hot.iteye.com/blog/1759559','ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('视频推荐算法','http://www.wentrue.net/blog/?p=1181','算法');
insert into my_db.urls
		(linkname,linkvalue,tags) values('手机即时通讯','http://www.cnblogs.com/luxiaofeng54/archive/2011/03/14/1984026.html','xmpp');
update my_db.urls set linkname='基于XMPP协议的手机多方多端即时通讯方案',linkvalue='http://www.cnblogs.com/luxiaofeng54/archive/2011/03/14/1984026.html',tags='xmpp' where linkid='249'
update my_db.urls set linkname='基于XMPP协议的手机多方多端即时通讯方案',linkvalue='http://www.cnblogs.com/luxiaofeng54/archive/2011/03/14/1984026.html',tags='xmpp' where linkid='249'
update my_db.urls set linkname='手机即时通讯方案',linkvalue='http://www.cnblogs.com/luxiaofeng54/archive/2011/03/14/1984026.html',tags='xmpp' where linkid='249'
update my_db.urls set linkname='啊啊啊',linkvalue='http://www.cnblogs.com/luxiaofeng54/archive/2011/03/14/1984026.html',tags='xmpp' where linkid='249'
update my_db.urls set linkname='aa',linkvalue='http://www.cnblogs.com/luxiaofeng54/archive/2011/03/14/1984026.html',tags='xmpp' where linkid='249'
update my_db.urls set linkname='基于XMPP协议的手机多方多端即时通讯方案',linkvalue='http://www.cnblogs.com/luxiaofeng54/archive/2011/03/14/1984026.html',tags='xmpp' where linkid='249'
update my_db.urls set linkname='手机即时通讯方案',linkvalue='http://www.cnblogs.com/luxiaofeng54/archive/2011/03/14/1984026.html',tags='xmpp' where linkid='249'
insert into my_db.urls
		(linkname,linkvalue,tags) values('jwchat搭建在线聊天','http://blog.sina.com.cn/s/blog_4b9d0957010008rx.html','xmpp');
insert into my_db.urls
		(linkname,linkvalue,tags) values('xmpp定义','http://my.eoe.cn/967832/archive/10682.html','xmpp');
insert into my_db.del_urls select * from my_db.urls where linkid=235;
delete from my_db.urls where linkid=235;
insert into my_db.del_urls select * from my_db.urls where linkid=236;
delete from my_db.urls where linkid=236;
insert into my_db.del_urls select * from my_db.urls where linkid=237;
delete from my_db.urls where linkid=237;
update my_db.urls set linkname='xmpp聊天',linkvalue='http://www.baidu.com/s?ie=utf-8',tags=',xmpp' where linkid='252'
insert into my_db.urls
		(linkname,linkvalue,tags) values('google-ocr','http://scholar.google.com/scholar?start=30&q=ocr&hl=zh-CN&as_sdt=0,5&as_ylo=2013','ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('google-ocr-dictionary-match','http://scholar.google.com/scholar?as_ylo=2013&q=dictionary match ocr&hl=zh-CN&as_sdt=0,5','ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('link name','  ','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('link name','  ','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('link name','++','');
insert into my_db.urls
		(linkname,linkvalue,tags) values('google-ocr-dictionary-match','http://scholar.google.com/scholar?as_ylo=2013&q=dictionary+match+ocr&hl=zh-CN&as_sdt=0,5',',ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('image process pattern recognition','http://scholar.google.com/scholar?q=image+process+pattern+recognition&btnG=&hl=en&as_sdt=0%2C5&as_ylo=2013',',ocr');
insert into my_db.del_urls select * from my_db.urls where linkid=256;
delete from my_db.urls where linkid=256;
insert into my_db.urls
		(linkname,linkvalue,tags) values('2d-lstm ocr','http://scholar.google.com/scholar?hl=zh-CN&q=2d+lstm+network+ocr&btnG=&lr=',',ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('near-document-duplicated','http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&arnumber=6460143','ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('android','http://www.cnblogs.com/devinzhang/archive/2011/12/31/2308980.html','android');
insert into my_db.urls
		(linkname,linkvalue,tags) values('android-service-activity','http://blog.csdn.net/xiaanming/article/details/9750689','android');
update my_db.urls set linkname='android_books',linkvalue='http://www.xue5.com/Mobile/Android/Index.html',tags='android' where linkid='185'
insert into my_db.urls
		(linkname,linkvalue,tags) values('dom4j-document','http://zhangjunhd.blog.51cto.com/113473/126310/','java');
insert into my_db.urls
		(linkname,linkvalue,tags) values('xmlpullparser','http://blog.csdn.net/doandkeep/article/details/13170515','java');
insert into my_db.urls
		(linkname,linkvalue,tags) values('Document image binarization using background estimation and stroke edges','http://download.springer.com/static/pdf/183/art%253A10.1007%252Fs10032-010-0130-8.pdf?auth66=1396444508_1bdbb9695565cb58cfc0f5e5700ea445&ext=.pdf',',ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('A Hybrid Approach to Detect and Localize Texts in Natural Scene Images','http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&arnumber=5560830',',ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('A Hybrid Approach to Detect and Localize Texts in Natural Scene Images','http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&arnumber=5560830',',ocr');
insert into my_db.del_urls select * from my_db.urls where linkid=268;
delete from my_db.urls where linkid=268;
insert into my_db.urls
		(linkname,linkvalue,tags) values('Detecting Near-Duplicate Document Images using Interest Point Matching','http://ieeexplore.ieee.org/stamp/stamp.jsp?tp=&arnumber=6460143&tag=1',',ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('document image detect','http://scholar.google.com/scholar?as_ylo=2010&q=document+image+detect&hl=en&as_sdt=0,5',',ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('robust system to detect and localize texts in natural images','http://www.google.com.hk/search?q=A+robust+system+to+detect+and+localize+texts+in+natural+scene+images&newwindow=1&safe=strict&noj=1&ei=QgJBU5rODOaQiAf414DgAQ&start=10&sa=N&biw=1366&bih=631&dpr=1',',ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('Text Detection and Character Recognition in Scene Images with Unsupervised Feature Learning','http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=6065350',',ocr');
insert into my_db.urls
		(linkname,linkvalue,tags) values('Text Detection and Character Recognition in Scene Images with Unsupervised Feature Learning','http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=6065350',',ocr');
insert into my_db.del_urls select * from my_db.urls where linkid=273;
delete from my_db.urls where linkid=273;
insert into my_db.urls
		(linkname,linkvalue,tags) values('Text Detection and Character Recognition in Scene Images with Unsupervised Feature Learning','Text Detection and Character Recognition in Scene Images with Unsupervised Feature Learning','');
insert into my_db.del_urls select * from my_db.urls where linkid=274;
delete from my_db.urls where linkid=274;
insert into my_db.urls
		(linkname,linkvalue,tags) values('Text Detection and Character Recognition in Scene Images with Unsupervised Feature Learning','Text Detection and Character Recognition in Scene Images with Unsupervised Feature Learning',',ocr');
insert into my_db.del_urls select * from my_db.urls where linkid=275;
delete from my_db.urls where linkid=275;
insert into my_db.urls
		(linkname,linkvalue,tags) values('Text Detection and Character Recognition in Scene Images with Unsupervised Feature Learning','xx','');
insert into my_db.del_urls select * from my_db.urls where linkid=276;
delete from my_db.urls where linkid=276;
insert into my_db.urls
		(linkname,linkvalue,tags) values('Text Detection and Character Recognition in Scene Images with Unsupervised Feature Learning','xx','');
insert into my_db.del_urls select * from my_db.urls where linkid=277;
delete from my_db.urls where linkid=277;
insert into my_db.urls
		(linkname,linkvalue,tags) values('Text Detection and Character Recognition in Scene Images with Unsupervised Feature Learning','http://ieeexplore.ieee.org/xpl/articleDetails.jsp?arnumber=6065350',',ocr');
insert into my_db.del_urls select * from my_db.urls where linkid=272;
delete from my_db.urls where linkid=272;
insert into my_db.urls
		(linkname,linkvalue,tags) values('得图网-下拉slide效果','http://www.detu.com/','精致前端');
insert into my_db.urls
		(linkname,linkvalue,tags) values('淘宝房产-地图设施','http://fang.taobao.com/building_detail.htm?spm=a211z.6595626.0.0.BKfvkE&id=67','精致前端');
insert into my_db.urls
		(linkname,linkvalue,tags) values('得图云-全景及3d图片','http://www.detuyun.com/app','精致前端');
insert into my_db.urls
		(linkname,linkvalue,tags) values('单图片展示','http://www.detu.com/photo/ushow/18627/hot#18627','精致前端');
insert into my_db.urls
		(linkname,linkvalue,tags) values('jquery 滚动条','http://slodive.com/web-development/jquery-scroll/',',精致前端');
insert into my_db.urls
		(linkname,linkvalue,tags) values('jQuery ui','http://www.marcofolio.net/webdesign/jquery_quickie_unlimited_scroll_using_the_twitter_api.html',',精致前端');
insert into my_db.urls
		(linkname,linkvalue,tags) values('jquery-api','http://hemin.cn/jq/',',精致前端');
insert into my_db.del_urls select * from my_db.urls where linkid=250;
delete from my_db.urls where linkid=250;
insert into my_db.del_urls select * from my_db.urls where linkid=240;
delete from my_db.urls where linkid=240;
insert into my_db.del_urls select * from my_db.urls where linkid=248;
delete from my_db.urls where linkid=248;
insert into my_db.del_urls select * from my_db.urls where linkid=241;
delete from my_db.urls where linkid=241;
insert into my_db.del_urls select * from my_db.urls where linkid=241;
delete from my_db.urls where linkid=241;
insert into my_db.del_urls select * from my_db.urls where linkid=246;
delete from my_db.urls where linkid=246;
insert into my_db.urls
		(linkname,linkvalue,tags) values('Watashi','http://blog.watashi.ws/','ACM');
insert into my_db.urls
		(linkname,linkvalue,tags) values('ACM呆滞慢板','http://www.huangwenchao.com.cn/category/tech/acm',',ACM');
insert into my_db.del_urls select * from my_db.urls where linkid=253;
delete from my_db.urls where linkid=253;
insert into my_db.urls
		(linkname,linkvalue,tags) values('intel游戏开发','https://software.intel.com/zh-cn/blogs/2014/04/14','game');
