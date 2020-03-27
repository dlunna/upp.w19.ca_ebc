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
                Bienvenidos sean todas y todos ustedes
            </div>
            <img src="../lib18/images/logo-upp-15.jpg" class="rounded mx-auto d-block" alt="UPPachuca">
        <h1 class="text-center">Universidad Politécnica de Pachuca</h1>
        <br/>
        <h2 class="text-center">Correos oficiales de los Integrantes del CA</h2>
        <br/>
        <h2 class="text-center">M. en EC. Alejandra Hernández Espinosa</h2>
        <p class="text-center" style="color: #2e86c1;">Correo:  alejandrahdz@upp.edu.mx</p>
        <br/>
        <h2 class="text-center">Dra. Lilia Benítez Corona</h2>
        <p class="text-center" style="color: #2e86c1;">Correo:  lybeco@upp.edu.mx</p>
        <br/>
        <h2 class="text-center">Dra. Reyna del Carmen Martínez Rodríguez</h2>
        <p class="text-center" style="color: #2e86c1;">Correo:  reyna@upp.edu.mx</p>

        <p class="text-center">Carr. Pachuca- Cd. Sahagún Km. 20 Rancho Luna, Ex Hacienda de Santa Bárbara Zempoala Hidalgo.</p>
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
