<?php


class ChangeString {

    public function build(string $param){


        $abc = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n", "ñ", "o","p","q","r","s","t","u","v","w","x","y","z"];

    
        $largo = count($abc)-1;
        $newCadena = null;
        $mayus = false;
      

        $cadena = str_split ($param, 1);

        foreach ($cadena as $letra) {

            if (ctype_upper($letra)){
                $mayus = true;
                $letra = strtolower($letra);                   
            } 
 
            if (in_array($letra, $abc)){
                $posicion = array_search($letra, $abc)==$largo ? 0 : array_search($letra, $abc) + 1;        
                $letra = $mayus ? strtoupper($abc[$posicion]) : $abc[$posicion];           
            }
   
            $newCadena .= $letra;
            $mayus = false;

        } //for

        return $newCadena;

    } //build


} //class


$cambiar = new ChangeString();

echo $cambiar->build("123 abcd*3") . "<br>";   // "**Casa 52Z"
echo $cambiar->build("**Casa 52Z");
//  "Casa 52Z"
//  "123 abcd*3"


?>