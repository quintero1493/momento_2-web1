<?php 

    include("BaseDeDatos.php");


    $editarJuego=new BaseDeDatos();
    
    
 
    if(isset($_POST["botonEditar"])){


    $id=$_GET["idEditar"]; 
 
    
    $nombre=$_POST['nombreEditar'];
       
    $precio=$_POST['precioEditar'];
       
    $descripcion=$_POST['descEditar'];
       

   
    $consultaSQL="UPDATE juegos SET nombrejuego='$nombre',precio='$precio',descripcion='$descripcion' WHERE idjuego='$id'";
    

    $editarJuego->editarDatos($consultaSQL);

    header("location:JuegosGuardados.php");    

    }    

?>