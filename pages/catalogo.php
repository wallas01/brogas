<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brogas | Catalogo</title>

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
                <h1 class="fw-bold">Catalogo <?php
                                                $id = $_GET['id'];
                                                if ($id == "distribuzione") {
                                                    echo "Distribuzione";
                                                } elseif ($id == "cortometraggi") {
                                                    echo "Cortometraggi";
                                                } else {
                                                    echo "Documentari";
                                                } ?>
                </h1>

            </div>
        </div>
    </section>

    <div class="album py-5">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">

                        <a href="./progettoDistribuzione.php"><img src="./../src/taxi.jpg" alt="Los Angeles" class="d-block w-100"></a>

                        <div class="card-body">
                            <h3>Titolo</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa distinctio soluta earum aliquam dolor, obcaecati perferendis repudiandae placeat in velit commodi deleniti inventore vitae iure tempore ex temporibus optio minima.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img src="./../src/lighthouse.jpg" alt="Los Angeles" class="d-block w-100">

                        <div class="card-body">
                            <h3>Titolo</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa distinctio soluta earum aliquam dolor, obcaecati perferendis repudiandae placeat in velit commodi deleniti inventore vitae iure tempore ex temporibus optio minima.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img src="./../src/kill.jpg" alt="Los Angeles" class="d-block w-100">

                        <div class="card-body">
                            <h3>Titolo</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa distinctio soluta earum aliquam dolor, obcaecati perferendis repudiandae placeat in velit commodi deleniti inventore vitae iure tempore ex temporibus optio minima.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img src="./../src/taxi.jpg" alt="Los Angeles" class="d-block w-100">

                        <div class="card-body">
                            <h3>Titolo</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa distinctio soluta earum aliquam dolor, obcaecati perferendis repudiandae placeat in velit commodi deleniti inventore vitae iure tempore ex temporibus optio minima.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img src="./../src/lighthouse.jpg" alt="Los Angeles" class="d-block w-100">

                        <div class="card-body">
                            <h3>Titolo</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa distinctio soluta earum aliquam dolor, obcaecati perferendis repudiandae placeat in velit commodi deleniti inventore vitae iure tempore ex temporibus optio minima.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">

                        <img src="./../src/kill.jpg" alt="Los Angeles" class="d-block w-100">

                        <div class="card-body">
                            <h3>Titolo</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa distinctio soluta earum aliquam dolor, obcaecati perferendis repudiandae placeat in velit commodi deleniti inventore vitae iure tempore ex temporibus optio minima.</p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php
    include("./../inc/footer.php")
    ?>
</body>

</html>