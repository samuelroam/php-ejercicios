<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
 function crearPiramide($maximo) { 
     for($filas = 1; $filas < $maximo; $filas ++) { 
         $asteriscos = str_repeat('*', ($filas - 1) * 2 + 1); 
         $espacios = str_repeat(' ', $maximo - $filas); 
         echo $espacios . $asteriscos . "<br>"; 
        } } 
         crearPiramide(10);
    
?>
</body>
</html>