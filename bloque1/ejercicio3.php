<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
$number1 = 68;

if($number1>0 && $number1<=20){
	echo("El rango de edad está entre 0 y 20");
}else if($number1>20 && $number1<=40){
	echo("El rango de edad está entre 20 y 40");
}else if($number1>40 && $number1<=60){
	echo("El rango de edad está entre 40 y 60");
}else if($number1>60 && $number1<=80){
	echo("El rango de edad está entre 60 y 80");
}else if($number1>80 && $number1<=100){
	echo("El rango de edad está entre 80 y 100");
}else{
	echo("Esa persona es demasiado mayor");
}
?>
</body>
</html>
