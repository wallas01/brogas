<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brogas | Homepage</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./../css/style.css">
</head>

<body>

    <?php 
        include("./../inc/navbar.php")
    ?>

    <!-- CAROUSEL -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- The slideshow/carousel -->
        <div class="carousel-inner" style="max-height: 85vh;">
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

    <!-- HERO -->
    <div class="px-4 py-5 my-5 text-center">

        <h1 class="display-5 fw-bold">Brogas</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, iste. Facilis maiores quasi veritatis assumenda minima excepturi adipisci, nesciunt modi. At, cumque ratione iste veritatis illum quod aperiam rem asperiores?</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            </div>
        </div>
    </div>

    <?php 
        include("./../inc/footer.php")
    ?>

</body>

</html>