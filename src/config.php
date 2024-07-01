<?php

define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root'); 
define('DB_PASS', ''); 
define('DB_NAME', 'jwt_example');

function connect() {
    $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if (!$connect) {
        die("Failed to connect: " . mysqli_connect_error());
    }

    return $connect;
}
?>
