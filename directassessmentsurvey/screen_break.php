<?php
session_start();
//include('parts/key.php');
include("function/mysql_connect.php");

?>


<html lang="de" class="notranslate" translate="no" dir="ltr">
<head>
<meta name="google" content="notranslate" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="refresh" content="1;url=canvas.php">
<link rel="stylesheet" href="main.css" />
<title>Canvas Break</title>
</head>
<body style="background-color:black" >


<?php

  $timestamp = microtime(TRUE);
  $navi = "canvas.php";

  
  
  $sql = "INSERT INTO `travog` (`timestamp`, `question`, `text`, `answer`, `navi`, `user`, `item01`, `item02`, `item03`, `item04`, `item05`, `item06`, `item07`, `item08`, `item09`, `item10`, `item11`, `item12`, `item13`) 
  VALUES ('$timestamp','$question','$text','$answer', '$navi', '$user','$item01','$item02','$item03','$item04','$item05','$item06','$item07','$item08','$item09','$item10','$item11','$item12','$item13')";
  
  if ($conn->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  
?>


</body>
</html>
