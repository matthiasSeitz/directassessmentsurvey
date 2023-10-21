<?php
session_start();
include('function/mysql_connect.php');
$user = $_SESSION['user'];
$session = $_SESSION['session'];
echo "<infobox class='top-left'>";
if(isset($_SESSION['session'])){
    echo "Session ID: " .$session;
}
if(isset($_SESSION['user'])){
    echo "<br>User: " .$user;
}
echo "</infobox>";
echo "<infobox class='top-right'><a href='logout.php'>exit session</a></infobox>";
?>

