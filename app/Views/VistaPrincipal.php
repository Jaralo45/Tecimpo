<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tecimpo</title>

</head>

<body id="page-top">
<?php include("header.php"); ?>
  <!-- Navigation -->
            <!-- End of Topbar -->
          <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?php echo(base_url("public/img/carrusel.svg"))?>" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo(base_url("public/img/2.jpg"))?>" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo(base_url("public/img/3.jpg"))?>" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
        </div>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><h2 class="text-center text-secondary">CATEGORÍAS</h2></div>
                    <div class="divider-custom-line"></div>
                </div>
        </div>
        <div class="container">
        <div class="row mt-5">
          <div class="col-lg-3 col-md-4 mb-4">
            <div class="card h-100">
              <img class="imgcategoria rounded" src="<?php echo(base_url("public/img/celu.svg")); ?>" alt="">
              <a href="<?php echo(base_url("public/celulares/nuevos")); ?>"><p class="text-center textoimg">CELULARES NUEVOS</p></a>
              <a href="<?php echo(base_url("public/celulares/usados")); ?>"><p class="text-center textoimg1">CELULARES USADOS</p></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mb-4">
            <div class="card h-100">
              <img class="imgcategoria rounded" src="<?php echo(base_url("public/img/celu.svg")); ?>" alt="">
              <a href="<?php echo(base_url("public/computadores/nuevos")); ?>"><p class="text-center textoimg">COMPUTADORES NUEVOS</p></a>
              <a href="<?php echo(base_url("public/computadores/usados")); ?>"><p class="text-center textoimg1">COMPUTADORES USADOS</p></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mb-4">
            <div class="card h-100">
              <img class="imgcategoria rounded" src="<?php echo(base_url("public/img/accesorios.svg")); ?>" alt="">
              <a href="<?php echo(base_url("public/variedades/nuevos")); ?>"><p class="text-center textoimg">VARIEDADES NUEVOS</p></a>
              <a href="<?php echo(base_url("public/variedades/usados")); ?>"><p class="text-center textoimg1">VARIEDADES USADOS</p></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mb-4">
            <div class="card h-100">
              <img class="imgcategoria rounded" src="<?php echo(base_url("public/img/celu.svg")); ?>" alt="">
              <a href="<?php echo(base_url("public/productos/nuevos")); ?>"><p class="text-center textoimg">VER TODO NUEVOS</p></a>
              <a href="<?php echo(base_url("public/productos/usados")); ?>"><p class="text-center textoimg1">VER TODO USADOS</p></a>
            </div>
          </div>

        </div>
        </div>

<?php include("footer.php"); ?>

</body>

</html>