
<?php



require_once 'conexion.php';

if($_SERVER['REQUEST_METHOD']=='DELETE'){

    $id=$_GET['id'];

    $my_query = "DELETE FROM coordinador WHERE id='$id'";

    $result=$sqli->query($my_query);

    if($sqli->affected_rows>0){

        echo "Registro eliminado";

    }

    else{

        echo "Error al eliminar";

    }


}

?>