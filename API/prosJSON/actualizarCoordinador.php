<?php


include_once 'conexion.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    
    $nombres = $_GET['nombres'];
    $apellidos = $_GET['apellidos'];
    $fechaNac = $_GET['fechaNac'];
    $edad = $_GET['edad'];
    $titulo = $_GET['titulo'];
    $email = $_GET['email'];
    $facultad = $_GET['facultad'];
  

    $my_query = "INSERT INTO coordinador (nombres, apellidos, fechaNac, edad, titulo, email, facultad) VALUES ('$nombres', '$apellidos', '$fechaNac', '$edad', '$titulo', '$email', '$facultad',)";

    $result= $sqli-> query($my_query);

    if($sqli->affected_rows>0){

        echo "Registro exitoso";

    }

    else{

        echo "Error al registrar";

    }


}
?>