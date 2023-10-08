<?php
$password = $_SESSION["password"];
$key = sha1($password); // key von "mmm" ist: 91223fd10ce86fc852b449583aa2196c304bf6e0
if($key=="91223fd10ce86fc852b449583aa2196c304bf6e0"){
   echo "<body style='background-color:white'>";
}
else
   {
   header('Location: https://www.matthiasseitz.de/travogPub/index.php'); // vor header() darf keine Leerzeile stehen, sonst klappt der Link nicht.
   }
?>
