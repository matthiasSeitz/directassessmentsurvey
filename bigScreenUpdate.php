<?php
session_start();
$session = $_SESSION['session'];

include('function/mysql_connect.php');

$rows = $pdo->query("SELECT * FROM `dataDAS` WHERE `naviScreen` NOT LIKE '' AND `session` LIKE '$session' ORDER BY `id` DESC LIMIT 1")->fetch();
$navi = $rows['naviScreen'];

// Logout Session automaticly after...

$now = microtime(true);

$delta = 120 - ($now - $_SESSION['pageTimestamp']);
echo "<qrcode class='top-left' style='z-index:1'><br>Logout in " .round($delta,0) ." s<qrcode>";

if($delta < 0){
    echo '<meta http-equiv="refresh" content="0; URL=';
    include('function/url.php'); 
    echo 'logout.php">';       
  } 

// Filter: If a new Navi-key was deposited, the main page is renewed. 
if(strcmp($_SESSION['currentNavi'], $navi)!=0) {

    echo '<meta http-equiv="refresh" content="0; URL=';
    include('function/url.php'); 
    echo 'bigScreen.php">';

    $_SESSION['currentNavi'] = $navi;
}

?>
