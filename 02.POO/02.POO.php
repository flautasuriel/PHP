<?php
#clase:
#una clase es un modelo que se utiliza para vrear objets que comparten un mismo comportamiento, estado e identidad.

class Automovil {
	#Propiedades
	#son las caracteristicas que puede tener un Objeto.
	
	public $marca;
	public $modelo;
	
	#metodo
	#es el algoritmo asociado a un objeto que indica la capacidad de que este puede hacer.
	#la unica diferencia entre metodo y funcion es que llamamos metodo y fybcuion, es que llmamos metodo a las funciones de una clase(en la POO),
	#mientras que llamamos funciones a los algoritmos de la programación estructurada. 
	
		public function mostrar(){
		echo"<p>Hola! soy un $this->marca, modelo $this->modelo</p>";
		}
	}
	#objeto
	#una entidad provista de metodos o mensajes a los cuales responde propiedades con valores concretos
	$a = new Automovil();
	$a -> marca = "Toyota";
	$a -> modelo = "Corolla";
	$a -> mostrar();
	
	$b = new Automovil();
	$b -> marca = "Hyundai";
	$b -> modelo = "Accent Vision";
	$b -> mostrar();
	#principios de la POO que se cumplen en este ejemplo:
	#abstraccion: Nuevos tipos de datos(el que tu quieras, tu lo creas)
	#encapsulacion: organizar el codigo en grupos logicos
	#ocultamiento:ocultar detalles de implementacion y expones solo los detalles que sean necesarios para el resto del sistema
?>