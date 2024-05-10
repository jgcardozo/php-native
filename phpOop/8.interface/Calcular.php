<?php

require_once("Operacion.php");
require_once("Basicas.php");

class Calcular implements Operacion, Basicas{

    public function raizCuadrada(float $numero):float
    {
        $total = sqrt($numero);
        return $total;
    }


    public function potencia(int $numero, int $potencia):int{
        $total = pow($numero,$potencia);
        return $total;
    }


    public function operacion(int $n1, $n2, $opString){

        if($opString == '+'){
            $total = $n1 + $n2;
        }else if($opString == '-'){
            $total = $n1 - $n2;
        }else if($opString == '*'){
            $total = $n1 * $n2;
        }else if($opString == '/'){
            $total = $n1 / $n2;
        }else{
            $total = "operacion invalida";
        }

        return $total;
    }


}//class

?>