<?php
session_start();
include('function/mysql_connect.php');

$_SESSION['user'] = "navi";
$session = $_SESSION['session'];

//    $IdLastNavi_q = $pdo->query("SELECT id FROM travog WHERE user LIKE 'navi' ORDER BY id DESC LIMIT 1")->fetch();
//    $IdLastNavi = $IdLastNavi_q[0];
    // echo "IdLastNavi ISNULL" .$IdLastNavi;

//    $lastId_q = $pdo->query("SELECT id FROM travog ORDER BY id DESC LIMIT 1")->fetch();
//    $lastId = $lastId_q[0];
    // echo "lastId" .$lastId;

//      echo  "<br><b>Anzahl Einträge: " . ($lastId - $IdLastNavi) . "</b>";

///         

      //$navi_arr = $pdo->query("SELECT navi FROM travog WHERE navi NOT LIKE '%canvas%' AND id > 0 ORDER BY id DESC LIMIT 1")->fetch();
      $rows = $pdo->query("SELECT * FROM travog WHERE navi NOT LIKE '' AND `session` LIKE '$session' ORDER BY id DESC LIMIT 1")->fetch();
      $navi = $rows['navi'];
      $naviTime = $rows['timestamp'];





      // Logout Session automaticly after...

      //$rows = $pdo->query("SELECT * FROM travog WHERE `session` NOT LIKE '' AND `session` LIKE '$session' ORDER BY id DESC LIMIT 1")->fetch();
      //$sessionTime = $rows['timestamp'];
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
