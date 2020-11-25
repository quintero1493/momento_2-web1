<?php
class BaseDeDatos{

    //atributos (variables)

    public $usuarioBD="root";
    public $passwordBD="";

    //constructor
    public function __construct(){}

    //metodos
    public function conectarBD(){

        $datosBD="mysql:host=localhost;dbname=tiendaxbox";

        $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);

        /*//if($conexionBD){
          //  echo("exito");
        //}
        //else
          //  {
            //    echo("error");
            //}*/

        try{
            $datosBD="mysql:host=localhost;dbname=tiendaxbox";
            $conexionBD= new PDO($datosBD,$this->usuarioBD,$this->passwordBD);
            //echo("MELOS");
            return($conexionBD);

        }catch(PDOException $error){
            //echo($error->getMessage());
        }

    }

    public function agregarDatos($consultaSQL){
        //establecer una conexion
        $conexionBD=$this->conectarBD();

        //Preparar consulta
        $insertarDatos=$conexionBD->prepare($consultaSQL);

        //Ejecutar la consulta
        $resultado=$insertarDatos->execute();

        //Verifico el resultado
        if($resultado){
          echo("Juego Agregado");
        }
        else
        {
            echo("error");
        }

    }

    public function consultarDatos($consultaSQL){

                //establecer una conexion
                $conexionBD=$this->conectarBD();

                //Preparar consulta
                $consultaDatos=$conexionBD->prepare($consultaSQL);
        
                //Ejecutar la consulta
                $consultaDatos->SetFetchMode(PDO::FETCH_ASSOC);
        
                $consultaDatos->execute();
                return($consultaDatos->fetchAll());
    }

    public function eliminarDatos($consultaSQL){

        $conexionBD=$this->conectarBD();

        $eliminarDatos=$conexionBD->prepare($consultaSQL);

        $resultado=$eliminarDatos->execute();

        if($resultado){
            echo("Usuario Eliminado");
        }
        else
        {
            echo("error");
        }

    }


    public function editarDatos($consultaSQL){
        
        $conexionBD=$this->conectarBD();

        
        $editarDatos=$conexionBD->prepare($consultaSQL);

        
        $resultado=$editarDatos->execute();

        if($resultado){
            
            echo("Juego Editado");
          }
          else
          {
              echo("error");
          }
    }
}


?>