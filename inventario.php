<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Inventario</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
    </style>

  </head>
  <body class="bg-light">
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
            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="inventario.php">Inventario</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

  <?php 
    $conexion = mysqli_connect("db4free.net", "dsm41inventario", "12345678", "ec0727", "3306");

    if(isset($_REQUEST['registrar'])){
        $clave = $_POST['clave'];
        $nombre = $_POST['nombre'];
        $costo = $_POST['costo'];
        $tipo = $_POST['tipo'];
        $activo = (isset($_POST['activo'])) ? true : false;
        $fecha = date('Y-m-d');

        $query = "INSERT INTO tb_productos (clave, nombre, costo, tipo, activo, fecha) 
          VALUE ('$clave', '$nombre', '$costo', '$tipo', '$activo', '$fecha')";
        $results = mysqli_query($conexion, $query);

        if($results){ echo "<h3>Registro completo</h3>"; }
        else{ echo "<h3>Error: en el resgistro</h3>"; }
      }

    if(isset($_REQUEST['borrar'])){
        $id = $_REQUEST['borrar'];
        $query0 = "DELETE FROM tb_productos WHERE id_producto=$id";
        $results0 = mysqli_query($conexion, $query0);

        echo "Registro borrado con exito";
      }

  ?>
    <br><br>
    <div class="container">
      <main>
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="img/invent.png" alt="" width="72" height="57">
          <h2>Inventario</h2>
          <p class="lead">
            ---
          </p>
        </div>

        <div class="row g-5">
            <?php 
              $query1 = "SELECT count(*) AS total FROM tb_productos";
              $results1 = mysqli_query($conexion, $query1);
              $conteo = mysqli_fetch_row($results1);
            ?>
          <div class="col-md-5 col-lg-4 order-md-last">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
              <span class="text-primary">Inventario Actual</span>
              <span class="badge bg-primary rounded-pill"><?php echo $conteo[0]; ?></span>
            </h4>
            <ul class="list-group mb-3" style="overflow: scroll; height: 450px;">

              <?php 
                $query2 = "SELECT * FROM tb_productos";
                $results2 = mysqli_query($conexion, $query2);
                $total = 0;

                if($results2){
                    while($row = $results2->fetch_array()){
                        $id = $row['id_producto'];
                        $clave = $row['clave'];
                        $nombre = $row['nombre'];
                        $costo = $row['costo'];
                        $total += $costo;
                        ?>
                          <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                              <h6 class="my-0">
                                <a href="inventario.php?borrar=<?php echo $id; ?>">
                                  <img src="img/borrar.jpg" width="20" height="20"> 
                                </a>
                                <?php echo $nombre; ?>
                              </h6>
                              <small class="text-muted"><?php echo "<b>N°.".$clave."</b>"; ?></small>
                            </div>
                            <span class="text-muted"><?php echo "$".$costo; ?></span>
                          </li>
                        <?php
                      }
                  }
              ?>
            </ul>
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between">
                <span>Total (MXN)</span>
                <strong><?php echo "$".$total; ?></strong>
              </li>
            </ul>

          </div>


          <!-- ----------------------------------------------------------------------------------------------------------------- -->
          <div class="col-md-7 col-lg-8">
            <h4 class="mb-3">Nuevo Producto</h4>
            <form method="POST" name="producto" class="needs-validation">
              <div class="row g-3">

                <div class="col-sm-6">
                  <label for="clave" class="form-label">Clave | Código</label>
                  <input type="text" class="form-control" id="clave" name="clave" placeholder="" value="" required>
                </div>

                <div class="col-sm-6">
                  <label for="costo" class="form-label">Fecha | Hora</label>
                  <input type="text" class="form-control" value="<?php echo date("d/m/Y | h:i:s");?>" disabled>
                </div>

                <div class="col-12">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="" value="" required>
                </div>

                <div class="col-sm-6">
                  <label for="tipo" class="form-label">Tipo de Producto</label>
                  <select class="form-select" id="tipo" name="tipo" required>
                    <option value="">-- Selecciona Uno --</option>
                    <option value="1">Perecedero</option>
                    <option value="2">Imperecedero</option>
                  </select>
                </div>

                <div class="col-sm-6">
                  <label for="costo" class="form-label">Costo <span class="text-muted">(c/u)</span></label>
                  <input type="text" class="form-control" id="costo" name="costo" placeholder="" value="" required>
                </div>

              <hr class="my-4">

              <div class="form-check">
                <input type="checkbox" class="form-check-input" name="activo" id="activo">
                <label class="form-check-label" for="activo">Activar Producto</label>
              </div>

              <hr class="my-4">

              <input type="submit" name="registrar" id="registrar" class="w-100 btn btn-primary btn-lg" value="Registrar Producto">
            </form>
          </div>
          <!-- ----------------------------------------------------------------------------------------------------------------- -->

        </div>
      </main>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 <a href="http://utvt.edomex.gob.mx/" target="_blank">UTVT</a> &middot; <a href="#">Condiciones</a></p>
      </footer>
    </div>

    
  </body>
</html>
