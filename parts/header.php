<?php
session_start();
include('function/mysql_connect.php');
$user = $_SESSION['user'];
$session = $_SESSION['session'];

if(isset($_SESSION['session'])){
    echo " Session ID: " .$session;
}
if(isset($_SESSION['user'])){
    echo " User: " .$user;
}
?>
