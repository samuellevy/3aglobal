# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.20)
# Database: manager_3aglobal
# Generation Time: 2018-02-20 00:32:32 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table affiliates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `affiliates`;

CREATE TABLE `affiliates` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `affiliates` WRITE;
/*!40000 ALTER TABLE `affiliates` DISABLE KEYS */;

INSERT INTO `affiliates` (`id`, `name`, `country`, `site`, `email`, `telephone`, `address`, `description`, `created`, `modified`)
VALUES
	(1,'3AWW ARGENTINA (Indie)','Argentina','http://indie.com.ar/','hola@indie.com.ar','5411 4551 2442','Cdad. de La Paz 353, C1426AGE','<p><br />\r\nWe are 3AWW ARGENTINA (Indie), a Full Service Boutique Agency located in Buenos Aires. We chose our name because we believe in independent thinking to achieve better results. In Indie, we build brands with a strong focus in effectiveness, through the following services and products: Advertising, Interactive, Social Media, Innovation, Activation, Events, Branded Content, Performance, RSE and AI (Virtual Agents and ChatBots).</p>\r\n\r\n<p>We get involved as a strategic partner with our clients, to build strong relationships between the brand and the people, all through our approach: the INDIE thinking.<br />\r\n&nbsp;</p>\r\n','2017-12-15 17:39:40','2017-12-15 17:39:40'),
	(2,'Marketmedios Comunicaciones S.A','Colombia','http://www.marketmedios.com.co/','info@marketmedios.com.co','(+571) 635 0650','Bogotá, Colombia - Cra. 49 Nº 91 - 63','<p>In Colombia there are different places where the image of your company is created, but 3AWW COLOMBIA (Marketmedios Comunicaciones S.A). is the only place where advertising and positioning of your brand comes to life thanks to our philosophy with which we get up every morning to create advertising with the main goal of making our consumers happy.<br />\r\nWith more than 15 years of experience, we are a marketing agency with excellent reach at national and international level, where we offer different innovative and creative solutions developed with the best state-of-the-art technology to offer our clients integral and quality solutions that adjust to the current context of each market.</p>\r\n\r\n<p>&nbsp;</p>\r\n','2017-12-15 17:47:57','2017-12-15 17:47:57'),
	(3,'3AWW CHILE','Chile','http://3aww.com/','infochile@3aww.com','','','<p>We are a public relations agency with an international presence specialized in press and Institutional Communication. We have headquarters in Argentina and Chile and strategic alliances in more than 20 countries for your brand to position itself in the international market.</p>\r\n\r\n<p>We implemented innovative actions to position the brands or institutions, through different communication tools and in 2016 we won the EikonPrize for relations with the press.&nbsp; Together with a group of professionals integrated by social communicators, journalists, public relations and social network specialists we provide and implement internal and external communication strategies.</p>\r\n','2017-12-15 17:52:03','2017-12-15 17:52:33'),
	(4,'3AWW Argentina','Argentina','3aww.com','infoargentina@3aww.com','','','<p>We are a public relations agency with an international presence specialized in press and Institutional Communication. We have headquarters in Argentina and Chile and strategic alliances in more than 20 countries for your brand to position itself in the international market.</p>\r\n\r\n<p>We implemented innovative actions to position the brands or institutions, through different communication tools and in 2016 we won the EikonPrize for relations with the press.&nbsp; Together with a group of professionals integrated by social communicators, journalists, public relations and social network specialists we provide and implement internal and external communication strategies.</p>\r\n','2017-12-15 17:54:35','2017-12-15 17:54:35'),
	(5,'Notuslink digita','Ecuador','https://www.notuslink.com','info@notuslink.com','289 4129','Oswaldo Guayasamín E5-25, Quito Ecuador. ','<p>3AWW ECUADOR (Notuslink digita) is a digital internet and business marketing agency in Ecuador focused on providing added value to companies and institutions through the proper use of digital tools. With more than 8 years in the market, Notuslink Digital is one of the first digital agencies in Ecuador. We have a large portfolio of clients of different industries, companies and brands. Our main services are inbound marketing, generation of strategies and execution of campaigns in social media, programmatic advertising, advertising in Google Adwords and in digital media, management of influencers, digital training, design and creation of websites and customized software.&nbsp; &nbsp;</p>\r\n','2017-12-15 17:57:12','2017-12-15 17:57:12'),
	(6,'3AWW GERMAN (STERN)','Germany','http://www.stern-agentur.de/','info@stern-agentur.de','+49 611 39539-5','Bierstadter Straße 9 a - 65189 Wiesbaden, Germany','<p>CREATIVITY ALWAYS FINDS ITS WAY. Experience the difference: We keep asking and digging until we find the message that is truly moving: the one that&rsquo;s different. Refreshing. Memorable. Worth telling. And we don&rsquo;t give up until aspiration becomes reality.&nbsp;</p>\r\n\r\n<p>With us, you don&lsquo;t need to wait until the network is seamlessly integrated. Our coordinated team has mastered the entire range of successful communication confidently and across disciplines. Whether it&lsquo;s advertising, PR, design, online, or events - we think in 360&ordm; and supply everything from a single source at all times. At 3AWW GERMAN (STERN), we are professional consultants in constant dialogue with clients, working as editors with the media and qualified designers with programmers and printing houses. Because we know what we are talking about and we meet deadlines. Our motivation: We love success!&nbsp;</p>\r\n','2017-12-15 18:01:47','2017-12-15 18:01:47'),
	(7,'WizSpk Communication','INDIA','http://wizspk.com','wizspkpr@wizspk.com','91 (22) 4200 1400 / 1535','5th Floor, Satyadev Plaza, Off Veera Desai Road, Andheri (West), Mumbai – 400053, India','<p>3AWW INDIA (WizSpk Communication)&nbsp; is your most trusted communication, digital and PR partner. Our Approach &ndash; A 3 step process that believes in gaining INSIGHT into brand objectives to create a blend of effective IDEAS that deliver the right messages to increase brand INFLUENCE.<br />\r\nWith a track record of immensely successful public relations campaigns and a prolific clientele list, 3AWW INDIA (WizSpk Communication)&nbsp; &nbsp;represents a wide spectrum of organizations and brands across Corporate, Entertainment, Fashion, Lifestyle, Hospitality, Consumer Goods, Sports and Education sectors.<br />\r\n3AWW INDIA (WizSpk Communication) has a strong network across India with offices in Mumbai, Delhi, Kolkata, Bangalore, Hyderabad and Chennai along with a network of over 50 affiliates across the country.</p>\r\n\r\n<p>&nbsp;</p>\r\n','2017-12-15 18:03:25','2017-12-15 18:03:25'),
	(8,'THEORIA','Italy','http://www.theoria.it/it/home/','info@theoria.it','02 202215.1','Via G.B. Morgagni, 5 - 20129 Milano','<p>3AWW ITALY (THEORIA) is a sector independent PR &amp; Marketing Communication agency based in Milan and founded 20 years ago by a journalist and a marketing consultant. The agency has a long experience in working with multinational and local customers from different industries (both b2c &amp; b2b): HiTech, startups, digital services, food, travel &amp; tourism, health, sport, entertainment, and finance). We help customers to increase their business and brand reputation leveraging on PR, Media Relations, Events, Marketing campaigns, Digital PR, Social media, Media planning, Sponsorships.</p>\r\n\r\n<p>&nbsp;</p>\r\n','2017-12-15 18:06:43','2017-12-15 18:06:43'),
	(9,'3AWW Mexico','Mexico','http://3aww.com.mx/','info@3aww.com.mx','+ 52 55 1085 1730 /31','Marcelo 9 Col.  Del Valle  CP. 03100  México D.F.','<p>3AWW Mexico is an &quot;All Inclusive&quot; agency that offers strategy and media buying services, public relations, market research, creative services and digital marketing.<br />\r\nThrough strategies with Full Service approach, we offer the solution to your communication needs so that your brand has the widest possible reach using the appropriate channels for the target you want to reach. We are backed by more than 11 years of experience in the Mexican market and 4 years in the international market. We are part of the 3AWW global network, thanks to this alliance, we have presence through 4 central offices, in Mexico, Spain, Brazil and USA, as well as more than 20 affiliate offices around the world. For this reason, the services we offer can be executed in specific language formats for local campaigns, or regional, national and / or global.</p>\r\n','2017-12-15 18:08:20','2017-12-15 18:08:20'),
	(10,'Comparmagie','Morocco','http://www.comparmagie.ma/','contact@comparmagie.ma','+212 522 307 952','1, Angle Bd, Abdelmoumen et rue des Pléiades 5ème étage, Nº 17A Casablanca Maroc','<p>Our uniqueness, which is based on transversality, is translated by the movilization of all the resources and technicalities necessary to achieve its objectives.<br />\r\nWe are located at Casablanca, Morocco. We are at your side to increase your turnover, launch your brand, and restore your image. Choosing 3AWW Morocco (Comparmagie) is choosing a team whose passion is to turn your project into a success story. We go through all the communication branches: PR, Marketing, Digital, Creative, Social Media and Advertisement.&nbsp;<br />\r\nOur credentials are based on different fields of experience such as IT, technology, Consumer godos, beauty, finance, industry, among others.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n','2017-12-15 18:12:08','2017-12-18 17:18:16'),
	(11,'3AWW MOZAMBIQUE','MOZAMBIQUE','3aww.com','','','','<p>We are one of the most innovative and creative communication and public relations agencies acting in the Portuguese market, counting as well with an office in Mozambique.We create innovative strategic solutions and we believe that only a dedicated team like ours may respond with professionalism in different areas of activity.&nbsp;<br />\r\nWe know what we do, because we do it with dedication, honesty and transparency for several years. We are experts in obtaining major results and we benefit from our multi-talent in areas such as Journalism, Economy, Marketing and Publicity, International Relations, Corporate and Digital Communication.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n','2017-12-15 18:14:56','2017-12-15 18:14:56'),
	(12,'3AWW Panama','Panama','http://www.marketmedios.com.co/','infopanama@3aww.com','','','<p>In Panam&aacute; there are different places where the image of your company is created, but 3AWW PANAM&Aacute; (Marketmedios Comunicaciones S.A). is the only place where advertising and positioning of your brand comes to life thanks to our philosophy with which we get up every morning to create advertising with the main goal of making our consumers happy.<br />\r\nWith more than 15 years of experience, we are a marketing agency with excellent reach at national and international level, where we offer different innovative and creative solutions developed with the best state-of-the-art technology to offer our clients integral and quality solutions that adjust to the current context of each market.</p>\r\n\r\n<p>&nbsp;</p>\r\n','2017-12-15 18:23:17','2017-12-15 18:23:17'),
	(13,'3AWW Portugal','Portugal','https://3aww.com','infoportugal@3aww.com','','','<p>We are one of the most innovative and creative communication and public relations agencies acting in the Portuguese market, counting as well with an office in Mozambique.We create innovative strategic solutions and we believe that only a dedicated team like ours may respond with professionalism in different areas of activity.&nbsp;<br />\r\nWe know what we do, because we do it with dedication, honesty and transparency for several years. We are experts in obtaining major results and we benefit from our multi-talent in areas such as Journalism, Economy, Marketing and Publicity, International Relations, Corporate and Digital Communication.&nbsp;</p>\r\n','2017-12-15 18:24:52','2017-12-15 18:24:52'),
	(14,'TOTAL PR','Romania','http://www.totalpr.ro/en/','contact@totalpr.ro','4031.437.01.10',' 79th Emanoil Porumbaru Street, Bucharest, Romania','<p><br />\r\nBased in Bucharest and addressing clients from all over the country, 3AWW ROMANIA (TOTAL PR) services are developed by a multi-discipline team - a mix of PR executives, account planners and editors. After 10 years, TOTAL PR has over 25 long-term clients in his portfolio, most of them worldwide leaders in their markets. We provide exclusive and customized services to each client: corporate and brand communication consulting and services.</p>\r\n\r\n<p>We propose integrated communication models, designed to fulfill the client&rsquo;s marketing objectives: Media relations, Industry events participation, Event management, PR stunts, Social media, CSR projects, Media-buying, Direct marketing or Crisis Management</p>\r\n','2017-12-15 18:28:17','2017-12-15 18:28:17'),
	(15,'SODA-media','Russia','http://soda.media','contact@soda.media','+491 525 132 8275','Potsdamer Platz - Kemperplatz 1, floor 8, Berlin Mitte, D-10785','<p>3AWW RUSSIA (SODA-media) is a full-service agency based in Moscow, Russia. We offer different directions for the clients, such as: Creative &amp; Design, Digital (SMM, SEO, Web-promotion), PR &amp; Events (Media Relations, Political PR, Press events), BTL (Sales promotion, Trade promotion, CRM, Direct-marketing), Advertising (Outdoor, Indoor, Media advertising) and Printing materials and POS.&nbsp;</p>\r\n\r\n<p>We started as an agency focused on interior, decoration, furniture, tile fields (that&rsquo;s why the strategic direction for the communication agency SODA-media is promotion of goods and services from the &ldquo;Architecture. Construction. Design. Furniture&rdquo; sphere). To date we have extended the scope of activity and have already worked with Automotive and engine industry, Gas-welding equipment, Pharmaceutics, Banks, Jewelry, Restaurants &amp; Food, Airlines, Political PR, Rescue systems of the mass evacuation, Nuclear field. We constantly develop and explore new fields.&nbsp;</p>\r\n\r\n<p>We negotiate with both Russian and foreign companies. We have already represented interest of clients from Spain, Germany, Italy, Great Britain, USA, France, Switzerland and Russia.&nbsp;</p>\r\n','2017-12-15 18:29:58','2017-12-15 18:29:58'),
	(16,'3AWW SPAIN','Spain','http://3aww.com/es/','infospain@3aww.com',' 91 750 26 97','Capitán Haya 3,  Primera Planta B  28020, Madrid','<p>3AWW SPAIN has its origins in NewCom Comunicaci&oacute;n, a Full Service Agency in Communication, Marketing and advertising created by the only Spanish journalist awarded with 3 EMMY awards, Miguel &Aacute;ngel Rodr&iacute;guez Caveda, in 2007. In 2013 NewCom Comunicaci&oacute;n joined 3AWW with the Mexican agency Unimedios and the Brazilian Unlike. This agreement allowed 3AWW Spain to become the European headquarters with Miguel &Aacute;ngel as Global COO and President of Europe, India and the Middle East.<br />\r\n3AWW SPAIN is a 360&ordm; agency that offers PR, Marketing, Digital, Design, Advertising, Marketing and Events. We count with the extensive network of affiliates spread all over the world, which covers a wide geographic&nbsp; area, currently in more than 20 countries.&nbsp;</p>\r\n','2017-12-15 19:07:49','2017-12-18 10:20:35'),
	(17,'Ullman PR','Sweden','http://www.ullmanpr.se/','info@ullmanpr.se','08-702 31 50 ','Katarinavägen 22  116 45 Stockholm','<p>3AWW SWEDEN (Ullman PR) was founded in 2005 by advertising veteran Harald Ullman. Our PR activities vary from sales-oriented market PR and lobbying to media training and crisis communication. We combine experience and innovation in employees who have over 40 years of PR and marketing experience, along with younger employees who keep track of the latest trends. We work with various types of businesses, which stimulate creativity; experience from one industry can be applied to another. Today, we have around 20 clients in industries that include healthcare, media, environmental technology, interior design and more.</p>\r\n','2017-12-15 19:09:44','2017-12-15 19:09:44'),
	(18,'White Walter PR','UAE (Dubai)','http://www.whitewaterpr.com/','prem@whitewaterpr.com','971 4 3963699','Business Venue Building, Office number 303, Third floor,Oud Metha Road, Dubai, UAE.','<p><br />\r\n3AWW UAE (White Water PR), a Dubai based PR agency, aims to be the firm that thoroughly understands the clients&rsquo; requirements and provides them with a personalized and customized approach as opposed to providing cookie cutter strategies. We are the new age corporate story tellers.<br />\r\n&nbsp;<br />\r\nThe agency was founded by Prem Ramachandran in 2008.&nbsp; He has spent over 22 years in the PR and marketing industry across different geographies. White Water PR has organically built several brands over the years. The agency spends considerable amount of time in understanding the brief and the actual requirements prior to embarking on any campaign.</p>\r\n\r\n<p>&nbsp;</p>\r\n','2017-12-15 19:12:11','2017-12-15 19:12:11'),
	(19,'Rooster PR','United Kingdom','https://rooster.co.uk/','info@rooster.co.uk','+44 (0)20 3440 8930','Waterloo House,  207 Waterloo Road,  London,  SE1 8XD','<p>&nbsp;<br />\r\n3AWW UK (Rooster PR) is as cutting edge, independent communications agency based in central London with a proven track record of helping organisations reach their audiences and achieve their goals by telling insight-based, integrated stories.<br />\r\n&nbsp;<br />\r\nWith a deep understanding of client strategies and audience needs, Rooster ensures clients deliver the right messages to the right people using the most effective media channels.<br />\r\n&nbsp;<br />\r\nOriginally specialising in travel, 3AWW UK (Rooster PR) applies its tried &amp; tested communications approach to help brands across transport, lifestyle, technology, B2B, charity &amp; fundraising.<br />\r\n&nbsp;<br />\r\nDedicated to delivering client satisfaction, Rooster was awarded &lsquo;Best PR Agency&rsquo; (1-40 staff) at the RAR Awards two years running (2015 &amp; 2016) based on performance using ratings from existing clients.<br />\r\n&nbsp;<br />\r\nA team of ex-big agency and ex-big brand professionals, Rooster offers the expertise and insight of bigger agencies with the dedication, ambition and affordability of a boutique agency.<br />\r\n&nbsp;<br />\r\nProactive, creative and accountable. We have an unrivalled network of contacts across consumer &amp; trade media with access to global contacts through the 3AWW Network and deliver digital communications to over 70% of clients.<br />\r\n&nbsp;<br />\r\nWe are Global Brand Communicators.<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n','2017-12-15 19:13:40','2017-12-15 19:13:40'),
	(20,'3AWW USA','USA','https://3aww.com','infoinfousa@3aww.com','','','<p>3AWW USA is a 360 degrees advertising agency that offers top innovative strategies according to our client&rsquo;s needs. For us, being a support to our clients is important in every way, we are not only their marketing team, but their sales team which through special strategies help them to not only growth their brand&rsquo;s reputation but their sales.&nbsp;</p>\r\n\r\n<p>We adopt, adapt and apply communications tactics and offer results.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n','2017-12-15 19:14:50','2017-12-15 19:14:50');

