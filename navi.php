<?php
session_start();
if(isset($_POST['login'])){
  $_SESSION['session'] = $_POST['session'];
}
$_SESSION['user'] = "navi";
$session = $_SESSION['session'];
$_SESSION['pageTimestamp'] = microtime(true);

include("function/mysql_connect.php");

# Database entry
$navi = $_POST["navi_mobileDevices"];
$timestamp = microtime(true);
include("function/mysql_insert.php");

// Showing the content of mobileDevices and bigScreen
$rows = $pdo->query("SELECT * FROM `dataDAS` WHERE `navi_mobileDevices` NOT LIKE '' AND `session` LIKE '$session' ORDER BY `id` DESC LIMIT 1")->fetch();
$_SESSION['devices'] = $rows['navi_mobileDevices'];

$rows = $pdo->query("SELECT * FROM `dataDAS` WHERE `navi_bigScreen` NOT LIKE '' AND `session` LIKE '$session' ORDER BY `id` DESC LIMIT 1")->fetch();
$_SESSION['screen'] = $rows['navi_bigScreen'];

# Variables 
$form_pre = "<form method='post'><input type='submit' class='naviButton'' id='navi_mobileDevices' name='navi_mobileDevices' value='";
$form_pre_vid = "<form method='post'><input type='submit' class='naviButton'' id='navi_bigScreen' name='navi_bigScreen' value='";

$form_post = "'></form>";

$dummy_pre = "<form><input type='submit' class='naviButton' value='";
$dummy_post = "'></form>";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
     <link rel="stylesheet" href="main.css" />
    <link rel="icon" href="data:;base64,iVBORw0KGgo="> <!--Prevents html5 -->
    <title>Navi</title>
  </head>
  <body onload = "update();">
    <script type="text/javascript">
      function update(){
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function(){
          document.getElementById("update").innerHTML = this.responseText;
        }
        xhttp.open("GET", "naviUpdate.php");
        xhttp.send();
      }

      let randomNumber = Math.floor((Math.random() * 300) + 300); // between 300 and 600

      setInterval(function(){
        update();
      }, randomNumber);
    </script>

<content id="update"></content> <!-- contains the js-code. Position is important-->

<?php
if ($_SESSION['devices']=="welcome_text.php" AND $_SESSION['screen']=="welcome_screen.php"){
  echo "<script>alert('Welcome to the navigation page! On the left half of the screen you will find buttons to control the mobileDevices. The content that will be visible on the mobileDevices will be displayed in the lower area. By scanning the QR code, participants can connect directly after entering the name of your session. On the right half of the screen you will find buttons and representations of the bigScreen accordingly.')</script>";
}
?>


<infobox><br>Session ID: 
<?php 
echo $_SESSION['session'];
?>

<form action="" method="post">
    <input type="hidden" name='navi_bigScreen' value='logout.php'>
    <input type="hidden" name="navi_mobileDevices" value="logout.php">
    <input type="submit" class="div" name="submit" value="quit session">
</form>
<br>
</infobox>

    <fullscreen_box>
    <div style="display:flex">
        <div style="width:50%; background-color:white">
            <large>mobileDevices</large>
                <?php
                echo $form_pre . "qr_mobileDevices.php" . $form_post;
                echo $form_pre . "calibration.php" . $form_post;
                echo $form_pre . "question_agreement.php" . $form_post;

                echo $form_pre . "break.php" . $form_post;
                
                echo $dummy_pre . "Just some notes..." . $dummy_post;

                echo $form_pre . "song1_sheet_music.php" . $form_post;
                echo $form_pre . "question1.php" . $form_post;

                echo $dummy_pre . "-" . $dummy_post;

                echo $form_pre . "itContinues_text.php" . $form_post;
                echo $form_pre . "questionnaire1_start.php" . $form_post;
                echo $form_pre . "break.php" . $form_post;
                ?>
        </div>

        <div style="width:50%; background-color:lightgrey">
            <large>bigScreen</large>
                <?php

                echo $form_pre_vid . "qr_bigScreen.php" . $form_post;
                echo $form_pre_vid . "calibration.php" . $form_post;
                echo $form_pre_vid . "screen_stop.php" . $form_post;

                echo $dummy_pre . "-" . $dummy_post;
                echo $dummy_pre . "-" . $dummy_post;

                echo $form_pre_vid . "info1_text.php" . $form_post;
                echo $form_pre_vid . "screen_stop.php" . $form_post;

                echo $dummy_pre . "-" . $dummy_post;
                echo $dummy_pre . "-" . $dummy_post;

                echo $form_pre_vid . "song1_play.php" . $form_post;
                echo $form_pre_vid . "screen_stop.php" . $form_post;

                ?>
        </div>
    </div>
    <div style="display:flex">
            <div style='width:50%; transform:scale(0.7)'>
                <?php
                    include ('parts/' .$_SESSION['devices']);
                    ?>
                </div>
            <div style='width:50%; transform:scale(0.7)'>
                <?php
                include ('parts/' .$_SESSION['screen']);
                ?>
            </div>        
        </div>
    </div>
</fullscreen_box>
</body>
</html>

<?php

?>