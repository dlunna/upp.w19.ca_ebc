<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>

  <!-- libreria Animate-css -->
  <link href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css" rel="stylesheet"></link>

</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php //include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
    <div class="container marketing">
      <br />



      <div class="alert alert-info text-center m-1 animated zoomInDown" role="alert">
        Bienvenidos sean todas y todos ustedes
      </div>

      <p class="text-muted">
        Cuerpo Académico en consolidación: ESTRATEGIAS DE APRENDIZAJE Y ENSEÑANZA EN EDUCACIÓN BASADA EN COMPETENCIAS
      </p>

      <p class="text-muted">
        Datos generales: UPPACH-CA-11
      </p>
      <p class="text-muted">
        Líneas de Generación y Aplicación del Conocimiento: Factores que intervienen en el proceso de aprendizaje y enseñanza para la formación integral de los estudiantes en la educación basada en competencias
      </p>


      <!-- Contenido -->

      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <i class="fas fa-address-book"></i> Quienes somos
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              <p>Un grupo de profesoras - investigadoras que tienen como objetivos:</p>
              <ul class="text-muted">
                <li>Apoyar la implementación de estrategias de aprendizaje y enseñanza que impulsen la mejora en la formación integral de estudiantes en contextos educativos.</li>
                <li>Desarrollar proyectos de investigación educativa para atender situaciones de adversidad escolar a través de la resiliencia para impactar en el desarrollo humano de estudiantes, profesores y sociedad.</li>
              </ul>

              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-chess"></i> Misión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="fas fa-low-vision"></i> Visión</a>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active text-muted text-justify" id="home" role="tabpanel" aria-labelledby="home-tab">
                  Ser un grupo de profesoras de tiempo completo que realizan investigación educativa respecto a la diversidad de factores que intervienen en el proceso de aprendizaje y enseñanza para la formación integral del estudiantado en contextos
                  de educación basada en competencias
                </div>
                <div class="tab-pane fade text-muted text-justify" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                  Llegar a ser un grupo de investigación que genere innovación en el desarrollo de procesos educativos que impulsen la mejora en el aprendizaje y la enseñanza en contextos de educación.
                </div>
              </div>
            </div>
            <div class="col-md-6 float-right">
              <img src="./media/img/5r7n91f8-ConvertImage.jpg" class="img-fluid wow fadeInDownBig rounded" width="100%" heigth="680px" alt="">
            </div>
          </div>
        </div>


        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fas fa-users"></i> Integrantes
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              <ul class="text-muted">
                <li><a href="./media/archivos/DatosparaCVLiliaparaPagMEC18.pdf">Lilia Benítez Corona</a></li>
                <li><a href="./media/archivos/DatosparaCV1Ale.pdf">Alejandra Hernández Espinosa</a></li>
                <li><a href="./media/archivos/CVReynaparaPagMEC18.pdf">Reyna del Carmen Martínez Rodríguez</a></li>
              </ul>
              <p class="">Colaboradores</p>
              <p class="text-muted text-justify">Grupo de Investigación de Cómputo Suave y Analítica de datos, <strong>María de los Angeles Cosio León</strong></p>
            </div>
          </div>
        </div>


      </div>

      <!-- FinContenido -->















      <br />
      <br />
      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <!-- libreria Animate -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
  </script>
  <script>
    new WOW().init();
  </script>





  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
