<?php

include ("conexion.php");

/*recibo datos del formulario*/

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];


        $insertar = "INSERT INTO registro (id,nombre,apellido,email,usuario,clave) VALUES 
                    ('','$nombre','$apellido','$email','$usuario','$clave')";
                    
                if ($mysqli->query($insertar) === TRUE) {
                        echo ("Los datos fueron insertados correctamente"); 
                } else {
                        echo ( "Error:".$sql. "<br>".$mysqli -> error);
                }
              

 
$clave_procesada=password_hash($clave, PASSWORD_BCRYPT,['cost' => 10]);
                   echo $has;
        

      if (password_verify($clave,$clave_procesada)) {
        echo "Las claves coinciden";
      }
      else {
        echo "no coinciden las claves";
      }

?>