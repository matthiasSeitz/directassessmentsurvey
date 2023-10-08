<?php
// Eintragen
$stmt = $pdo->prepare("INSERT INTO travog (timestamp, question, text, answer, user, session, navi, naviScreen, item01, item02, item03, item04, item05, item06, item07, item08, item09, item10, item11, item12, item13) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

$timestamp = microtime(TRUE);
$question = $_POST["fquestion"];
$text = $_POST["ftext"];
$answer = $_POST["fanswer"];
$user = $_SESSION["user"];
$session = $_SESSION['session'];
$navi = $_POST["fnavi"];
$naviScreen = $_POST["fnaviScreen"];
$item01 = $_POST["fitem01"];
$item02 = $_POST["fitem02"];
$item03 = $_POST["fitem03"];
$item04 = $_POST["fitem04"];
$item05 = $_POST["fitem05"];
$item06 = $_POST["fitem06"];
$item07 = $_POST["fitem07"];
$item08 = $_POST["fitem08"];
$item09 = $_POST["fitem09"];
$item10 = $_POST["fitem10"];
$item11 = $_POST["fitem11"];
$item12 = $_POST["fitem12"];
$item13 = $_POST["fitem13"];

$stmt->execute([$timestamp, $question, $text, $answer, $user, $session, $navi, $naviScreen, $item01, $item02, $item03, $item04, $item05, $item06, $item07, $item08, $item09, $item10, $item11, $item12, $item13]);
?>
