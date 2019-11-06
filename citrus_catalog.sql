-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 06, 2019 at 10:58 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrus_catalog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `aprooved` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `text`, `aprooved`) VALUES
(1, 'Uros Todorovic', 'todorovic.urosh@gmail.com', 'Prvi komentar', 1),
(2, 'Milica', 'milica@milica.com', 'Drugi komentar', 1),
(3, 'Milan', 'milan@milan.com', 'Treci Komentar', 0),
(4, 'Darko', 'darko@darko.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae dolor vel nisl cursus sollicitudin. Nulla facilisi. Integer pulvinar sed ex id convallis. Phasellus mattis consectetur orci, eu dignissim ligula. Cras nec dui vitae nulla malesuada porta non ut orci. Phasellus sit amet lorem imperdiet, facilisis velit eget, semper augue. Ut posuere, nisl ac mollis mattis, enim lectus consectetur sem, vitae pellentesque dolor enim faucibus erat.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `picture`, `description`) VALUES
(1, 'Pitaya', '1.jpeg', 'A pitaya or pitahaya is the fruit of several different cactus species indigenous to the Americas. Pitaya usually refers to fruit of the genus Stenocereus, while pitahaya or dragon fruit refers to fruit of the genus Hylocereus both in the family Cactaceae. The dragon fruit is cultivated in Southeast Asia, Florida, the Caribbean, Australia, and throughout tropical and subtropical world regions.'),
(2, 'Blueberry', '2.jpeg', 'Blueberries are perennial flowering plants with blue or purple colored berries. They are classified in the section Cyanococcus within the genus Vaccinium. Vaccinium also includes cranberries, bilberries, huckleberries and Madeira blueberries. Commercial \"blueberries\"  including both wild (\'lowbush\') and cultivated (\'highbush\') blueberries  are all native to North America. The highbush blueberry varieties were introduced into Europe during the 1930s.'),
(3, 'Pomegranate', '3.jpeg', 'The pomegranate (Punica granatum) is a fruit-bearing deciduous shrub in the family Lythraceae, subfamily Punicoideae, that grows between 5 and 10 m (16 and 33 ft) tall. The fruit is typically in season in the Northern Hemisphere from September to February, and in the Southern Hemisphere from March to May. As intact arils or juice, pomegranates are used in baking, cooking, juice blends, meal garnishes, smoothies, and alcoholic beverages, such as cocktails and wine.'),
(4, 'Apricot', '4.jpeg', 'An apricot is a fruit, or the tree that bears the fruit, of several species in the genus Prunus (stone fruits). Usually, an apricot tree is from the species P. armeniaca, but the species P. brigantina, P. mandshurica, P. mume, P. zhengheensis and P. sibirica are closely related, have similar fruit, and are also called apricots. The apricot is a small tree, 8 to 12 m (26 to39 ft) tall, with a trunk up to 40 cm (16 in) in diameter and a dense, spreading canopy. The leaves are ovate, 5 to 9 cm (2.0 to 3.5 in) long and 4 to 8 cm (1.6 to 3.1 in) wide.'),
(5, 'Common fig', '5.jpg', 'Ficus carica is an Asian species of flowering plant in the mulberry family, known as the common fig (or just the fig). It is the source of the fruit also called the fig and as such is an important crop in those areas where it is grown commercially. Native to the Middle East and western Asia, it has been sought out and cultivated since ancient times and is now widely grown throughout the world, both for its fruit and as an ornamental plant. The species has become naturalized in scattered locations in Asia and North America.'),
(6, 'Blackberry', '6.jpg', 'The blackberry is an edible fruit produced by many species in the genus Rubus in the family Rosaceae, hybrids among these species within the subgenus Rubus, and hybrids between the subgenera Rubus and Idaeobatus. The taxonomy of the blackberries has historically been confused because of hybridization and apomixis, so that species have often been grouped together and called species aggregates. For example, the entire subgenus Rubus has been called the Rubus fruticosus aggregate, although the species R. fruticosus is considered a synonym of R. plicatus.'),
(7, 'Pineapple', '7.jpg', 'The pineapple (Ananas comosus) is a tropical plant with an edible fruit, also called a pineapple, and the most economically significant plant in the family Bromeliaceae.Pineapples may be cultivated from the offset produced at the top of the fruit, possibly flowering in five to ten months and fruiting in the following six months. Pineapples do not ripen significantly after harvest. In 2016, Costa Rica, Brazil, and the Philippines accounted for nearly one-third of the world\'s production of pineapples.'),
(8, 'Cherry', '8.jpg', 'A cherry is the fruit of many plants of the genus Prunus, and is a fleshy drupe (stone fruit). Commercial cherries are obtained from cultivars of several species, such as the sweet Prunus avium and the sour Prunus cerasus. The name \'cherry\' also refers to the cherry tree and its wood, and is sometimes applied to almonds and visually similar flowering trees in the genus Prunus, as in \"ornamental cherry\" or \"cherry blossom\". Wild cherry may refer to any of the cherry species growing outside cultivation, although Prunus avium is often referred to specifically by the name \"wild cherry\" in the British Isles.'),
(9, 'Red raspberry', '9.jpeg', 'Rubus idaeus (raspberry, also called red raspberry or occasionally as European raspberry to distinguish it from other raspberries) is a red-fruited species of Rubus native to Europe and northern Asia and commonly cultivated in other temperate regions. Plants of Rubus idaeus are generally perennials which bear biennial stems (\"canes\") from a perennial root system. In its first year, a new, unbranched stem (\"primocane\") grows vigorously to its full height of 1.5 to 2.5 m (5.0 to 8.3 feet), bearing large pinnately compound leaves with five or seven leaflets, but usually no flowers.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