/*!40000 ALTER TABLE `affiliates` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table banners
# ------------------------------------------------------------

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;

INSERT INTO `banners` (`id`, `title`, `status`, `created`, `modified`)
VALUES
	(1,'Banner Teste',NULL,'2017-10-04 15:45:48','2017-10-04 15:53:39');

/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table clients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `affiliate_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;

INSERT INTO `clients` (`id`, `affiliate_id`, `name`, `description`, `created`, `modified`)
VALUES
	(1,1,'argentina1_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(2,1,'argentina1_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(3,1,'argentina1_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(4,1,'argentina1_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(5,1,'argentina1_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(6,1,'argentina1_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(13,3,'chile_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(14,3,'chile_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(15,3,'chile_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(16,3,'chile_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(17,3,'chile_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(18,3,'chile_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(25,5,'ecuador_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(26,5,'ecuador_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(27,5,'ecuador_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(28,5,'ecuador_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(29,5,'ecuador_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(30,5,'ecuador_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(31,6,'germany_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(32,6,'germany_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(33,6,'germany_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(34,6,'germany_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(35,6,'germany_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(36,6,'germany_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(37,7,'india_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(38,7,'india_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(39,7,'india_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(40,7,'india_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(42,7,'india_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(43,8,'italy_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(44,8,'italy_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(45,8,'italy_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(46,8,'italy_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(47,8,'italy_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(48,8,'italy_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(49,9,'mexico_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(50,9,'mexico_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(51,9,'mexico_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(52,9,'mexico_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(53,9,'mexico_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(54,9,'mexico_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(55,10,'morocco_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(56,10,'morocco_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(57,10,'morocco_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(58,10,'morocco_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(60,10,'morocco_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(61,11,'mozambique_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(62,11,'mozambique_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(63,11,'mozambique_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(64,11,'mozambique_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(66,11,'mozambique_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(67,12,'panama_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(68,12,'panama_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(69,12,'panama_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(70,12,'panama_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(71,12,'panama_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(72,12,'panama_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(73,13,'portugal_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(74,13,'portugal_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(75,13,'portugal_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(76,13,'portugal_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(77,13,'portugal_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(78,13,'portugal_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(79,14,'romania_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(80,14,'romania_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(81,14,'romania_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(82,14,'romania_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(83,14,'romania_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(84,14,'romania_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(85,15,'russia_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(86,15,'russia_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(87,15,'russia_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(88,15,'russia_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(89,15,'russia_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(90,15,'russia_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(91,16,'spain_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(92,16,'spain_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(93,16,'spain_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(94,16,'spain_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(95,16,'spain_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(96,16,'spain_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(97,17,'sweden_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(98,17,'sweden_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(99,17,'sweden_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(100,17,'sweden_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(101,17,'sweden_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(102,17,'sweden_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(103,18,'uae_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(104,18,'uae_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(105,18,'uae_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(106,18,'uae_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(107,18,'uae_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(108,18,'uae_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(109,19,'uk_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(110,19,'uk_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(111,19,'uk_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(112,19,'uk_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(113,19,'uk_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(114,19,'uk_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(115,20,'usa_logo_1.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(116,20,'usa_logo_2.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(117,20,'usa_logo_3.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(118,20,'usa_logo_4.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(119,20,'usa_logo_5.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(120,20,'usa_logo_6.png','','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(133,2,'BMW','','2017-12-21 05:56:08','2017-12-21 05:56:08'),
	(135,2,'ford','','2017-12-21 05:56:59','2017-12-21 05:56:59'),
	(136,2,'quaker','','2017-12-21 05:57:36','2017-12-21 05:57:36'),
	(137,2,'sansung','','2017-12-21 05:57:56','2017-12-21 05:57:56'),
	(138,2,'visa','','2017-12-21 05:58:07','2017-12-21 05:58:07'),
	(139,2,'volvo','','2017-12-21 05:58:20','2017-12-21 05:58:20'),
	(140,4,'santa rosa','','2017-12-21 06:00:49','2017-12-21 06:00:49'),
	(143,4,'zippy','','2017-12-21 06:21:06','2017-12-21 06:21:06'),
	(144,4,'exbo','','2017-12-21 06:21:29','2017-12-21 06:21:29'),
	(145,4,'cerea','','2017-12-21 06:21:58','2017-12-21 06:21:58'),
	(146,4,'hojas del sur','','2017-12-21 06:22:32','2017-12-21 06:22:32'),
	(147,4,'reef','','2017-12-21 06:22:48','2017-12-21 06:22:48'),
	(148,7,'india_logo_5.png','','2017-12-21 12:07:54','2017-12-21 12:07:54');

/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table configs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `configs`;

CREATE TABLE `configs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table contacts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `read` int(11) DEFAULT '0',
  `status` int(11) DEFAULT '0',
  `affiliate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created`, `modified`, `read`, `status`, `affiliate_id`)
VALUES
	(9,'dsadasdas','dsada@dasda.com','dsa','2017-12-19 11:14:11','2017-12-19 11:14:11',0,0,5),
	(10,'María','mdecardenas@3aww.com','test ','2018-01-09 10:03:14','2018-01-09 10:03:14',0,0,1),
	(11,'Rocio','rdeblas@3aww.com','test proof','2018-01-09 10:07:52','2018-01-09 10:07:52',0,0,1),
	(12,'vinicius teste','vinicius.machado@3aworldwide.com.br','teste 123\r\n','2018-01-09 10:52:45','2018-01-09 10:52:45',0,0,1),
	(13,'','','','2018-01-09 10:52:59','2018-01-09 10:52:59',0,0,1),
	(14,'Teste','samuel@nokengo.com','teste','2018-01-09 12:58:08','2018-01-10 17:38:50',0,1,10),
	(15,'samuel','samuel@nokengo.com','teste','2018-01-10 17:18:14','2018-01-10 17:18:14',0,0,10),
	(16,'samuel','samuel@nokengo.com','teste','2018-01-10 17:18:53','2018-01-10 17:18:53',0,0,10),
	(17,'samuel','samuel@nokengo.com','teste','2018-01-10 17:19:30','2018-01-10 17:47:10',0,1,10),
	(18,'dsa','samuel@nokengo.com','adsada','2018-01-10 17:25:33','2018-01-10 17:37:52',0,1,10),
	(19,'dsa','samuel@nokengo.com','dsadadada','2018-01-10 17:28:37','2018-01-10 17:37:46',0,1,10);

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table enquetes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `enquetes`;

CREATE TABLE `enquetes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `final` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `enquetes` WRITE;
/*!40000 ALTER TABLE `enquetes` DISABLE KEYS */;

