<?php
    // Clase
    // Una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad

    class Automovil{
        // PROPIEDADES
        // Son las caracteristicas que puede tener un Objeto

        public $marca;
        public $modelo;

        // METODO
        // Es el algoritmo asociado a un objeto que indica la capacidad de lo que este puede hacer. La unica diferencia entre metodo y funcion, es que llamamos metodo a las funciones de una clase (en la POO), mientras que llamamos funciones, a los algoritmos de la programacion estructurada.

        public function mostrar(){
            echo "<p>Hola! soy un $this->marca,modelo $this->modelo</p>";
        }
    }

    // OBJETO
    // Una entidad provista de metodos o mensajes a los cuales responde propiedades con valor concretos

    $a = new Automovil();
    $a -> marca = "Toyota";
    $a -> modelo = "Corolla";
    $a -> mostrar();

    $b = new Automovil();
    $b -> marca = "Hyundai";
    $b -> modelo = "Accent Vision";
    $b -> mostrar();

    // Principios de la POO que se cumplen en este ejemplo.

    // ABSTRACCION: Nuevos tipos de datos (el que tu quiereas, tu lo creas)
    // ENCAPSULACION: Organizar el codigo en grupos logicos
    // OCULTAMIENTO: Ocultar detalles de implementacion y exponer solo los detalles que sean necesarios para el resto del sistema
?>