<?php
session_start();
include('function/mysql_connect.php');

$user = $_SESSION['user'];
$session = $_SESSION['session'];

$rows = $pdo->query("SELECT * FROM travog WHERE navi NOT LIKE '' AND `session` LIKE '$session' AND user IN ('navi', '$user') ORDER BY id DESC LIMIT 1")->fetch();
$navi = $rows['navi'];


// Logout Session automaticly after...

$now = microtime(true);

  $delta = 120 - ($now - $_SESSION['pageTimestamp']);
  echo "<qrcode class='top-right'><br>Logout in " .round($delta,0) ." s<qrcode>";
  
  if($delta < 0){
        echo '<meta http-equiv="refresh" content="0; URL=';
        include('function/url.php'); 
        echo 'logout.php">';       
      } 
    



// Filter: Wenn ein neuer Navi-key hinterlegt wurde, wird die main-Seite erneuert. 
// Der Filter ist nötig, da ansonsten Buttons durch die ständige Erneuerung nicht gut geklickt werden könnten.
// Durch den Filter werden die Seiten mit den Buttons nur einmal geladen und bleiben dann bestehen bis ein neues Keywort in navi hinterlegt wird. 
if(strcmp($_SESSION['currentNavi'], $navi)!=0) {

    echo '<meta http-equiv="refresh" content="0; URL=';
    include('function/url.php'); 
    echo 'main.php">';

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
