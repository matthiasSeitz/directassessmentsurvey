<?php
# (1) Replace the following values in row $pdo... with the data of your database connection:

# INSERT_HOST (e.g rdbms.strato.de)
# INSERT_NAME_OF_DATABASE
# INSERT_USERNAME

# (2) Rename this file in mysql_connection.php

$pdo = new PDO('mysql:host=INSERT_HOST;dbname=INSERT_NAME_OF_DATABASE', 'INSERT_USERNAME', 'INSERT_PASSWORD');
?>