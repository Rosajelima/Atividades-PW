<?php    
    
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $op = $_GET['op'];

    switch($op){
        case "+":
            $resultado = Adicao($n1, $n2);
            echo "O resultado da sua operação é: $resultado";
        break;

        case "-":
            $resultado = Sub($n1, $n2);
            echo "O resultado da sua operação é: $resultado";
        break;

        case "/":
            $resultado = Div($n1, $n2);
            echo "O resultado da sua operação é: $resultado";
        break;

        case "*":
            $resultado = Multi($n1, $n2);
            echo "O resultado da sua operação é: $resultado";
        break;

    }
    function Adicao($parm1, $parm2){
        $resultado = $parm1 + $parm2; 
        return $resultado;
    }
    function Sub($parm1, $parm2){
        $resultado = $parm1 - $parm2; 
        return $resultado;
    }
    function Multi($parm1, $parm2){
        $resultado = $parm1 * $parm2; 
        return $resultado;
    }
    function Div($parm1, $parm2){
        $resultado = $parm1 / $parm2;
        return $resultado;
    }

?>