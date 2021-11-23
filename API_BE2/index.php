<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cars in API</title>

    <style>
        body {
            margin-top: 2rem;
            margin-left: 6rem;
        }
        p.card-title {
            text-decoration: underline;
        }

    </style>

</head>
<body>


<h1>!!! Car All !!!</h1>
<br>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <?php
            require_once 'Restful.php';

                $cars = array("");
                foreach ($cars as $car) {
                  $url ='http://localhost/CodeFactory/API_DAY1/API_Classwork/API_BE2/displayAll.php' . $car . '?exclude=status,message,data';
                    $result = curl_get($url);
                    $carshow = json_decode($result);
                    var_dump($carshow);

                   echo  "
                    <div class='col'>
                        <div class='card mb-5'>
                            <img src='image/tms.jpg' class='card-img-top' style='width:100%; height:18rem' alt='{$carshow->status}'>
                            <div class= 'card-body'>
                                <h5 class= 'card-title'>Model Name : {$carshow->status}</h5>
                                <p class='card-text'>Status : {$carshow->status}</p>
                                <p class='card-text'>Status Message : {$carshow->message}</p>
                                <p class='card-text'>Price : {$carshow->status} EUR</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class='col'>
                    <div class='card mb-5'>
                        <img src='image/tmy.jpg' class='card-img-top' style='width:100%; height:18rem' alt='{$carshow->status}'>
                        <div class= 'card-body'>
                            <h5 class= 'card-title'>Model Name : {$carshow->status}</h5>
                            <p class='card-text'>Status : {$carshow->status}</p>
                            <p class='card-text'>Status Message : {$carshow->message}</p>
                            <p class='card-text'>Price : {$carshow->status} EUR</p>
                        </div>
                    </div>
                </div>
            
                <div class='col'>
                <div class='card mb-5'>
                    <img src='image/tm3.jpg' class='card-img-top' style='width:100%; height:18rem' alt='{$carshow->status}'>
                    <div class= 'card-body'>
                        <h5 class= 'card-title'>Model Name : {$carshow->status}</h5>
                        <p class='card-text'>Status : {$carshow->status}</p>
                        <p class='card-text'>Status Message : {$carshow->message}</p>
                        <p class='card-text'>Price : {$carshow->status} EUR</p>
                    </div>
                </div>
            </div>";
                }
            ?>
        </div>
    </div>

</body>
</html>