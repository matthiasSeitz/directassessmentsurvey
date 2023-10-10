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

  <content id="table">
    <fullscreen_box>
        <content style='background-color:lightgrey'>
            <h1>Direct Assessment Survey</h1>
            <p><a href="naviSessionStart.php">Start a new session.</a>
                        <br>Your device (preferably a PC) will display the navigation page of the session.
                        <br>Other devices can join the session by clicking the links below 
                        <br>or scanning the QR Codes on the folloging navigation page on that device.</p>
            <p><a href="mobileDevicesLogin.php">Join a session with a MOVILE DEVICE <br>for participation</a></p>
            <p><a href="bigScreenLogin.php">Join a session with a BIG SCREEN <br>for displaying content</a></p>


        </content>
    </fullscreen_box>
</content>
  </body>