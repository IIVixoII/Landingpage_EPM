<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login EPP</title>
	<meta charset="UTF-8">

	<link href="assets/img/engineer.ico" rel="icon">
  	<link href="assets/img/engineer.ico" rel="apple-touch-icon">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/img/Logo.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
<!--===============================================================================================-->
<script>
    function validar()
    {
        if(document.form1.frmusuario.value=="")
        {
            alert("Debe Ingresar datos al campo Usuario");
            document.form1.frmusuario.focus();
            return false;
        }
        if(document.form1.frmclave.value=="")
        {
            alert("Debe Ingresar la clave");
            document.form1.frmclave.focus();
            return false;
        }
    }

</script>

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/Logo.png" alt="IMG">
				</div>

				<form  action="ctrl_login.php" method="post" name="form1">
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Bienvenido a EPP.
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Se requiere un correo electrónico válido: ex@abc.xyz">
						<input class="input100" type="text" id="frmnombre" name="frmnombre" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Contraseña Requerida">
						<input class="input100" type="password" id="frmclave" name="frmclave" placeholder="Contraseña">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn" >
						<button class="login100-form-btn" >
							Ingresar
						</button>
					</div>
					<div class="text-center p-t-12">
					</div>
					<div class="text-center p-t-136">
						</a>
					</div>
					<?php
        			if(isset($_GET['error']))
        			{
            		?>
        			<p>Error de Nombre/Contraseña, vuelva a intentarlo</p>
        			<?php
        			}
        			?>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>