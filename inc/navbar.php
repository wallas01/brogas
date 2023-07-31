<!-- HEADER -->
    <div class="container align-vertically-center mb-2 mt-2" id="header" style=" max-height: 15vh;">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between ">
            <a href="./../pages/homepage.php" id="navbarIcon" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none" style="padding-bottom: 5%;">
                <!-- <i class="fa-solid fa-film fa-2xl" style="color: #000000;"></i> -->
                <img id="logoNavbar" src="../src/logo_navbar.png" alt="Logo Brogas">
            </a>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                
                <li><a href="./../pages/about.php" id="navAbout" class="nav-link px-2 link-dark">About</a></li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-decoration-none" style="color: black;" id="navProduzioni" href="#" data-bs-toggle="dropdown" aria-expanded="false">Produzioni</a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" id="navDocumentary" href="./../pages/catalogo.php?id=documentari">Documentari</a></li>
                        <li><a class="dropdown-item" id="navCortometraggy" href="./../pages/catalogo.php?id=cortometraggi">Cortometraggi</a></li>
                    </ul>
                </li>

                <li><a href="./../pages/catalogo.php?id=distribuzione" id="navDistribuzione" class="nav-link px-2 link-dark">Distribuzione</a></li>

                <li class=" nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <span id="selectedFlag" class="fi fi-it"></span>
                    </a>

                    <ul class="dropdown-menu" aria-labelledby="Dropdown">
                        <li>
                            <a class="dropdown-item" id="englishFlag">
                                <i class="flag flag-us"></i><p style="display:inline" id="navEnglish">Inglese</p>
                                <span class="fi fi-gb"></span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" id="italianFlag">
                            <i class="flag flag-us"></i><p style="display:inline" id="navItalian">Italiano</p>
                                <span class="fi fi-it"></span>
                            </a>
                        </li>
                        
                    </ul>
                </li>

            </ul>
        </header>
    </div>