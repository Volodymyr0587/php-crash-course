<?php

/*------------- Superglobals ------------- */

/**
 * $_GET - Contains information about variables passed through a URL or a form
 * 
 * $_POST - Contains information about variables passed through a form
 * 
 * $_COOKIE - Contains information about variables passed through a cookie
 * 
 * $_SESSION - Contains information about variables passed through a session
 * 
 * $_SERVER - Contains information about the server environment
 * 
 * $_ENV - Contains information about the environment variables
 * 
 * $_FILES - Contains information about files uploaded to the script
 * 
 * $_REQUEST - Contains information about variables passed through the form or URL
 * 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <ul>
        <?php foreach ($_SERVER as $key => $value) { ?>
            <li> <?= $key ." - ". $value; ?> </li>
         <?php } ?>
        </ul>
    
</body>
</html>
