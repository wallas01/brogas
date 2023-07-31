<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST["distribuzione"])) {
        $destinazione = "distribuzione";
    }
    if (!empty($_POST["cortometraggi"])) {
        $destinazione = 'cortometraggi';
    }
    if (!empty($_POST["documentari"])) {
        $destinazione = 'documentari';
    }



    if (!empty($_POST["regia"])) {
        $myObj_IT['Regia'] = $_POST['regia'];
        $myObj_EN['Director'] = $_POST['regia'];
    }
    if (!empty($_POST["scritto_diretto"])) {
        $myObj_IT['Scritto e diretto da'] = $_POST['scritto_diretto'];
        $myObj_EN['Written and Directed by'] = $_POST['scritto_diretto'];
    }
    if (!empty($_POST["titolo"])) {
        $myObj_IT['Titolo originale'] = $_POST['titolo'];
        $myObj_EN['Original Title'] = $_POST['titolo'];
    }
    if (!empty($_POST["titoloInternazionale"])) {
        $myObj_IT['Titolo internazionale'] = $_POST['titoloInternazionale'];
        $myObj_EN['International Title'] = $_POST['titoloInternazionale'];
    }
    if (!empty($_POST["genere"])) {
        $myObj_IT['Genere'] = $_POST['genere'];
        $myObj_EN['Genre'] = $_POST['genere'];
    }
    if (!empty($_POST["durata"])) {
        $myObj_IT['Durata'] = $_POST['durata'];
        $myObj_EN['Length'] = $_POST['durata'];
    }
    if (!empty($_POST["cc-paese-produzione"])) {
        $myObj_IT['Paese di produzione'] = $_POST['cc-paese-produzione'];
        $myObj_EN['Production Country'] = $_POST['cc-paese-produzione'];
    }
    if (!empty($_POST["cc-anno"])) {
        $myObj_IT['Anno di produzione'] = $_POST['cc-anno'];
        $myObj_EN['Production Year'] = $_POST['cc-anno'];
    }
    if (!empty($_POST["cc-lingua"])) {
        $myObj_IT['Lingua'] = $_POST['cc-lingua'];
        $myObj_EN['Language'] = $_POST['cc-lingua'];
    }
    if (!empty($_POST["cc-sottotitoli"])) {
        $myObj_IT['Sottotili'] = $_POST['cc-sottotitoli'];
        $myObj_EN['Subtitles'] = $_POST['cc-sottotitoli'];
    }
    if (!empty($_POST["cc-formato"])) {
        $myObj_IT['Formato'] = $_POST['cc-formato'];
        $myObj_EN['Shooting Format'] = $_POST['cc-formato'];
    }
    if (!empty($_POST["cc-ratio"])) {
        $myObj_IT['Aspect Ratio'] = $_POST['cc-ratio'];
        $myObj_EN['Aspect Ratio'] = $_POST['cc-ratio'];
    }
    if (!empty($_POST["cc-cast"])) {
        $myObj_IT['Cast'] = $_POST['cc-cast'];
        $myObj_EN['Cast'] = $_POST['cc-cast'];
    }
    if (!empty($_POST["cc-produzione"])) {
        $myObj_IT['Produzione'] = $_POST['cc-produzione'];
        $myObj_EN['Production Company'] = $_POST['cc-produzione'];
    }
    if (!empty($_POST["cc-co-produzione"])) {
        $myObj_IT['Co-produzione'] = $_POST['cc-co-produzione'];
        $myObj_EN['Co-Production Company'] = $_POST['cc-co-produzione'];
    }
    if (!empty($_POST["cc-in-associazione"])) {
        $myObj_IT['In associazione con'] = $_POST['cc-in-associazione'];
        $myObj_EN['In association with'] = $_POST['cc-in-associazione'];
    }
    if (!empty($_POST["cc-in-collaborazione"])) {
        $myObj_IT['In collaborazione'] = $_POST['cc-in-collaborazione'];
        $myObj_EN['In collaboration with'] = $_POST['cc-in-collaborazione'];
    }
    if (!empty($_POST["cc-produttore"])) {
        $myObj_IT['Produttore'] = $_POST['cc-produttore'];
        $myObj_EN['Producer'] = $_POST['cc-produttore'];
    }
    if (!empty($_POST["cc-co-produttore"])) {
        $myObj_IT['Co-produttore'] = $_POST['cc-co-produttore'];
        $myObj_EN['Co-Producer'] = $_POST['cc-co-produttore'];
    }
    if (!empty($_POST["cc-sceneggiatura"])) {
        $myObj_IT['Sceneggiatura'] = $_POST['cc-sceneggiatura'];
        $myObj_EN['Screenplay'] = $_POST['cc-sceneggiatura'];
    }
    if (!empty($_POST["cc-fotografia"])) {
        $myObj_IT['Fotografia'] = $_POST['cc-fotografia'];
        $myObj_EN['Cinematographer'] = $_POST['cc-fotografia'];
    }
    if (!empty($_POST["cc-Montaggio"])) {
        $myObj_IT['Montaggio'] = $_POST['cc-Montaggio'];
        $myObj_EN['Editor'] = $_POST['cc-Montaggio'];
    }
    if (!empty($_POST["cc-Musica"])) {
        $myObj_IT['Musica'] = $_POST['cc-Musica'];
        $myObj_EN['Music'] = $_POST['cc-Musica'];
    }
    if (!empty($_POST["cc-Organizzatore"])) {
        $myObj_IT['Organizzatore'] = $_POST['cc-Organizzatore'];
        $myObj_EN['Line Producer'] = $_POST['cc-Organizzatore'];
    }
    if (!empty($_POST["cc-Montaggio-del-suono"])) {
        $myObj_IT['Montaggio del suono'] = $_POST['cc-Montaggio-del-suono'];
        $myObj_EN['Sound Designer'] = $_POST['cc-Montaggio-del-suono'];
    }
    if (!empty($_POST["cc-Presa-diretta"])) {
        $myObj_IT['Presa diretta'] = $_POST['cc-Presa-diretta'];
        $myObj_EN['Sound Recorder'] = $_POST['cc-Presa-diretta'];
    }
    if (!empty($_POST["cc-Mix-del-suono"])) {
        $myObj_IT['Mix del suono'] = $_POST['cc-Mix-del-suono'];
        $myObj_EN['Sound Mix'] = $_POST['cc-Mix-del-suono'];
    }
    if (!empty($_POST["cc-Animatore"])) {
        $myObj_IT['Animatore'] = $_POST['cc-Animatore'];
        $myObj_EN['Animator'] = $_POST['cc-Animatore'];
    }
    if (!empty($_POST["cc-VFX-Supervisor"])) {
        $myObj_IT['VFX Supervisor'] = $_POST['cc-VFX-Supervisor'];
        $myObj_EN['VFX Supervisor'] = $_POST['cc-VFX-Supervisor'];
    }
    if (!empty($_POST["cc-VFX-Artist"])) {
        $myObj_IT['VFX Artist'] = $_POST['cc-VFX-Artist'];
        $myObj_EN['VFX Artist'] = $_POST['cc-VFX-Artist'];
    }
    if (!empty($_POST["cc-3D-Artist"])) {
        $myObj_IT['3D Artist'] = $_POST['cc-3D-Artist'];
        $myObj_EN['3D Artist'] = $_POST['cc-3D-Artist'];
    }
    if (!empty($_POST["cc-Scenografia"])) {
        $myObj_IT['Scenografia'] = $_POST['cc-Scenografia'];
        $myObj_EN['Production Designer'] = $_POST['cc-Scenografia'];
    }
    if (!empty($_POST["cc-Costumi"])) {
        $myObj_IT['Costumi'] = $_POST['cc-Costumi'];
        $myObj_EN['Costume Designer'] = $_POST['cc-Costumi'];
    }
    if (!empty($_POST["cc-Trucco"])) {
        $myObj_IT['Trucco'] = $_POST['cc-Trucco'];
        $myObj_EN['Makeup Artist'] = $_POST['cc-Trucco'];
    }
    if (!empty($_POST["cc-Color"])) {
        $myObj_IT['Color'] = $_POST['cc-Color'];
        $myObj_EN['Colorist'] = $_POST['cc-Color'];
    }
    if (!empty($_POST["cc-Distribuzione"])) {
        $myObj_IT['Distribuzione'] = $_POST['cc-Distribuzione'];
        $myObj_EN['Distribution'] = $_POST['cc-Distribuzione'];
    }
    if (!empty($_POST["LOGLINE-IT"])) {
        $myObj_IT['LOGLINE'] = $_POST['LOGLINE-IT'];
    }
    if (!empty($_POST["LOGLINE-EN"])) {
        $myObj_EN['LOGLINE'] = $_POST['LOGLINE-EN'];
    }

    if (!empty($_POST["SINOSSI-IT"])) {
        $myObj_IT['SINOSSI'] = $_POST['SINOSSI-IT'];
    }
    if (!empty($_POST["SINOSSI-EN"])) {
        $myObj_EN['SINOSSI'] = $_POST['SINOSSI-EN'];
    }
    if (!empty($_POST["cc-trailer"])) {
        $myObj_IT['link'] = $_POST['cc-trailer'];
        $myObj_EN['link'] = $_POST['cc-trailer'];
    }
    if (!empty($_POST["cc-festival"])) {
        $myObj_IT['FESTIVAL'] = $_POST['cc-festival'];
        $myObj_EN['FESTIVAL'] = $_POST['cc-festival'];
    }

    error_reporting(E_ALL);
    ini_set('display_errors',1);

    //CREAZIONE CARTELLA DEL PROGETTO
    if (!file_exists('../src/'.$destinazione.'/'.$_POST['titolo'])) {
        mkdir('../src/'.$destinazione.'/'.$_POST['titolo'], 0777, true);
    }

    //CREAZIONE INFO.JSON
    $myJSON_IT = json_encode($myObj_IT);
    $file = fopen('../src/'.$destinazione.'/'.$_POST['titolo'].'/info_IT.json','w+') or die("File not found");
    fwrite($file, $myJSON_IT);
    fclose($file);

    $myJSON_EN = json_encode($myObj_EN);
    $file2 = fopen('../src/'.$destinazione.'/'.$_POST['titolo'].'/info_EN.json','w+') or die("File not found");
    fwrite($file2, $myJSON_EN);
    fclose($file2);
    
    //INSERIMENTO IMMAGINI IN FRAMES - CREAZIONE CARTELLA FRAMES
    if (($_FILES['cc-copertina']['name']!="")){
            mkdir('../src/'.$destinazione.'/'.$_POST['titolo'].'/Frames/');
            $path_filename_ext = '../src/'.$destinazione.'/'.$_POST['titolo'].'/Frames/'.'copertina.png';
            move_uploaded_file($_FILES['cc-copertina']['tmp_name'], $path_filename_ext);
    }

    if (($_FILES['cc-locandina']['name']!="")){
        mkdir('../src/'.$destinazione.'/'.$_POST['titolo'].'/Frames/');
        $path_filename_ext = '../src/'.$destinazione.'/'.$_POST['titolo'].'/Frames/'.'locandina.png';
        move_uploaded_file($_FILES['cc-locandina']['tmp_name'], $path_filename_ext);
    }

    if(isset($_POST['submit'])){ 
        // File upload configuration 
        $targetDir = '../src/'.$destinazione.'/'.$_POST['titolo'].'/Frames/';
        $allowTypes = array('jpg','png','jpeg','gif');
        $i=1;
        $statusMsg = $errorUploadType = ''; 
        $fileNames = array_filter($_FILES['files']['name']); 
        if(!empty($fileNames)){ 
            foreach($_FILES['files']['name'] as $key=>$val){ 
                move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetDir.$i.".png");
                $i=$i+1;
            } 
        }else{ 
            $statusMsg = 'Please select a file to upload.'; 
        } 
        header("Location: ../pages/catalogo.php?id=".$destinazione);
    } 

    die;
}



