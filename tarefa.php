<?php
include ("./exercicio.php");
if ($_POST) {
$v1= $_POST['pv1']; ///v1 recebe o valor inserido pelo usuario
$v2= $_POST['sv2'];///V2 recebe o valor inserido pelo usuario
$op = $_POST['operacao'];///op recebe o valor inserido pelo usuario

if($op == 'soma'){ /// condição do laço 
    $resul = $v1 + $v2;/// execução do laço apos a condição
     ///resultado do laço
} elseif  ($op == 'subtraçao') {
$resul = $v1 - $v2;
 
} elseif ($op == 'multiplicaçao' ) {
$resul = $v1 * $v2;
 
}
elseif ($op == 'divisao' ) {
$resul = $v1 / $v2;
 
}
if  ($v1 == $v2) { /// condição do laço de igualdade
     echo  "os valores pré inseridos ambos sao iguais eo resultado da operação É: " , $resul  ;///resultado do laço
}
elseif ($v1 > $v2) { /// condição do laço de maior
    echo  "dos valores pré inseridos o valor " ,$v1, " é maior que " ,$v2, " e o resultado da operação É: " , $resul  ; 
}
else{ /// condição do laço de menor
    echo  "dos valores pré inseridos o valor " ,$v1, " é maior que " ,$v2, " e o resultado da operação É: " , $resul  ;
}
}
?>
