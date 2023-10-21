<?php
session_start();
include('function/mysql_connect.php');

$_SESSION['user'] = "navi";
$session = $_SESSION['session'];
   
      $rows = $pdo->query("SELECT * FROM `dataDAS` WHERE `navi_mobileDevices` NOT LIKE '' AND `session` LIKE '$session' ORDER BY `id` DESC LIMIT 1")->fetch();
      $navi = $rows['navi_mobileDevices'];
      $naviTime = $rows['timestamp'];

      // Logout Session automaticly after...

      $now = microtime(true);

      $delta = 120 - ($now - $_SESSION['pageTimestamp']);

      if($delta < 0){
         echo '<meta http-equiv="refresh" content="0; URL=';
         include('function/url.php'); 
         echo 'logout.php">';       
        } 

        echo "<infobox>Auto logout in " .round($delta,0) ." seconds</infobox>";


      if(strpos($navi, "logout.php") !== false) {
        echo '<meta http-equiv="refresh" content="0; URL=';
        include('function/url.php'); 
        echo 'logout.php">';
      }
?>
