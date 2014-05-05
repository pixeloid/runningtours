# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.28)
# Database: runningtours
# Generation Time: 2013-02-17 11:56:05 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table tour
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tour`;

CREATE TABLE `tour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brief` longtext NOT NULL,
  `description` longtext NOT NULL,
  `stops` longtext NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tour` WRITE;
/*!40000 ALTER TABLE `tour` DISABLE KEYS */;

INSERT INTO `tour` (`id`, `brief`, `description`, `stops`, `created`, `updated`, `title`)
VALUES
	(1,'As any experienced runner knows, hillwork is a great way to build strength necessary for long runs. ','As any experienced runner knows, hillwork is a great way to build strength necessary for long runs. If you are looking for a challenging running tour that offers the most breathtaking panoramic views of the city, the Heartbeat Tour is for you. We begin at one of Budapest’s stunning bridges—Erzsébet Bridge—and cross over into Buda, where we begin our ascent to the highest point in Budapest, the Citadella atop Szabadsag (or Freedom) hill. From there, we make our way down to the famous Gellert Hotel and Baths, where some soaking in the therapeutic waters is a great way to recover from a good run.\r\rThe hillwork is steep but the paved path is quiet and the air terrific. In terms of distance, this is the shortest running tour offered—the strenuous inclines will give you a great workout, but this is a run that you can fit in before breakfast, in between meetings, or just before sunset. Watching the sun descend behind the hills of Buda from atop the Freedom hill is one of the best sights the city has to offer. \r','','0000-00-00 00:00:00','0000-00-00 00:00:00','Heartbeat Tour'),
	(2,'Our longest tour in terms of distance, the Riverbank Tour offers the best sights of Budapest’s famous bridges','Our longest tour in terms of distance, the Riverbank Tour offers the best sights of Budapest’s famous bridges, as we run up and down the banks of the Danube River. This tour begins at the Lion’s Bridge or Lánchid and cuts a path down the Buda side of the river. As we run past many of the famous Turkish baths, we will also be able to take in some of the architectural wonders on the Pest side of the river. About half way through the run, we will arrive at the Kopaszi gát, a pedestrian only walking path with many fine restaurants and coffee houses. \r\rAfter crossing the Lágymányosi bridge we run along the Danube on the Pest side, where a spectacular running path affords some of the best views of the majestic hills of Buda. We end at Boráros square in Pest, where a restaurant option is provided at ','','0000-00-00 00:00:00','0000-00-00 00:00:00','Riverbank Tour'),
	(3,'If you are interested in the “other” Budapest where tour buses dare not tread, the Shady Budapest Tour could be for you. ','If you are interested in the “other” Budapest where tour buses dare not tread, the Shady Budapest Tour could be for you. This tour offers a run through the lively 8th and 9th districts, long home to Budapest’s working class population. The architecture here is underexplored but no less spectacular. The small and leafy squares along this run are refreshing and always interesting. We begin at the National Art Museum in Pest, and as we make our way deeper into the 8th district, the many sights and sounds of these bustling neighborhoods will take your mind off the running burn. \r\rOur experienced guides will provide some history of the neighborhoods and buildings, including some stories of the former Jewish community near Teleki Square and the still bustling Romani neighborhoods. At the end of the run, the Shady Budapest Tour provides one of the best dining experiences in all of Budapest—an intimate dinner at the Romani Platni, the first Romani “flat restaurant” in Hungary. Enjoy authentic Romani dishes and live Romani music in a cozy home environment. This is a great way to load up on protein and carbs after a long run!    \r','','0000-00-00 00:00:00','0000-00-00 00:00:00','Shady Budapest Tour'),
	(4,'In a city famous for its night life, what better way to see the sights than to go for a night run? ','In a city famous for its night life, what better way to see the sights than to go for a night run? The City of Lights Tour provides a safe and enjoyable running tour through Budapest’s glittering nightscapes. We start at the stunning Basilica, a towering Catholic church built in the late 19th century and home to the mummified hand of St. Stephen. We run down broad Andrássy Street—the Champs-Élysées of Central Europe—all the way to Heroes Square. This opulent neighborhood has some of the finest villas in Hungary, as well as some of the most infamous buildings in the city (like the Terror House). The well-lit streets are ideal for nighttime running, and give our visitors a chance to see the city at its most beautiful. \r\rWe make our way back to the Danube via the leafy Varosligeti Fasor street, which offers more stunning architectural sights and delightful squares. The City of Lights Tour ends at Erzsébet Square in downtown Pest, which gives you a convenient central location from which to depart to your late night hot spot.\r','','0000-00-00 00:00:00','0000-00-00 00:00:00','City of Lights Tour'),
	(5,'The Must See Tour tries to combine some of the most fascinating sights in Pest into one invigorating run.','The Must See Tour tries to combine some of the most fascinating sights in Pest into one invigorating run. The tour begins at perhaps Hungary’s most famous gothic edifice—the Parliament building. The tour makes its way to the Basilica, running through the Szabadsag Square (perhaps the only square in the world with a US embassy and a statue honoring Soviet liberation in WWII!). From the Basilica, the tour makes its way to the Buda castle district via the Lion’s bridge. \r\rThe old Buda town—one  of the best preserved walled medieval cities in the world—makes for a perfect running environment, with some hillwork, narrow historic streets, and incredible views of the city. From the Buda hill, we make our way into the Tabán district, a quiet and upscale residential neighborhood, before crossing another beautiful Budapest bridge back into Pest. Once in Pest, we will run down the city’s most famous walking street, Vaci Utca, finishing our run in downtown Pest.\r','','0000-00-00 00:00:00','0000-00-00 00:00:00','Must See Tour');

/*!40000 ALTER TABLE `tour` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
