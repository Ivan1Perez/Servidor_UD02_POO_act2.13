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


class Hombre{
private $nombre;
private $edad;
function comer($comida){
// definición del método
}
function moverse($destino){
// definición del método
}
}

class Objeto{
private $id;
private $nombre;
private $email;
function __construct($id, $nombre, $email) {
$this->id = $id;
$this->nombre = $nombre;
$this->email = $email;
}
function __clone(){
$this->id = ++$this->id;
}
public function __set($var, $valor){
if (property_exists(__CLASS__, $var)){
$this->$var = $valor;
} else
echo "No existe el atributo $var.";
}
public function __get($var){
if (property_exists(__CLASS__, $var)){
return $this->$var;
}
return NULL;
}
}
$obj = new Objeto(1, "objeto1", "prueba1@ejemplo.com");
$p = $obj;
echo $p->id; //2
$p->nombre = "nombre cambiado";
echo $p->nombre; //nombre cambiado
Echo $obj->nombre;
*/

class Producto{
    private $peso;
    private $precio;
    private $stock;

    function _construct($peso, $precio, $stock){
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
}

$prod = new Producto(38, 40, 160);

$prod->asignar();
?>