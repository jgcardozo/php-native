<?php 

class ConversorDecimal{


    public function convertir(int $entrada)
    {
     
 
        $divisor = intval($entrada / 2);  //28 -> 14
        $mod = $entrada % 2;
        $res = $mod; 
       
        while ($divisor>=2) {  //14    
           $mod = $divisor % 2;  
         // print "entrada: $divisor , divisor:  $divisor , mod: $mod <br>";  // 
            $res = $mod.$res;         
            $divisor = intval($divisor/2); // 14 = 28/2

        } 
        if ($divisor==0 || $divisor==1) { 
            $res = $divisor.$res;
        }      
          
        return $res; 
        
        /*         if ($entrada>0){
            $aux=$entrada%2;
            echo $aux ."<br>";
            return self::convertir((int)$entrada/2); 
        } */
    } // func



}//class


$numero = new ConversorDecimal();

echo $numero->convertir(304);

?>