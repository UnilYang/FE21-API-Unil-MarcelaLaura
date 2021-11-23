<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Joke World</title>

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
    <h1>Joke World</h1>
    <a href="http://localhost/CodeFactory/API_DAY1/API_Classwork/API_BE1/index.php"><button class="btn-primary btn-lg mt-3 mb-5" type="button">Get the Serri's Joke</button></a>

    <div class="container">
        <div class="row">
            <?php
            require_once 'restful.php';
                $jokes = array("","","");
                foreach ($jokes as $joke) {
                  $url ='http://api.serri.codefactory.live/random/' . $joke . '?exclude=id_joke,joke';
                    $result = curl_get($url);
                    $enjoy = json_decode($result);

                    echo "
                    <div class='card text-center text-white bg-success mx-4' style='width: 18rem; font-size: 1.2rem'>
                        <p class='card-title mt-3'> Joke No. {$enjoy->id_joke} </p>
                        <div class='card-body'>
                            <p class='card-text'> {$enjoy->joke} </p>
                        </div>
                    </div>";
                }
            ?>
        </div>
    </div>
</body>
</html>