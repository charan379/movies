<?php
// defining abd storing db info

$servername = "localhost";
$username = "charan";
$password = "379379";
$dbname = "test";

// conn to db

$conn = new mysqli($servername,$username,$password,$dbname);

// check conn

if ($conn->connect_error)
{
  die("Connection Failled : " .$conn->connect_error);

}
