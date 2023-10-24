<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" />
    <title>Document</title>
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

<h1>Testseite</h1>

<cookie-banner>
    <h1>We use cookies and other technologies.</h1>
    <p>This website uses cookies. Data entered in form fields is stored until logout or closing of the browser window. By using our website, you agree to the use of cookies.</p>
    <button id="accept-cookies" class="button" style="background-color:white;">I agree</button>
    <br>
    <br>
    <a href="https://itrk.legal/Ltu.8V.Fcq.html">Privacy Policy</a>
</cookie-banner>


</body>
</html>