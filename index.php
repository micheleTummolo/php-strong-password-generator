<?php
include './functions.php';
?>

<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Password generator</title>
</head>
<body class="bg-dark">
    <div class="container h-100 w-100">
        <div class="row h-100 w-100">
            <div class="col d-flex flex-column justify-content-center">

                <div class="row mb-2">
                    <div class="col text-center">
                        <h1 class="text-white fw-bolder">Strong Password Generator</h1>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col text-center">
                        <h2 class="text-white">Genera una password sicura</h2>
                    </div>
                </div>

                <!-- Central section -->
                <div class="row mb-4 bg-primary p-4 rounded-5 w-75 mx-auto">
                    <div class="col text-center">
                        
                        <div class="row">
                            <div class="col text-start">
                                <h4 class="text-white fw-bold">Lunghezza => <?php echo $length ?></h4>
                            </div>
                            <div class="col">
                                <form action="index.php" method="GET" class="d-flex">
                                    <input class="form-control me-3" type="number" name="length" placeholder="Lunghezza della password">
                                    <button class="btn btn-outline-light" type="submit">Genera</button>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col text-start">
                                <h3 class="text-white fw-bolder">Password:  <?php echo $password ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>