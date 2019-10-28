<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';

	// Si está logueda la persona la redirijo al profile
	if ( isLogged() ) {
		header('location: profile.php');
		exit;
	}

	$pageTitle = 'Register';
	//require_once 'partials/head.php';

		// Creamos esta variable con Array vacío para que no de error al entrar por GET
	$errorsInRegister = [];

	// Variables para persitir
	$modelo = '';
  $marca='';


	if ($_POST) {
		// Las variables de persistencia les asigno el valor que vino de $_POST
		$modelo = trim($_POST['modelo']);
    $marca = trim($_POST['marca']);

		// La función registerValidate() nos retorna el array de errores que almacenamos en esta variable
		$errorsInRegister = registerAlta();

		// Si no hay errores en el registro
		// Cuando no hay errores guardo la imagen y los datos
		// if ( count($errorsInRegister) == 0 ) {
		if ( !$errorsInRegister ) {

			// Guardo la imagen y obtengo el nombre aleatorio creado
			$img = saveImage();

			// Creo en $_POST una posición "avatar" para guardar el nombre de la imagen
			$_POST['avatar'] = $img;

			// Guardo al usuario en el archivo JSON, y me devuelve al usuario que guardó en array
			$theUser = saveProduct();

			// Al momento en que se registar vamos a mantener la sesión abierta
		header('location: producto1.php');
		}
	}

	//require_once 'partials/navbar.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/estilos.css">
		<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

		<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script>

    <title>Crear Cuenta</title>
  </head>
  <body class="text-align:center">
    <header>

         <?php include("navbar.php")?>

 <!--saque la nav a la navbar.php -->

</header>
    <!-- Formulario de registro -->

      <form class="col-md-4 modal-dialog-centered mx-auto" action="altaproductos.php" method="post" enctype="multipart/form-data">
        <div class= "container align-items-center">
        <fieldset>
            <legend class="text-center header">Dar de Alta un Producto</legend>
            <div class="row">
               <div class="col-12">
                 <label for="modelo">Marca</label>
                 <input id = "modelo" type="text" placeholder="Marca"
                 name = "modelo"
                 class="form-control <?= isset($errorsInRegister['name']) ? 'is-invalid' : null ?>"
                 value="<?= $modelo; ?>"
                 >
                 <div class="invalid-feedback">
           				<?= isset($errorsInRegister['name']) ? $errorsInRegister['name'] : null; ?>
         				</div>
                 </div>

               <div class="col-12">
                 <label for="marca">Descripcion</label>
                 <input id = "marca" type="text" placeholder="Descripcion"
                 name = "marca"
                 class="form-control <?= isset($errorsInRegister['marca']) ? 'is-invalid' : null ?>"
                 value="<?= $marca; ?>"
                 >
                 <div class="invalid-feedback">
                  <?= isset($errorsInRegister['marca']) ? $errorsInRegister['marca'] : null; ?>
                </div>
                 </div>
            </div>
<br>

          <div class="form-group">
            <label><b>Imagen de producto:</b></label>
            <div class="custom-file">
              <input
                type="file"
                name="avatar"
                class="custom-file-input <?= isset($errorsInRegister['avatar']) ? 'is-invalid' : null; ?>"
              >
              <label class="custom-file-label">Subi una imagen de un producto...</label>
              <div class="invalid-feedback">
                <?= isset($errorsInRegister['avatar']) ? $errorsInRegister['avatar'] : null; ?>
              </div>
							<script type="application/javascript">
							$('.custom-file-input').on('change', function(event) {
									var inputFile = event.currentTarget;
									$(inputFile).parent()
											.find('.custom-file-label')
											.html(inputFile.files[0].name);
							});
							</script>
            </div>
          </div>

          <div class="form-group text-center">
              <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary btn-lg"> Enviar </button>
              </div>
          </div>
					<div class="container">

										</div>
          </fieldset>
        </div>
      </form>
      <!-- FOOTER -->
     <footer class="container">
       <?php include_once 'footer.php'; ?>
   </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>