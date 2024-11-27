<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Login</title>
    <!-- Incluye los archivos CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../parallax-template-2/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../parallax-template-2/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>

<body>
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo">Banco Feliz</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">BF</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<div class="container">

  <?php
  include "./conexion.php";
  mysqli_set_charset($conexion,'utf8');
  $nombreUser=$_POST['nombre_usuario'];

  $buscarusuario="SELECT * FROM  persona WHERE nombre_usuario ='$nombreUser'";

  $resultado = $conexion -> query($buscarusuario);
  $count =mysqli_num_rows($resultado);
  if($count==1){
      echo"<h2>El usuario ya esta registrado</h2>";
      echo "<a href='../Registro.php'><h4>Nuevo registro</h4></a>";

  }else{

      mysqli_query($conexion,"INSERT INTO persona(
          nombre_usuario,carrera,no_cuenta,direccion,telefono,email,password)
          VALUES(
              '$_POST[nombre_usuario]',
              '$_POST[no_cuenta]',
              '$_POST[direccion]',
              '$_POST[telefono]',
              '$_POST[email]',
              '$_POST[password]'
          )");
          echo "<br> <h2>Usuario creado con exito</h2>";
          echo "<a href='../Registro.php'>Puedes generar un Nuevo registro</a>";
          echo "<a href='../Principal.php'>Ver registros</a>";
  }
  
  ?>
  
</div>

<footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Banco Feliz</h5>
          <p class="grey-text text-lighten-4">Donde tu dinero se encuentra seguro.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Paginas</h5>
          <ul>
            <li><a class="white-text" href="#!">Banco Triste</a></li>
            <li><a class="white-text" href="#!">Banco Enojado</a></li>
            <li><a class="white-text" href="#!">Banco Banco</a></li>
            <li><a class="white-text" href="#!">Banco 123</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Contactanos</h5>
          <ul>
            <li><a class="white-text" href="#!">www.BancoTriste.com</a></li>
            <li><a class="white-text" href="#!">www.BancoEnojado.com</a></li>
            <li><a class="white-text" href="#!">www.BancoBanco.com</a></li>
            <li><a class="white-text" href="#!">www.Banco123.com</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../parallax-template-2/js/materialize.js"></script>
  <script src="../parallax-template-2/js/init.js"></script>

</body>
</html>

