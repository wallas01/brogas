<?php
  session_start();
  include_once('../inc/connection.php');
  include_once('../inc/functions.php');
  check_login($con);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brogas | BackOffice</title>

    <?php
        include("../inc/includeSources.php") 
    ?>
    <script defer src="../js/backOffice.js"></script>
</head>

<body class="bg-light">
<?php

  include_once("./../inc/navbar.php");
  ?> 

  <div id="inserisci_cancella" class="container d-flex align-items-center" style="width: 95%; max-width: 95%; height: 50vh;">
   <div class="row row-cols-1 row-cols-md-2" style="width: 100%;">
     <div class="col d-flex justify-content-center">
       <div class="d-grid gap-2 col-6 mx-auto">
         <button type="button" class="btn btn-primary btn-lg" id="inserisciBtn">Inserisci progetto</button>
       </div>
     </div>
     <div class="col d-flex justify-content-center">
       <div class="d-grid gap-2 col-6 mx-auto">
         <button type="button" class="btn btn-warning btn-lg" id="cancellaBtn">Cancella progetto</button>
       </div>
     </div>
   </div>
 </div>
 
  <?php
  include_once("./containerProgetto.php");
  include_once("./containerCancellaProgetto.php");
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


</body>
  

</html>