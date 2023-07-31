<?php
        session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brogas | Catalogo</title>

    <?php include_once("../inc/includeSources.php") ?>
    <script defer type="module" src="../js/catalogo.js"></script>
</head>

<body>

    <?php
    include("../inc/navbar.php")
    ?>

    <section class="py-3 text-center container">
        <div class="row py-lg-5">
            <div class=" mx-auto">
                <h1 class="fw-bold">Catalogo <?php
                                                if(isset($_GET['id'])){
                                                    $id = $_GET['id'];
                                                    if ($id == "distribuzione") {
                                                        echo "Distribuzione";
                                                    } elseif ($id == "cortometraggi") {
                                                        echo "Cortometraggi";
                                                    } elseif($id == "documentari") {
                                                        echo "Documentari";
                                                    } 
                                                }
                                                ?>
                </h1>

            </div>
        </div>
    </section>

    <div class="album py-5">
        <div class="container">

            <div id="elencoProgetti" class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                <?php 
                if(isset($_GET['id'])){
                $id = $_GET['id'];
                
                if ($handle = opendir('../src/'.$id)) {
                    $blacklist = array('.', '..', '.DS_Store');
                    while (false !== ($file = readdir($handle))) {
                        if (!in_array($file, $blacklist)) {
                        echo '<div class="col">';
                        echo '<div class="card shadow-sm text-center">';
                                
                        echo '<a href="./progetto.php?category='.$id.'&id='.$file.'">';
                        echo '<img src="../src/'.$id.'/'.strval($file).'/FRAMES/copertina.png" class="d-block w-100">';
                        
                        
                        $json = file_get_contents("../src/$id/$file/info_IT.json");
                        $assoc = json_decode($json, true);

                        if($assoc->inDistribuzione=="si"){
                            echo '<div class="card-img-overlay">';
                            echo '<h6 class="card-title" style="filter:invert(1); text-align: start !important;">In Distribuzione</h6>';
                            echo '</div>';
                        }
                        elseif($assoc->inSviluppo=="si"){
                            echo '<div class="card-img-overlay">';
                            echo '<h5 class="card-text" style="filter:invert(1); text-align: start !important;">In Sviluppo</h5>';
                            echo '</div>';
                        }
                        echo  '</a>';
                        echo '<div class="card-body">';
                        echo '<h5 id="titoloProgetto">'. $assoc["Titolo originale"] .'</h5>';
                        echo '<p class="card-text" id="'.strval($file).'" ></p>';
                        echo '</div>';
                        
                        echo '<ul class="list-group list-group-flush">';
                        echo '<li class="list-group-item">'. $assoc["Regia"] .'</li>';
                        echo '<li class="list-group-item">'.$assoc["Durata"] .'  -  '.$assoc["Genere"].'  -  '.$assoc["Anno di produzione"].'</li>';
                        echo '</ul>';
                        
                        echo '</div>';       
                        echo '</div>';

                        }
                    }
                    closedir($handle);
                }
            }
                ?>


            </div>
        </div>
    </div>

    <?php
    include("../inc/footer.php")
    ?>
</body>

</html>