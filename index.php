<?php
session_start();
session_destroy();
session_start();
?>
<!DOCTYPE html>
<html lang="de" class="notranslate" translate="no" dir="ltr">
  <head>
    <meta name="google" content="notranslate" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>Direct Assessment Survey</title>
  </head>

<body>

<div id="update">
    <h1>Direct Assessment Survey</h1>
    <p><form action="naviSessionStart.php">
      <button type="submit">Start a new session</button>
      </form>
      <p>Your device (preferably a PC) will display the navigation page of the session. 
        <br>Other devices can join the session by clicking the links below or scanning the QR Codes on the folloging navigation page on that device.</p>
    <form action="mobileDevicesLogin.php">
      <button type="submit">mobileDevices</button>
    </form>
      <p>Join a session with a MOVILE DEVICE for participation</p>
    <form action="bigScreenLogin.php">
      <button type="submit">bigScreen</button>
    </form>
      <p>Join a session with a BIG SCREEN for displaying content</p>
</div>

</body>