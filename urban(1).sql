-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 06 月 22 日 17:46
-- 服务器版本: 5.5.47
-- PHP 版本: 5.3.29

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `urban`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `picview` varchar(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `posttime` int(11) NOT NULL,
  `deletetime` int(11) NOT NULL,
  `uploader` varchar(255) NOT NULL,
  `difficulty` varchar(255) NOT NULL,
  `download` int(11) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `is_delete` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pid` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=111201 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`pid`, `title`, `type`, `content`, `picview`, `region`, `category`, `posttime`, `deletetime`, `uploader`, `difficulty`, `download`, `tag`, `is_delete`) VALUES
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', '3Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_01.png', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '3', 53, '', 0),
(6, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_02.png', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(8, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_02.png', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '3', 50, '', 0),
(9, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_02.png', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '2', 50, '', 0),
(10, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_02.png', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '1', 50, '', 0),
(11, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(12, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '4', 50, '', 0),
(13, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '3', 55, '', 0),
(14, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '2', 50, '', 0),
(15, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'BeiJing', 'News', 1463435426, 0, 'guanliyuan@163.com', '1', 50, '', 0),
(16, 'ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_04.png', 'BeiJing', 'Eat', 1463435426, 0, 'guanliyuan@163.com', '2', 50, '', 0),
(17, 'ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_04.png', 'BeiJing', 'Eat', 1463435426, 0, 'guanliyuan@163.com', '1', 50, '', 0),
(18, 'ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_04.png', 'BeiJing', 'Eat', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(21, 'apple dolor sit amet, consectetur adipiscing', 'magazine', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_05.png', 'BeiJing', 'Art', 1463435426, 0, 'guanliyuan@163.com', '1', 50, '', 0),
(23, 'apple dolor sit amet, consectetur adipiscing', 'magazine', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_05.png', 'BeiJing', 'Art', 1463435426, 0, 'guanliyuan@163.com', '3', 50, '', 0),
(24, 'apple dolor sit amet, consectetur adipiscing', 'magazine', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_05.png', 'BeiJing', 'Art', 1463435426, 0, 'guanliyuan@163.com', '4', 50, '', 0),
(25, 'apple dolor sit amet, consectetur adipiscing', 'magazine', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_05.png', 'BeiJing', 'Art', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(26, 'apple amet, consectetur adipiscing', 'magazine', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'BeiJing', 'Lifestyle', 1463435426, 0, 'guanliyuan@163.com', '5', 51, '', 0),
(27, 'amet, consectetur adipiscing', 'magazine', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'BeiJing', 'Lifestyle', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(28, 'amet, consectetur adipiscing', 'magazine', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'BeiJing', 'Lifestyle', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(29, 'amet, consectetur adipiscing', 'magazine', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'BeiJing', 'Lifestyle', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(30, 'amet, consectetur adipiscing', 'magazine', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'BeiJing', 'Lifestyle', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(31, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'digital', 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_02.png', 'BeiJing', 'Education', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(32, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_02.png', 'BeiJing', 'Education', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(33, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_02.png', 'BeiJing', 'Education', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(111183, '123123333333333', 'magazine', '22222222222', 'Public/yl.com/uploadpic/yuelei/Coverpic/20160603160722808.jpg', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '1', 0, '222222222', 0),
(111184, 'wwwwwwwwwww', 'magazine', 'wwwwwwwwwwwwwwww', 'Public/yl.com/uploadpic/yuelei/Coverpic/20160603160829584.jpg', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '1', 0, 'wwwwwwwwwwwwwww', 0),
(35, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_02.png', 'BeiJing', 'Education', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(36, 'ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_01.png', 'Shenzhen', 'Community', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(37, 'ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_01.png', 'Shenzhen', 'Community', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(38, 'ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_01.png', 'Shenzhen', 'Community', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(39, 'ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_01.png', 'Shenzhen', 'Community', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(40, 'ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_01.png', 'Shenzhen', 'Community', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(41, 'dolor sit amet, consectetur adipiscing', 'magazine', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'Shenzhen', 'Features', 1463435426, 0, 'guanliyuan@163.com', '5', 51, '', 0),
(42, 'dolor sit amet, consectetur adipiscing', 'magazine', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'Shenzhen', 'Features', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(43, 'dolor sit amet, consectetur adipiscing', 'magazine', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'Shenzhen', 'Features', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(44, 'dolor sit amet, consectetur adipiscing', 'magazine', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'Shenzhen', 'Features', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(45, 'dolor sit amet, consectetur adipiscing', 'magazine', 'do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_03.png', 'Shenzhen', 'Features', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(46, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_04.png', 'Shenzhen', 'Photos', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(47, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_04.png', 'Shenzhen', 'Photos', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(48, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_04.png', 'Shenzhen', 'Photos', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(49, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_04.png', 'Shenzhen', 'Photos', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(50, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'magazine', 'eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_04.png', 'Shenzhen', 'Photos', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(111185, 'oooooooooooo', 'magazine', 'oooooooooooooo', 'Public/yl.com/uploadpic/yuelei/Coverpic/20160613154849243.jpg', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '1', 0, 'oooooooooooooo', 0),
(111187, '1111111222222', 'magazine', '111111111122222222222222', 'Public/yl.com/uploadpic/yuelei/Coverpic/20160615140756324.jpg', 'Shenzhen', 'News', 1463435426, 0, 'guanliyuan@163.com', '1', 0, '11111111122222222', 0),
(52, 'sit amet, consectetur adipiscing', 'magazine', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_05.png', 'Shenzhen', 'Videos', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(53, 'sit amet, consectetur adipiscing', 'magazine', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_05.png', 'Shenzhen', 'Videos', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(54, 'sit amet, consectetur adipiscing', 'magazine', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_05.png', 'Shenzhen', 'Videos', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(55, 'sit amet, consectetur adipiscing', 'magazine', 'tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nonulla pariatur strud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Duis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariaturDuis autenulla pariatur in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur', 'Public/yl.com/uploadpic/yuelei/Coverpic/img_05.png', 'Shenzhen', 'Videos', 1463435426, 0, 'guanliyuan@163.com', '5', 50, '', 0),
(56, '1111111111', 'digital', '12312312', 'Public/yl.com/uploadpic/yuelei/Coverpic/20160527155553173.jpg', 'Shenzhen', 'Education', 1463435426, 0, 'guanliyuan@163.com', '1', 1, '123132123', 0),
(57, '2222222222', 'magazine', '2222222222222', 'Public/yl.com/uploadpic/yuelei/Coverpic/20160527155553173.jpg', 'Shenzhen', 'Eat', 1463435426, 0, 'guanliyuan@163.com', '1', 1, '2222222222', 0),
(111174, '55', 'magazine', '55555555555', 'Public/yl.com/uploadpic/yuelei/Coverpic/20160527172231716.jpg', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '1', 1, '5555555555', 0),
(111175, '1111111111111', 'magazine', '11111111111', 'Public/yl.com/uploadpic/yuelei/Coverpic/20160528141420623.jpg', 'Shanghai', 'News', 1463435426, 0, 'guanliyuan@163.com', '1', 0, '11111111111', 0),
(111198, '6666666666666', 'magazine', '6666666666666666', 'Public/yl.com/uploadpic/guanliyuan@163.com/Coverpic/20160620141038612.png', 'Shanghai', 'News', 1466403039, 0, 'guanliyuan@163.com', '1', 0, '66666666666', 0),
(111197, '333333333333', 'magazine', '33333333333', 'Public/yl.com/uploadpic/guanliyuan@163.com/Coverpic/20160620140727621.png', 'Shanghai', 'News', 1466402909, 0, 'guanliyuan@163.com', '1', 0, '333333333333333', 0),
(111196, '22222222222', 'magazine', '22222222222222222', 'Public/yl.com/uploadpic/guanliyuan@163.com/Coverpic/20160620135559738.png', 'Shanghai', 'News', 1466402162, 0, 'guanliyuan@163.com', '1', 0, '22222222222', 0),
(111194, '123123123', 'magazine', '123123123', 'Public/yl.com/uploadpic/guanliyuan@163.com/Coverpic/20160617160041881.png', 'Shanghai', 'News', 1466150442, 1466153305, 'guanliyuan@163.com', '1', 0, '123123123', 1),
(111195, '55555555555555', 'magazine', '55555555555555', 'Public/yl.com/uploadpic/guanliyuan@163.com/Coverpic/20160617164900755.png', 'Shanghai', 'News', 1466153341, 1466153561, 'guanliyuan@163.com', '1', 0, '555555555', 1),
(111199, '88888888888000', 'magazine', '888888888', 'Public/yl.com/uploadpic/guanliyuan@163.com/Coverpic/20160620175511349.png', 'Shanghai', 'News', 1466416512, 1466416528, 'guanliyuan@163.com', '1', 0, '88888888888', 1);

-- --------------------------------------------------------

--
-- 表的结构 `download`
--

CREATE TABLE IF NOT EXISTS `download` (
  `pid` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `articleid` int(11) NOT NULL,
  `downloadtime` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=gbk AUTO_INCREMENT=372 ;

--
-- 转存表中的数据 `download`
--

INSERT INTO `download` (`pid`, `user`, `articleid`, `downloadtime`) VALUES
(1, 'guanliyuan@163.com', 111183, 1463435426),
(2, 'guanliyuan@163.com', 111183, 1463435426),
(3, 'guanliyuan@163.com', 111183, 1463435426),
(4, 'guanliyuan@163.com', 111183, 1463435426),
(5, 'guanliyuan@163.com', 111183, 1463435426),
(26, '463745854@qq.com', 1, 1463435426),
(25, '463745854@qq.com', 1, 1463435426),
(24, '463745854@qq.com', 2, 1463435426),
(23, '463745854@qq.com', 2, 1463435426),
(22, 'guanliyuan@163.com', 111183, 1463435426),
(21, '463745854@qq.com', 50, 1463435426),
(20, '463745854@qq.com', 1, 1463435426),
(19, 'guanliyuan@163.com', 111183, 1463435426),
(27, '463745854@qq.com', 111183, 1463435426),
(28, '463745854@qq.com', 111180, 1463435426),
(29, '463745854@qq.com', 111180, 1463435426),
(30, '463745854@qq.com', 111180, 1463435426),
(31, '463745854@qq.com', 111180, 1463435426),
(32, '463745854@qq.com', 111180, 1463435426),
(33, '463745854@qq.com', 1, 1463435426),
(61, 'guanliyuan@163.com', 111183, 1463435426),
(60, 'guanliyuan@163.com', 111183, 1463435426),
(59, 'guanliyuan@163.com', 111183, 1463435426),
(58, 'guanliyuan@163.com', 111183, 1463435426),
(57, 'guanliyuan@163.com', 111183, 1463435426),
(56, 'guanliyuan@163.com', 111183, 1463435426),
(55, 'guanliyuan@163.com', 111183, 1463435426),
(54, 'guanliyuan@163.com', 111183, 1463435426),
(53, 'guanliyuan@163.com', 111183, 1463435426),
(52, 'guanliyuan@163.com', 111183, 1463435426),
(44, 'guanliyuan@163.com', 111183, 1463435426),
(45, '463745854@qq.com', 1, 1463435426),
(46, 'guanliyuan@163.com', 111183, 1463435426),
(47, 'guanliyuan@163.com', 111183, 1463435426),
(48, 'guanliyuan@163.com', 111183, 1463435426),
(49, 'guanliyuan@163.com', 111183, 1463435426),
(50, 'guanliyuan@163.com', 111183, 1463435426),
(51, 'guanliyuan@163.com', 111183, 1463435426),
(62, 'guanliyuan@163.com', 111183, 1463435426),
(63, 'guanliyuan@163.com', 1, 1463435426),
(64, 'guanliyuan@163.com', 1, 1463435426),
(65, 'guanliyuan@163.com', 1, 1463435426),
(66, 'guanliyuan@163.com', 1, 1463435426),
(67, 'guanliyuan@163.com', 1, 1463435426),
(68, 'guanliyuan@163.com', 1, 1463435426),
(69, 'guanliyuan@163.com', 1, 1463435426),
(70, 'guanliyuan@163.com', 1, 1463435426),
(71, 'guanliyuan@163.com', 1, 1463435426),
(72, 'guanliyuan@163.com', 1, 1463435426),
(73, 'guanliyuan@163.com', 1, 1463435426),
(74, 'guanliyuan@163.com', 1, 1463435426),
(75, 'guanliyuan@163.com', 1, 1463435426),
(76, 'guanliyuan@163.com', 1, 1463435426),
(77, 'guanliyuan@163.com', 1, 1463435426),
(78, 'guanliyuan@163.com', 1, 1463435426),
(79, 'guanliyuan@163.com', 1, 1463435426),
(80, 'guanliyuan@163.com', 1, 1463435426),
(81, 'guanliyuan@163.com', 1, 1463435426),
(82, 'guanliyuan@163.com', 1, 1463435426),
(83, 'guanliyuan@163.com', 1, 1463435426),
(84, 'guanliyuan@163.com', 1, 1463435426),
(85, 'guanliyuan@163.com', 1, 1463435426),
(86, 'guanliyuan@163.com', 1, 1463435426),
(87, 'guanliyuan@163.com', 1, 1463435426),
(88, 'guanliyuan@163.com', 1, 1463435426),
(89, 'guanliyuan@163.com', 1, 1463435426),
(90, 'guanliyuan@163.com', 1, 1463435426),
(91, 'guanliyuan@163.com', 1, 1463435426),
(92, 'guanliyuan@163.com', 1, 1463435426),
(93, 'guanliyuan@163.com', 1, 1463435426),
(94, 'guanliyuan@163.com', 1, 1463435426),
(95, 'guanliyuan@163.com', 1, 1463435426),
(96, 'guanliyuan@163.com', 1, 1463435426),
(97, 'guanliyuan@163.com', 1, 1463435426),
(98, 'guanliyuan@163.com', 1, 1463435426),
(99, 'guanliyuan@163.com', 1, 1463435426),
(100, 'guanliyuan@163.com', 1, 1463435426),
(101, 'guanliyuan@163.com', 1, 1463435426),
(102, 'guanliyuan@163.com', 1, 1463435426),
(103, 'guanliyuan@163.com', 1, 1463435426),
(104, 'guanliyuan@163.com', 1, 1463435426),
(105, 'guanliyuan@163.com', 1, 1463435426),
(106, 'guanliyuan@163.com', 1, 1463435426),
(107, 'guanliyuan@163.com', 1, 1463435426),
(108, 'guanliyuan@163.com', 1, 1463435426),
(109, 'guanliyuan@163.com', 1, 1463435426),
(110, 'guanliyuan@163.com', 1, 1463435426),
(111, 'guanliyuan@163.com', 1, 1463435426),
(112, 'guanliyuan@163.com', 1, 1463435426),
(113, 'guanliyuan@163.com', 1, 1463435426),
(114, 'guanliyuan@163.com', 1, 1463435426),
(115, 'guanliyuan@163.com', 1, 1463435426),
(116, 'guanliyuan@163.com', 1, 1463435426),
(117, 'guanliyuan@163.com', 1, 1463435426),
(118, 'guanliyuan@163.com', 1, 1463435426),
(119, 'guanliyuan@163.com', 1, 1463435426),
(120, 'guanliyuan@163.com', 1, 1463435426),
(121, 'guanliyuan@163.com', 1, 1463435426),
(122, 'guanliyuan@163.com', 1, 1463435426),
(123, 'guanliyuan@163.com', 1, 1463435426),
(368, 'guanliyuan@163.com', 3, 1466068472),
(369, 'guanliyuan@163.com', 3, 1466070179),
(370, 'guanliyuan@163.com', 3, 1466070729),
(371, 'guanliyuan@163.com', 26, 1466155879);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avator` varchar(255) NOT NULL COMMENT '头像',
  `city` varchar(255) NOT NULL COMMENT '城市',
  `group` varchar(255) DEFAULT NULL COMMENT '组',
  `dtimes` varchar(255) DEFAULT '0' COMMENT '我的文章被下载次数',
  `dtime` varchar(255) DEFAULT '0' COMMENT '我下载文章的次数',
  `integration` int(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `name`, `avator`, `city`, `group`, `dtimes`, `dtime`, `integration`) VALUES
(1, 'guanliyuan@163.com', 'guanliyuan', 'sybil', 'Public/yl.com/uploadpic/avator/Coverpic/20160622171819527.png', 'shanghai', '1', '358', '329', 1623),
(11, '111@111.com', '111', '111', 'Public/yl.com/uploadpic/avator/Coverpic/20160622173305270.png', 'Shanghai', '2', '0', '0', 0),
(10, 'yonghu@163.com', 'yonghu', 'miller', 'Public/yl.com/uploadpic/avator/Coverpic/20160622173256695.png', 'Shenzhen', '1', '0', '0', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
