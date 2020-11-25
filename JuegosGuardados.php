<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JuegosGuardados</title>
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

<body background="img/xbox-one-x.jpg">
    <nav class="nav left" style="background-color: #3E3E41;" role="navigation">
        <a class="nav-item nav-link" href="index.php"> <i class="fas fa-home"></i> PPAL</a>
        <a class="nav-item nav-link" href="formulario.php"> <i class="fas fa-hands-helping"></i>INGRESAR PRODUCTO</a>
        <a class="nav-item nav-link" href="JuegosGuardados.php"> <i class="fas fa-hands-helping"></i>GESTIONAR PRODUCTOS</a>
    </nav>

    <?php 

    include("BaseDeDatos.php");

    $agregarjuego=new BaseDeDatos();

    $consultaSQL="SELECT * FROM juegos WHERE 1";

    $juegos=$agregarjuego->consultarDatos($consultaSQL);

    //print_r($juegos);
    
    ?>

<main>

    <div class="card bg-dark text-white">
        <img src="img/xbox-one-x.jpg" class="card-img" alt="...">
        <div class="card-img-overlay" align="center">
            <h3 class="card-title">XBOX LIVE (XBOX ONE X)</h3>
            <p class="card-text">Xbox One X: así es la consola más potente creada por Microsoft.</p>  
        
            <div class="row row-cols-1 row-cols-md-3" style="color: black">
                <?php foreach($juegos as $juego):?>             
                <div class="col mb-4">
                    <div class="card">
                        <img src="<?php echo($juego["imagen"])?>" class="card-img-top" width="80" height="200" alt="...">
                            <div class="card-body">
                            <h5 class="card-title"><?php echo($juego["nombrejuego"]) ?></h5>                            
                            <p class="card-text"><?php echo($juego["descripcion"]) ?></p>    
                            <p class="card-text"><?php echo($juego["ref"]) ?></p> 
                            <div class="card-footer">
                            <h6 class="text-muted">Precio: <?php echo($juego["precio"]) ?></h6>
                            </div>
                            <a href="eliminarProducto.php?idEliminar=<?php echo($juego['idjuego'])?>" class="btn btn-outline-success">Eliminar</a>
                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#editar<?php echo($juego['idjuego'])?>">
                            Editar
                            </button>                                   
                            </div>                          
                    </div>

                        <div class="modal fade" id="editar<?php echo($juego['idjuego'])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modificar Juego</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="editarProducto.php?idEditar=<?php echo($juego['idjuego'])?>" method="POST">
                                            <div class="form-group">
                                                <label>Nombre:</label>
                                                <input type="text" class="form-control" name="nombreEditar" value="<?php echo($juego["nombrejuego"])?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Precio:</label>
                                                <input type="text" class="form-control" name="precioEditar" value="<?php echo($juego["precio"])?>">
                                            </div>
                                            <div class="form-group">
                                                <label>Descripcion:</label>
                                                <textarea class="form-control" rows="3"name="descEditar"><?php echo($juego["descripcion"])?></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-warning" name="botonEditar">Enviar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>                                                 
                </div>                                               
                <?php endforeach?>
            </div>          
        </div>
    </div>   
    
</main>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<footer class="fixed-bottom navbar navbar-expand-lg navbar-dark align-right" style="background-color: #3E3E41;"> 
<p style="color: white">Momento 2 WEB1, Fabian Eliecer Quintero Gonzalez- CC: 1020452011 - 2020</p>              
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>

</html>