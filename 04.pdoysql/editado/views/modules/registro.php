<h1>REGISTRO DE USUARIO</h1>

<form method="post">
    <input type="text" placeholder="Usuario" name="usuarioRegistro" require>
    <input type="password" placeholder="Clave" name="passwordRegistro" require>
    <input type="email" placeholder="Correo" name="emailRegistro" require>
    <input type="submit" value="Enviar">
</form>

<?php
    $registro = new MvcController();
    $registro -> registroUsuarioController();

    if(isset($_GET["action"])){
        if($_GET["action"] == "ok"){
            echo "Registro Exitoso";
        }
    }
?>