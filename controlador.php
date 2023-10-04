<?php
/*
Actividad 2.13. Primeras clases y objetos
Crearemos la clase Producto
Atributos: Peso, Precio, Stock todas private.
Métodos:
Constructor: Método mágico, asignará valor a todos los atributos
Asignar: Devolverá un array asociativo donde la clave del array es el nombre del
atributo y el valor, su valor.
Get: Método mágico.
Crearemos una vista con un formulario para darle valores a los atributos y un controlador
que instancia el objeto y muestra sus valores.
*/

class Producto{
    private $peso;
    private $precio;
    private $stock;

    function __construct($peso, $precio, $stock){
        $this->peso = $peso;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    function asignar() {
        return get_object_vars($this);
    }

    function __get($var){
        if (property_exists(__CLASS__, $var)){
        return $this->$var;
        }
        return NULL;
    }

    public function __toString(){ 
        return "<p>Peso: $this->peso"."kg</p>"."<p>Precio: $this->precio"."€</p><p>Stock: ".$this->stock." units</p>"; 
        }
}

if(isset($_POST['enviar'])){
    $prod = new Producto($_POST['peso'], $_POST['precio'], $_POST['stock']);

    $prodFields = $prod->asignar();

    echo $prod;

    /*foreach ($prodFields as $key => $value) {
        echo "$key: $prodFields[$key]";
    }*/
}else{
    require "formulario.html";
}

?>