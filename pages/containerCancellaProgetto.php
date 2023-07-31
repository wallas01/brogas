<div class="container" id="containerCancellaProgetto" style="display:none">
    <main>

        <div class="py-5 text-center">
            <div class="container d-flex justify-content-end">
                <button type="button" id="indietro2" class="btn btn-link">Indietro</button>
            </div>
            <div class="container d-flex justify-content-end">
                <button type="button" id="indietro3" class="btn btn-link" style="display:none;">Indietro</button>
            </div>
            <h2>Cancella un Progetto</h2>
        </div>

        <div class="row">
            <div id="cancella_categoria" class="container d-flex align-items-center" style="width: 95%; max-width: 95%; height: 50vh;">
                <div class="row row-cols-1 row-cols-md-3" style="width:100%;">
                    <div class="col ">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-secondary btn-lg" id="deleteCortometraggi">Cortometraggi</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-secondary btn-lg mx-auto" id="deleteDistribuzione">Distribuzione</button>
                        </div>
                    </div>
                    <div class="col">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="button" class="btn btn-secondary btn-lg mx-auto" id="deleteDocumentari">Documentari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container" id="deleteCortometraggi_cortometraggi" style="padding-bottom: 15%;">
            <div class="list-group">

                <?php
                $somePath = '../src/cortometraggi/';
                $directories = glob($somePath . '/*', GLOB_ONLYDIR);
                foreach ($directories as $dir) {

                    $expStr = explode('//', $dir);
                    $resultString = $expStr[1];
                    echo '<button type="button" id="cortometraggi_' . $expStr[1] . '" class="list-group-item list-group-item-action progettoDaCancellare">' . $expStr[1] . '</button>';
                }
                ?>

            </div>
        </div>

        <div class="container" id="deleteCortometraggi_distribuzioni" style="padding-bottom: 15%;">
            <div class="list-group">

                <?php
                $somePath = '../src/distribuzione/';
                $directories = glob($somePath . '/*', GLOB_ONLYDIR);
                foreach ($directories as $dir) {

                    $expStr = explode('//', $dir);
                    $resultString = $expStr[1];
                    echo '<button type="button" id="distribuzione_' . $expStr[1] . '" class="list-group-item list-group-item-action progettoDaCancellare">' . $expStr[1] . '</button>';
                }
                ?>

            </div>
        </div>

        <div class="container" id="deleteCortometraggi_documentari" style="padding-bottom: 15%;">
            <div class="list-group">

                <?php
                $somePath = '../src/documentari/';
                $directories = glob($somePath . '/*', GLOB_ONLYDIR);
                foreach ($directories as $dir) {

                    $expStr = explode('//', $dir);
                    $resultString = $expStr[1];
                    echo '<button type="button" id="documentari_' . $expStr[1] . '" class="list-group-item list-group-item-action progettoDaCancellare">' . $expStr[1] . '</button>';
                }
                ?>

            </div>
        </div>
    </main>
</div>