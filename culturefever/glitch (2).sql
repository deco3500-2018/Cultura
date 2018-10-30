-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 17, 2018 at 03:19 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glitch`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `CategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CategoryID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `CategoryName`) VALUES
(1, 'Gesture'),
(2, 'Etiquette');

-- --------------------------------------------------------

--
-- Table structure for table `practices`
--

DROP TABLE IF EXISTS `practices`;
CREATE TABLE IF NOT EXISTS `practices` (
  `practiceID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL,
  `typeID` int(11) NOT NULL,
  `pracName` varchar(255) DEFAULT NULL,
  `pracDesc` longtext NOT NULL,
  `pracCountry` varchar(255) DEFAULT NULL,
  `pracPicture` varchar(255) NOT NULL,
  `pracUp` int(11) NOT NULL,
  `pracDown` int(11) NOT NULL,
  PRIMARY KEY (`practiceID`),
  KEY `fk_user_id` (`userID`),
  KEY `fk_category_id` (`categoryID`),
  KEY `fk_type_id` (`typeID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `practices`
--

INSERT INTO `practices` (`practiceID`, `userID`, `categoryID`, `typeID`, `pracName`, `pracDesc`, `pracCountry`, `pracPicture`, `pracUp`, `pracDown`) VALUES
(1, 5, 1, 1, 'Air Kiss', 'It is common to air-kiss an elder\'s hand as a traditional form of respectful greeting. Instead of pursing one\'s lips, the younger person exhaling through his nose softly on the hand before drawing the hand to the younger person\'s forehead.', 'Malaysia', 'https://i2.wp.com/www.anakmuslimstudio.com/wp-content/uploads/2018/03/doa-untuk-orang-tua-thumbnail.png?fit=1000%2C563&ssl=1', 376, 3),
(17, 5, 1, 8, 'Fingers all together', 'A motion to show you\'ll only be a minute.', 'Italy', 'https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/8Ofcko1/videoblocks-caucasian-male-hand-in-long-sleeve-jacket-making-cash-sign-gesture-rubbing-fingers-together-on-black-background-close-up-isolated_reqbmzr5g_thumbnail-full08.png', 543, 2),
(15, 5, 1, 8, 'Fingers all together', 'A sign for a small amount of something.', 'Democratic Republic of the Congo', 'https://d2v9y0dukr6mq2.cloudfront.net/video/thumbnail/8Ofcko1/videoblocks-caucasian-male-hand-in-long-sleeve-jacket-making-cash-sign-gesture-rubbing-fingers-together-on-black-background-close-up-isolated_reqbmzr5g_thumbnail-full08.png', 66, 7),
(16, 5, 1, 8, 'Fingers all together', 'Indicates that something is beautiful or well.', 'Turkey', 'http://www.robinesrock.com/uploads/1/0/3/3/10338764/7185276_orig.jpg', 54, 1),
(14, 5, 1, 8, 'Fingers all together', '\'What is this?\' or \'What do you want?\' - usually done with a flick of the wrist', 'Italy', 'http://www.robinesrock.com/uploads/1/0/3/3/10338764/7185276_orig.jpg', 7876, 400),
(13, 5, 1, 8, 'Horn fingers', 'In other parts of the world, to make this sign at someone is to tell them their wife is cheating on them', 'Spain', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVI7e6StLIbAVuOK7i7JlyQOuUE-cyj4sffyStnqHbiSM0FMe5', 655, 32),
(11, 5, 1, 8, 'Horn fingers', 'In other parts of the world, to make this sign at someone is to tell them their wife is cheating on them', 'Colombia', 'https://thoughtcatalog.files.wordpress.com/2018/03/rockandroll.jpg?w=1140&h=762&resize=1140,761&quality=95&strip=all&crop=1', 97, 0),
(12, 5, 1, 8, 'Horn fingers', 'In other parts of the world, to make this sign at someone is to tell them their wife is cheating on them', 'Portugal', 'https://thoughtcatalog.files.wordpress.com/2018/03/rockandroll.jpg?w=1140&h=762&resize=1140,761&quality=95&strip=all&crop=1', 78, 44),
(8, 5, 1, 8, 'Horn fingers', 'In other parts of the world, to make this sign at someone is to tell them their wife is cheating on them', 'United States', 'https://thoughtcatalog.files.wordpress.com/2018/03/rockandroll.jpg?w=1140&h=762&resize=1140,761&quality=95&strip=all&crop=1', 444, 7),
(9, 5, 1, 8, 'Horn fingers', 'In other parts of the world, to make this sign at someone is to tell them their wife is cheating on them', 'Italy', 'https://thoughtcatalog.files.wordpress.com/2018/03/rockandroll.jpg?w=1140&h=762&resize=1140,761&quality=95&strip=all&crop=1', 67, 98),
(7, 5, 1, 8, 'Horn fingers', 'Adopted by rockers as a sign of approval, and in essence, to \'rock on\'.', 'United States', 'http://madbrad.podbean.com/mf/web/9f9hj/HORNS_CONCERT.jpg', 375, 33),
(6, 5, 1, 5, 'OK sign', 'If the okay sign is turned upside down it is considered a rude gesture, equivalent to the one finger salute', 'Brazil', 'https://img.buzzfeed.com/buzzfeed-static/static/2014-06/4/14/campaign_images/webdr08/the-dos-and-donts-of-the-2014-world-cup-in-brazil-2-26731-1401905263-23_dblbig.jpg', 8752, 65),
(3, 5, 1, 1, 'OK sign', 'Indicates satisfaction', 'United Kingdom', 'https://vignette.wikia.nocookie.net/iranyitok/images/1/1f/A-ok-sign.jpg/revision/latest?cb=20131216183119&path-prefix=hu', 777, 7),
(4, 5, 1, 1, 'OK sign', 'Indicates satisfaction', 'United States', 'https://qph.fs.quoracdn.net/main-qimg-612366ca00c5d67de91f016d09e90f8e-c', 235, 74),
(5, 5, 1, 1, 'OK sign', 'Indicates satisfaction', 'Canada', 'https://thoughtcatalog.files.wordpress.com/2018/03/a-ok.jpg?resize=3232,2160&quality=95&strip=all&crop=1', 765, 56),
(10, 5, 1, 8, 'Horn fingers', 'In other parts of the world, to make this sign at someone is to tell them their wife is cheating on them', 'Brazil', 'https://thoughtcatalog.files.wordpress.com/2018/03/rockandroll.jpg?w=1140&h=762&resize=1140,761&quality=95&strip=all&crop=1', 437, 4),
(2, 5, 1, 4, 'V sign', 'Indicates satisfaction.', 'Australia', 'https://thoughtcatalog.files.wordpress.com/2018/03/peace.jpg?w=3232&h=2160', 865, 10);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `typeID` int(11) NOT NULL AUTO_INCREMENT,
  `typeName` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`typeID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`typeID`, `typeName`) VALUES
(1, 'Friendly gestures'),
(2, 'Gestures of respect'),
(3, 'Salutes'),
(4, 'Celebratory gestures'),
(5, 'Obscene gestures'),
(6, 'Taunts'),
(7, 'Head motions'),
(8, 'Other gestures'),
(9, 'Greetings'),
(10, 'Making payment'),
(11, 'Visiting someone\'s house'),
(12, 'Gifts and gift-giving'),
(13, 'Table manners'),
(14, 'Eating and drinking'),
(15, 'Funerals'),
(16, 'Bars and restaurants'),
(17, 'Driving'),
(18, 'Business etiquette'),
(19, 'Hierarchy and honoring the elder');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `user_n` (`username`),
  UNIQUE KEY `user_e` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `password`, `email`, `country`) VALUES
(1, 'gary', '5ebe2294ecd0e0f08eab7690d2a6ee69', 'gary@live.com', 'Australia'),
(2, 'mary', '5ebe2294ecd0e0f08eab7690d2a6ee69', 'mary@live.com', 'Lebanon'),
(3, 'terry', '5ebe2294ecd0e0f08eab7690d2a6ee69', 'terry@live.com', 'Australia'),
(4, 'amelie', '5ebe2294ecd0e0f08eab7690d2a6ee69', 'amelie@live.com', 'Malaysia'),
(5, 'Admin', '5ebe2294ecd0e0f08eab7690d2a6ee69', 'admin@live.com', 'Malaysia'),
(6, 'Syafiqah', '25f9e794323b453885f5181f1b624d0b', 'syafieqafeqa96@gmail.com', 'Australia');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
