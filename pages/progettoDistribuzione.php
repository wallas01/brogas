<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brogas | Progetto Distribuzione</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./../css/style.css">
</head>

<body>

    <?php
    include("./../inc/navbar.php")
    ?>

    <section class="py-3 text-center container">
        <div class="row py-lg-5">
            <div class=" mx-auto">
                <h1 class="fw-bold">Titolo Progetto</h1>
            </div>
        </div>
    </section>


    <!-- CAROUSEL -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- The slideshow/carousel -->
        <div class="carousel-inner" style="max-height: 65vh;">
            <div class="carousel-item active">
                <img src="./../src/taxi.jpg" alt="Los Angeles" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./../src/kill.jpg" alt="Chicago" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="./../src/lighthouse.jpg" alt="New York" class="d-block w-100">
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

    <!-- TRAMA -->
    <div class="container" id="tramaFilm" style="text-align: center; max-width:30rem; margin-top:5%;">
        <h3>Trama</h3><br>
        <p style="text-align: justify;  text-justify: inter-word;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, illo ad sunt voluptate enim dolore pariatur obcaecati alias laudantium officiis eum neque quasi, dolores quod consectetur repudiandae quidem optio nobis. <br> <br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis ipsa molestias possimus vel assumstarta, asperiores reicistartis, illum consectetur corrupti labore adipisci nihil ea alias recusandae. Dicta deserunt praesentium adipisci a.</p>
    </div>

    <!-- CREDITS -->
    <div class="container">
        <div class="row">
            <div class="container" style="text-align: center; max-width:30rem; margin-top:5%;">
                <h3>Crediti</h3><br>
            </div>
        </div>
        <div class="row row-cols-2">
            <div class="col ">
                <p class="text-end">Regista:</p>
            </div>
            <div class="col">
                <p class="text-start fw-semibold">Brogas</p>
            </div>


            <div class="col ">
                <p class="text-end">Genere:</p>
            </div>
            <div class="col">
                <p class="text-start fw-semibold">Corto</p>
            </div>


            <div class="col ">
                <p class="text-end">Durata:</p>
            </div>
            <div class="col">
                <p class="text-start fw-semibold">20' 00''</p>
            </div>


            <div class="col ">
                <p class="text-end">Paese di produzione:</p>
            </div>
            <div class="col">
                <p class="text-start fw-semibold">Italia</p>
            </div>


            <div class="col ">
                <p class="text-end">Anno:</p>
            </div>
            <div class="col">
                <p class="text-start fw-semibold">2023</p>
            </div>


            <div class="col ">
                <p class="text-end">Lingue:</p>
            </div>
            <div class="col">
                <p class="text-start fw-semibold">Italiano | Inglese</p>
            </div>
        </div>
    </div>

    <!-- TRAILER -->
    <div class="container mt-5 mb-5" id="trailer" style="margin-top:5%; margin-bottom:5%;">
        <div class="embed-responsive embed-responsive-16by9" style="text-align: center;">
            <iframe src="https://player.vimeo.com/video/8537554?h=6ac380d791" width="640" height="360" style="max-width: 100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

        <div class="container" id="copertina" style="max-width:75%; margin-top:5%; margin-bottom:5%;" >
            <div class="row">
                <div class="container" style="text-align: center; max-width:30rem; margin-top:5%; margin-bottom:5%;">
                    <h3>Riconoscimenti e Partecipazioni</h3><br>
                </div>
            </div>
                <div class="row row-cols-1 row-cols-md-2 ">
                    <div class="col">
                        <img src="../src/shining.jpg" style="max-width: 100%; max-height: 95%;">
                    </div>
                    <div class="col" id="partecipazioni" >
                        <p style="padding-top: 20%;" class="text-md-start text-center font-italic">Partecipazione al festival ...</p>
                        <p  class="text-md-start text-center font-italic">Partecipazione al festival ...</p>
                        <p  class="text-md-start text-center font-italic">Partecipazione al festival ...</p>

                    </div>

                </div>
        </div>

        <?php
        include("./../inc/footer.php")
        ?>
</body>

</html>