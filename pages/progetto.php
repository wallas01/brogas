<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brogas | Progetto</title>
    <?php include_once("../inc/includeSources.php") ?>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <script defer src="../js/progetto.js"></script>
</head>

<body>

    <?php
    include("./../inc/navbar.php")
    ?>

    <section class="text-center container">
        <div class="row py-lg-5">
            <div class=" mx-auto">
                <?php


                if (isset($_GET['id'])) {
                    $category = $_GET['category'];
                    $id = $_GET['id'];
                    $json = file_get_contents('../src/' . $category . '/' . $id . '/info_IT.json');

                    // Decode the JSON file
                    $json_data = json_decode($json, true);
                    echo '<h1 style="text-transform:uppercase;" class="fw-bold">' . $id . '</h1>';
                    echo '<p id="regiaDi" style="display:inline;"> </p><p class="fw-bold">' . $json_data["Regia"] . '</p>';
                }
                ?>
            </div>
        </div>
    </section>


    <!-- CAROUSEL -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- The slideshow/carousel -->
        <div class="carousel-inner" style="max-height: 65vh;">
            <?php
            $category = $_GET['category'];
            $files = scandir('../src/' . $category . '/' . $id . '/FRAMES/');
            $i = 0;
            foreach ($files as $file) {
                if (str_ends_with($file, '.png') && !str_ends_with($file, 'locandina.png') && !str_ends_with($file, 'copertina.png')) {

                    if ($i == 0) {
                        echo ' <div class="carousel-item active">';
                        echo ' <img class="carouselImages" src="../src/' . $category . '/' . $id . '/FRAMES/' . $file . '" class="d-block w-100">';
                        echo '</div>';
                        $i = $i + 1;
                    } elseif ($i == 1) {
                        echo ' <div class="carousel-item">';
                        echo ' <img class="carouselImages" src="../src/' . $category . '/' . $id . '/FRAMES/' . $file . '" class="d-block w-100">';
                        echo '</div>';
                    }
                }
            }
            ?>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- TRAMA -->
    <div class="container" id="tramaFilm">
        <h3 style="text-transform:uppercase;" id="sinossi"></h3><br>
        <p style="text-align: justify;  text-justify: inter-word;" id="sinossiTesto">

        </p>
    </div>

    <!-- CREDITS -->
    <div style="width:100%; background-color:#DDDDDD;">
        <div class="container" id="crediti">
            <div class="row">
                <div class="container" style="text-align: center; max-width:30rem; margin-top:4%;">
                    <h3 style="text-transform:uppercase;" id="creditiLingua"></h3><br>
                </div>
            </div>
            <div id="creditiDaInserire" class="row row-cols-2"></div>
        </div>
    </div>

    <!-- TRAILER -->
    <div class="container" id="trailerSection">
        <div class="row">
            <div class="container" style="text-align: center; max-width:30rem; margin-top:5%;">
                <h3 style="text-transform:uppercase;">Trailer</h3>
            </div>
            <!-- <div id="iframeDaInserire" class="embed-responsive embed-responsive-16by9" style="text-align: center; "></div> -->
            <div class="bd-example">
                <div id="iframeDaInserire" class="ratio ratio-16x9">
                </div>
            </div>
        </div>
    </div>

    <!-- RICONOSCIMENTI -->
    <div style="width:100%; background-color:#DDDDDD;">
        <div class="container" id="copertina" style="max-width:95%; margin-top:5%; margin-bottom:5%; ">
            <div class="row">
                <div class="container" style="text-align: center; max-width:30rem; margin-top:4%; margin-bottom:2%;">
                    <h3 style="text-transform:uppercase;" id="riconoscimenti"></h3><br>
                </div>
            </div>
            <div class="row gx-5 row-cols-1 row-cols-md-2 " style="padding-bottom: 5%;">
                <div class="col" id="locandina">
                    <?php echo  '<img id="copertinaProgetto" alt="' . $id . '" src="../src/' . $category . '/' . $id . '/FRAMES/locandina.png">'; ?>
                </div>
                <div class="col" id="partecipazioni"></div>
            </div>
        </div>

    </div>
    <?php
    include("./../inc/footer.php")
    ?>
</body>

</html>