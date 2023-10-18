<?php
////////////////////////
//EJERCICIO 1 PERSONAS//
////////////////////////
//CREA LA CLASE
class Persona {
    public $nombre;
    public $edad;
    public function __construct($nom, $edad){
        $this->nombre = $nom;
        $this->edad = $edad;
    }
}

// CREA EL OBJECTO
$persona = new Persona('Dracula', 500);

// ACCEDE A LAS PROPIEDADES
echo "Nombre: " . $persona->nombre . "<br>";
echo "Edad: " . $persona->edad . " años";

////////////////////////////
//EJERCICIO 2 CALCULADORA//
///////////////////////////
class Calculadora {
    //METODO PARA SUMAR
    public function sumar($numero1, $numero2) {
        return $numero1 + $numero2;
    }

    //METDO PARA RESTAR
    public function restar($numero1, $numero2) {
        return $numero1 - $numero2;
    }

    // METODO PARA MULTIPLICAR
    public function multiplicar($numero1, $numero2) {
        return $numero1 * $numero2;
    }

    //METODO PARA DIVIDIR (CON DECLARACION PARA EVITAR DIVIDIR PRO 0)
    public function dividir($numero1, $numero2) {
        if ($numero2 != 0) {
            return $numero1 / $numero2;
        } else {
            return "Error: No se puede dividir por cero.";
        }
    }
}

// OBJETO CALCULADORA
$calculadora = new Calculadora();

// VARIABLES QUE REALIZAN LAS OPERACIONES(SE PODRIA HACER CON INPUT DEL USUARIO TAMBIEN)
$resultadoSuma = $calculadora->sumar(5, 3);
$resultadoResta = $calculadora->restar(10, 4);
$resultadoMultiplicacion = $calculadora->multiplicar(6, 2);
$resultadoDivision = $calculadora->dividir(8, 2);

// SE MUESTRAN LOS RESULTADOS
echo "Suma: " . $resultadoSuma . "<br>";
echo "Resta: " . $resultadoResta . "<br>";
echo "Multiplicación: " . $resultadoMultiplicacion . "<br>";
echo "División: " . $resultadoDivision;


?>
