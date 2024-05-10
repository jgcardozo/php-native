<?php


$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];

switch ($operacion) {
    case 'sumar':
        $resultado = $num1 + $num2;
        break;
        case 'restar':
            $resultado = $num1 - $num2;
            break;
            case 'dividir':
                $resultado = $num1 / $num2;
                break;
                case 'multiplicar':
                    $resultado = $num1 * $num2;
                    break;
    
    default:
        # code...
        break;
}

echo "resultado es:".$resultado;

?>