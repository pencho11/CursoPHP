<h1>INGRESAR</h1>

<form method="post" action="">
    <input type="text" placeholder="Usuario" name="usuarioIngreso" require>
    <input type="password" placeholder="Clave" name="passwordIngreso" require>
    <input type="submit" value="Enviar">
</form>

<?php
    $ingreso = new MvcController();
    $ingreso -> ingresoUsuarioController();

    if(isset($_GET["action"])){
        if($_GET["action"] == "fallo"){
            echo "Fallo al ingresar";
        }
    }
?>