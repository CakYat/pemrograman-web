<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa";

$dbconnect = new mysqli($host, $username, $passowrd, $database);
if ($dbconnect)
{
    echo "database terkoneksi";
}
{
    else "database tidak terkoneksi";
}
?>