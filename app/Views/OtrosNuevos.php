<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Celulares - Nuevos Tecimpo</title>

  <link rel="icon" href="<?php echo(base_url("public/img/la t.png"))?>">

</head>

<body>

<?php include("header.php"); ?>
  <!-- Page Content -->
<div class="container-fluid">

<div class="row">

<div class="col-lg-2">

<a href="<?php echo(base_url("public/"))  ?>"><h1 class="my-4"><img src="<?php echo(base_url("public/img/logo.png"))  ?>" class="w-100" alt="" class="rounded"></h1></a>
<div class="bg-dark p-3 rounded text-light">
<h5 class="text-center mt-3">CATEGORÍAS</h5>
<hr class="dropdown-divider mt-4">
  <div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item bg-dark">
    <h2 class="accordion-header" id="flush-headingOne">
      <a class="btn text-light text-decoration-none" href="<?php echo(base_url("public/productos/nuevos")) ?>">
        Nuevos(Todos)
      </a>
    </h2>
  </div>
  <div class="accordion-item bg-dark">
    <h2 class="accordion-header" id="flush-headingOne">
      <a class="btn text-light text-decoration-none" href="<?php echo(base_url("public/productos/usados")) ?>">
        Usados(Todos)
      </a>
    </h2>
  </div>
  <div class="accordion-item bg-dark">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Celulares
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a class="btn text-light" href="<?php echo(base_url("public/celulares/nuevos")) ?>">Nuevos</a>
        <a class="btn text-light" href="<?php echo(base_url("public/celulares/usados")) ?>">Usados</a>
      </div>
    </div>
  </div>
  <div class="accordion-item bg-dark">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
      Computadores
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a class="btn text-light" href="<?php echo(base_url("public/computadores/nuevos")) ?>">Nuevos</a>
        <a class="btn text-light" href="<?php echo(base_url("public/computadores/usados")) ?>">Usados</a>
      </div>
    </div>
  </div>
  <div class="accordion-item bg-dark">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed bg-dark text-light" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
      Variedades
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <a href="<?php echo(base_url("public/variedades/nuevos")) ?>" class="btn text-light">Varios Nuevos</a>
        <a href="<?php echo(base_url("public/variedades/usados")) ?>" class="btn text-light">Varios Usados</a>
      </div>
    </div>
  </div>
</div>
      </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-10 mt-4">


        <div class="row">
          <?php foreach($productos as $producto):?>
            <?php 
              $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
              $aleatorio = "t".substr(str_shuffle($permitted_chars), 0, 10); ?>
            <?php if($producto["categoria"]==3){ ?>
          <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
            <?php if($producto["oferta"]==2) {?>
            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Oferta</div><?php } ?>
              <a class="a_transicion" href="<?php echo(base_url("public/detalle/producto/".$producto["id"].$aleatorio))?>"><img class="card-img-top p-3" src="<?= $producto["foto"] ?>" height="250px" alt=""><img class="card-img-top p-3" src="<?= $producto["foto2"] ?>" height="250px" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="<?php echo(base_url("public/detalle/producto/".$producto["id"].$aleatorio)) ?>"><?= $producto["nombre"]?></a>
                </h4>
                <p class="card-text"><?= $producto["descripcion"]?></p>
                <?php if($producto["oferta"]==2) {?>
                  <h5><span class="text-muted text-decoration-line-through">$ <?= number_format($producto["valor"])?></span>
                  $ <?= number_format($producto["valorOferta"])?></h5><?php }else { ?>
                <h5>$ <?= number_format($producto["valor"])?></h5><?php } ?>
              </div>
              <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                  <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Agregar al Carrito</a></div>
              </div>
            </div>
          </div>
          <?php } ?>
          <?php endforeach?>
          

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php include("footer.php"); ?>

</body>

</html>

