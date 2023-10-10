<?php
session_start();
include('function/mysql_connect.php');

$_SESSION['user'] = "navi";
$session = $_SESSION['session'];
   
      $rows = $pdo->query("SELECT * FROM `dataDAS` WHERE `navi` NOT LIKE '' AND `session` LIKE '$session' ORDER BY `id` DESC LIMIT 1")->fetch();
      $navi = $rows['navi'];
      $naviTime = $rows['timestamp'];

      // Logout Session automaticly after...

      $now = microtime(true);

      $delta = 120 - ($now - $_SESSION['pageTimestamp']);

      if($delta < 0){
         echo '<meta http-equiv="refresh" content="0; URL=';
         include('function/url.php'); 
         echo 'logout.php">';       
        } 

        echo "Automatic logout after inactivity in " .round($delta,0) ." seconds.";


      if(strpos($navi, "logout.php") !== false) {
        echo '<meta http-equiv="refresh" content="0; URL=';
        include('function/url.php'); 
        echo 'logout.php">';
      }
?>
