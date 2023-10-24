<?php
session_start();
session_destroy();
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
    <title>Direct Assessment Survey</title>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
          var cookieBanner = document.getElementById('cookie-banner');
          var acceptCookies = document.getElementById('accept-cookies');
          
          acceptCookies.addEventListener('click', function() {
              // Setzen Sie hier Ihre Cookies
              // Zum Beispiel: document.cookie = "cookieName=cookieValue; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
              
              cookieBanner.style.display = 'none'; // Banner ausblenden
          });
      });
    </script>
  </head>

<body>

<div id="update">
    <h1>Direct Assessment Survey</h1>
    <p><form action="naviSessionStart.php">
      <button type="submit">Start a new session</button>
      </form>
      <p>Your device will display the navigation page of the session. 
        <br>Other devices can join the session by clicking the links below or scanning the QR Codes on the folloging navigation page on that device.</p>
    <form action="mobileDevicesLogin.php">
      <button type="submit">Mobile devices</button>
    </form>
      <p>Join a session with a MOVILE DEVICE for participation</p>
    <form action="bigScreenLogin.php">
      <button type="submit">Big screen</button>
    </form>
      <p>Join a session with a BIG SCREEN for displaying content</p>
</div>

<footer><a href="https://itrk.legal/Ltu.8V.Fcq.html">Privacy Policy</a></footer>

<div id="cookie-banner" class="cookie-banner">
    <h1>We use cookies and other technologies.</h1>
    <p>This website uses cookies. Data entered in form fields is stored until logout or closing of the browser window. By using our website, you agree to the use of cookies.</p>
    <button id="accept-cookies" class="button">I agree</button>
    <br>
    <br>
    <a href="https://itrk.legal/Ltu.8V.Fcq.html">Privacy Policy</a>
    </div>

</body>