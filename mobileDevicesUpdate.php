<?php
session_start();
include('function/mysql_connect.php');

$user = $_SESSION['user'];
$session = $_SESSION['session'];

$rows = $pdo->query("SELECT * FROM `dataDAS` WHERE `navi_mobileDevices` NOT LIKE '' AND `session` LIKE '$session' AND `user` IN ('navi', '$user') ORDER BY `id` DESC LIMIT 1")->fetch();
$navi = $rows['navi_mobileDevices'];


// Logout Session automaticly after...

$now = microtime(true);

  $delta = 120 - ($now - $_SESSION['pageTimestamp']);
  echo "Logout in " .round($delta,0) ."s";
  
  if($delta < 0){
        echo '<meta http-equiv="refresh" content="0; URL=';
        include('function/url.php'); 
        echo 'logout.php">';       
      } 
    

// Filter: If a new Navi-key was deposited, the main page is renewed. 
//The filter is necessary, because otherwise buttons could not be clicked well by the constant renewal.
// By the filter the pages with the buttons are loaded only once and remain then until a new keyword is deposited in navi. 
if(strcmp($_SESSION['currentNavi'], $navi)!=0) {

    echo '<meta http-equiv="refresh" content="0; URL=';
    include('function/url.php'); 
    echo 'mobileDevices.php">';

    $_SESSION['currentNavi'] = $navi;
    $_SESSION['display'] = $navi;
    unset($_SESSION['next']);


    if(strpos($navi, "logout.php") !== false) {
      echo '<meta http-equiv="refresh" content="0; URL=';
      include('function/url.php'); 
      echo 'logout.php">';
    }

}

?>
