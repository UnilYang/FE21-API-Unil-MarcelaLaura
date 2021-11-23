<?php

require_once("conn.php");

$sql = "SELECT * FROM car WHERE car_id=$id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

    $name=$row['name'];
    $price=$row['price'];
    $picture=$row['picture'];

mysqli_close($conn);
?>
