<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
<<<<<<< HEAD
	<link rel="stylesheet" href="css/estilos.css">
	<title>Registro</title>
=======
	<link rel="stylesheet" href="../css/estilos.css">
	<title>Registrate</title>
>>>>>>> 86d34988bcb5480f454c5b4b3beda0aeb9b969bc
</head>
<body>
	<div class="contenedor">
	<h1 class="titulo">Registrate</h1>
	<hr class="border">
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>' method="POST" class="formulario" name="login">
        <div class="form-group">
		 <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" placeholder="Usuario" class="usuario">
		</div>
        <div class="form-group">
		 <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" placeholder="Contraseña" class="password">
		</div>
        <div class="form-group">
		 <i class="icono izquierda fa fa-lock"></i><input type="password" name="password2" placeholder="Contraseña" class="password_btn"><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
		</div>
<<<<<<< HEAD
		<?php  if(!empty ($errores)): ?>
		<div class="error">
		<ul><?php echo $errores; ?></ul>
		</div>
		<?php endif; ?>
=======

		<?php if(!empty($errores)): ?>
			<div class="error">
				<ul>
					<?php echo $errores; ?>
				</ul>
			</div>
		<?php endif; ?>   
>>>>>>> 86d34988bcb5480f454c5b4b3beda0aeb9b969bc
	</form>
	
	<p class="texto-registrate">
		¿Ya tienes cuenta?
		<a href="login.php">Iniciar Seción</a>
	</p>
	</div>
</body>
</html>