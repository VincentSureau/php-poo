<?php

use App\AnimalGenerator;

require 'vendor/autoload.php';

$animalGenerator = new AnimalGenerator();

$animals = $animalGenerator->getAnimals(50);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
  </head>
  <body>
    <main class="container">
        <h1>Nos animaux à adopter</h1>
    
        <div class="row">
            <?php foreach($animals as $animal): ?>
                <div class="col-sm-4 mb-3">
                    <div class="card animal">
                        <img src="<?= $animal->getPicture()?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $animal->getName() ?></h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Type: <?= $animal->getSpecie() ?></li>
                                <li class="list-group-item">Sexe: <?= $animal->getGender() ?></li>
                                <li class="list-group-item">Age: <?= $animal->getAge() ?> ans</li>
                                <li class="list-group-item">Couleur: <?= $animal->getColor() ?></li>
                            </ul>
                            <p class="card-text"><?= $animal->getShortDescription() ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>