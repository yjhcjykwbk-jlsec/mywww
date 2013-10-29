-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2013 年 10 月 29 日 09:10
-- 服务器版本: 5.1.33
-- PHP 版本: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `tieba`
--
CREATE DATABASE `tieba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tieba`;

-- --------------------------------------------------------

--
-- 表的结构 `lzls`
--

CREATE TABLE IF NOT EXISTS `lzls` (
  `postid` bigint(20) DEFAULT NULL,
  `spid` bigint(20) DEFAULT NOT NULL,
  `content` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  PRIMARY KEY (`spid`),
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `postid` bigint(20) NOT NULL,
  `postcontent` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`postid`),
  UNIQUE KEY `postid` (`postid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `thread_details`
--

CREATE TABLE IF NOT EXISTS `thread_details` (
  `tid` bigint(20) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `tid` bigint(20) DEFAULT NULL,
  `postid` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

