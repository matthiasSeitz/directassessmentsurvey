<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no" dir="ltr">
  <head>
    <meta name="google" content="notranslate" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>Login</title>
  </head>

<?php 
echo "Session" .$_SESSION['session'];
?>

<content>
  <h1>Please enter your name and the ID of the session you would like to attend.</h1>

  <form action="mobileDevices.php" method="post">
    <br>
  <label for="session">Session ID</label>
    <input type="text" id="session" name="session">
    <br><br>
    <label for="user">Name</label>
    <input type="text" id="user" name="user">
    <br><br>
    <input type="submit" class="button" name="submit" value="submit">
  </form>

  <footer>
    <br>
    <a href="index.php">Back</a>
    <br>
    <a href="https://itrk.legal/Ltu.8V.Fcq.html">Privacy Policy</a>
  </footer>

</content>

</body>
</html>
