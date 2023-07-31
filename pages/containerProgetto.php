<div class="container" id="containerProgetto" style="display:none">
  <main>

    <div class="py-5 text-center">
    <div class="container d-flex justify-content-end">
      <button type="button" id="indietro" class="btn btn-link">Indietro</button>
    </div>
      <h2>Aggiungi un Progetto</h2>
    </div>

    <div class="row">
      <h4 class="mb-3">Tipo del progetto</h4>
      <form method="post" action="../inc/nuovoProgetto.php" enctype="multipart/form-data">
        <!--Scelta del tipo di progetto-->
        <div class="my-3">
          <div class="form-check">
            <input type="radio" class="form-check-input" name="distribuzione">
            <label class="form-check-label" >Progetto di distribuzione</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="cortometraggi>
            <label class="form-check-label" >Produzione cortometraggi</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" name="documentari">
            <label class="form-check-label">Produzione documentari</label>
          </div>
        </div>

        <div class="row gy-3">
          
          <div class="col-md-6">
            <label for="regia" class="form-label">Regia di</label>
            <input type="text" class="form-control" name="regia" required>
          </div>

          <div class="col-md-6">
            <label for="scritto_diretto" class="form-label">Scritto e Diretto da</label>
            <input type="text" class="form-control" name="scritto_diretto" required>
          </div>

          <div class="col-md-6">
            <label for="titolo" class="form-label">Titolo originale</label>
            <input class="form-control" name="titolo" required>
            <div class="invalid-feedback">
              E' richiesto il titolo originale
            </div>
          </div>

          <div class="col-md-6">
            <label for="titoloInternazionale" class="form-label">Titolo Internazionale</label>
            <input type="text" class="form-control" name="titoloInternazionale">
          </div>

          <div class="col-md-6">
            <label for="genere" class="form-label">Genere</label>
            <input type="text" class="form-control" name="genere" required>
          </div>

          <div class="col-md-6">
            <label for="durata" class="form-label">Durata</label>
            <input type="text" class="form-control" name="durata" required>
            <div class="invalid-feedback">
              E' richiesta la darata
            </div>
          </div>

          <div class="col-md-6">
            <label for="cc-paese-produzione" class="form-label">Paese di produzione</label>
            <input type="text" class="form-control" name="cc-paese-produzione" >
            <div class="invalid-feedback">
              E' richiesto il paese di produzione
            </div>
          </div>

          <div class="col-md-6">
            <label for="cc-anno" class="form-label">Anno</label>
            <input type="text" class="form-control" name="cc-anno" >
            <div class="invalid-feedback">
              E' richiesto l'anno di produzione
            </div>
          </div>

          <div class="col-md-6">
            <label for="cc-lingua" class="form-label">Lingua/e</label>
            <input type="text" class="form-control" name="cc-lingua" >
            <div class="invalid-feedback">
              Sono richieste le lingue
            </div>
          </div>
          
          <div class="col-md-6">
            <label for="cc-sottotitoli" class="form-label">Sottotitoli</label>
            <input type="text" class="form-control" name="cc-sottotitoli">
          </div>

          <div class="col-md-6">
            <label for="cc-formato" class="form-label">Formato di ripresa</label>
            <input type="text" class="form-control" name="cc-formato">
          </div>
          
          <div class="col-md-6">
            <label for="cc-ratio" class="form-label">Aspect Ratio</label>
            <input type="text" class="form-control" name="cc-ratio">
          </div>

          <div class="col-md-6">
            <label for="cc-cast" class="form-label">Cast</label>
            <input type="text" class="form-control" name="cc-cast">
          </div>
          
          <div class="col-md-6">
            <label for="cc-produzione" class="form-label">Produzione</label>
            <input type="text" class="form-control" name="cc-produzione">
          </div>

          <div class="col-md-6">
            <label for="cc-co-produzione" class="form-label">Co-produzione</label>
            <input type="text" class="form-control" name="cc-co-produzione">
          </div>
          
          <div class="col-md-6">
            <label for="cc-in-associazione" class="form-label">In associazione con</label>
            <input type="text" class="form-control" name="cc-in-associazione">
          </div>

          <div class="col-md-6">
            <label for="cc-in-collaborazione" class="form-label">In collaborazione con</label>
            <input type="text" class="form-control" name="cc-in-collaborazione">
          </div>
          
          <div class="col-md-6">
            <label for="cc-produttore" class="form-label">Produttore</label>
            <input type="text" class="form-control" name="cc-produttore">
          </div>

          <div class="col-md-6">
            <label for="cc-co-produttore" class="form-label">Co-produttore</label>
            <input type="text" class="form-control" name="cc-co-produttore">
          </div>
          
          <div class="col-md-6">
            <label for="cc-sceneggiatura" class="form-label">Sceneggiatura</label>
            <input type="text" class="form-control" name="cc-sceneggiatura">
          </div>

          <div class="col-md-6">
            <label for="cc-fotografia" class="form-label">Fotografia</label>
            <input type="text" class="form-control" name="cc-fotografia">
          </div>
          
          <div class="col-md-6">
            <label for="cc-Montaggio" class="form-label">Montaggio</label>
            <input type="text" class="form-control" name="cc-Montaggio">
          </div>

          <div class="col-md-6">
            <label for="cc-Musica" class="form-label">Musica</label>
            <input type="text" class="form-control" name="cc-Musica">
          </div>
          
          <div class="col-md-6">
            <label for="cc-Organizzatore" class="form-label">Organizzatore</label>
            <input type="text" class="form-control" name="cc-Organizzatore">
          </div>

          <div class="col-md-6">
            <label for="cc-Montaggio-del-suono" class="form-label">Montaggio del suono</label>
            <input type="text" class="form-control" name="cc-Montaggio-del-suono">
          </div>
          
          <div class="col-md-6">
            <label for="cc-Presa-diretta" class="form-label">Presa diretta</label>
            <input type="text" class="form-control" name="cc-Presa-diretta">
          </div>
          
          <div class="col-md-6">
            <label for="cc-Mix-del-suono" class="form-label">Mix del suono</label>
            <input type="text" class="form-control" name="cc-Mix-del-suono">
          </div>
          
          <div class="col-md-6">
            <label for="cc-Animatore" class="form-label">Animatore</label>
            <input type="text" class="form-control" name="cc-Animatore">
          </div>

          <div class="col-md-6">
            <label for="cc-VFX-Supervisor" class="form-label">VFX Supervisor</label>
            <input type="text" class="form-control" name="cc-VFX-Supervisor">
          </div>
          
          <div class="col-md-6">
            <label for="cc-VFX-Artist" class="form-label">VFX Artist</label>
            <input type="text" class="form-control" name="cc-VFX-Artist">
          </div>

          <div class="col-md-6">
            <label for="cc-3D-Artist" class="form-label">3D Artist</label>
            <input type="text" class="form-control" name="cc-3D-Artist">
          </div>
          
          <div class="col-md-6">
            <label for="cc-Scenografia" class="form-label">Scenografia</label>
            <input type="text" class="form-control" name="cc-Scenografia">
          </div>
          
          <div class="col-md-6">
            <label for="cc-Costumi" class="form-label">Costumi</label>
            <input type="text" class="form-control" name="cc-Costumi">
          </div>
          
          <div class="col-md-6">
            <label for="cc-Trucco" class="form-label">Trucco</label>
            <input type="text" class="form-control" name="cc-Trucco">
          </div>

          <div class="col-md-6">
            <label for="cc-Color" class="form-label">Color</label>
            <input type="text" class="form-control" name="cc-Color">
          </div>
          
          <div class="col-md-6">
            <label for="cc-Distribuzione" class="form-label">Distribuzione</label>
            <input type="text" class="form-control" name="cc-Distribuzione">
          </div>

          <div class="col-md-12">
            <label for="LOGLINE-IT" class="form-label">Logline in Italiano</label>
            <textarea class="form-control" rows="3" name="LOGLINE-IT" required></textarea>
            <div class="invalid-feedback">
              E' richiesta la logline
            </div>
          </div>

          <div class="col-md-12">
            <label for="LOGLINE-EN" class="form-label">Logline in Inglese</label>
            <textarea class="form-control" rows="3" name="LOGLINE-EN" required></textarea>
            <div class="invalid-feedback">
              E' richiesta la logline
            </div>
          </div>

          <div class="col-md-12">
            <label for="SINOSSI-IT" class="form-label">Sinossi in Italiano</label>
            <textarea class="form-control" rows="3" name="SINOSSI-IT" required></textarea>
            <div class="invalid-feedback">
              E' richiesta la sinossi
            </div>
          </div>

          <div class="col-md-12">
            <label for="SINOSSI-EN" class="form-label">Sinossi in Inglese</label>
            <textarea class="form-control" rows="3" name="SINOSSI-EN" required ></textarea>
            <div class="invalid-feedback">
              E' richiesta la sinossi
            </div>
          </div>


          <div class="col-md-6">
            <label for="cc-trailer" class="form-label">Link Trailer</label>
            <input type="text" class="form-control" name="cc-trailer" required>
            <div class="invalid-feedback">
              E' richiesto il link del trailer (YT/Vimeo)
            </div>
          </div>

          <div class="col-md-6">
            <label for="cc-locandina" class="form-label">Locandina</label>
            <input class="form-control" type="file" name="cc-locandina" onchange="preview()" required>
            <div class="invalid-feedback">
              E' richiesta una locandina
            </div>
          </div>

          <div class="col-md-6">
            <label for="cc-copertina" class="form-label">Immagine di copertina</label>
            <input class="form-control" type="file" name="cc-copertina" onchange="preview()" required>
            <div class="invalid-feedback">
              E' richiesta un'immagine di copertina
            </div>
          </div>

          <div class="col-md-6">
            <label for="files[]" class="form-label">Immagini</label>
            <input class="form-control" type="file" name="files[]" multiple data-max_length="10" required>
            <div class="invalid-feedback">
              E' richiesta almeno un'immagine
            </div>
          </div>

          
          <div class="col-md-6" id="festival" class="festival">
            <label for="cc-festival" class="form-label">Festival e Riconoscimenti</label>
            <div class="input-group" >
              <input type="text" class="form-control" name="cc-festival[]">
              <span class="input-group-text" id="basic-addon1">+</span>
            </div>
          </div>

          </div>

        </div>

        <button id="inserisciProgettoBtn" name="submit" class="w-100 btn btn-primary btn-lg" type="submit" style="margin-top: 4vh; margin-bottom:4vh;">Inserisci progetto</button>
    </form>
</div>
</div>
</main>

</div>




