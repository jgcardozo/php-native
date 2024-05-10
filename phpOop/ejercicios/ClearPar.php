<?php


class ClearPar
{


    public function build($texto){

        $pareja = "()";
        $res = null;
       
        $texto  = str_split($texto, 1);
        $largo = count($texto);
        for($i=0 ; $i<$largo; $i++){
                if ($texto[$i]=="(" && $texto[$i+1]==")"){
                    $res .= $pareja ;
                }
            
        } //for

        //$res ="juan";
        return $res;
    }

} //class


$par = new ClearPar();


echo $par->build("()())()") . "<br>";
echo $par->build("()(()") . "<br>";
echo $par->build(")(") . "<br>";
echo $par->build("((()") . "<br>";




?>