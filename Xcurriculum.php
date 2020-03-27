<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include ('./dotk/00head/analitycs.html'); ?>
        <?php include ('./dotk/00head/cabecera.html'); ?>
        <?php include ('./dotk/00head/estilos.html'); ?>
        <!-- libreria Animate-css -->
        <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" rel="stylesheet">
        </link>
    </head>
    <body>
        <a id="arriba">
        </a>
        <header>
            <!-- Logos e imagen de hidalgo -->
            <?php include ('../lib18/seph/hf/header.html'); ?>
            <nav>
                <!-- Menu principal superior -->
                <?php //include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
            </nav>
        </header>
        <!-- Menu menu-pegajoso DarkDesign -->
        <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>
        <main class="main container">
            <div class="alert alert-info text-center m-1 animated zoomInDown" role="alert">
            Curriculum vitae
            </div>
            <!-- CV -->
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Reyna del Carmen Martínez Rodríguez</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Alejandra Hernández Espinosa </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Lilia Benítez Corona</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <iframe id="blockrandom" name="iframe" src="./media/archivos/CVReynaparaPagMEC18.html" scrolling="auto" class="wrapper" width="100%" height="500" frameborder="1">
Esta opción no funcionará correctamente. Lamentablemente, su navegador no soporta URLs embebidas.</iframe>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <iframe id="blockrandom" name="iframe" src="./media/archivos/DatosparaCV1Ale.html" scrolling="auto" class="wrapper" width="100%" height="500" frameborder="1">
Esta opción no funcionará correctamente. Lamentablemente, su navegador no soporta URLs embebidas.</iframe>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <iframe id="blockrandom" name="iframe" src="./media/archivos/DatosparaCVLiliaparaPagMEC18.html" scrolling="auto" class="wrapper" width="100%" height="500" frameborder="1">
Esta opción no funcionará correctamente. Lamentablemente, su navegador no soporta URLs embebidas.</iframe>
            </div>
            </div>
            <!-- Fin CV -->
            <!-- seccion -->
            <div>
                <hr class="featurette-divider">
                    <!-- Menu con todos los sitios y mini sitios de la página -->
                    <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>
                </hr>
            </div>
        </main>
        <footer>
            <!-- footer de gobierno del estado -->
            <?php include ('../lib18/seph/hf/footer.html'); ?>
        </footer>
        <!-- Librerias javascript -->
        <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>
        <!-- Script para dar la animacion al boton flotante que lleva arriba -->
        <a class="back-to-top" href="#">
            Volver arriba
        </a>
        <script src="../lib18/coreFRONTx/10boton-arriba/script.js">
        </script>
        <!-- libreria Animate -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
        </script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
