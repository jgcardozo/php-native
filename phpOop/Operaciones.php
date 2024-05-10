<?php
class Operaciones{

    public $numUno = 0;
    public $numDos = 0;
    public $result = 0;
    
    function __construct($n1 , $n2){
        $this->numUno = $n1;
        $this->numDos = $n2;
    }

    public function doSuma(){
        $this->result = $this->numUno + $this->numDos;
        return $this->result;
    }

    public function doResta(){
        $this->result = $this->numUno - $this->numDos;
        return $this->result;
    }


}// class
?>