
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/formulario.css">
  <title>Registro.Zisu</title>
</head>
<body>

<form action="insertar_r.php" method="post"   class="form-register">
 
    <h4>Regristro</h4>

	<label >
    <input class="controls" type="text" name="usuario" placeholder="Ingrese su Nombre">
    </label>
	<label >
	<input class="controls" type="text" name="nombre"  placeholder="Ingrese nombre de su emprendimineto">
    </label>
	<label >
	<input class="controls" type="email" name="correo"  placeholder="Ingrese su Correo">
    </label>
	<label >
	<input class="controls" type="telefono" name="telefono"  placeholder="Ingrese su telefono">
	</label>
	<label >
	<input class="controls" type="contraseña" name="contraseña"  placeholder="Ingrese su Contraseña">
    </label>
	
	<br>
    <input class="botons" type="submit" value="Registrarse">
    <p><a href="iniciar sesion.php">Ya tengo Cuenta</a></p>
</form>  
</body>
</html>
