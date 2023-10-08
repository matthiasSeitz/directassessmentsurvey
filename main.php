<?php
session_start();
if (isset($_POST['submit'])){
$_SESSION['user'] = $_POST['fuser'];
$_SESSION['session'] = $_POST['session'];
}
$_SESSION['pageTimestamp'] = microtime(true);
include('function/mysql_connect.php');
?>

<html lang="de" class="notranslate" translate="no" dir="ltr">
<head>
<meta name="google" content="notranslate" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="main.css" />
<title>main</title>
</head>
<body onload = "table();">
    <script type="text/javascript">
      function table(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("table").innerHTML = this.responseText;
        }
        xhttp.open("GET", "mainSystem.php");
        xhttp.send();
      }

      let randomNumber = Math.floor((Math.random() * 300) + 300); // between 300 and 600

      setInterval(function(){
        table();
      }, randomNumber);
    </script>

<content id="table"></content> <!-- contains the js-code. Position is important-->

<fullscreen_box>
  <?php
    include('parts/header.php');
    
    echo "<content class='align-center'>";
    echo "<qrcode class='top-right'><a href='logout.php'>exit session</a></qrcode>";
    include ("parts/" .$_SESSION['currentNavi']);
  echo "</content>";
  ?>
</fullscreen_box>


<?php 
  $rows = $pdo->query("SELECT navi FROM travog WHERE id > 0 ORDER BY id DESC LIMIT 1")->fetch();
  $navi = $rows[0];
    include('function/mysql_insert.php'); 
?>


</body>
</html>
