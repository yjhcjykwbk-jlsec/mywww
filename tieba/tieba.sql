
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
--  `tieba`
--
CREATE DATABASE if not exists `tieba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tieba`;

-- --------------------------------------------------------

--
-- `lzls`
--

CREATE TABLE IF NOT EXISTS `lzls` (
  `postid` bigint(20) DEFAULT NULL,
  `spid` bigint(20),
  `content` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`spid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
--  `posts`
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
--  `thread_details`
--

CREATE TABLE IF NOT EXISTS `thread_details` (
  `tid` bigint(20) NOT NULL,
  `title` varchar(30) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
--  `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `tid` bigint(20) DEFAULT NULL,
  `postid` bigint(20) DEFAULT NULL,
  `timestamp` timestamp,
  PRIMARY KEY (`postid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

