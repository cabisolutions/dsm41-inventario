<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Carousel Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Proyecto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="inventario.php">Inventario</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" 
        class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

      <div class="carousel-item active">
        <img src="img/00.jpg">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>¿Qué es y para qué sirve el inventario?</h1>
            <p>El inventario es el sistema ...</p>
            <p><a class="btn btn-lg btn-primary" href="#info1">Aprende más</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/01.jpg">
        <div class="container">
          <div class="carousel-caption">
            <h1>¿Cuántos tipos de inventarios hay y cuáles son?</h1>
            <p></p>
            <p><a class="btn btn-lg btn-primary" href="#info2">Aprende más</a></p>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img src="img/02.jpg">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>¿Cómo hacer correctamente un inventario?</h1>
            <p></p>
            <p><a class="btn btn-lg btn-primary" href="#info3">Aprende más</a></p>
          </div>
        </div>
      </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previo</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Siguiente</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img src="img/oli.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">

        <h2>Profesora Olivia</h2>
        <p>Docente de Tiempo Completo en TIC</p>
        <p><a class="btn btn-secondary" href="#">Ver detalles &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/orona.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">

        <h2>Docente Miguel</h2>
        <p>Docente de Tiempo Completo en TIC</p>
        <p><a class="btn btn-secondary" href="#">Ver detalles &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img src="img/beto.jpg" class="bd-placeholder-img rounded-circle" width="140" height="140">

        <h2>Docente Roberto</h2>
        <p>Docente de Horas Clases en TIC</p>
        <p><a class="btn btn-secondary" href="#">Ver detalles &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">
    
    <a name="info1" id="info1">&nbsp;</a>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">¿Qué es y para qué sirve el inventario? </h2>
        <p class="lead">El inventario es el sistema con el cual se contabiliza y consiste en una relación detallada, 
          ordenada y valorada de todos los bienes, derechos y deudas de una empresa. 
          Sirve para comprobar cuáles son los elementos que componen el patrimonio de una empresa en un momento determinado.
        </p>
      </div>
      <div class="col-md-5">
        <img src="img/img01.png" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <a name="info2" id="info2">&nbsp;</a>
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">¿Cuántos tipos de inventarios hay y cuáles son?</h2>
        <p class="lead">
        Inventarios según el momento
          <ul>
            <li>Inventario inicial. Se realiza cuando inicias con las operaciones de tu empresa. ...</li>
            <li>Inventario final. ...</li>
            <li>Inventario de anticipación o previsión. ...</li>
            <li>Inventario en lote. ...</li>
            <li>Inventario en consignación. ...</li>
            <li>Inventarios periódicos. ...</li>
            <li>Inventarios perpetuos. ...</li>
            <li>Inventarios de materias primas.</li>
          </ul>
        </p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="img/img00.png" width="500" height="500">
      </div>
    </div>

    <hr class="featurette-divider">

    <a name="info3" id="info3">&nbsp;</a>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">¿Cómo hacer correctamente un inventario?</h2>
        <p class="lead">
          Cinco pasos para realizar un inventario
          <ol>
            <li>Identificación de las existencias a inventariar: ...</li>
            <li>Identificación de los lugares a inventariar: ...</li>
            <li>Determinación de un equipo de trabajo: ...</li>
            <li>Seleccionar las herramientas de control del stock: ...</li>
            <li>Recorrido, recuento y registro:</li>
          </ol>
        </p>
      </div>
      <div class="col-md-5">
        <!-- <img src="img/img02.png" width="500" height="500"> -->
        <iframe width="500" height="400" src="https://www.youtube.com/embed/s_GBs0V4cR0" 
          title="YouTube video player" frameborder="0" 
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Volver arriba</a></p>
    <p>&copy; 2021 <a href="http://utvt.edomex.gob.mx/" target="_blank">UTVT</a> &middot; <a href="#">Condiciones</a></p>
  </footer>
</main>


    <script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
