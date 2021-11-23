<?php

$localhost = "localhost";
$user = "root";
$pass = "";
$dbname = "cars";

$connect = mysqli_connect($localhost, $user, $pass, $dbname);

if (!$connect) {
    echo("error: ". mysqli_connect($connect));
}