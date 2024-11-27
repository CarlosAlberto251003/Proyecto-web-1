<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php include "parallax-template-2/fragments/header.php"; ?>

<body>
    <div class="container">
        <div class="row">

            <h3 style=" text-align: center;" >Elimina Usuario</h3>
            <form style=" text-align: center;" method="POST" action="./logica/deleteUsuario.php">

                <input  type="text" name="no_cuenta" placeholder="Numero de Cuenta" />
                <br />
                <button type="submit">Eliminar usuario</button>

            </form>
            
            <h5><a href="Principal.php">Inicio de listas</a></h5>
        </div>
    </div>

</body>

</html>

<?php include "parallax-template-2/fragments/footer.php"; ?>