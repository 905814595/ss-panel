SET NAMES utf8;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = '+08:00';

--
-- Table structure for table `ac_cert`
--

CREATE TABLE `ac_cert` (
  `uid` int(11) NOT NULL,
  `user_name` varchar(128) CHARACTER SET utf8mb4 NOT NULL,
  `passwd` varchar(64) NOT NULL,
  `expire_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ac_cert`
--

INSERT INTO `ac_cert` (`uid`, `user_name`) SELECT `uid`,`user_name` FROM `user`;

--
-- Table structure for table `ac_cert`
--

DROP TABLE IF EXISTS `wechat`;
CREATE TABLE `wechat` (
  `uid` int(11) NOT NULL,
  `openid` varchar(64) NOT NULL,
  `unid` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `wechat` (`uid`) SELECT `uid` FROM `user`;

