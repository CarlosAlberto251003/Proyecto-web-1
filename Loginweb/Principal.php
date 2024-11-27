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
            <?php
            session_start();
            $no_cuenta= $_SESSION['usermane'];//413112576


            if(!isset($no_cuenta)){

                    header("location: ./index.php");
            }else{
                
                echo "<h3> Numero de cuenta $no_cuenta </h3> ";
            
                

                // se usa el requiere para si psi se necesita el archivo conexion
            require "./logica/conexion.php";
            mysqli_set_charset($conexion,'utf8');

            //genear el query
            $consulta_sql="SELECT * FROM persona";

            //mandar el query por medio de la conexion y almacenaremos el resultado en una variable
            $resultado = $conexion->query($consulta_sql);

            // Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado en nuestra tabla
            $count = mysqli_num_rows($resultado); 
            
            echo "<table border='2' >
                <tr>
                    <th>Usuario</th>
                    
                    <th>Numero de Cliente</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Correo Electronico</th>
                    <th>Contraseña</th>
                    <th>Fecha de Registro</th>
                </tr>";

            if ( $count>0 ){
                //aqui se pintarian los registro de la DB
                while( $row = mysqli_fetch_assoc($resultado)  ){
                echo "<tr>";
                echo"<td>". $row['nombre_usuario'] ."</td>";
                echo"<td>". $row['no_cuenta'] ."</td>";
                echo"<td>". $row['direccion'] ."</td>";
                echo"<td>". $row['telefono'] ."</td>";
                echo"<td>". $row['email'] ."</td>";
                echo"<td>". $row['password'] ."</td>";
                echo"<td>". $row['fecha_registro'] ."</td>";
                echo "</tr>";
                
                }
                echo "</table>";

                

            }else{
                
                
                
                echo " <h1 style='color:red' >Sin Ningun registro</h1>";
            } 
            echo "
                <h5><a href='EliminarUsuario.php'>ElimnarUsuario</a></h5>
                <h5><a href='Registro.php'>Registro</a></h5>
                <h5><a href='logica/salir.php'> SALIR</a></h5>
                ";
                



            }


        ?>
    </div>
  
    <footer class="page-footer teal">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Hextec</h5>
          <p class="grey-text text-lighten-4">Donde tu dinero se encuentra seguro.</p>


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
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="parallax-template-2/js/materialize.js"></script>
  <script src="parallax-template-2/js/init.js"></script>
 
</body>
</html>
