<?php
session_start();
$_SESSION['user'] = "navi";
include("function/mysql_connect.php");
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
      <input type="hidden" name="navi" value="welcome_text.php">
      <input type="hidden" name="naviScreen" value="welcome_screen.php">
      <label for="session">Please define a session ID (e.g. your name)</label>
      <br>
      <input type="text" id="session" name="session">
      <br><br>
      <input type="submit" class="button" name="login" value="define">
    </form>
  </body>

  <?php
  $timestamp = microtime(true);
  $navi = $_POST["navi"];
  include("function/mysql_insert.php");
  ?>