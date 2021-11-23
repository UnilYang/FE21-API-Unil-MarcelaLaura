<?php

if(!empty($_GET['id'])){

    $id=$_GET['id'];

    require_once("db_check.php");

    if(empty($name) && empty($price) && empty($picture)){
        response(200, "car not found", NULL, NULL, NULL);
    } else {
        response(200, "car found", $name, $price, $picture);
    }
} else {
    response(400, "Invalid request", NULL, NULL, NULL);
}

    function response($status, $status_message, $car_name, $data, $image){
        $response['status']=$status;
        $response['status_message']=$status_message;
        $response['car_name']=$car_name;
        $response['price']=$data;
        $response['picture']=$image;

        $json_response=json_encode($response);

        echo $json_response;

    }
?>
