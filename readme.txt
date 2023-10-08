Update: 2023-07-31

TODO
- Sessions
    - Screen muss jeweils in Sessions laufen. Dafür Login-Page vor Screen.php einbauen
- QR-Code auf screen aktualisieren
- parts-Ordner für screen und main erstellen

BUGS
- wenn sich ein Device aus einer Session ausloggt und wieder beitreten mag, so muss dieser Vorgang zweimal ausgeführt werden, bis wieder SessionID und user hinterlegt sind. Eine remote-Steuerung funktioniert zuvor nicht. 
- iPhone muss erst Verlauf löschen, ehe man einer weiteren Session beitreten kann.

-> "Logout a former session and than represh the cache of your device before joining a new session. 

REPORT
- Video Autoplay in Studie, aber nicht in Demo
- set Interval
    - random time -> wegen Strato. Auf eigenem/geeignetem Server bis wahrscheinlich 1ms möglich. 
- Logout automaticly (selber programmiert!)