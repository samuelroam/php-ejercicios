<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
   <?php
   $ventas=5637;
   if($ventas<10000){
       $comision=$ventas*0.05;
   }else if ($ventas>10000&&$ventas<20000){
       $comision=$ventas*0.08;
   }else if ($ventas>20000&&$ventas<40000){
       $comision=$ventas*0.1;
   }else if ($ventas>40000){
       $comision=$ventas*0.13;
   }
   echo $comision;
   ?>
</body>
</html>