INSERT INTO `enquetes` (`id`, `title`, `body`, `final`, `created`, `modified`)
VALUES
	(4,'tesada',NULL,NULL,'2017-10-05 10:52:44','2017-10-05 10:52:44'),
	(5,'teste','<p>dasdasdsadasdas <strong>asdas</strong> dasd <strong>asdas</strong> da</p>\r\n',NULL,'2017-10-05 11:07:18','2017-10-05 11:07:18'),
	(6,'teste','<p>teste</p>\r\n','2017-10-19','2017-10-05 13:47:46','2017-10-05 13:47:46');

/*!40000 ALTER TABLE `enquetes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table enquetes_opcoes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `enquetes_opcoes`;

CREATE TABLE `enquetes_opcoes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `enquete_id` int(11) DEFAULT NULL,
  `titulo` varchar(11) DEFAULT NULL,
  `corpo` text,
  `votes` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table enquetes_votes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `enquetes_votes`;

CREATE TABLE `enquetes_votes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `enquete_id` int(11) DEFAULT NULL,
  `opcao_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table files
# ------------------------------------------------------------

DROP TABLE IF EXISTS `files`;

CREATE TABLE `files` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `model_id` int(11) DEFAULT NULL,
  `entity` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `files` WRITE;
/*!40000 ALTER TABLE `files` DISABLE KEYS */;

