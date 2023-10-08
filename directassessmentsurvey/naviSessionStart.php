<?php
session_start();
//session_destroy();
$_SESSION['user'] = "navi";

//if(isset($_POST['login'])){
//    $_SESSION['session'] = $_POST['session'];
//    echo '<meta http-equiv="refresh" content="0; URL=navi.php"';
//}

include("function/mysql_connect.php");



  // echo "<h3>Session ID: " .$_SESSION['session'] ."</h3>";


?>

<!DOCTYPE html>
<html lang="de" class="notranslate" translate="no" dir="ltr">
  <head>
    <meta name="google" content="notranslate" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>Session ID</title>
  </head>

  <body>
  <form action="navi.php" method="post">
      <input type="hidden" name="fnavi" value="welcome_text.php">
      <input type="hidden" name="fnaviScreen" value="welcome_screen.php">
      <label for="session">Please define a session ID (e.g. your name)</label>
      <br>
      <input type="text" id="session" name="session">
      <br><br>
      <input type="submit" class="button" name="login" value="define">
    </form>
  </body>


  <?php
  $timestamp = microtime(true);
  $navi = $_POST["fnavi"];
  include("function/mysql_insert.php");
  ?>