<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registro Juegos</title>
</head>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">

<body>
<nav class="nav left" style="background-color: #3E3E41;" role="navigation">
        <a class="nav-item nav-link" href="index.php"> <i class="fas fa-home"></i> PPAL</a>
        <a class="nav-item nav-link" href="formulario.php"> <i class="fas fa-hands-helping"></i>INGRESAR PRODUCTO</a>
        <a class="nav-item nav-link" href="JuegosGuardados.php"> <i class="fas fa-hands-helping"></i>GESTIONAR PRODUCTOS</a>
    </nav>

<div class="card bg-dark text-white">
  <img src="img/xbox-one-x.jpg" class="card-img" alt="...">
    <div class="card-img-overlay" align="center">

    <main>
        <div class="container">
            <form action="RegistrarProducto.php" method="POST">
                <h2>INGRESO DE PRODUCTOS</h2>
                <br>
                <br>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="NombreJuego" name="nombre">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Referencia" name="ref">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Precio" name="precio">
                    </div>                    
                </div>
                
                <div class="row mt-3">
                    
                    <div class="col">
                        <label class="font-weight-bold">Descripción Breve:</label>
                        <textarea class="form-control" rows="4" name="descripcion"></textarea>
                    </div>
                </div>

                <div class="row mt-3">                    
                    <div class="col">
                    <label class="font-weight-bold">Imagen</label>
                    <input type="text" class="form-control" placeholder="URL Imagen" name="imagen">                        
                    </div>
                </div>
                
                <div class="row mt-3">
                    <div class="col align-self-end">
                        <label class="font-weight-bold">Compatible Con: </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="compatible" value=" xboxclass">
                            <label class="form-check-label">XBOX CLASS</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="compatible" value=" xboxone">
                            <label class="form-check-label">XBOX ONE</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="compatible" value=" xboxonex">
                            <label class="form-check-label">XBOX ONE X</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-info btn-block" name="botonEnvio">Registrar</button>
            </form>
        </div>
    
    </main>

    </div>
</div>

  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>


<script src = "js/validarform.js"></script>

<footer class="fixed-bottom navbar navbar-expand-lg navbar-dark align-right" style="background-color: #3E3E41;"> 
<p style="color: white">Momento 2 WEB1, Fabian Eliecer Quintero Gonzalez- CC: 1020452011 - 2020</p> </footer>

</body>
</html>