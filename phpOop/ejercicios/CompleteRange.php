<?php
//16:16

class CompleteRange{


    public function build($list){
        $largo = count($list) - 1;
        if ($largo>0){

            return range($list[0],$list[$largo]);
        }else{
            return "coleccion vacia";
        }
    }// funct


}//class


$rango = new CompleteRange;
var_dump($rango->build([]));

?>