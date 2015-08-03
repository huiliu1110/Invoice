-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-08-03 11:42:26
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(20) NOT NULL,
  `pprice` int(11) NOT NULL DEFAULT '0',
  `pcolor` varchar(20) NOT NULL,
  `pquantity` int(11) NOT NULL DEFAULT '1',
  `pimage` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `products`
--

INSERT INTO `products` (`pid`, `pname`, `pprice`, `pcolor`, `pquantity`, `pimage`) VALUES
(1, 'mouse', 20, 'blue', 1, '1.png'),
(2, 'display screen', 200, 'silver', 1, '2.jpg'),
(3, 'keyboard', 100, 'black', 1, '3.jpg'),
(4, 'printer', 80, 'black', 1, '4.jpg'),
(5, 'printer', 80, 'black', 1, '5.jpg'),
(6, 'keyboard', 50, 'white', 1, '6.jpg'),
(7, 'keyboard', 50, 'white', 1, '7.jpg'),
(8, 'keyboard', 50, 'white', 1, '8.jpg'),
(9, 'keyboard', 50, 'white', 1, '9.jpg'),
(10, 'keyboard', 100, 'black', 1, '10.jpg'),
(11, 'keyboard', 100, 'black', 1, '11.jpg'),
(12, 'keyboard', 100, 'black', 1, '12.jpg'),
(13, 'keyboard', 100, 'black', 1, '13.jpg'),
(14, 'keyboard', 100, 'black', 1, '14.jpg'),
(15, 'keyboard', 200, 'black', 1, '15.jpg'),
(16, 'keyboard', 200, 'black', 1, '16.jpg'),
(17, 'keyboard', 199, 'black', 1, '17.jpg'),
(18, 'keyboard', 200, 'black', 1, '18.jpg'),
(19, 'mouse', 20, 'blue', 1, '19.png'),
(20, 'mouse', 20, 'blue', 1, '20.png'),
(21, 'keyboard', 200, 'black', 1, '21.jpg'),
(22, 'mouse', 100, 'blue', 1, '22.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
