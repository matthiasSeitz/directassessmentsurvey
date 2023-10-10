<?php
session_start();
if (isset($_POST['submit'])){
  $_SESSION['session'] = $_POST['session'];
}
$_SESSION['pageTimestamp'] = microtime(true);
include("function/mysql_connect.php");
?>
<html lang="de" class="notranslate" translate="no" dir="ltr">
<head>
<meta name="google" content="notranslate" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="main.css" />
<title>screen</title>
</head>
<body onload = "update();">
    <script type="text/javascript">
      function update(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("update").innerHTML = this.responseText;
        }
        xhttp.open("GET", "screenSystem.php");
        xhttp.send();
      }

      let randomNumber = Math.floor((Math.random() * 300) + 300); // between 300 and 600

      setInterval(function(){
        update();
      }, randomNumber);
    </script>

<content id="update"></content>

<fullscreen_box style="background-color:black">
  <?php
  echo "<content class='align-center'>";
    include('parts/header.php');
    include ("parts/" .$_SESSION['currentNavi']);
  echo "</content>";
  ?>
</fullscreen_box>

<?php 
// This part is important to avoid continuous updating of the page.
  $rows = $pdo->query("SELECT `naviScreen` FROM `dataDAS` WHERE `id` > 0 ORDER BY `id` DESC LIMIT 1")->fetch();
  $navi = $rows[0];
    include('function/mysql_insert.php'); 
?>

</body>
</html>
