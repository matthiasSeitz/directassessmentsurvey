<?php
$stmt = $pdo->prepare("INSERT INTO `dataDAS` (`timestamp`, `question`, `text`, `user`, `session`, `navi_mobileDevices`, `navi_bigScreen`, `item01`, `item02`, `item03`, `item04`, `item05`, `item06`, `item07`, `item08`, `item09`, `item10`, `item11`, `item12`, `item13`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$timestamp = microtime(TRUE);
$question = $_POST["question"];
$text = $_POST["text"];
$user = $_SESSION["user"];
$session = $_SESSION['session'];
$navi_mobileDevices = $_POST["navi_mobileDevices"];
$navi_bigScreen = $_POST["navi_bigScreen"];
$item01 = $_POST["item01"];
$item02 = $_POST["item02"];
$item03 = $_POST["item03"];
$item04 = $_POST["item04"];
$item05 = $_POST["item05"];
$item06 = $_POST["item06"];
$item07 = $_POST["item07"];
$item08 = $_POST["item08"];
$item09 = $_POST["item09"];
$item10 = $_POST["item10"];
$item11 = $_POST["item11"];
$item12 = $_POST["item12"];
$item13 = $_POST["item13"];

$stmt->execute([$timestamp, $question, $text, $user, $session, $navi_mobileDevices, $navi_bigScreen, $item01, $item02, $item03, $item04, $item05, $item06, $item07, $item08, $item09, $item10, $item11, $item12, $item13]);
?>
