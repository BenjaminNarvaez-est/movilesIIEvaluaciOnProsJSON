
<?php

include_once 'conexion.php';


if($_SERVER['REQUEST_METHOD']=='PUT'){

    $id=$_GET['id'];
    $nombres = $_GET['nombres'];
    $apellidos = $_GET['apellidos'];
    $fechaNac = $_GET['fechaNac'];
    $edad = $_GET['edad'];
    $titulo = $_GET['titulo'];
    $email = $_GET['email'];
    $facultad = $_GET['facultad'];

    $my_query = "UPDATE coordinador SET nombres='$nombres', apellidos='$apellidos', fechaNac='$fechaNac', edad='$edad', titulo='$titulo', email='$email', facultad='$facultad' WHERE id='$id'";

    $result= $sqli-> query($my_query);

    if($sqli->affected_rows>0){

        echo "Registro actualizado";

    }

    else{

        echo "Error al actualizar";

    }

}
?>