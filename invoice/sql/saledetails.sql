-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-08-03 11:42:48
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
-- 表的结构 `saledetails`
--

CREATE TABLE IF NOT EXISTS `saledetails` (
  `invoiceid` int(11) NOT NULL AUTO_INCREMENT,
  `accountname` varchar(20) NOT NULL,
  `statementdate` date NOT NULL,
  `duedate` date NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `productnames` varchar(200) NOT NULL,
  `productprices` varchar(50) NOT NULL,
  `taxes` float NOT NULL,
  `total` float NOT NULL,
  PRIMARY KEY (`invoiceid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- 转存表中的数据 `saledetails`
--

INSERT INTO `saledetails` (`invoiceid`, `accountname`, `statementdate`, `duedate`, `address1`, `address2`, `productnames`, `productprices`, `taxes`, `total`) VALUES
(1, 'Hui Liu', '2015-08-02', '2015-08-08', 'address1', 'address2', 'productnames', '0', 0, 0),
(2, 'Hui Liu', '2015-08-02', '2015-08-08', 'address1', 'address2', 'productnames', '0', 0, 0),
(3, 'Hui Liu', '2015-08-02', '2015-08-08', 'address1', 'address2', 'productnames', '0', 0, 0),
(4, 'Hui Liu', '2015-08-02', '2015-08-08', '1387 McQuesten Dr APT D', 'San Jose CA 95122', '', '0', 70, 940),
(5, 'Hui Liu', '2015-08-02', '2015-08-08', '1387 McQuesten Dr APT D', 'San Jose CA 95122', '', '0', 69.6, 939.6),
(6, 'Hui Liu', '2015-08-02', '2015-08-08', '1387 McQuesten Dr APT D', 'San Jose CA 95122', '', '0', 69.6, 939.6),
(7, 'Hui Liu', '2015-08-02', '2015-08-08', '1387 McQuesten Dr APT D', 'San Jose CA 95122', '', '0', 69.6, 939.6),
(8, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '0', 69.6, 939.6),
(9, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '', 69.6, 939.6),
(10, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '', 69.6, 939.6),
(11, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(12, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(13, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(14, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(15, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(16, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(17, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(18, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(19, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(20, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(21, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(22, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose CA 95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(23, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(24, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(25, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(26, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(27, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(28, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(29, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(30, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(31, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(32, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(33, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(34, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(35, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(36, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(37, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(38, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(39, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(40, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(41, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(42, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(43, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(44, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(45, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(46, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(47, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(48, 'Hui Liu', '2015-08-02', '2015-08-02', '1387 McQuesten Dr APT D', 'San Jose,CA-95122', 'printer,keyboard,keyboard,mouse', '320,50,400,100', 69.6, 939.6),
(49, '', '0000-00-00', '0000-00-00', ' ', ',-', '', '', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
