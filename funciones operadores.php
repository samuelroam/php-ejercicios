<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
function operacion ($num1, $num2, $operador){
    
    $result= $operador($num1,$num2);

    echo $result;
}

function suma($num1,$num2){
   $result=$num1+$num2;
   return $result;
}
function resta($num1,$num2){
    $result=$num1-$num2;
    return $result;
 }
function multiplica($num1,$num2){
    $result=$num1*$num2;
    return $result;
}
function divide($num1,$num2){
    $result=$num1-$num2;
    return $result;
 } 


operacion(3,2,"multiplica");
?>
</body>
</html>