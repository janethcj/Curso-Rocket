<?php

error_reporting(0);
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

session_start();
$_SESSION['correo']=$correo;
$_SESSION['contraseña']=$contraseña;


$host="localhost";
$user="root";
$password="12345678";
$db="rocket";

$conexion = mysqli_connect($host,$user,$password,$db);
$consulta="SELECT * FROM usuario WHERE correo='$correo' and contrasena='$contraseña'";
$resultado= mysqli_query($conexion,$consulta);
$filas=mysqli_fetch_array($resultado);

if($filas['bandera']=='U'){ //usuario

    header("location:./../inicio.html");

}else{

    ?>
    <?php

    echo'<script type="text/javascript">
    alert("Clave o contraseña incorrecta");
    window.location.href="./../index.html";
    </script>';
    
    
    
  ?>
  
    <?php

   }

