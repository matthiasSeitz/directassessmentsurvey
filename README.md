# Direct Assessment Survey

## Introduction

This web app is part of a pilot study to measure real life situations such as singing in a vocal group. It was realized with the simple web tools html, css, php, javascript and mysql, as this was easy to implement and sufficient for the study. In a next step, it could be further developed in a web socket environment. 

The web app is designed to ask questions on mobile devices at a specific time by displaying the questions remotely. These direct assessment questions were used to evaluate spontaneous events in an experiment. The app also contains multi-page questionnaires that can be entered by the participants in individual steps. The remote control enables the display of media on mobile devices and other devices connected to the network. 

## Implementation

To use the application, you must activate the connection to a database and create a table with the columns that the application uses. Perform the following steps: 

1.) Create a file called "mysql_connect.php" with the following code and save it in the "function" folder 

```
<?php
$pdo = new PDO('mysql:host=INSERT_HOST;dbname=INSERT_NAME_OF_DATABASE', 'INSERT_USERNAME', 'INSERT_PASSWORD');
?>
```


2.) Replace the following values with the data from your database connection

- INSERT_HOST (e.g rdbms.strato.de)
- INSERT_NAME_OF_DATABASE
- INSERT_USERNAME



3.) Create a table in the database using this SQL code

```
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
```

That's it. Good luck!