<?php

include("BaseDeDatos.php");

$idEliminar=($_GET["idEliminar"]);

$eliminarRegistro=new BaseDeDatos();

$consultaSQL="DELETE FROM juegos WHERE idjuego='$idEliminar'";

$eliminarRegistro->eliminarDatos($consultaSQL);

header("location:JuegosGuardados.php");  

?>