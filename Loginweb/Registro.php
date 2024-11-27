<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Login</title>
    <!-- Incluye los archivos CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="parallax-template-2/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="parallax-template-2/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Hextec</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">HC</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

    
<div class="container">
        <h3 class="center-align">Registro</h3>
        <div class="row">
            <div>
                <form action="./logica/enviarRegistro.php" method="post">
                <!-- <form action="./tempo.php" method="get"> -->
                    <hr>
                    <div>
                        <label for="nombre_usuario">Ingresa nombre del cliente:</label>
                        <input type="text" name="nombre_usuario" required maxlength="100" placeholder="Ingresa tu Nombre">
                        <br><br>
                        <label for="email">Correo:</label>
                        <input type="mail" name="email" required maxlength="100" placeholder="Ingresa tu correo">
                        <br><br>
                        <label for="no_cuenta">Numero de cuenta:</label>
                        <input type="text" name="no_cuenta" required maxlength="100" placeholder="Ingresa tu numero de cuenta">
                        <br><br>
                        <label for="direccion">Direccion particular:</label>
                        <input type="text" name="direccion" required maxlength="100" placeholder="Ingresa tu direccion particular">
                        <br><br>
                        <label for="telefono">Telefono:</label>
                        <input type="text" name="telefono" required maxlength="8" placeholder="Ingresa tu telefono">
                        <br><br>
                        <label for="password">contraseña:</label>
                        <input type="password" name="password" required maxlength="8" placeholder="Ingresa tu contraseña">
                        <br><br>
                    </div>
                    <button type="submit" name="submit"  >Enviar registro</button>

                    <a href='./Registro.php'>Nuevo registro</a>
                </form>
            </div>
        </div>
        
</div>
</body>
</html>

<footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Hextec</h5>
          <p class="grey-text text-lighten-4">Para ayudar a las personas.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Paginas</h5>
          <ul>
            <li><a class="white-text" href="#!">Precision</a></li>
            <li><a class="white-text" href="#!">Dominacion</a></li>
            <li><a class="white-text" href="#!">Brujeria</a></li>
            <li><a class="white-text" href="#!">Valor</a></li>
            <li><a class="white-text" href="#!">Inspiracion</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contactanos</h5>
          <ul>
            <li><a class="white-text" href="#!">www.Precision.com</a></li>
            <li><a class="white-text" href="#!">www.Dominacion.com</a></li>
            <li><a class="white-text" href="#!">www.Brujeria.com</a></li>
            <li><a class="white-text" href="#!">www.Valor.com</a></li>
            <li><a class="white-text" href="#!">www.Inspiracion.com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">

      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="parallax-template-2/js/materialize.js"></script>
  <script src="parallax-template-2/js/init.js"></script>
 
</body>
</html>
