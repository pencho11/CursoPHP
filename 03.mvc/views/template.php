<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>

    <header>
        <h1>LOGOTIPO</h1>
    </header>

    <?php
        include "modules/navegacion.php"
    ?>

    <section>
        <?php
            $mvc = new MvcController();
            $mvc -> enlacesPagController();
            // include "modules/inicio.php"
        ?>
    </section>

</body>
</html>