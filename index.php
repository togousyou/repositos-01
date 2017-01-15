<?php 
session_start();
if($_SESSION) {
header('Location:login/index.php');
} else {
    
}
?>
<!DOCTYPE html>
<html >
<head>
  <link rel="shortcut icon" href="img/favicon.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>| clínica | Talleres | Togousyou |</title>
  
  
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>

      <link rel="stylesheet" href="css/style2.css">

  
</head>

<body>
  <div class="login-wrap">
	<div class="login-html">
		<input id="tab-2" type="radio" name="tab" class="sign-in" ><label for="tab-2" class="tab">Admin</label>
		<input id="tab-1" type="radio" name="tab" class="sign-up" checked><label for="tab-1" class="tab">Cliente</label>
		<div class="login-form">
        <div class="sign-up-htm">
            <form method="post" action="visualizador.php">
                <div class="group">
                    <label for="numerore" class="label">Número de registro     </label>
                    <input id="numerore" name="numerore" type="text" class="input">
                </div>
                <div class="group">
                    <label for="cedula" class="label">Cedula</label>
                    <input id="cedula" name="cedula" type="text" class="input">
                </div>
                
                    <div class="group">
                    <input type="submit" class="button" value="Buscar">
                </div>
                  <?php 
                  $mensaje=(array_key_exists('mensaje',$_REQUEST))?$_REQUEST['mensaje']: NULL; 
                   echo $mensaje ?>
                </form>
            </div>
			<div class="sign-in-htm">
            <form  method="post"  action="logueame.php">
				<div class="group">
					<label for="user" class="label">Nombre de Usuario</label>
					<input id="user" name="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input id="pass"  name="pass" type="password" class="input" data-type="password">
				</div>
			
				<div class="group">
					<input type="submit" id="login" name="login" class="button" value="Entrar">
				</div>

		</form>
			</div>
			
		</div>
	</div>
</div>
  
  
</body>
</html>
