# directassessmentsurvey



CREATE TABLE `dataDAS` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` decimal(14,4) NOT NULL,
  `question` mediumtext,
  `text` mediumtext,
  `user` tinytext,
  `session` tinytext,
  `navi_mobileDevices` tinytext,
  `navi_bigScreen` tinytext,
  `item01` mediumtext,
  `item02` mediumtext,
  `item03` mediumtext,
  `item04` mediumtext,
  `item05` mediumtext,
  `item06` mediumtext,
  `item07` mediumtext,
  `item08` mediumtext,
  `item09` mediumtext,
  `item10` mediumtext,
  `item11` mediumtext,
  `item12` mediumtext,
  `item13` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8	
