<?php include "parallax-template-2/fragments/header.php"; ?>
    <!-- Contenido de tu página -->

    <div class="container">
        <h1 class="center-align">Inicia Sesion</h1>
        <div class="row">
            <form class="col s12 m6 offset-m3" method="POST" action="logica/loguear.php">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="no_cuenta" type="text" name="no_cuenta" placeholder="Número de Cuenta" required>
                        <label for="no_cuenta">Número de Cuenta</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="clave" type="password" name="clave" placeholder="Contraseña" required>
                        <label for="clave">Contraseña</label>
                    </div>
                </div>
                <button type="submit" class="btn waves-effect waves-light">Iniciar Sesión</button>
                <a href="Registro.php" class="btn-flat">Registro</a>
            </form>
        </div>
    </div>
    <?php include "parallax-template-2/fragments/footer.php"; ?>
    <!-- Incluye los archivos JavaScript -->


