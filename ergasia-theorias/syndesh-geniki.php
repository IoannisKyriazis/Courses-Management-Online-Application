<?php

/*
 * Configuration information is stored here.
 */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'ergasiatheorias');
define('DB_PASSWORD', 'ergasia-theo');
define('DB_NAME', 'ergasiatheorias');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
