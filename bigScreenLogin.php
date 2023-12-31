<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en-US" class="notranslate" translate="no" dir="ltr">
  <head>
    <meta name="google" content="notranslate" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>Login</title>
  </head>
<body>

<fullscreen_box>
  <div class="center">
      <div>
        <br>
        <h4>Please enter the ID of the session you would like to attend.</h4>
        <p></p>
        <form action="bigScreen.php" method="post">
          <br>
          <label for="session">Session ID</label>
          <input type="text" id="session" name="session">
          <br><br>
          <input type="submit" class="button" name="submit" value="submit">
        </form>
      </div> 
  </div>

  <footer>
    <br>
    <a href="index.php">Back</a>
    <br>
    <a href="https://itrk.legal/Ltu.8V.Fcq.html">Privacy Policy</a>
  </footer>

</fullscreen_box>

</body>
</html>
