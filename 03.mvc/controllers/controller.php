<?php

    class MvcController{

        // LLMAMADA A LA PLANTILLA

        public function plantilla(){
            // include() se utiliza para llamar el archivo que contiene codigo html
            include "views/template.php";
        }

        // INTERACCION DEL USUARIO

        public function enlacesPagController(){
            if(isset($_GET["action"])){
                $enlacesController = $_GET["action"];
            }
            else{
                $enlacesController = "index.php";
            }

            $respuesta = EnlacesPaginas::enlacesPagModel($enlacesController);

            include $respuesta;
        }
    }
?>