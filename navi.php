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
$navi = $_POST["navi"];
$timestamp = microtime(true);
include("function/mysql_insert.php");

// Showing the content of mobileDevices and bigScreen
$rows = $pdo->query("SELECT * FROM `dataDAS` WHERE `navi` NOT LIKE '' AND `session` LIKE '$session' ORDER BY `id` DESC LIMIT 1")->fetch();
$_SESSION['devices'] = $rows['navi'];

$rows = $pdo->query("SELECT * FROM `dataDAS` WHERE `naviScreen` NOT LIKE '' AND `session` LIKE '$session' ORDER BY `id` DESC LIMIT 1")->fetch();
$_SESSION['screen'] = $rows['naviScreen'];

# Variables 
$form_pre = "<form method='post'><input type='submit' style='width:200px; height:30px; background-color:lightblue; text-align:left;' id='navi' name='navi' value='";
$form_pre_vid = "<form method='post'><input type='submit' style='width:200px; height:30px; background-color:lightgreen; text-align:left;' id='naviScreen' name='naviScreen' value='";

$form_post = "'></form>";

$dummy_pre = "<form><input type='submit' style='width:200px; height:30px; background-color:white; ' value='";
$dummy_post = "'></form>";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <!-- <link rel="stylesheet" href="main.css" /> -->
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
        xhttp.open("GET", "naviSystem.php");
        xhttp.send();
      }

      let randomNumber = Math.floor((Math.random() * 300) + 300); // between 300 and 600

      setInterval(function(){
        update();
      }, randomNumber);
    </script>

<content id="update"></content> <!-- contains the js-code. Position is important-->


.. <!-- the points are only to fix the Layout-->
<div style='font-size:200%'>Session ID: 
<?php 
echo $_SESSION['session'];
?>
</div>

<form action="" method="post">
  <input type="hidden" name='naviScreen' value='logout.php'>
  <input type="hidden" name="navi" value="logout.php">
  <input type="submit" class="button" name="submit" value="quit session">
</form>

<hr>
    <fullscreen_box>
    <div style='display:flex'>
        <div style='width:50%; height:100%; border:5px'>
            <div style='border:5px; float:left'>
            <large>mobileDevices (participants)</large>
                <?php
                echo $form_pre . "welcome_text.php" . $form_post;
                echo $form_pre . "qr_devices.php" . $form_post;
                echo $form_pre . "calibration_text.php" . $form_post;
                echo $form_pre . "question_agreement.php" . $form_post;

                echo $form_pre . "break.php" . $form_post;
                
                echo $dummy_pre . "Just some notes..." . $dummy_post;

                echo $form_pre . "itContinues_text.php" . $form_post;
                echo $form_pre . "info1_text.php" . $form_post;
                echo $form_pre . "song1_sheet_music.php" . $form_post;
                echo $form_pre . "question1.php" . $form_post;

                echo "<br>";

                echo $form_pre . "itContinues_text.php" . $form_post;
                echo $form_pre . "questionnaire1_start.php" . $form_post;
                echo $dummy_pre . "No controlling during questionnaire" . $dummy_post;
                echo $dummy_pre . "but interruption with break.php" . $dummy_post;
                echo $form_pre . "break.php" . $form_post;

                echo $form_pre . "question1.php" . $form_post;

                echo "<br>";

                echo $form_pre . "logout.php" . $form_post;
                ?>
            </div>
            <div style='width:700px; transform:scale(0.9); height:350px; display:flex; width:50%'>
            <fullscreen_box>
                <content class='align-center'>
                <?php
                    include ('parts/' .$_SESSION['devices']);
                    ?>
                    </content>
            </fullscreen_box>
                </div>
        </div>
        <div style='width:50%'>
            <div style='border:5px; float:left'>
            <large>bigScreen</large>
                <?php
                echo $form_pre_vid . "welcome_screen.php" . $form_post;

                echo $form_pre_vid . "qr_screen.php" . $form_post;
                echo $form_pre_vid . "screen_stop.php" . $form_post;
                echo "<br>";
                echo $form_pre_vid . "screen_calibration_display.php" . $form_post;
                echo $form_pre_vid . "screen_stop.php" . $form_post;
                echo "<br>";
                echo $form_pre_vid . "screen_song1_display.php" . $form_post;
                echo $form_pre_vid . "screen_stop.php" . $form_post;
                ?>
            </div>
            <div style='float:left; width:50%; transform:scale(0.9)'>
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