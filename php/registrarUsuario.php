<?php
  
$host="localhost";
$user="root";
$password="12345678";
$db="rocket";
$conexion = mysqli_connect($host,$user,$password,$db);


 if (isset($_POST['update'])) {

  $nombre = $_POST['nombre']; 
  $apellidoPaterno = $_POST['apellidoPaterno']; 
  $apellidoMaterno = $_POST['apellidoMaterno']; 	
  $contraseña=$_POST['contraseña'];
  $correo= $_POST['correo'];
  

 $host="localhost";
$user="root";
$password="12345678";
$db="rocket";

$conexion = mysqli_connect($host,$user,$password,$db);
$consulta="INSERT INTO usuario(idUsuario, nombre, apellidoPaterno, apellidoMaterno, correo, contrasena, bandera )
		   VALUES (DEFAULT, '$nombre','$apellidoPaterno', '$apellidoMaterno', '$correo', '$contraseña', 'U' )";
$resultado= mysqli_query($conexion,$consulta);

echo'<script type="text/javascript">
    alert("Usuario registrado correctamente");
    window.location.href="./../index.html";
    </script>';
    

}

 // header('Location: ./../../vista/menu_administrador/menu_administrador.php');//Regresa al menú del administrador.
  
 
?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!--LOGIN--><!--LOGIN--><!--LOGIN--><!--LOGIN--><!--LOGIN--><!--LOGIN--><!--LOGIN-->
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="UTF-8"> 
	<title>Rocket | Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="./../css/login.css">
</head>
<body>
	<div class="container h-100">
        <div class="d-flex justify-content-center">
            <h2>Cursos rocket</h2>
        </div>
       
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="./../img/R.jpeg" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form id="form" action="registrarUsuario.php" method="POST">
						<br></br>
						<div class="input-group mb-1">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="nombre" class="form-control input_user"  id="nombre" placeholder="Nombre">
						</div>


						<div class="input-group mb-1">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="apellidoPaterno" class="form-control input_pass"  id="apellidoPaterno" placeholder="Apellido Paterno">
						</div>

						<div class="input-group mb-1">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="apellidoMaterno" class="form-control input_pass"  id="apellidoMaterno" placeholder="Apellido Materno">
						</div>

						<div class="input-group mb-1">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="correo" class="form-control input_pass"  id="correo" placeholder="Correo">
						</div>



						<div class="input-group mb-1">

							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="contraseña" class="form-control input_pass"  id="contraseña" placeholder="Contraseña">
						</div>

						

							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" name="update" id="update" class="btn login_btn">Registrarse</button>
				   </div>
			</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<a href="./php/registrarUsuario.php" class="ml-2"></a>
				</div>

				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						<a href="./../index.html" class="ml-2">Regresar</a>
				</div>

					

				</div>
			</div>
		</div>
	</div>
</body>
</html>
