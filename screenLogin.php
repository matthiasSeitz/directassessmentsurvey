<?php
session_start();
//if (isset($_POST['submit'])){
//session_destroy();
//session_start();
//$_SESSION['session'] = $_POST['session'];   
//header('Location: https://www.matthiasseitz.de/travogPub/screen.php');
// WICHTIG: Die Weiterleitung mit header funktioniert nur, 
// wenn davor NICHTS anderes steht. 
// Also kein echo Tag, keine Leerzeile etc. 
//}
?>

<!DOCTYPE html>
<html lang="de" class="notranslate" translate="no" dir="ltr">
  <head>
    <meta name="google" content="notranslate" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>index</title>
  </head>
<body>

<fullscreen_box>
  <div class="center">
      <div>
        <br>
        <h4>Please enter the ID of the session you would like to attend.</h4>
        <p></p>
        <form action="screen.php" method="post">
          <br>
          <label for="session">Session ID</label>
          <input type="text" id="session" name="session">
          <br><br>
          <input type="submit" class="button" name="submit" value="submit">
        </form>
      </div> 
  </div>
</fullscreen_box>

</body>
</html>
