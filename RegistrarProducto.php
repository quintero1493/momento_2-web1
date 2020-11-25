<?php

include('BaseDeDatos.php');

if(isset($_POST["botonEnvio"])){

    $nombre=$_POST['nombre'];
    $ref=$_POST['ref'];
    $precio=$_POST['precio'];
    $descripcion=$_POST['descripcion'];
    $compatible=$_POST['compatible'];
    $imagen=$_POST['imagen'];

    //echo($descripcion);// para probar que me esta ingresando los datos
    //echo($genero);// para probar que me esta ingresando los datos

    //Voy a crear una copia u Objeto de la clase BD
    $transaccion=new BaseDeDatos();
    
    //Crear Consulta
    $consultaSQL="INSERT INTO juegos(nombrejuego, ref, precio, descripcion, compatibilidad, imagen) VALUES('$nombre','$ref','$precio','$descripcion','$compatible','$imagen')";

    //llamo al metodo de la clase BD agregarDatos()
    $transaccion->agregarDatos($consultaSQL);

    header("location:formulario.php");  
}


?>