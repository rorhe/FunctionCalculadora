<?php

$num1 = 100;
$num2 = 10;
$operador = "/";

if ($operador == "+") {
  function Adicao($arg1, $arg2){
    $adicao = $arg1 + $arg2;
    return $adicao;
  }
  
  $resultado = Adicao($num1, $num2);
  echo $resultado;
}elseif ($operador == "-") {
    function Subtracao($arg1, $arg2){
        $subtracao = $arg1 - $arg2;
        return $subtracao;
    }

    $resultado = Subtracao($num1, $num2);
    echo $resultado;
}elseif ($operador == "*") {
    function Multiplacacao($arg1, $arg2) {
        $multiplicacao = $arg1 * $arg2;
        return $multiplicacao;
    
}

    $resultado = Multiplacacao($num1, $num2);
    echo $resultado;
}elseif ($operador == "/") {
    function Divisao($arg1, $arg2){
        $divisao = $arg1 / $arg2;
        return $divisao;
    }else {
        echo "Operação não reconhecida";
    }

    $resultado = Divisao($num1, $num2);
    echo $resultado;
}


?>