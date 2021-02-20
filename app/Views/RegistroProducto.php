<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro - Tablero de Control</title>
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <link href="<?php echo(base_url("public/css/dash.css"))?>" rel="stylesheet" />
        <link rel="icon" href="<?php echo(base_url("public/img/la t.png"))?>">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Hola, Javier <?php echo(session('nombre')); ?></a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>

            <!-- Navbar-->
            <ul class="navbar-nav ml-auto">
                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Javier Ramirez</span>
                                <img class="img-profile rounded-circle" height="60"
                                    src="<?php echo(base_url("public/img/foto.svg")); ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configuración
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Actividad
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">NÚCLEO</div>
                            <a class="nav-link" href="<?php echo(base_url("public/registro/productos")) ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tablero de Control
                            </a>
                            <a class="nav-link" href="<?php echo(base_url("public/pedidos")) ?>">
                                <div class="sb-nav-link-icon"><i class="far fa-folder-open"></i></div>
                                Pedidos
                            </a>
                            <a class="nav-link" href="<?php echo(base_url("public/preguntas")) ?>">
                                <div class="sb-nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cone-striped" viewBox="0 0 16 16">
                            <path d="M9.97 4.88l.953 3.811C10.158 8.878 9.14 9 8 9c-1.14 0-2.159-.122-2.923-.309L6.03 4.88C6.635 4.957 7.3 5 8 5s1.365-.043 1.97-.12zm-.245-.978L8.97.88C8.718-.13 7.282-.13 7.03.88L6.274 3.9C6.8 3.965 7.382 4 8 4c.618 0 1.2-.036 1.725-.098zm4.396 8.613a.5.5 0 0 1 .037.96l-6 2a.5.5 0 0 1-.316 0l-6-2a.5.5 0 0 1 .037-.96l2.391-.598.565-2.257c.862.212 1.964.339 3.165.339s2.303-.127 3.165-.339l.565 2.257 2.391.598z"/>
                            </svg></div>
                                Preguntas
                            </a>
                            <div class="sb-sidenav-menu-heading">INTERFAZ</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Diseños
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Modo Oscuro</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Modo claro</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Ayuda
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Autenticación
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="<?php echo(base_url("public/cambio_de_contraseña")) ?>">Olvide mi Contraseña</a>
                                        </nav>
                                    </div>
                                    
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Tablero de Control</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Registros</li>
                        </ol>
                        <div class="row">
                        <div class="col-1">
                                <div class="card-body"><i class="fas fa-folder-plus display-4 text-primary"></i><a class="text-dark stretched-link" data-toggle="modal" data-target="#registro" href="">Registrar</a></small></div>
                            </div>
                            <!-- ventana modal con formulario -->
                            <div class="portfolio-modal modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
                            <div class="modal-content">
                                <div class="modal-header bg-dark text-light">
                                    <h5 class="modal-title text-light" id="exampleModalLabel">Registro de Productos</h5>
                                    <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="POST" action="<?php echo(base_url("public/registro/productos"))?>">
                                <div class="modal-body bg-secondary p-5 form-registro">
                                <div class="row">
                                        <div class="col-12 col-md-6">
                                          <select class="form-control" name="categoria">
                                              <option value="0">Seleccione Categoria</option>
                                              <option value="1">Celular Nuevo</option>
                                              <option value="2">Celular Usado</option>
                                              <option value="3">Accesorios</option>
                                              <option value="4">Otros Nuevo</option>
                                              <option value="5">Otros Usado</option>
                                          </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input type="text" class="form-control" placeholder="Nombre de Producto" name="nombre" maxlength="18">
                                        </div>
                                </div>
                                        <div class="form-group mt-3">
                                            <input type="text" class="form-control" placeholder="Descripción Breve" name="descripcion" maxlength="30">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="3" name="detalle" placeholder="Descripción Detallada"></textarea>
                                        </div>
                                        <div class="row mt-3">
                                        <div class="col-12 col-md-6">
                                          <input type="text" class="form-control" placeholder="Valor Producto" name="valor">
                                        </div>
                                        <div class="col-12 col-md-6">
                                          <input type="number" class="form-control" placeholder="Cantidad" name="cantidad">
                                        </div>
                                        </div>
                                        <div class="form-group mt-3">
                                          <input type="text" class="form-control" placeholder="Url de la foto Principal" name="foto">
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Url de la foto 2" name="foto2">
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Url de la foto 3" name="foto3">
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Url de la foto 4" name="foto4">
                                        </div>
                                        <div class="form-group">
                                          <input type="text" class="form-control" placeholder="Url de la foto 5" name="foto5">
                                        </div>
                                        <h3 class="mt-3 text-light">Descripción Principal</h3>
                                        <div class="row mt-3">
                                        <div class="col-12 col-md-6">
                                          <input type="text" class="form-control" placeholder="Marca" name="marca">
                                        </div>
                                        <div class="col-12 col-md-6">
                                          <input type="text" class="form-control" placeholder="Linea" name="linea">
                                        </div>
                                        </div>
                                        <div class="row mt-3">
                                        <div class="col-12 col-md-6">
                                          <input type="text" class="form-control" placeholder="Pantalla" name="pantalla">
                                        </div>
                                        <div class="col-12 col-md-6">
                                          <input type="text" class="form-control" placeholder="Cámara Frontal" name="camaraf">
                                        </div>
                                        </div>
                                        <div class="row mt-3">
                                        <div class="col-12 col-md-6">
                                          <input type="text" class="form-control" placeholder="Cámara Principal" name="camarap">
                                        </div>
                                        <div class="col-12 col-md-6">
                                          <input type="text" class="form-control" placeholder="Procesador" name="procesador">
                                        </div>
                                        </div>
                                        <div class="row mt-3">
                                        <div class="col-12 col-md-6">
                                          <input type="text" class="form-control" placeholder="Ram" name="ram">
                                        </div>
                                        <div class="col-12 col-md-6">
                                          <input type="text" class="form-control" placeholder="Almacenamiento" name="almacenamiento">
                                        </div>
                                        </div>
                                </div>
                                <div class="modal-footer bg-dark">
                                            <a type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</a>
                                            <button type="submit" class="btn btn-success">Registrar</button>
                                            </div>
                                        
                                    </form>
                            </div>
                        </div>
  </div>



                            <div class="col-1">
                                    <div class="card-body"><img src="<?php echo(base_url("public/img/la t.png"))?>" height="57px"><small><a class="text-dark stretched-link" href="<?php echo(base_url("public/")) ?>">Tecimpo</a></small></div>
                            </div>
                            <div class="col-1">
                                    <div class="card-body"><i class="fas fa-file-excel text-success display-4"></i><small><br><a class="text-dark stretched-link" href="#">Exportar</a></small></div>
                            </div>
                            
                        </div>
                        
                        <!-- Mensaje de registro -->
                        <h4><?php session('mensaje') ?></h4>
                        <?php  if(session('mensaje')):?>

                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?php echo(session('mensaje')) ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php endif ?> 
                          <!-- Inicia la base de datos -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Base de Datos
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Valor Unidad</th>
                                                <th>Cantidad</th>
                                                <th>Valor Total</th>
                                                <th>Estado</th>
                                                <th>Fecha Ingreso</th>
                                                <th>Opción</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Descripción</th>
                                                <th>Valor Unidad</th>
                                                <th>Cantidad</th>
                                                <th>Valor Total</th>
                                                <th>Estado</th>
                                                <th>Fecha Ingreso</th>
                                                <th>Opción</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php foreach($celusados as $producto):?>
                                            <tr>
                                                <td><?= $producto["nombre"]?></td>
                                                <td><?= $producto["descripcion"]?></td>
                                                <td>$ <?= number_format($producto["valor"])?></td>
                                                <td><?= $producto["cantidad"]?></td>
                                                <?php if($producto["cantidad"]>0){
                                                    $valortotal = $producto["valor"]*$producto["cantidad"];
                                                }?>
                                                <td>$ <?php echo number_format($valortotal)?></td>
                                                <td><?php 
                                                  if($producto["categoria"]==0){
                                                    echo("No Aplica");
                                                  }else if($producto["categoria"]==1){
                                                    echo("Celular Nuevo");
                                                  }else if($producto["categoria"]==2){
                                                    echo("Celular Usado");
                                                  }else if($producto["categoria"]==3){
                                                    echo("Accesorios");
                                                  }else if($producto["categoria"]==4){
                                                    echo("Otros Nuevo");
                                                  }else if($producto["categoria"]==5){
                                                    echo("Otros Usado");
                                                  }
                                                ?></td>
                                                <td><?= $producto["fecharegistro"]?></td>
                                                <td>
                                                <a href="" title="Eliminar" class="btn"data-toggle="modal" data-target="#eliminarModal<?php echo($producto["id"])?>"><i class="fa fa-trash text-danger" aria-hidden="true"></i></a>
                                                <a type="button" class="btn" title="Editar" data-toggle="modal" data-target="#editar<?php echo($producto["id"])?>"><i class="fas fa-edit" aria-hidden="true"></i></a>
                                                </td>                                                
                                            </tr>
                                            <!-- Eliminar Modal-->
                                            <div class="modal fade" id="eliminarModal<?php echo($producto["id"])?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">¿Estas seguro de eliminar este producto?</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Seleccione "Eliminar" a continuación si está listo para eliminar este producto..</div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                                            <a class="btn btn-danger" href="<?php echo(base_url("public/registro/eliminar/".$producto["id"])) ?>">Eliminar</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- ventana modal con formulario Editar -->
                                            <div class="modal fade" id="editar<?php echo($producto["id"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                            <div class="modal-header bg-warning text-dark">
                                                                <h5 class="modal-title" id="exampleModalLabel">Edición de Animal</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body form-registro bg-light">
                                                                <form action="<?php echo(base_url("public/registro/editar/".$producto["id"]))?>" method="POST">
                                                                <div class="row">
                                                                    <div class="col-12 col-md-6">
                                                                        <label>Categoria:</label>
                                                                        <input type="text" class="form-control" value="<?= $producto["categoria"] ?>" name="categoriaEditar">
                                                                    </div>
                                                                    <div class="col-12 col-md-6">
                                                                        <label>Nombre:</label>
                                                                        <input type="text" class="form-control" value="<?= $producto["nombre"] ?>" name="nombreEditar" maxlength="18">
                                                                    </div>
                                                                </div>
                                                                    <div class="form-group">
                                                                        <label>Descripcion Breve:</label>
                                                                        <input type="text" class="form-control" value="<?= $producto["descripcion"] ?>" name="descripcionEditar" maxlength="30">
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Descripcion Detallada:</label>
                                                                        <textarea class="form-control" rows="3" name="detalleEditar"><?= $producto["detalle"] ?></textarea>
                                                                    </div>  
                                                                    <div class="row">
                                                                    <div class="col-12 col-md-6">
                                                                        <label>Valor:</label>
                                                                            <input class="form-control" type="text" name="valorEditar" value="<?= $producto["valor"] ?>">
                                                                    </div>
                                                                    <div class="col-12 col-md-6">
                                                                        <label>Cantidad:</label>
                                                                            <input class="form-control" type="text" name="cantidadEditar" value="<?= $producto["cantidad"] ?>">
                                                                    </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label>Foto Principal:</label>
                                                                            <input class="form-control" type="text" name="fotoEditar" value="<?= $producto["foto"] ?>">
                                                                    </div>
                                                                    <div class="row">
                                                                    <div class="col-12 col-md-6">
                                                                        <label>Foto 2:</label>
                                                                            <input class="form-control" type="text" name="foto2Editar" value="<?= $producto["foto2"] ?>">
                                                                    </div>
                                                                    <div class="col-12 col-md-6">
                                                                        <label>Foto 3:</label>
                                                                            <input class="form-control" type="text" name="foto3Editar" value="<?= $producto["foto3"] ?>">
                                                                    </div>
                                                                    </div>
                                                                    <div class="row">
                                                                    <div class="col-12 col-md-6">
                                                                        <label>Foto 4:</label>
                                                                            <input class="form-control" type="text" name="foto4Editar" value="<?= $producto["foto4"] ?>">
                                                                    </div>
                                                                    <div class="col-12 col-md-6">
                                                                        <label>Foto 5:</label>
                                                                            <input class="form-control" type="text" name="foto5Editar" value="<?= $producto["foto5"] ?>">
                                                                    </div>
                                                                    </div>
                                                                    <div class="modal-footer bg-warning text-dark mt-3">
                                                                            <a type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</a>
                                                                            <button type="submit" class="btn btn-success">Guardar</button>
                                                                    </div>
                                                                        
                                                                </form>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach?>    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Tecimpo 2021</div>
                            <div>
                                <a href="#">Politica de Privacidad</a>
                                &middot;
                                <a href="#">Terminos &amp; Condiciones</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo(base_url("public/js/scripts.js"))?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo(base_url("public/js/chart-area-demo.js"))?>"></script>
        <script src="<?php echo(base_url("public/js/chart-bar-demo.js"))?>"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo(base_url("public/js/datatables-demo.js"))?>"></script>
    </body>
</html>