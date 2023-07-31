<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brogas | Homepage</title>

    <?php
    include("../inc/includeSources.php");
    ?>
</head>

<body>

    <?php
    include("./../inc/navbar.php");
    ?>

    <!-- CAROUSEL -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- The slideshow/carousel -->
        <div class="carousel-inner" style="max-height: 60vh;">

            <div class="carousel-item active">
                <img src="./../src/SITO_1.png" alt="Los Angeles" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./../src/SITO_2.png" alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./../src/SITO_3.png" alt="New York" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./../src/SITO_4.png" alt="New York" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./../src/SITO_5.png" alt="New York" class="d-block w-100">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- HERO -->
    <div class="px-4 py-5 my-5 text-center">

        <h1 class="display-5 fw-bold">Brogas</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mt-4" id="logline1">Immaginiamo nuovi mondi, attraverso nuovi occhi.</p>
            <p class="lead" id="logline2">Produciamo e distribuiamo film liberi e senza confini.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            </div>
        </div>
    </div>

    <?php
    include("./../inc/footer.php")
    ?>

</body>

</html>