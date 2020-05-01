<?php
define('DIRECTACCESS', TRUE);
require_once('../config/config.php');
/* Database connection start */
$servername = $settings["db"]["host"];
$username = $settings["db"]["user"] ;
$password = $settings["db"]["pass"] ;
$dbname = $settings["db"]["name"];
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>