INSERT INTO `files` (`id`, `model_id`, `entity`, `filename`, `type`, `obs`, `created`, `modified`)
VALUES
	(25,10,'Affiliate','morocco/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(40,10,'Affiliate','morocco/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(41,10,'Affiliate','morocco/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(47,11,'Affiliate','mozambique/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(48,11,'Affiliate','mozambique/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(49,11,'Affiliate','mozambique/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(50,1,'Affiliate','argentina1/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(51,1,'Affiliate','argentina1/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(52,1,'Affiliate','argentina1/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(53,2,'Affiliate','colombia/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(54,2,'Affiliate','colombia/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(55,2,'Affiliate','colombia/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(56,3,'Affiliate','chile/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(57,3,'Affiliate','chile/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(58,3,'Affiliate','chile/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(59,4,'Affiliate','argentina2/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(60,4,'Affiliate','argentina2/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(61,4,'Affiliate','argentina2/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(62,5,'Affiliate','ecuador/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(63,5,'Affiliate','ecuador/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(64,5,'Affiliate','ecuador/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(65,6,'Affiliate','germany/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(66,6,'Affiliate','germany/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(67,6,'Affiliate','germany/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(68,7,'Affiliate','india/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(69,7,'Affiliate','india/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(70,7,'Affiliate','india/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(71,8,'Affiliate','italy/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(72,8,'Affiliate','italy/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(73,8,'Affiliate','italy/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(74,9,'Affiliate','mexico/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(75,9,'Affiliate','mexico/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(76,9,'Affiliate','mexico/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(77,17,'Affiliate','sweden/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(78,17,'Affiliate','sweden/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(79,17,'Affiliate','sweden/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(80,18,'Affiliate','uae/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(81,18,'Affiliate','uae/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(82,18,'Affiliate','uae/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(83,12,'Affiliate','panama/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(84,12,'Affiliate','panama/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(85,12,'Affiliate','panama/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(86,13,'Affiliate','portugal/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(87,13,'Affiliate','portugal/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(88,13,'Affiliate','portugal/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(89,14,'Affiliate','romania/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(90,14,'Affiliate','romania/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(91,14,'Affiliate','romania/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(92,15,'Affiliate','russia/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(93,15,'Affiliate','russia/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(94,15,'Affiliate','russia/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(95,16,'Affiliate','spain/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(96,16,'Affiliate','spain/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(97,16,'Affiliate','spain/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(98,19,'Affiliate','uk/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(99,19,'Affiliate','uk/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(100,19,'Affiliate','uk/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(101,20,'Affiliate','usa/office_1.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(102,20,'Affiliate','usa/office_2.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(103,20,'Affiliate','usa/office_3.jpg',NULL,'Office','2017-12-18 12:38:33','2017-12-18 12:38:33'),
	(291,1,'Client','argentina1_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(292,2,'Client','argentina1_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(293,3,'Client','argentina1_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(294,4,'Client','argentina1_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(295,5,'Client','argentina1_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(296,6,'Client','argentina1_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(297,7,'Client','colombia_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(298,8,'Client','colombia_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(299,9,'Client','colombia_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(300,10,'Client','colombia_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(301,11,'Client','colombia_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(302,12,'Client','colombia_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(303,13,'Client','chile_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(304,14,'Client','chile_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(305,15,'Client','chile_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(306,16,'Client','chile_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(307,17,'Client','chile_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(308,18,'Client','chile_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(309,19,'Client','argentina2_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(310,20,'Client','argentina2_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(311,21,'Client','argentina2_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(312,22,'Client','argentina2_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(313,23,'Client','argentina2_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(314,24,'Client','argentina2_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(315,25,'Client','ecuador_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(316,26,'Client','ecuador_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(317,27,'Client','ecuador_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(318,28,'Client','ecuador_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(319,29,'Client','ecuador_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(320,30,'Client','ecuador_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(321,31,'Client','germany_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(322,32,'Client','germany_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(323,33,'Client','germany_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(324,34,'Client','germany_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(325,35,'Client','germany_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(326,36,'Client','germany_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(327,37,'Client','india_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(328,38,'Client','india_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(329,39,'Client','india_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(330,40,'Client','india_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(331,41,'Client','ed9763dd-6aff-405b-a72c-53d945f69774-india_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(332,42,'Client','india_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(333,43,'Client','italy_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(334,44,'Client','italy_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(335,45,'Client','italy_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(336,46,'Client','italy_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(337,47,'Client','italy_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(338,48,'Client','italy_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(339,49,'Client','mexico_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(340,50,'Client','mexico_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(341,51,'Client','mexico_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(342,52,'Client','mexico_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(343,53,'Client','mexico_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(344,54,'Client','mexico_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(345,55,'Client','morocco_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(346,56,'Client','morocco_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(347,57,'Client','morocco_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(348,58,'Client','morocco_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(349,59,'Client','morocco_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(350,60,'Client','morocco_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(351,61,'Client','mozambique_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(352,62,'Client','mozambique_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(353,63,'Client','mozambique_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(354,64,'Client','mozambique_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(355,65,'Client','mozambique_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(356,66,'Client','mozambique_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(357,67,'Client','panama_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(358,68,'Client','panama_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(359,69,'Client','panama_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(360,70,'Client','panama_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(361,71,'Client','panama_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(362,72,'Client','panama_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(363,73,'Client','portugal_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(364,74,'Client','portugal_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(365,75,'Client','portugal_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(366,76,'Client','portugal_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(367,77,'Client','portugal_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(368,78,'Client','portugal_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(369,79,'Client','romania_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(370,80,'Client','romania_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(371,81,'Client','romania_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(372,82,'Client','romania_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(373,83,'Client','romania_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(374,84,'Client','romania_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(375,85,'Client','russia_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(376,86,'Client','russia_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(377,87,'Client','russia_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(378,88,'Client','russia_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(379,89,'Client','russia_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(380,90,'Client','russia_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(381,91,'Client','spain_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(382,92,'Client','spain_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(383,93,'Client','spain_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(384,94,'Client','spain_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(385,95,'Client','spain_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(386,96,'Client','spain_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(387,97,'Client','sweden_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(388,98,'Client','sweden_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(389,99,'Client','sweden_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(390,100,'Client','sweden_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(391,101,'Client','sweden_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(392,102,'Client','sweden_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(393,103,'Client','uae_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(394,104,'Client','uae_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(395,105,'Client','uae_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(396,106,'Client','uae_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(397,107,'Client','uae_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(398,108,'Client','uae_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(399,109,'Client','uk_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(400,110,'Client','uk_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(401,111,'Client','uk_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(402,112,'Client','uk_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(403,113,'Client','uk_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(404,114,'Client','uk_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(405,115,'Client','usa_logo_1.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(406,116,'Client','usa_logo_2.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(407,117,'Client','usa_logo_3.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(408,118,'Client','usa_logo_4.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(409,119,'Client','usa_logo_5.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(410,120,'Client','usa_logo_6.png',NULL,'Marca','2017-12-19 19:23:29','2017-12-19 19:23:29'),
	(412,121,'Client','b6047e4c-f88d-40d6-ae0e-021a076dd294-colombia_logo_1.png',NULL,'Marca','2017-12-20 22:48:06','2017-12-20 22:48:06'),
	(413,122,'Client','683e7f96-c72e-4558-a599-8a28dc02fbbb-colombia_logo_2.png',NULL,'Marca','2017-12-20 22:48:30','2017-12-20 22:48:30'),
	(414,123,'Client','23e2bfe6-8c6e-43b6-b390-c65fcb123936-colombia_logo_3.png',NULL,'Marca','2017-12-20 22:48:55','2017-12-20 22:48:55'),
	(415,124,'Client','567cd4c1-3acc-4236-8ab6-12b99a32f023-colombia_logo_4.png',NULL,'Marca','2017-12-20 22:49:52','2017-12-20 22:49:52'),
	(416,125,'Client','3c1296f0-29ba-4f72-b4cd-6c8a9c8643f5-colombia_logo_5.png',NULL,'Marca','2017-12-20 22:50:22','2017-12-20 22:50:22'),
	(417,126,'Client','6906a839-5463-4b02-888a-94828bd9743f-colombia_logo_6.png',NULL,'Marca','2017-12-20 22:50:39','2017-12-20 22:50:39'),
	(418,127,'Client','538c5eae-cf87-4c82-a593-1fe61018e093-argentina2_logo_1.png',NULL,'Marca','2017-12-20 22:57:33','2017-12-20 22:57:33'),
	(419,128,'Client','98f18bbd-d271-4d81-aaaf-bf683ec97c85-argentina2_logo_2.png',NULL,'Marca','2017-12-20 22:58:04','2017-12-20 22:58:04'),
	(420,129,'Client','d314f0b5-72ef-42fd-aaf2-2853bcd0f3ed-argentina2_logo_3.png',NULL,'Marca','2017-12-20 22:58:54','2017-12-20 22:58:54'),
	(421,130,'Client','4f39d268-8a5b-4e3b-b619-db074b8ce048-argentina2_logo_4.png',NULL,'Marca','2017-12-20 22:59:27','2017-12-20 22:59:27'),
	(422,131,'Client','c3baebf3-dde8-4241-ada6-dbd985861f7d-argentina2_logo_5.png',NULL,'Marca','2017-12-20 22:59:49','2017-12-20 22:59:49'),
	(423,132,'Client','24e43dbc-aa30-4bc7-ac90-7b8e98c6001e-argentina2_logo_6.png',NULL,'Marca','2017-12-20 23:00:06','2017-12-20 23:00:06'),
	(424,121,'Client','9cd4049c-9acd-41d2-875c-ffb420dd5eb1-colombia_logo_1.png',NULL,'Marca','2017-12-21 05:54:24','2017-12-21 05:54:24'),
	(425,133,'Client','45b92358-93ce-496f-81df-d766840cb893-colombia_logo_1.png',NULL,'Marca','2017-12-21 05:56:08','2017-12-21 05:56:08'),
	(426,134,'Client','4d6ae865-09d9-4da5-ba8a-7eb38f30ae15-colombia_logo_2.png',NULL,'Marca','2017-12-21 05:56:31','2017-12-21 05:56:31'),
	(427,135,'Client','c3cc8f2c-9626-4566-8e8b-f20fa1fb86ad-colombia_logo_2.png',NULL,'Marca','2017-12-21 05:56:59','2017-12-21 05:56:59'),
	(428,136,'Client','1d13cade-9cea-4fa3-a596-aac3ceae344e-colombia_logo_3.png',NULL,'Marca','2017-12-21 05:57:36','2017-12-21 05:57:36'),
	(429,137,'Client','fcf67770-c55d-41bd-8546-ff5db9455c5b-colombia_logo_4.png',NULL,'Marca','2017-12-21 05:57:56','2017-12-21 05:57:56'),
	(430,138,'Client','bb4d9496-7ae3-4232-88db-03d6702d57d4-colombia_logo_5.png',NULL,'Marca','2017-12-21 05:58:07','2017-12-21 05:58:07'),
	(431,139,'Client','f58c2875-17bf-4f0d-b7f1-b813337648b9-colombia_logo_6.png',NULL,'Marca','2017-12-21 05:58:20','2017-12-21 05:58:20'),
	(432,140,'Client','43d38f32-7415-451e-9b1c-d5bf6ff54ab4-argentina2_logo_1.png',NULL,'Marca','2017-12-21 06:00:49','2017-12-21 06:00:49'),
	(433,141,'Client','8839734b-8ff8-4ae2-b601-050745a12846-argentina2_logo_2-1.png',NULL,'Marca','2017-12-21 06:01:34','2017-12-21 06:01:34'),
	(434,142,'Client','17b53e7b-9bdc-491a-ba91-a0fb45c628cb-argentina2_logo_2-1.png',NULL,'Marca','2017-12-21 06:02:17','2017-12-21 06:02:17'),
	(435,142,'Client','7a90f14d-5084-4f6c-98bd-579ad1287042-argentina2_logo_2.png',NULL,'Marca','2017-12-21 06:02:38','2017-12-21 06:02:38'),
	(436,143,'Client','e3c7347c-6b0d-4d8b-a456-dac1c9642742-argentina2_logo_2.png',NULL,'Marca','2017-12-21 06:21:06','2017-12-21 06:21:06'),
	(437,144,'Client','4fab3064-9deb-415e-8371-2631e36e9950-argentina2_logo_3.png',NULL,'Marca','2017-12-21 06:21:29','2017-12-21 06:21:29'),
	(438,145,'Client','6505a301-c5f6-4f00-845a-650bb75b301a-argentina2_logo_4.png',NULL,'Marca','2017-12-21 06:21:58','2017-12-21 06:21:58'),
	(439,146,'Client','96128045-532d-42d0-a8a9-01569e1bce96-argentina2_logo_5.png',NULL,'Marca','2017-12-21 06:22:32','2017-12-21 06:22:32'),
	(440,147,'Client','bc95c550-d571-4f6d-a1fb-625f080d1b81-argentina2_logo_6.png',NULL,'Marca','2017-12-21 06:22:48','2017-12-21 06:22:48'),
	(441,41,'Client','3e1a6a0d-251d-4b34-9709-7a27a09a10bc-india_logo_5.png',NULL,'Marca','2017-12-21 12:02:57','2017-12-21 12:02:57'),
	(442,148,'Client','8eaf9d41-f582-4734-8a96-bad8cef743aa-india_logo_5.png',NULL,'Marca','2017-12-21 12:07:54','2017-12-21 12:07:54');

/*!40000 ALTER TABLE `files` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table mensagem
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mensagem`;

CREATE TABLE `mensagem` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `prospeccao_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `body` text,
  `direcao` enum('in','out') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `action` enum('iniciou_captacao','enviou_proposta','adicionou_comentario','cliente_respondeu','cliente_aceitou_proposta','cliente_cancelou') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `mensagem` WRITE;
/*!40000 ALTER TABLE `mensagem` DISABLE KEYS */;

INSERT INTO `mensagem` (`id`, `user_id`, `prospeccao_id`, `title`, `body`, `direcao`, `created`, `modified`, `action`)
VALUES
	(1,1,1,NULL,'','out','2017-09-07 01:18:00','2017-09-07 01:18:00','iniciou_captacao'),
	(2,1,1,NULL,'<p><strong>tesadasda</strong></p>\r\n','out','2017-09-07 01:18:09','2017-09-07 01:18:09','enviou_proposta'),
	(3,1,1,NULL,'<p>dsadasdsadasda</p>\r\n','in','2017-09-07 01:18:20','2017-09-07 01:18:20','cliente_respondeu'),
	(4,1,1,NULL,'<p>dsadsada</p>\r\n','in','2017-09-07 01:18:30','2017-09-07 01:18:30','cliente_aceitou_proposta'),
	(5,1,1,NULL,'<p>teste</p>\r\n','out','2017-09-13 01:05:54','2017-09-13 01:05:54','enviou_proposta'),
	(6,1,1,NULL,'<p>teste</p>\r\n','out','2017-09-13 01:08:44','2017-09-13 01:08:44','enviou_proposta'),
	(7,1,1,NULL,'<p>teste</p>\r\n','out','2017-09-13 01:09:08','2017-09-13 01:09:08','enviou_proposta'),
	(8,1,1,NULL,'<p>dsadadsada</p>\r\n','out','2017-09-13 01:09:20','2017-09-13 01:09:20','adicionou_comentario'),
	(9,1,1,NULL,'<p>dsadsa</p>\r\n','in','2017-09-13 01:27:41','2017-09-13 01:27:41','cliente_respondeu'),
	(10,1,1,NULL,'<p>dsada</p>\r\n','in','2017-09-13 01:27:51','2017-09-13 01:27:51','cliente_aceitou_proposta'),
	(11,1,1,NULL,'<p>dsada</p>\r\n','in','2017-09-13 01:28:05','2017-09-13 01:28:05','cliente_cancelou'),
	(12,1,1,NULL,'<p>dsada</p>\r\n','in','2017-09-13 01:28:28','2017-09-13 01:28:28','cliente_aceitou_proposta'),
	(13,1,2,NULL,'<p>adsada</p>\r\n','out','2017-09-26 14:03:56','2017-09-26 14:03:56','iniciou_captacao');

/*!40000 ALTER TABLE `mensagem` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `type` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table produtos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `description` text,
  `valor` decimal(10,2) DEFAULT NULL,
  `tipo` enum('Produto','Servico') DEFAULT NULL,
  `recorrencia` enum('Unico','Semanal','Mensal','Bimestral','Semestral','Anual') DEFAULT NULL,
  `tempo_trabalho` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `produtos` WRITE;
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;

INSERT INTO `produtos` (`id`, `nome`, `description`, `valor`, `tipo`, `recorrencia`, `tempo_trabalho`, `created`, `modified`)
VALUES
	(1,'Institucional Estático','<p>Responsivo com 10 se&ccedil;&otilde;es: Home, Empresa, Servi&ccedil;os, Galeria de M&iacute;dias, Formul&aacute;rio de Contato, Formul&aacute;rio de Or&ccedil;amento, Not&iacute;cias, Clientes, Casos de Sucesso, Resultados de busca. Desenvolvimento de layout e front-end com conte&uacute;do est&aacute;tico pr&eacute;-defindo. HTML desenvolvido utilizando os padr&otilde;es W3C (HTML, XHTML, CSS, XML, etc). Configura&ccedil;&otilde;es b&aacute;sicas para indexa&ccedil;&atilde;o em buscadores. Testes nas &uacute;ltimas vers&otilde;es dos principais navegadores.</p>\r\n',2700.00,'Servico','Unico','15','2017-09-06 00:19:09','2017-09-06 08:19:40');

/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table prospeccao
# ------------------------------------------------------------

DROP TABLE IF EXISTS `prospeccao`;

CREATE TABLE `prospeccao` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `user_id` int(11) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `status` enum('iniciou_captacao','enviou_proposta','adicionou_comentario','cliente_respondeu','cliente_aceitou_proposta','cliente_cancelou') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `prospeccao` WRITE;
/*!40000 ALTER TABLE `prospeccao` DISABLE KEYS */;

INSERT INTO `prospeccao` (`id`, `title`, `description`, `user_id`, `cliente_id`, `status`, `created`, `modified`)
VALUES
	(1,'Prospeccao bacana','',1,1,'cliente_aceitou_proposta','2017-09-07 01:18:00','2017-09-13 01:28:28'),
	(2,'Xsaxasxa','<p>adsada</p>\r\n',1,1,'iniciou_captacao','2017-09-26 14:03:56','2017-09-26 14:03:56');

/*!40000 ALTER TABLE `prospeccao` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;

INSERT INTO `roles` (`id`, `role`, `created`, `modified`)
VALUES
	(1,'Admin','2017-08-30 20:18:35','2017-08-30 20:18:35'),
	(2,'Moderator','2017-08-30 20:19:01','2017-08-30 20:19:01');

/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role_id`, `created`, `modified`)
VALUES
	(1,'Samuel Levy','samuel.levy@3aworldwide.com.br','samuel.levy','$2y$10$XEU5SvFJCpjuGqD1bCr5ReLsRVIJYq4s6eTO/YHKY4xFZzBKYAEhK',1,'2017-08-30 20:23:56','2017-09-27 22:08:57'),
	(2,'Vinicius Machado','vinicius.machado@3aworldwide.com.br','vinicius.machado','$2y$10$gtk23j0eYSmIDQknHW3GquXBxjmfa3NErVs6rnkKNTPq174lT5fKO',1,'2017-10-05 11:53:55','2017-10-05 11:53:55'),
	(3,'Kayalla Pontes','kayalla@3aworldwide.com.br','kayalla','$2y$10$8.IaBSMty6SWqyDHWIqSwuwqT7GRZeuU6NnC99XE2iNH9RYaEatoW',1,'2017-12-06 17:32:43','2017-12-06 17:32:43'),
	(4,'Cayque Freitas','cayque.freitas@3aworldwide.com.br','cayque.freitas','$2y$10$dFf/Fj.8JQyFFYwEimBtveBvj1E5061P96P6gNtPdCwPUGxUOoQpq',2,'2017-12-15 17:23:00','2017-12-15 17:23:00');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
