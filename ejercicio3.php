<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php

$edad = 41;
if($edad > 0 && $edad <= 20){
    echo("La edad está entre 0 y 20 años");
} else if ($edad >20 && $edad <=40){
    echo("La edad está entre 20 y 40 años");
} else if ($edad >40 && $edad <=60){
    echo("La edad está entre 40 y 60 años");
} else if ($edad >60 && $edad <=80){
    echo("La edad está entre 60 y 80 años");
} else if ($edad >80 && $edad <=100){
    echo("La edad está entre 80 y 100 años");
} else {
    echo("Usted es demasiado viejo, o aún no ha nacido");
}

?>
</body>
</html>
