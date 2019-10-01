<?php
// Extencion de clases: herencia. los objetos pueden ser extendidos, y pueden heredar propiedades y metodos. Para definir una clase como extencion, debo definir una clase pladre, y se utiliza dentro de una clase hija.

require_once "models/conexion.php";
    class Datos extends Conexion{
        // REGISTRO DE USUARIOS
        public function registroUsuarioModel($datosModel, $tabla){
            // prepare(): prepara una sentencia SQL para ser ejecutada por el metodo PDOStatement::execute(). la sentencia sql puede contener cero o mas marcadores de parametros con nombre (:name) o signos de interrogacion (?) por los cuales los valores reales seran sustutuidos cuando la sentencia sea ejecutada. Ayuda a prevenir inyecciones SQL eliminando la necesidad de entrecomillar manualmento los parametros

            $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(usuario, password, email) VALUES (:usuario,:password,:email)");

            // bindParam(): Vinvula una variable PHP a un parametro de sustitucion con nombre o de signo de interrogacion correspondiente de la sentencia sQL que fue usada para preparar la sentencia

            $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);

            $stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);

            $stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

            if($stmt->execute()){
                return "success";
            }
            else {
                return "error";
            }

            $stmt->close();
        }

        // INGRESO USUARIO

        public function ingresoUsuarioModel($datosModel, $tabla){
            $stmt = Conexion::conectar()->prepare("SELECT usuario, password FROM $tabla WHERE usuario = :usuario");

            $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);

            $stmt->execute();
            
            // fetch(): obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement.
            return $stmt->fetch();
            $stmt->close();
        }

        // VISTA USUARIO

        public function vistaUsuariosModel($tabla){
            $stmt = Conexion::conectar()->prepare("SELECT id, usuario, password, email FROM $tabla");

            $stmt->execute();
            
            
            //fetch() : obtiene una fila de un conjunto de resultados asociado al objeto PDOStatement.
            return $stmt->fetchAll();
            $stmt->close();
        }
        
        // EDITAR USUARIO

        public function editarUsuariosModel($datosModel, $tabla){
            $stmt = Conexion::conectar()->prepare("SELECT id, usuario, password, email FROM $tabla WHERE id = :id");
            
            $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);
            $stmt->execute();
            
            
            return $stmt->fetch();
            $stmt->close();
        }

        // ACTUALIZAR USUARIO

        public function actualizarUsuarioModel($datosModel, $tabla){
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET usuario= :usuario, password = :password, email = :email WHERE id = :id");
            
            $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
            
            $stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
            
            $stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

            $stmt->bindParam(":id", $datosModel["id"], PDO::PARAM_INT);
            
            if($stmt->execute()){
                return "success";
            }
            else {
                return "error";
            }

            $stmt->close();
            
        }

        // BORRAR USUARIO

        public function borrarUsuarioModel($datosModel, $tabla){
            $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");
            
            $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

            if($stmt->execute()){
                return "success";
            }
            else {
                return "error";
            }
            $stmt->close();
        }
    }
?>