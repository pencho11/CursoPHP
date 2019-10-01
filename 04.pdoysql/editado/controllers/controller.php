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

        // REGISTRO DE USUARIOS
        public function registroUsuarioController(){

            if(isset($_POST["usuarioRegistro"])){

                $datosController = array("usuario"=>$_POST["usuarioRegistro"],"password"=>$_POST["passwordRegistro"],"email"=>$_POST["emailRegistro"]);
    
                $respuesta = Datos::registroUsuarioModel($datosController, "usuarios"); 
    
                if ($respuesta == "success") {
                    header("location:index.php?action=ok");
                }
                else{
                    header("location:index.php");
                }
                echo $respuesta;
            }
        }

        // INGRESO USUARIO

        public function ingresoUsuarioController(){
            if(isset($_POST["usuarioIngreso"])){

                $datosController = array("usuario"=>$_POST["usuarioIngreso"],"password"=>$_POST["passwordIngreso"]);
    
                $respuesta = Datos::ingresoUsuarioModel($datosController, "usuarios"); 
                
                if($respuesta["usuario"]==$_POST["usuarioIngreso"] && $respuesta["password"]== $_POST["passwordIngreso"]) {
                    session_start();

                    $_SESSION["validar"] = true;

                    header("location:index.php?action=usuarios");
                } 
                else {
                    header("location:index.php?action=fallo");
                }
            }
        }

        // VISTA USUARIOS

        public function vistaUsuariosController(){
            $respuesta = Datos::vistaUsuariosModel("usuarios");
            

            foreach ($respuesta as $row => $item) {
                echo'<tr>
                        <td>'.$item["usuario"].'</td>
                        <td>'.$item["password"].'</td>
                        <td>'.$item["email"].'</td>
                        <td><a href="index.php?action=editar&id='.$item["id"].'"><button>Editar</button></a></td>
                        <td><a href="index.php?action=usuarios&idBorrar='.$item["id"].' "><button>Borrar</button></a></td>
                    </tr>';
            }
        }


        // EDITAR USUARIO
        
        public function editarUsuarioController()
        {
            $datosController = $_GET["id"];
            $respuesta = Datos::editarUsuariosModel($datosController, "usuarios");

            echo '<input type="hidden" value="'.$respuesta["id"].'" name="idEditar">
            
            <input type="text" value="'.$respuesta["usuario"].'" name="usuarioEditar" require>
            <input type="text" value="'.$respuesta["password"].'" name="passwordEditar" require>
            <input type="email" value="'.$respuesta["email"].'" name="emailEditar" require>
            <input type="submit" value="Actualizar">'; 
        }

        // ACTUALIZAR USUARIO
        
        public function actualizarUsuarioController()
        {
             if (isset($_POST["usuarioEditar"])) {
                $datosController = array("id"=>$_POST["idEditar"],
                            "usuario"=>$_POST["usuarioEditar"],
                            "password"=>$_POST["passwordEditar"],
                            "email"=>$_POST["emailEditar"]);
                
                $respuesta = Datos::actualizarUsuarioModel($datosController, "usuarios");

                if ($respuesta == "success") {
                    header("location:index.php?action=cambio");
                }
                else {
                    echo "error";
                }
            } 
        }

        // BORRAR USUARIO

        public function borrarUsuarioController(){
            if (isset($_GET["idBorrar"])) {
                $datosController = $_GET["idBorrar"];

                $respuesta = Datos::borrarUsuarioModel($datosController, "usuarios");

                if ($respuesta == "success") {
                    header("location:index.php?action=usuarios");

                }
            }
        }
    }
?>
