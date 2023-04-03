<?php


require_once 'conexion.php';

switch($_SERVER["REQUEST_METHOD"]){

    case "GET":
        
    $my_query="SELECT * FROM coordinador ";

    $result = $sqli->query($my_query);

    if($sqli->affected_rows>0){
        $json="{ \"Datos\": [";
        while($row=$result->fetch_assoc()){
            $json=$json. json_encode($row);
            $json=$json.",";
        }
        $json=substr(trim($json),0,-1);
        $json.="]}";

    }
    echo $json;

    break;

    case "POST":



            if(!isset($_POST['id']) and !isset($_POST['nombreb'])){
                $nombres = $_POST['nombres'];
                $apellidos = $_POST['apellidos'];
                $fechaNac = $_POST['fechaNac'];
                $edad = $_POST['edad'];
                $titulo = $_POST['titulo'];
                $email = $_POST['email'];
                $facultad = $_POST['facultad'];

        
            
    
            
                    $my_query = "INSERT INTO coordinador (nombres, apellidos, fechaNac, edad, titulo, email, facultad) VALUES ('$nombres', '$apellidos', '$fechaNac', '$edad', '$titulo', '$email', '$facultad')";
        
                    $sqli->query($my_query);
        
                    if($sqli->affected_rows>0){
                        echo "Registro exitoso";
                    }
                    else{
                        echo "Error al registrar";
                    }

        
            }
            else{

                if(isset($_POST['id'])){
                    $id=$_POST['id'];
        
                $my_query = "Select *FROM coordinador WHERE id='$id'";
    
                $result=$sqli->query($my_query);
    
                if($result->num_rows>0){
                    $row=$result->fetch_assoc();
                    echo "Datos: ".$row['nombres']." ".$row['apellidos']." ".$row['fechaNac']." ".$row['edad']." ".$row['titulo']." ".$row['email']." ".$row['facultad'];
                }
                else{
                    echo "No se encontro el registro";
                }
                
                }
                else{
                    $nombreb=$_POST['nombreb'];
        
                    $my_query = "Select *FROM coordinador WHERE nombres='$nombreb'";
        
                    $result=$sqli->query($my_query);
        
                    if($result->num_rows>0){
                        while($row=$result->fetch_assoc()){
                            echo "Datos: ".$row['nombres']." ".$row['apellidos']." ".$row['fechaNac']." ".$row['edad']." ".$row['titulo']." ".$row['email']." ".$row['facultad']."<br>";
                        }
                    }
                    else{
                        echo "No se encontro el registros";
                    }
                    break;
                }
            }
        }



?>