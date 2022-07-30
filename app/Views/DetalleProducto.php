<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Productos Tecimpo</title>
  <link rel="icon" href="<?php echo(base_url("public/img/la t.png"))?>">
</head>

<body>
<?php include("header.php") ?>


<nav aria-label="breadcrumb">
<?php foreach($productos as $producto):?>
  <ol class="breadcrumb bg-white">
    <li class="breadcrumb-item"><a class="vlistado" href="javascript:window.history.back();">Volver al listado</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php 
      if($producto["categoria"]==0){
        echo("No Aplica");
      }else if($producto["categoria"]==1){
        echo("Celulares Nuevos");
      }else if($producto["categoria"]==2){
        echo("Celulares Usados");
      }else if($producto["categoria"]==3){
        echo("Varios Nuevos");
      }else if($producto["categoria"]==4){
        echo("Varios Usados");
      }else if($producto["categoria"]==5){
        echo("Computadores Nuevos");
      }else if($producto["categoria"]==6){
        echo("Computadores Usados");
      }
  ?></li>
  </ol>
<?php endforeach ?>
</nav>
<div class="container-fluid">
<?php foreach($productos as $producto):?>
    <div class="row mt-5">  
    <div class="col-lg-1 d-none d-lg-inline">
    </div>  
        <div class="col-lg-2 d-none d-lg-inline">
            <?php if($producto["foto"]<>""){?> <a href=""><img src="<?= $producto["foto"]?>" height="100px" width="100px" alt=""></a><br> <?php }?>
            <?php if($producto["foto2"]<>""){?> <a href=""><img src="<?= $producto["foto2"]?>" height="100px" width="100px" alt=""></a><br> <?php }?>
            <?php if($producto["foto3"]<>""){?> <a href=""><img src="<?= $producto["foto3"]?>" height="100px" width="100px" alt=""></a><br> <?php }?>
            <?php if($producto["foto4"]<>""){?> <a href=""><img src="<?= $producto["foto4"]?>" height="100px" width="100px" alt=""></a><br> <?php }?>
            <?php if($producto["foto5"]<>""){?> <a href=""><img src="<?= $producto["foto5"]?>" height="100px" width="100px" alt=""></a><br> <?php }?>
        </div>
        <div class="col-lg-6 small-12 p-3">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php if($producto["foto"]<>""){?> <div class="carousel-item active">
                <img src="<?= $producto["foto"]?>" height="500px" width="500px" class="d-block" alt="...">
                </div> <?php }?>
                <?php if($producto["foto2"]<>""){?> <div class="carousel-item">
                <img src="<?= $producto["foto2"]?>" height="500px" width="500px" class="d-block" alt="...">
                </div> <?php }?>
                <?php if($producto["foto3"]<>""){?> <div class="carousel-item">
                <img src="<?= $producto["foto3"]?>" height="500px" width="500px" class="d-block" alt="...">
                </div> <?php }?>
                <?php if($producto["foto4"]<>""){?> <div class="carousel-item">
                <img src="<?= $producto["foto4"]?>" height="500px" width="500px" class="d-block" alt="...">
                </div> <?php }?>
                <?php if($producto["foto5"]<>""){?> <div class="carousel-item">
                <img src="<?= $producto["foto5"]?>" height="500px" width="500px" class="d-block" alt="...">
                </div> <?php }?>
            </div>
            </div>
        </div>
        <div class="col-lg-2 d-lg-none">
            <?php if($producto["foto"]<>""){?> <a href=""><img src="<?= $producto["foto"]?>" height="80px" width="80px" alt=""></a> <?php }?>
            <?php if($producto["foto2"]<>""){?> <a href=""><img src="<?= $producto["foto2"]?>" height="80px" width="80px" alt=""></a> <?php }?>
            <?php if($producto["foto3"]<>""){?> <a href=""><img src="<?= $producto["foto3"]?>" height="80px" width="80px" alt=""></a> <?php }?>
            <?php if($producto["foto4"]<>""){?> <a href=""><img src="<?= $producto["foto4"]?>" height="80px" width="80px" alt=""></a> <?php }?>
            <?php if($producto["foto5"]<>""){?> <a href=""><img src="<?= $producto["foto5"]?>" height="80px" width="80px" alt=""></a> <?php }?>
        </div>
        <div class="col-lg-3">
            <h3 class="page-section-heading text-uppercase text-secondary mb-0"><?= $producto["nombre"]?></h3><small class="text-muted"><?php 
                                                  if($producto["categoria"]==0){
                                                    echo("No Aplica");
                                                  }else if($producto["categoria"]==1){
                                                    echo("Nuevo");
                                                  }else if($producto["categoria"]==2){
                                                    echo("Usado");
                                                  }else if($producto["categoria"]==3){
                                                    echo("Nuevo");
                                                  }else if($producto["categoria"]==4){
                                                    echo("Usado");
                                                  }else if($producto["categoria"]==5){
                                                    echo("Nuevo");
                                                  }else if($producto["categoria"]==6){
                                                    echo("Usado");
                                                  }
                                                ?></small><br>
            <p class="display-4">$ <?= number_format($producto["valor"])?></p>
            <hr>
            <br>
            <p><i class="fas fa-shipping-fast fa-lg"></i>&nbsp;&nbsp; Envíos a Medellin $10,000 fuera $15,000</p>
            <p><i class="fas fa-dolly fa-lg"></i>&nbsp;&nbsp; Pago contra entrega solo en medelin</p>
            <br>
            <p><i class="fas fa-shield-alt fa-lg text-success"></i>&nbsp;&nbsp; 100% Producto recomendado</p>
            <p class="text-warning h1">&nbsp;&nbsp; &#9733; &#9733; &#9733; &#9733; &#9733;</p>
            <br>
            <button class="btn btn-block" id="comprar" data-toggle="modal" data-target="#verModal<?php echo($producto["id"])?>">Añadir al carrito</button>
        </div>
    
    </div>
    <hr>
    <br>
    <div class="row mt-5">
    <div class="col-lg-1 d-none d-lg-inline">
    </div>
    <?php if($producto["categoria"]==1 || $producto["categoria"]==2){?>
    <div class="col-lg-6 small-12 p-3 m-3">
    <?php if ($producto["marca"]<>"" && $producto["camarap"]<>"" && $producto["ram"]<>""){ ?><h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Descripción Principal</h2><?php } ?>
    <br>
    <table class="table table-secondary table-striped">
    <tbody>
    <?php if ($producto["marca"]<>""){ ?>
    <tr>
      <th scope="row">MARCA</th>
      <td><?= $producto["marca"] ?></td>
    </tr>
    <?php } if ($producto["linea"]<>""){ ?>
    <tr>
      <th scope="row">LINEA</th>
      <td><?= $producto["linea"] ?></td>
    </tr>
    <?php } if ($producto["modelo"]<>""){ ?>
    <tr>
      <th scope="row">MODELO</th>
      <td><?= $producto["modelo"] ?></td>
    </tr>
    <?php } if ($producto["pantalla"]<>""){ ?>
    <tr>
      <th scope="row">TAMAÑO DE PANTALLA</th>
      <td><?= $producto["pantalla"] ?></td>
    </tr>
    <?php } if ($producto["camaraf"]<>""){ ?>
    <tr>
      <th scope="row">CÁMARA FRONTAL</th>
      <td><?= $producto["camaraf"] ?></td>
    </tr>
    <?php } if ($producto["camarap"]<>""){ ?>
    <tr>
      <th scope="row">CÁMARA PRINCIPAL</th>
      <td><?=$producto["camarap"] ?></td>
    </tr>
    <?php } if ($producto["procesador"]<>""){ ?>
    <tr>
      <th scope="row">PROCESADOR</th>
      <td><?= $producto["procesador"] ?></td>
    </tr>
    <?php } if ($producto["ram"]<>""){ ?>
    <tr>
      <th scope="row">RAM</th>
      <td><?= $producto["ram"] ?></td>
    </tr>
    <?php } if ($producto["disco"]<>""){ ?>
    <tr>
      <th scope="row">DISCO DURO</th>
      <td><?= $producto["disco"] ?></td>
    </tr>
    <?php } if ($producto["almacenamiento"]<>""){ ?>
    <tr>
      <th scope="row">ALMACENAMIENTO</th>
      <td><?= $producto["almacenamiento"] ?></td>
    </tr>
    <?php } if ($producto["graficos"]<>""){ ?>
    <tr>
      <th scope="row">GRÁFICOS</th>
      <td><?= $producto["graficos"] ?></td>
    </tr>
    <?php } if ($producto["sistema"]<>""){ ?>
    <tr>
      <th scope="row">SISTEMA</th>
      <td><?= $producto["sistema"] ?></td>
    </tr>
    <?php } if ($producto["resolucion"]<>""){ ?>
    <tr>
      <th scope="row">RESOLUCIÓN DE PANTALLA</th>
      <td><?= $producto["resolucion"] ?></td>
    </tr>
    <?php } if ($producto["bateria"]<>""){ ?>
    <tr>
      <th scope="row">DURACIÓN DE BATERÍA</th>
      <td><?= $producto["bateria"] ?></td>
    </tr>
    <?php } if ($producto["material"]<>""){ ?>
    <tr>
      <th scope="row">MATERIAL</th>
      <td><?= $producto["material"] ?></td>
    </tr>
    <?php } if ($producto["color"]<>""){ ?>
    <tr>
      <th scope="row">COLOR</th>
      <td><?= $producto["color"] ?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    <?php }else if($producto["categoria"]==5 || $producto["categoria"]==6){ ?>
    <div class="col-lg-6 small-12 p-3 m-3">
    <?php if ($producto["marca"]<>"" && $producto["procesador"]<>"" && $producto["ram"]<>""){ ?><h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Descripción Principal</h2><?php } ?>
    <br>
    <table class="table table-secondary table-striped">
    <tbody>
    <?php if ($producto["marca"]<>""){ ?>
    <tr>
      <th scope="row">MARCA</th>
      <td><?= $producto["marca"] ?></td>
    </tr>
    <?php } if ($producto["linea"]<>""){ ?>
    <tr>
      <th scope="row">LINEA</th>
      <td><?= $producto["linea"] ?></td>
    </tr>
    <?php } if ($producto["modelo"]<>""){ ?>
    <tr>
      <th scope="row">MODELO</th>
      <td><?= $producto["modelo"] ?></td>
    </tr>
    <?php } if ($producto["pantalla"]<>""){ ?>
    <tr>
      <th scope="row">TAMAÑO DE PANTALLA</th>
      <td><?= $producto["pantalla"] ?></td>
    </tr>
    <?php } if ($producto["camaraf"]<>""){ ?>
    <tr>
      <th scope="row">CÁMARA FRONTAL</th>
      <td><?= $producto["camaraf"] ?></td>
    </tr>
    <?php } if ($producto["camarap"]<>""){ ?>
    <tr>
      <th scope="row">CÁMARA PRINCIPAL</th>
      <td><?=$producto["camarap"] ?></td>
    </tr>
    <?php } if ($producto["procesador"]<>""){ ?>
    <tr>
      <th scope="row">PROCESADOR</th>
      <td><?= $producto["procesador"] ?></td>
    </tr>
    <?php } if ($producto["ram"]<>""){ ?>
    <tr>
      <th scope="row">RAM</th>
      <td><?= $producto["ram"] ?></td>
    </tr>
    <?php } if ($producto["disco"]<>""){ ?>
    <tr>
      <th scope="row">DISCO DURO</th>
      <td><?= $producto["disco"] ?></td>
    </tr>
    <?php } if ($producto["almacenamiento"]<>""){ ?>
    <tr>
      <th scope="row">ALMACENAMIENTO</th>
      <td><?= $producto["almacenamiento"] ?></td>
    </tr>
    <?php } if ($producto["graficos"]<>""){ ?>
    <tr>
      <th scope="row">GRÁFICOS</th>
      <td><?= $producto["graficos"] ?></td>
    </tr>
    <?php } if ($producto["sistema"]<>""){ ?>
    <tr>
      <th scope="row">SISTEMA</th>
      <td><?= $producto["sistema"] ?></td>
    </tr>
    <?php } if ($producto["resolucion"]<>""){ ?>
    <tr>
      <th scope="row">RESOLUCIÓN DE PANTALLA</th>
      <td><?= $producto["resolucion"] ?></td>
    </tr>
    <?php } if ($producto["bateria"]<>""){ ?>
    <tr>
      <th scope="row">DURACIÓN DE BATERÍA</th>
      <td><?= $producto["bateria"] ?></td>
    </tr>
    <?php } if ($producto["material"]<>""){ ?>
    <tr>
      <th scope="row">MATERIAL</th>
      <td><?= $producto["material"] ?></td>
    </tr>
    <?php } if ($producto["color"]<>""){ ?>
    <tr>
      <th scope="row">COLOR</th>
      <td><?= $producto["color"] ?></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    <?php } else if($producto["categoria"]==3 || $producto["categoria"]==4){ ?>
    <div class="col-lg-6 small-12 p-3 m-3">
    <?php if ($producto["marca"]<>"" || $producto["modelo"]<>"" || $producto["color"]<>""){ ?><h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Descripción Principal</h2><?php } ?>
    <br>
    <table class="table table-secondary table-striped">
    <tbody>
    <?php if ($producto["marca"]<>""){ ?>
    <tr>
      <th scope="row">MARCA</th>
      <td><?= $producto["marca"] ?></td>
    </tr>
    <?php } if ($producto["linea"]<>""){ ?>
    <tr>
      <th scope="row">LINEA</th>
      <td><?= $producto["linea"] ?></td>
    </tr>
    <?php } if ($producto["modelo"]<>""){ ?>
    <tr>
      <th scope="row">MODELO</th>
      <td><?= $producto["modelo"] ?></td>
    </tr>
    <?php } if ($producto["pantalla"]<>""){ ?>
    <tr>
      <th scope="row">TAMAÑO DE PANTALLA</th>
      <td><?= $producto["pantalla"] ?></td>
    </tr>
    <?php } if ($producto["camaraf"]<>""){ ?>
    <tr>
      <th scope="row">CÁMARA FRONTAL</th>
      <td><?= $producto["camaraf"] ?></td>
    </tr>
    <?php } if ($producto["camarap"]<>""){ ?>
    <tr>
      <th scope="row">CÁMARA PRINCIPAL</th>
      <td><?=$producto["camarap"] ?></td>
    </tr>
    <?php } if ($producto["procesador"]<>""){ ?>
    <tr>
      <th scope="row">PROCESADOR</th>
      <td><?= $producto["procesador"] ?></td>
    </tr>
    <?php } if ($producto["ram"]<>""){ ?>
    <tr>
      <th scope="row">RAM</th>
      <td><?= $producto["ram"] ?></td>
    </tr>
    <?php } if ($producto["disco"]<>""){ ?>
    <tr>
      <th scope="row">DISCO DURO</th>
      <td><?= $producto["disco"] ?></td>
    </tr>
    <?php } if ($producto["almacenamiento"]<>""){ ?>
    <tr>
      <th scope="row">ALMACENAMIENTO</th>
      <td><?= $producto["almacenamiento"] ?></td>
    </tr>
    <?php } if ($producto["graficos"]<>""){ ?>
    <tr>
      <th scope="row">GRÁFICOS</th>
      <td><?= $producto["graficos"] ?></td>
    </tr>
    <?php } if ($producto["sistema"]<>""){ ?>
    <tr>
      <th scope="row">SISTEMA</th>
      <td><?= $producto["sistema"] ?></td>
    </tr>
    <?php } if ($producto["resolucion"]<>""){ ?>
    <tr>
      <th scope="row">RESOLUCIÓN DE PANTALLA</th>
      <td><?= $producto["resolucion"] ?></td>
    </tr>
    <?php } if ($producto["bateria"]<>""){ ?>
    <tr>
      <th scope="row">DURACIÓN DE BATERÍA</th>
      <td><?= $producto["bateria"] ?></td>
    </tr>
    <?php } if ($producto["material"]<>""){ ?>
    <tr>
      <th scope="row">MATERIAL</th>
      <td><?= $producto["material"] ?></td>
    </tr>
    <?php } if ($producto["color"]<>""){ ?>
    <tr>
      <th scope="row">COLOR</th>
      <td><?= $producto["color"] ?></td>
    </tr>
    <?php } ?>
    
    </tbody>
    </table>
    </div>
    <?php }  ?> 
    </div>
    <div class="row mt-5">
    <div class="col-lg-1 d-none d-lg-inline">
    </div>
    <?php if ($producto["detalle"]<>""){ ?>
    <div class="col-lg-6 small-12 p-3 bg-light m-3">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Descripción del Producto</h2>
    <br>
    <p class="lead"><?= $producto["detalle"]?></p>
    </div>
    <?php } ?>
    </div>
    <div class="row mt-5">
    <div class="col-lg-1 d-none d-lg-inline">
    </div>
    <div class="col-lg-6 p-3 small-12 bg-light m-3">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Descripción de Envío</h2>
    <br>
    <p class="lead">Para realizar compras con pago contra entrega debes estar ubicado en medellin, el poblado, aguacatala, envigado, itaguí, sabaneta, la estrella ó caldas - Antioquia.</p>
    <p class="lead">El valor del domicilio en los municipios mencionados es desde $ 5,000 hasta $ 10,000 y el tiempo de entrega aproximado es de 1 a 2 días hábiles.</p>
    <p class="lead">Para envíos a otros lugares el valor del domicilio es de $ 10,000 hasta $ 20,000 y el tiempo de entrega aproximado es de 3 a 7 días hábiles.</p>
    <br>
    <p class="lead">El valor de envío y tiempos de entrega varian dependiendo del producto y lugar de destino.</p>
    </div>
    </div>
    <hr>


                 
                        
                        <h4><?php session('mensaje') ?></h4>
                        <?php  if(session('mensaje')):?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo(session('mensaje')) ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <?php endif ?>
                    
                
                                                       
    
    <?php endforeach ?>

                        </div>
    <!-- Productos sugeridos -->

<div class="container">
   <div class="row">
    <h4 class="text-center">Productos Sugeridos</h4>
   </div>
<div class="row mt-5">
  <?php foreach($productos as $producto):?>
    <?php 
      $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
      $aleatorio = "t".substr(str_shuffle($permitted_chars), 0, 10); ?>
    <?php if($producto["categoria"]==1 || $producto["categoria"]==2){ ?>
  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <a class="a_transicion" href="<?php echo(base_url("public/detalle/producto/".$producto["id"].$aleatorio))?>"><img class="card-img-top p-3" src="<?= $producto["foto"] ?>" height="210px" alt=""><img class="card-img-top p-3" src="<?= $producto["foto2"] ?>" height="210px" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="<?php echo(base_url("public/detalle/producto/".$producto["id"].$aleatorio)) ?>"><?= $producto["nombre"]?></a>
        </h4>
        <p class="card-text"><?= $producto["descripcion"]?></p>
        <h5>$ <?= number_format($producto["valor"])?></h5>
      </div>
    </div>
  </div>
  
  <?php } ?>

    <?php 
      $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
      $aleatorio = "t".substr(str_shuffle($permitted_chars), 0, 10); ?>
    <?php if($producto["categoria"]==3 || $producto["categoria"]==4){ ?>
  <div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
      <a class="a_transicion" href="<?php echo(base_url("public/detalle/producto/".$producto["id"].$aleatorio))?>"><img class="card-img-top p-3" src="<?= $producto["foto"] ?>" height="250px" alt=""><img class="card-img-top p-3" src="<?= $producto["foto2"] ?>" height="250px" alt=""></a>
      <div class="card-body">
        <h4 class="card-title">
          <a href="<?php echo(base_url("public/detalle/producto/".$producto["id"].$aleatorio)) ?>"><?= $producto["nombre"]?></a>
        </h4>
        <p class="card-text"><?= $producto["descripcion"]?></p>
        <h5>$ <?= number_format($producto["valor"])?></h5>
      </div>
    </div>
  </div>
  <?php } ?>


  <?php endforeach ?>

</div>

<!-- /.container -->
</div>
<?php include("footer.php"); ?>

</body>

</html>
